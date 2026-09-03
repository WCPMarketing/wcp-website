<?php

/*
|--------------------------------------------------------------------------
| WCP SHARED WEBSITE FORM HANDLER
|--------------------------------------------------------------------------
|
| Handles the standard WCP website forms that submit with:
|
| action = wcp_bill_review_submit
|
| This includes the homepage bill review, Business Overview, Business
| Wireless, Business Internet, Business Phone, Business POS, Fleet
| Management and Contact forms.
|
| Every valid submission is saved first in:
|
| WordPress > WCP Submissions
|
| Email is then attempted separately through wp_mail(). If email delivery
| fails, the submission still remains safely stored in WCP Submissions.
|
*/


if (!defined('ABSPATH')) {
    exit;
}


/*
|--------------------------------------------------------------------------
| REGISTER WORDPRESS FORM ACTIONS
|--------------------------------------------------------------------------
*/

add_action(
    'admin_post_nopriv_wcp_bill_review_submit',
    'wcp_handle_bill_review_submit'
);

add_action(
    'admin_post_wcp_bill_review_submit',
    'wcp_handle_bill_review_submit'
);


/*
|--------------------------------------------------------------------------
| REDIRECT HELPER
|--------------------------------------------------------------------------
*/

function wcp_bill_review_redirect(
    $redirect_to,
    $status,
    $reason = ''
) {

    $fallback = '/';

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
| DETECT FORM SOURCE
|--------------------------------------------------------------------------
|
| Most page forms already post a hidden form_source value. The homepage
| form does not currently do that, so this also identifies the source from
| redirect_to / HTTP referer.
|
*/

function wcp_detect_bill_review_source(
    $posted_source,
    $redirect_to = ''
) {

    $posted_source =
        sanitize_text_field(
            (string) $posted_source
        );

    if ($posted_source !== '') {
        return $posted_source;
    }


    $url = $redirect_to;

    if (
        $url === '' &&
        isset($_SERVER['HTTP_REFERER'])
    ) {
        $url = esc_url_raw(
            wp_unslash(
                $_SERVER['HTTP_REFERER']
            )
        );
    }


    $path = wp_parse_url(
        $url,
        PHP_URL_PATH
    );

    $path = is_string($path)
        ? strtolower(
            trim($path, '/')
        )
        : '';


    $sources = array(

        'business-wireless' =>
            'Business Wireless',

        'business-internet' =>
            'Business Internet',

        'business-phone' =>
            'Business Phone',

        'business-pos' =>
            'Business POS',

        'fleet-management' =>
            'Fleet Management',

        'business' =>
            'Business Overview',

        'contact' =>
            'Contact Page',

    );


    if (
        isset($sources[$path])
    ) {
        return $sources[$path];
    }


    if ($path === '') {
        return 'Homepage Bill Review';
    }


    return 'Website Form';
}


/*
|--------------------------------------------------------------------------
| OPTIONAL FILE UPLOAD
|--------------------------------------------------------------------------
|
| Supports both the newer shared current_bill field and older names that
| may still exist on a cached page/template.
|
*/

function wcp_process_standard_form_upload() {

    $field_names = array(
        'current_bill',
        'current_statement',
        'fleet_list',
    );


    $field_name = '';

    foreach ($field_names as $candidate) {

        if (
            isset($_FILES[$candidate]) &&
            is_array($_FILES[$candidate]) &&
            isset($_FILES[$candidate]['error']) &&
            UPLOAD_ERR_NO_FILE !==
                (int) $_FILES[$candidate]['error']
        ) {
            $field_name = $candidate;
            break;
        }
    }


    if ($field_name === '') {
        return '';
    }


    $file = $_FILES[$field_name];


    if (
        !isset($file['error']) ||
        UPLOAD_ERR_OK !==
            (int) $file['error']
    ) {
        return new WP_Error(
            'upload_error'
        );
    }


    if (
        !isset($file['size']) ||
        (int) $file['size'] >
            (10 * MB_IN_BYTES)
    ) {
        return new WP_Error(
            'file_too_large'
        );
    }


    $allowed_mimes = array(

        'pdf' =>
            'application/pdf',

        'jpg|jpeg|jpe' =>
            'image/jpeg',

        'png' =>
            'image/png',

    );


    require_once
        ABSPATH .
        'wp-admin/includes/file.php';


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

        $error_text =
            isset($uploaded['error'])
                ? strtolower(
                    (string)
                    $uploaded['error']
                )
                : '';


        if (
            strpos(
                $error_text,
                'file type'
            ) !== false ||
            strpos(
                $error_text,
                'not permitted'
            ) !== false
        ) {

            return new WP_Error(
                'file_type'
            );
        }


        return new WP_Error(
            'upload_error'
        );
    }


    return array(
        'path' =>
            $uploaded['file'],

        'original_name' =>
            sanitize_file_name(
                isset($file['name'])
                    ? wp_unslash($file['name'])
                    : basename($uploaded['file'])
            ),

        'mime_type' =>
            isset($uploaded['type'])
                ? sanitize_text_field($uploaded['type'])
                : 'application/octet-stream',
    );
}


