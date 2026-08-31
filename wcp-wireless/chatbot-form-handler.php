<?php

/*
|--------------------------------------------------------------------------
| WCP CHATBOT FORM HANDLER
|--------------------------------------------------------------------------
|
| Receives Bob chatbot leads through WordPress instead of Formspree.
|
| Visible chatbot fields:
| - name
| - business_name
| - phone
| - email
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
    'admin_post_nopriv_wcp_chatbot_submit',
    'wcp_handle_chatbot_submit'
);

add_action(
    'admin_post_wcp_chatbot_submit',
    'wcp_handle_chatbot_submit'
);


/*
|--------------------------------------------------------------------------
| JSON ERROR HELPER
|--------------------------------------------------------------------------
*/

function wcp_chatbot_error($code, $status = 400) {

    wp_send_json_error(
        array(
            'code' => $code,
        ),
        $status
    );
}


/*
|--------------------------------------------------------------------------
| PROCESS CHATBOT LEAD
|--------------------------------------------------------------------------
*/

function wcp_handle_chatbot_submit() {


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

        wcp_chatbot_error(
            'invalid_request',
            405
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SECURITY NONCE
    |--------------------------------------------------------------------------
    |
    | The nonce is supplied to chatbot.js by functions.php using
    | wp_localize_script().
    |
    */

    if (
        !isset($_POST['wcp_chatbot_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['wcp_chatbot_nonce'])
            ),
            'wcp_chatbot_submit'
        )
    ) {

        wcp_chatbot_error(
            'security',
            403
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
         * Return success to bots without sending an email.
         */

        wp_send_json_success(
            array(
                'received' => true,
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MINIMUM FORM COMPLETION TIME
    |--------------------------------------------------------------------------
    */

    $started = isset($_POST['wcp_started'])
        ? absint($_POST['wcp_started'])
        : 0;


    if (
        $started <= 0 ||
        (time() - $started) < 2
    ) {

        wcp_chatbot_error(
            'too_fast',
            400
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CHATBOT FIELDS
    |--------------------------------------------------------------------------
    */

    $name = isset($_POST['name'])
        ? sanitize_text_field(
            wp_unslash($_POST['name'])
        )
        : '';

    $business_name = isset($_POST['business_name'])
        ? sanitize_text_field(
            wp_unslash($_POST['business_name'])
        )
        : '';

    $phone = isset($_POST['phone'])
        ? sanitize_text_field(
            wp_unslash($_POST['phone'])
        )
        : '';

    $email = isset($_POST['email'])
        ? sanitize_email(
            wp_unslash($_POST['email'])
        )
        : '';

    $source = isset($_POST['source'])
        ? sanitize_text_field(
            wp_unslash($_POST['source'])
        )
        : 'Website chat widget';

    $form_source = isset($_POST['form_source'])
        ? sanitize_text_field(
            wp_unslash($_POST['form_source'])
        )
        : 'Website Chatbot';

    $chat_intent = isset($_POST['chat_intent'])
        ? sanitize_key(
            wp_unslash($_POST['chat_intent'])
        )
        : 'unknown';

    $page_url = isset($_POST['page_url'])
        ? esc_url_raw(
            wp_unslash($_POST['page_url'])
        )
        : '';


    /*
    |--------------------------------------------------------------------------
    | VALIDATION
    |--------------------------------------------------------------------------
    */

    if (
        $name === '' ||
        $business_name === '' ||
        $phone === '' ||
        $email === ''
    ) {

        wcp_chatbot_error(
            'required',
            400
        );
    }


    if (!is_email($email)) {

        wcp_chatbot_error(
            'email',
            400
        );
    }


    /*
    |--------------------------------------------------------------------------
    | EMAIL RECIPIENT
    |--------------------------------------------------------------------------
    |
    | By default, chatbot leads go to:
    |
    | WordPress > Settings > General > Administration Email Address
    |
    */

    $recipient = sanitize_email(
        get_option('admin_email')
    );


    $recipient = apply_filters(
        'wcp_chatbot_recipient',
        $recipient
    );


    if (!$recipient || !is_email($recipient)) {

        wcp_chatbot_error(
            'recipient',
            500
        );
    }


    /*
    |--------------------------------------------------------------------------
    | REQUEST TYPE
    |--------------------------------------------------------------------------
    */

    $intent_label = 'General';

    if ('review' === $chat_intent) {

        $intent_label =
            'Free Bill Review';

    } elseif ('human' === $chat_intent) {

        $intent_label =
            'Talk to a Person';
    }


    /*
    |--------------------------------------------------------------------------
    | EMAIL
    |--------------------------------------------------------------------------
    */

    $subject =
        'WCP Chatbot Lead - ' .
        $intent_label;


    $body = array(

        'A new lead was submitted through Bob on the WCP website.',

        '',

        'Name: ' . $name,

        'Business: ' . $business_name,

        'Phone: ' . $phone,

        'Email: ' . $email,

        'Request: ' . $intent_label,

        'Source: ' . $source,

        'Form Source: ' . $form_source,

    );


    if ($page_url !== '') {
        $body[] = 'Page: ' . $page_url;
    }


    $body = implode(
        "\n",
        $body
    );


    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );


    /*
    |--------------------------------------------------------------------------
    | SEND THROUGH WORDPRESS
    |--------------------------------------------------------------------------
    */

    $sent = wp_mail(
        $recipient,
        $subject,
        $body,
        $headers
    );


    if (!$sent) {

        wcp_chatbot_error(
            'mail',
            500
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SUCCESS
    |--------------------------------------------------------------------------
    */

    wp_send_json_success(
        array(
            'received' => true,
        )
    );
}

