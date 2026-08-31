<?php

/*
|--------------------------------------------------------------------------
| WCP CAREERS FORM HANDLER
|--------------------------------------------------------------------------
|
| Processes careers applications through WordPress instead of Formspree.
|
| Original careers field names are preserved:
|
| position
| _subject
| name
| email
| phone
| message
| resume
|
*/


if (!defined('ABSPATH')) {
    exit;
}


/*
|--------------------------------------------------------------------------
| REGISTER FORM ACTIONS
|--------------------------------------------------------------------------
*/

add_action(
    'admin_post_nopriv_wcp_careers_submit',
    'wcp_handle_careers_submit'
);

add_action(
    'admin_post_wcp_careers_submit',
    'wcp_handle_careers_submit'
);


/*
|--------------------------------------------------------------------------
| REDIRECT HELPER
|--------------------------------------------------------------------------
*/

function wcp_careers_redirect(
    $redirect_to,
    $status,
    $reason = ''
) {

    $fallback = '/careers/#apply';

    $redirect_to = wp_validate_redirect(
        $redirect_to,
        $fallback
    );

    $redirect_to = remove_query_arg(
        array(
            'wcp_form',
            'wcp_reason',
        ),
        $redirect_to
    );

    $args = array(
        'wcp_form' => $status,
    );

    if ($reason !== '') {
        $args['wcp_reason'] = $reason;
    }

    $redirect_to = add_query_arg(
        $args,
        $redirect_to
    );

    wp_safe_redirect($redirect_to);

    exit;
}


/*
|--------------------------------------------------------------------------
| FILE UPLOAD HELPER
|--------------------------------------------------------------------------
*/

function wcp_careers_process_upload(
    $field_name,
    $required = false
) {

    if (
        !isset($_FILES[$field_name]) ||
        !is_array($_FILES[$field_name])
    ) {

        if ($required) {
            return new WP_Error('resume_required');
        }

        return '';
    }


    $file = $_FILES[$field_name];


    if (
        !isset($file['error']) ||
        UPLOAD_ERR_NO_FILE === (int) $file['error']
    ) {

        if ($required) {
            return new WP_Error('resume_required');
        }

        return '';
    }


    if (UPLOAD_ERR_OK !== (int) $file['error']) {
        return new WP_Error('upload_error');
    }


    /*
    |--------------------------------------------------------------------------
    | MAX 10 MB PER DOCUMENT
    |--------------------------------------------------------------------------
    */

    if (
        !isset($file['size']) ||
        (int) $file['size'] > (10 * MB_IN_BYTES)
    ) {
        return new WP_Error('file_too_large');
    }


    /*
    |--------------------------------------------------------------------------
    | ALLOWED CAREERS FILE TYPES
    |--------------------------------------------------------------------------
    */

    $allowed_mimes = array(

        'pdf' =>
            'application/pdf',

        'doc' =>
            'application/msword',

        'docx' =>
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

    );


    require_once ABSPATH . 'wp-admin/includes/file.php';


    $uploaded = wp_handle_upload(
        $file,
        array(
            'test_form' => false,
            'mimes'     => $allowed_mimes,
        )
    );


    if (
        !is_array($uploaded) ||
        isset($uploaded['error']) ||
        empty($uploaded['file'])
    ) {

        $error_text = isset($uploaded['error'])
            ? strtolower((string) $uploaded['error'])
            : '';

        if (
            strpos($error_text, 'file type') !== false ||
            strpos($error_text, 'not permitted') !== false
        ) {
            return new WP_Error('file_type');
        }

        return new WP_Error('upload_error');
    }


    return $uploaded['file'];
}


/*
|--------------------------------------------------------------------------
| PROCESS CAREERS FORM
|--------------------------------------------------------------------------
*/