/*
|--------------------------------------------------------------------------
| HANDLE STANDARD WEBSITE SUBMISSION
|--------------------------------------------------------------------------
*/

function wcp_handle_bill_review_submit() {


    /*
    |--------------------------------------------------------------------------
    | REQUEST METHOD
    |--------------------------------------------------------------------------
    */

    if (
        !isset($_SERVER['REQUEST_METHOD']) ||
        'POST' !== strtoupper(
            sanitize_text_field(
                wp_unslash(
                    $_SERVER['REQUEST_METHOD']
                )
            )
        )
    ) {

        wcp_bill_review_redirect(
            '/',
            'error',
            'invalid_request'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RETURN URL
    |--------------------------------------------------------------------------
    */

    $redirect_to =
        isset($_POST['redirect_to'])
            ? esc_url_raw(
                wp_unslash(
                    $_POST['redirect_to']
                )
            )
            : '/';


    /*
    |--------------------------------------------------------------------------
    | SECURITY NONCE
    |--------------------------------------------------------------------------
    */

    if (
        !isset($_POST['wcp_bill_review_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash(
                    $_POST['wcp_bill_review_nonce']
                )
            ),
            'wcp_bill_review_submit'
        )
    ) {

        wcp_bill_review_redirect(
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

    $website =
        isset($_POST['website'])
            ? trim(
                sanitize_text_field(
                    wp_unslash(
                        $_POST['website']
                    )
                )
            )
            : '';


    if ($website !== '') {

        /*
         * Quietly report success to automated spam.
         */

        wcp_bill_review_redirect(
            $redirect_to,
            'success'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MINIMUM COMPLETION TIME
    |--------------------------------------------------------------------------
    */

    $started =
        isset($_POST['wcp_started'])
            ? absint(
                $_POST['wcp_started']
            )
            : 0;


    if (
        $started <= 0 ||
        (time() - $started) < 2
    ) {

        wcp_bill_review_redirect(
            $redirect_to,
            'error',
            'too_fast'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | FORM FIELDS
    |--------------------------------------------------------------------------
    */

    $name =
        isset($_POST['name'])
            ? sanitize_text_field(
                wp_unslash(
                    $_POST['name']
                )
            )
            : '';

    $business_name =
        isset($_POST['business_name'])
            ? sanitize_text_field(
                wp_unslash(
                    $_POST['business_name']
                )
            )
            : '';

    $phone =
        isset($_POST['phone'])
            ? sanitize_text_field(
                wp_unslash(
                    $_POST['phone']
                )
            )
            : '';

    $email =
        isset($_POST['email'])
            ? sanitize_email(
                wp_unslash(
                    $_POST['email']
                )
            )
            : '';

    $interest =
        isset($_POST['interest'])
            ? sanitize_text_field(
                wp_unslash(
                    $_POST['interest']
                )
            )
            : 'Not sure';

    $message =
        isset($_POST['message'])
            ? sanitize_textarea_field(
                wp_unslash(
                    $_POST['message']
                )
            )
            : '';

    $form_source =
        wcp_detect_bill_review_source(
            isset($_POST['form_source'])
                ? wp_unslash(
                    $_POST['form_source']
                )
                : '',
            $redirect_to
        );


    /*
    |--------------------------------------------------------------------------
    | VALIDATION
    |--------------------------------------------------------------------------
    */

    if (
        $name === '' ||
        $phone === '' ||
        $email === ''
    ) {

        wcp_bill_review_redirect(
            $redirect_to,
            'error',
            'required'
        );
    }


    if (!is_email($email)) {

        wcp_bill_review_redirect(
            $redirect_to,
            'error',
            'email'
        );
    }


    if ($interest === '') {

        wcp_bill_review_redirect(
            $redirect_to,
            'error',
            'interest'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | OPTIONAL UPLOAD
    |--------------------------------------------------------------------------
    */

    $uploaded_file =
        wcp_process_standard_form_upload();


    if (
        is_wp_error(
            $uploaded_file
        )
    ) {

        wcp_bill_review_redirect(
            $redirect_to,
            'error',
            $uploaded_file
                ->get_error_code()
        );
    }


    $upload_path =
        is_array($uploaded_file) &&
        !empty($uploaded_file['path'])
            ? $uploaded_file['path']
            : '';

    $attachment_filename =
        is_array($uploaded_file) &&
        !empty($uploaded_file['original_name'])
            ? $uploaded_file['original_name']
            : '';

    $attachment_mime =
        is_array($uploaded_file) &&
        !empty($uploaded_file['mime_type'])
            ? $uploaded_file['mime_type']
            : 'application/octet-stream';


    /*
    |--------------------------------------------------------------------------
    | COPY UPLOAD INTO PRIVATE WCP STORAGE
    |--------------------------------------------------------------------------
    */

    $private_file = array();


    if ($upload_path !== '') {

        if (
            !function_exists(
                'wcp_store_private_submission_file'
            )
        ) {

            if (file_exists($upload_path)) {
                wp_delete_file($upload_path);
            }


            wcp_bill_review_redirect(
                $redirect_to,
                'error',
                'storage'
            );
        }


        $private_file =
            wcp_store_private_submission_file(
                $upload_path,
                $attachment_filename,
                $attachment_mime
            );


        if (is_wp_error($private_file)) {

            if (file_exists($upload_path)) {
                wp_delete_file($upload_path);
            }


            wcp_bill_review_redirect(
                $redirect_to,
                'error',
                'storage'
            );
        }
    }


    /*
    |--------------------------------------------------------------------------
    | SAVE TO WCP SUBMISSIONS FIRST
    |--------------------------------------------------------------------------
    */

    if (
        !function_exists(
            'wcp_save_submission'
        )
    ) {

        if (
            !empty($private_file) &&
            function_exists(
                'wcp_discard_private_submission_file'
            )
        ) {
            wcp_discard_private_submission_file(
                $private_file
            );
        }


        if (
            $upload_path !== '' &&
            file_exists($upload_path)
        ) {
            wp_delete_file(
                $upload_path
            );
        }


        wcp_bill_review_redirect(
            $redirect_to,
            'error',
            'save'
        );
    }


    $submission_id =
        wcp_save_submission(
            array(

                'form_source' =>
                    $form_source,

                'name' =>
                    $name,

                'business_name' =>
                    $business_name,

                'email' =>
                    $email,

                'phone' =>
                    $phone,

                'interest' =>
                    $interest,

                'message' =>
                    $message,

                'page_url' =>
                    $redirect_to,

                'source' =>
                    'WCP Website',

                'attachment_filename' =>
                    $attachment_filename,

                'attachment_note' =>
                    $attachment_filename !== ''
                        ? 'Securely stored in WCP Submissions for administrator download.'
                        : '',

                'email_status' =>
                    'Pending',

            )
        );


    if (
        is_wp_error(
            $submission_id
        )
    ) {

        if (
            !empty($private_file) &&
            function_exists(
                'wcp_discard_private_submission_file'
            )
        ) {
            wcp_discard_private_submission_file(
                $private_file
            );
        }


        if (
            $upload_path !== '' &&
            file_exists($upload_path)
        ) {
            wp_delete_file(
                $upload_path
            );
        }


        wcp_bill_review_redirect(
            $redirect_to,
            'error',
            'save'
        );
    }


    if (!empty($private_file)) {

        $attached =
            wcp_attach_private_file_to_submission(
                $submission_id,
                $private_file
            );


        if (is_wp_error($attached)) {

            wcp_discard_private_submission_file(
                $private_file
            );


            if (
                $upload_path !== '' &&
                file_exists($upload_path)
            ) {
                wp_delete_file(
                    $upload_path
                );
            }


            wp_delete_post(
                $submission_id,
                true
            );


            wcp_bill_review_redirect(
                $redirect_to,
                'error',
                'storage'
            );
        }
    }


    /*
    |--------------------------------------------------------------------------
    | EMAIL RECIPIENTS
    |--------------------------------------------------------------------------
    |
    | Keep the WordPress Administration Email Address and also send website
    | leads to sales@wcpwireless.com.
    |
    */

    $recipients = array();


    $admin_recipient =
        sanitize_email(
            get_option(
                'admin_email'
            )
        );


    if (
        is_email(
            $admin_recipient
        )
    ) {
        $recipients[] =
            $admin_recipient;
    }


    $sales_recipient =
        sanitize_email(
            'sales@wcpwireless.com'
        );


    if (
        is_email(
            $sales_recipient
        )
    ) {
        $recipients[] =
            $sales_recipient;
    }


    $recipients =
        array_values(
            array_unique(
                $recipients
            )
        );


    /*
    |--------------------------------------------------------------------------
    | EMAIL CONTENT
    |--------------------------------------------------------------------------
    */

    $subject =
        'WCP Website Submission - ' .
        $form_source;


    $body = array(

        'A new website submission was received.',

        '',

        'Form: ' .
            $form_source,

        'Name: ' .
            $name,

        'Business: ' .
            (
                $business_name !== ''
                    ? $business_name
                    : '(Not provided)'
            ),

        'Phone: ' .
            $phone,

        'Email: ' .
            $email,

        'Request / Interest: ' .
            $interest,

        '',

        'Message:',

        $message !== ''
            ? $message
            : '(No message provided)',

    );


    if (
        $attachment_filename !== ''
    ) {

        $body[] = '';
        $body[] =
            'Uploaded file: ' .
            $attachment_filename;
    }


    $body = implode(
        "\n",
        $body
    );


    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' .
            $name .
            ' <' .
            $email .
            '>',
    );


    $attachments = array();

    if ($upload_path !== '') {
        $attachments[] =
            $upload_path;
    }


    /*
    |--------------------------------------------------------------------------
    | SEND EMAIL
    |--------------------------------------------------------------------------
    */

    $sent = false;

    if (
        !empty(
            $recipients
        )
    ) {

        $sent = wp_mail(
            $recipients,
            $subject,
            $body,
            $headers,
            $attachments
        );
    }


    update_post_meta(
        $submission_id,
        '_wcp_email_status',
        $sent
            ? 'Sent'
            : 'Failed'
    );


    if (
        $attachment_filename !== ''
    ) {

        update_post_meta(
            $submission_id,
            '_wcp_attachment_note',
            $sent
                ? 'Securely stored in WCP Submissions and also attached to the email notification.'
                : 'Securely stored in WCP Submissions. The separate email notification failed.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | REMOVE TEMPORARY UPLOAD
    |--------------------------------------------------------------------------
    */

    if (
        $upload_path !== '' &&
        file_exists(
            $upload_path
        )
    ) {

        wp_delete_file(
            $upload_path
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SUCCESS
    |--------------------------------------------------------------------------
    |
    | Once the lead is saved in WCP Submissions, the visitor gets a success
    | response even if the separate email notification has a delivery issue.
    |
    */

    wcp_bill_review_redirect(
        $redirect_to,
        'success'
    );
}