function wcp_handle_careers_submit() {


    /*
    |--------------------------------------------------------------------------
    | REQUEST METHOD
    |--------------------------------------------------------------------------
    */

    if (
        !isset($_SERVER['REQUEST_METHOD']) ||
        'POST' !== strtoupper(
            sanitize_text_field(
                wp_unslash($_SERVER['REQUEST_METHOD'])
            )
        )
    ) {

        wcp_careers_redirect(
            '/careers/#apply',
            'error',
            'invalid_request'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RETURN URL
    |--------------------------------------------------------------------------
    */

    $redirect_to = isset($_POST['redirect_to'])
        ? esc_url_raw(
            wp_unslash($_POST['redirect_to'])
        )
        : home_url('/careers/#apply');


    /*
    |--------------------------------------------------------------------------
    | SECURITY NONCE
    |--------------------------------------------------------------------------
    */

    if (
        !isset($_POST['wcp_careers_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['wcp_careers_nonce'])
            ),
            'wcp_careers_submit'
        )
    ) {

        wcp_careers_redirect(
            $redirect_to,
            'error',
            'security'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SPAM HONEYPOT
    |--------------------------------------------------------------------------
    */

    $website = isset($_POST['website'])
        ? trim(
            sanitize_text_field(
                wp_unslash($_POST['website'])
            )
        )
        : '';


    if ($website !== '') {

        /*
         * Return a success response to bots without processing anything.
         */

        wcp_careers_redirect(
            $redirect_to,
            'success'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MINIMUM COMPLETION TIME
    |--------------------------------------------------------------------------
    */

    $started = isset($_POST['wcp_started'])
        ? absint($_POST['wcp_started'])
        : 0;


    if (
        $started > 0 &&
        (time() - $started) < 2
    ) {

        wcp_careers_redirect(
            $redirect_to,
            'error',
            'too_fast'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ORIGINAL CAREERS FIELDS
    |--------------------------------------------------------------------------
    */

    $position = isset($_POST['position'])
        ? sanitize_text_field(
            wp_unslash($_POST['position'])
        )
        : '';

    $subject = isset($_POST['_subject'])
        ? sanitize_text_field(
            wp_unslash($_POST['_subject'])
        )
        : '';

    $name = isset($_POST['name'])
        ? sanitize_text_field(
            wp_unslash($_POST['name'])
        )
        : '';

    $email = isset($_POST['email'])
        ? sanitize_email(
            wp_unslash($_POST['email'])
        )
        : '';

    $phone = isset($_POST['phone'])
        ? sanitize_text_field(
            wp_unslash($_POST['phone'])
        )
        : '';

    $message = isset($_POST['message'])
        ? sanitize_textarea_field(
            wp_unslash($_POST['message'])
        )
        : '';

    $form_source = isset($_POST['form_source'])
        ? sanitize_text_field(
            wp_unslash($_POST['form_source'])
        )
        : 'Careers Page';


    /*
    |--------------------------------------------------------------------------
    | REQUIRED FIELDS
    |--------------------------------------------------------------------------
    */

    if (
        $position === '' ||
        $name === '' ||
        $email === '' ||
        $phone === ''
    ) {

        wcp_careers_redirect(
            $redirect_to,
            'error',
            'required'
        );
    }


    if (!is_email($email)) {

        wcp_careers_redirect(
            $redirect_to,
            'error',
            'email'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | PROCESS RESUME
    |--------------------------------------------------------------------------
    */

    $resume = wcp_careers_process_upload(
        'resume',
        true
    );


    if (is_wp_error($resume)) {

        wcp_careers_redirect(
            $redirect_to,
            'error',
            $resume->get_error_code()
        );
    }


    /*
    |--------------------------------------------------------------------------
    | EMAIL RECIPIENT
    |--------------------------------------------------------------------------
    |
    | By default applications are sent to the WordPress Administration
    | Email Address found under:
    |
    | Settings > General > Administration Email Address
    |
    */

    $recipient = sanitize_email(
        get_option('admin_email')
    );


    $recipient = apply_filters(
        'wcp_careers_recipient',
        $recipient
    );


    /*
    |--------------------------------------------------------------------------
    | EMAIL SUBJECT
    |--------------------------------------------------------------------------
    */

    if ($subject === '') {
        $subject =
            'WCP Careers Application - ' .
            $position;
    }


    /*
    |--------------------------------------------------------------------------
    | EMAIL BODY
    |--------------------------------------------------------------------------
    */

    $body = array(

        'A new careers application was submitted through the WCP website.',

        '',

        'Position: ' . $position,

        'Name: ' . $name,

        'Email: ' . $email,

        'Phone: ' . $phone,

        'Source: ' . $form_source,

        '',

        'Message:',

        $message !== ''
            ? $message
            : '(No message provided)',

        '',

        'Resume: Attached',

    );


    $body = implode(
        "\n",
        $body
    );


    /*
    |--------------------------------------------------------------------------
    | EMAIL HEADERS
    |--------------------------------------------------------------------------
    */

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );


    /*
    |--------------------------------------------------------------------------
    | ATTACHMENTS
    |--------------------------------------------------------------------------
    */

    $attachments = array();

    if ($resume) {
        $attachments[] = $resume;
    }

    /*
    |--------------------------------------------------------------------------
    | SEND USING WORDPRESS
    |--------------------------------------------------------------------------
    */

    $sent = wp_mail(
        $recipient,
        $subject,
        $body,
        $headers,
        $attachments
    );


    /*
    |--------------------------------------------------------------------------
    | REMOVE TEMPORARY APPLICATION FILES
    |--------------------------------------------------------------------------
    |
    | Resume and cover letter are attached to the WordPress email and then
    | removed from the public WordPress uploads directory.
    |
    */

    foreach ($attachments as $attachment) {

        if (
            $attachment &&
            file_exists($attachment)
        ) {
            wp_delete_file($attachment);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | RESULT
    |--------------------------------------------------------------------------
    */

    if (!$sent) {

        wcp_careers_redirect(
            $redirect_to,
            'error',
            'mail'
        );
    }


    wcp_careers_redirect(
        $redirect_to,
        'success'
    );
}

