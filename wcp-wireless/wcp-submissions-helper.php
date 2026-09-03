<?php

/*
|--------------------------------------------------------------------------
| WCP SUBMISSIONS HELPER
|--------------------------------------------------------------------------
|
| Lets custom forms save into the existing "WCP Submissions" post type.
|
| If a post type with that label already exists, this helper uses it.
| If one does not exist, it creates a private fallback post type named
| "WCP Submissions".
|
*/


if (!defined('ABSPATH')) {
    exit;
}


/*
|--------------------------------------------------------------------------
| FIND AN EXISTING WCP SUBMISSIONS POST TYPE
|--------------------------------------------------------------------------
*/

function wcp_detect_submissions_post_type() {

    $candidates = array(
        'wcp_submission',
        'wcp_submissions',
        'wcp-form-submission',
        'wcp_form_submission',
        'form_submission',
        'form_submissions',
    );


    foreach ($candidates as $candidate) {

        if (post_type_exists($candidate)) {
            return $candidate;
        }
    }


    $post_types = get_post_types(
        array(),
        'objects'
    );


    foreach ($post_types as $post_type => $object) {

        $labels = array(
            isset($object->label)
                ? $object->label
                : '',

            isset($object->labels->name)
                ? $object->labels->name
                : '',

            isset($object->labels->menu_name)
                ? $object->labels->menu_name
                : '',
        );


        foreach ($labels as $label) {

            $normalized = strtolower(
                trim(
                    wp_strip_all_tags(
                        (string) $label
                    )
                )
            );


            if (
                $normalized === 'wcp submissions' ||
                $normalized === 'wcp submission'
            ) {
                return $post_type;
            }
        }
    }


    return '';
}


/*
|--------------------------------------------------------------------------
| FALLBACK POST TYPE
|--------------------------------------------------------------------------
*/

function wcp_register_submissions_fallback() {

    if (wcp_detect_submissions_post_type()) {
        return;
    }


    register_post_type(
        'wcp_submission',
        array(

            'labels' => array(
                'name'          => 'WCP Submissions',
                'singular_name' => 'WCP Submission',
                'menu_name'     => 'WCP Submissions',
                'add_new_item'  => 'Add Submission',
                'edit_item'     => 'View Submission',
                'view_item'     => 'View Submission',
                'search_items'  => 'Search Submissions',
            ),

            'public'              => false,
            'publicly_queryable'  => false,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_rest'        => false,
            'has_archive'         => false,
            'rewrite'             => false,

            'supports' => array(
                'title',
            ),

            'menu_icon' =>
                'dashicons-email-alt',

            'capability_type' =>
                'post',

            'map_meta_cap' =>
                true,

        )
    );
}

add_action(
    'init',
    'wcp_register_submissions_fallback',
    20
);


/*
|--------------------------------------------------------------------------
| GET THE ACTIVE SUBMISSIONS POST TYPE
|--------------------------------------------------------------------------
*/

function wcp_get_submissions_post_type() {

    $post_type =
        wcp_detect_submissions_post_type();


    if ($post_type) {
        return $post_type;
    }


    /*
     * The fallback should already be registered by init.
     * This extra check makes the helper safe if called unusually early.
     */

    if (!post_type_exists('wcp_submission')) {

        wcp_register_submissions_fallback();
    }


    return post_type_exists('wcp_submission')
        ? 'wcp_submission'
        : '';
}


/*
|--------------------------------------------------------------------------
| SAVE A SUBMISSION
|--------------------------------------------------------------------------
|
| Expected keys can include:
|
| form_source
| name
| business_name
| email
| phone
| interest
| message
| position
| page_url
| source
| resume_filename
| resume_note
| attachment_filename
| attachment_note
| email_status
|
*/

function wcp_save_submission($data) {

    if (!is_array($data)) {

        return new WP_Error(
            'invalid_submission_data'
        );
    }


    $post_type =
        wcp_get_submissions_post_type();


    if (!$post_type) {

        return new WP_Error(
            'submission_post_type_missing'
        );
    }


    $form_source = isset($data['form_source'])
        ? sanitize_text_field($data['form_source'])
        : 'Website Form';

    $name = isset($data['name'])
        ? sanitize_text_field($data['name'])
        : '';

    $business_name = isset($data['business_name'])
        ? sanitize_text_field($data['business_name'])
        : '';

    $position = isset($data['position'])
        ? sanitize_text_field($data['position'])
        : '';

    $interest = isset($data['interest'])
        ? sanitize_text_field($data['interest'])
        : '';


    $title_parts = array(
        $form_source,
    );


    if ($name !== '') {
        $title_parts[] = $name;
    } elseif ($business_name !== '') {
        $title_parts[] = $business_name;
    }


    if ($position !== '') {
        $title_parts[] = $position;
    } elseif ($interest !== '') {
        $title_parts[] = $interest;
    }


    $title =
        implode(
            ' — ',
            $title_parts
        );


    $post_id = wp_insert_post(
        array(

            'post_type' =>
                $post_type,

            'post_status' =>
                'private',

            'post_title' =>
                $title,

        ),
        true
    );


    if (is_wp_error($post_id)) {
        return $post_id;
    }


    $allowed_keys = array(
        'form_source',
        'name',
        'business_name',
        'email',
        'phone',
        'interest',
        'message',
        'position',
        'page_url',
        'source',
        'resume_filename',
        'resume_note',
        'attachment_filename',
        'attachment_note',
        'email_status',
    );


    foreach ($allowed_keys as $key) {

        if (!array_key_exists($key, $data)) {
            continue;
        }


        $value = $data[$key];


        if (
            is_array($value) ||
            is_object($value)
        ) {
            continue;
        }


        update_post_meta(
            $post_id,
            '_wcp_' . $key,
            (string) $value
        );
    }


    update_post_meta(
        $post_id,
        '_wcp_submitted_at',
        current_time('mysql')
    );


    return $post_id;
}




/*
|--------------------------------------------------------------------------
| PRIVATE SUBMISSION FILE STORAGE
|--------------------------------------------------------------------------
|
| Uploaded bills, statements, fleet lists and resumes are stored in a
| dedicated private folder using randomized filenames.
|
| Direct web access is blocked where supported by Apache / IIS. Files are
| also encrypted with AES-256-GCM when OpenSSL is available, so a private
| file that is somehow requested directly does not expose its contents.
|
| WordPress administrators download files through an authenticated
| admin-post.php action with a nonce.
|
*/

function wcp_private_submission_storage_dir() {

    $uploads = wp_upload_dir();

    if (
        !is_array($uploads) ||
        empty($uploads['basedir'])
    ) {
        return '';
    }

    return trailingslashit(
        $uploads['basedir']
    ) . 'wcp-private-submissions';
}


function wcp_prepare_private_submission_storage() {

    $directory =
        wcp_private_submission_storage_dir();

    if ($directory === '') {

        return new WP_Error(
            'private_storage_unavailable'
        );
    }


    if (
        !is_dir($directory) &&
        !wp_mkdir_p($directory)
    ) {

        return new WP_Error(
            'private_storage_create_failed'
        );
    }


    /*
     * Apache 2.2 / 2.4 protection.
     */

    $htaccess =
        "Options -Indexes\n" .
        "<IfModule mod_authz_core.c>\n" .
        "    Require all denied\n" .
        "</IfModule>\n" .
        "<IfModule !mod_authz_core.c>\n" .
        "    Order allow,deny\n" .
        "    Deny from all\n" .
        "</IfModule>\n";

    $htaccess_path =
        trailingslashit($directory) .
        '.htaccess';

    if (!file_exists($htaccess_path)) {

        @file_put_contents(
            $htaccess_path,
            $htaccess
        );
    }


    /*
     * IIS protection.
     */

    $web_config =
        '<?xml version="1.0" encoding="UTF-8"?>' .
        '<configuration><system.webServer>' .
        '<security><authorization>' .
        '<remove users="*" roles="" verbs="" />' .
        '<add accessType="Deny" users="*" />' .
        '</authorization></security>' .
        '</system.webServer></configuration>';

    $web_config_path =
        trailingslashit($directory) .
        'web.config';

    if (!file_exists($web_config_path)) {

        @file_put_contents(
            $web_config_path,
            $web_config
        );
    }


    /*
     * Prevent directory browsing / accidental PHP rendering.
     */

    $index_path =
        trailingslashit($directory) .
        'index.php';

    if (!file_exists($index_path)) {

        @file_put_contents(
            $index_path,
            "<?php\nhttp_response_code(403);\nexit;\n"
        );
    }


    return $directory;
}


function wcp_private_submission_key() {

    $stored =
        get_option(
            'wcp_private_submission_key',
            ''
        );


    if (is_string($stored) && $stored !== '') {

        $decoded =
            base64_decode(
                $stored,
                true
            );

        if (
            is_string($decoded) &&
            strlen($decoded) === 32
        ) {
            return $decoded;
        }
    }


    try {

        $key = random_bytes(32);

    } catch (Exception $exception) {

        return new WP_Error(
            'private_key_generation_failed'
        );
    }


    update_option(
        'wcp_private_submission_key',
        base64_encode($key),
        false
    );


    return $key;
}


function wcp_store_private_submission_file(
    $source_path,
    $original_name,
    $mime_type = ''
) {

    if (
        !$source_path ||
        !is_string($source_path) ||
        !file_exists($source_path) ||
        !is_readable($source_path)
    ) {

        return new WP_Error(
            'private_source_missing'
        );
    }


    $directory =
        wcp_prepare_private_submission_storage();

    if (is_wp_error($directory)) {
        return $directory;
    }


    $original_name =
        sanitize_file_name(
            (string) $original_name
        );

    if ($original_name === '') {
        $original_name = 'uploaded-file';
    }


    if ($mime_type === '') {

        $file_type =
            wp_check_filetype(
                $original_name
            );

        $mime_type =
            !empty($file_type['type'])
                ? $file_type['type']
                : 'application/octet-stream';
    }


    try {

        $random_name =
            bin2hex(
                random_bytes(32)
            ) .
            '.wcp';

    } catch (Exception $exception) {

        return new WP_Error(
            'private_filename_failed'
        );
    }


    $destination =
        trailingslashit($directory) .
        $random_name;


    $contents =
        @file_get_contents(
            $source_path
        );


    if ($contents === false) {

        return new WP_Error(
            'private_read_failed'
        );
    }


    $encrypted = false;
    $payload = 'WCP0' . $contents;


    if (
        function_exists('openssl_encrypt') &&
        function_exists('openssl_decrypt')
    ) {

        $key =
            wcp_private_submission_key();

        if (!is_wp_error($key)) {

            try {
                $iv = random_bytes(12);
            } catch (Exception $exception) {
                $iv = '';
            }


            if ($iv !== '') {

                $tag = '';

                $ciphertext =
                    openssl_encrypt(
                        $contents,
                        'aes-256-gcm',
                        $key,
                        OPENSSL_RAW_DATA,
                        $iv,
                        $tag
                    );


                if (
                    is_string($ciphertext) &&
                    is_string($tag) &&
                    strlen($tag) === 16
                ) {

                    $payload =
                        'WCP1' .
                        $iv .
                        $tag .
                        $ciphertext;

                    $encrypted = true;
                }
            }
        }
    }


    $written =
        @file_put_contents(
            $destination,
            $payload,
            LOCK_EX
        );


    if ($written === false) {

        return new WP_Error(
            'private_write_failed'
        );
    }


    @chmod(
        $destination,
        0600
    );


    return array(

        'stored_name' =>
            $random_name,

        'original_name' =>
            $original_name,

        'mime_type' =>
            sanitize_text_field(
                $mime_type
            ),

        'encrypted' =>
            $encrypted ? '1' : '0',

    );
}


function wcp_attach_private_file_to_submission(
    $post_id,
    $private_file
) {

    $post_id = absint($post_id);

    if (
        !$post_id ||
        !is_array($private_file) ||
        empty($private_file['stored_name'])
    ) {

        return new WP_Error(
            'private_attachment_invalid'
        );
    }


    update_post_meta(
        $post_id,
        '_wcp_private_file',
        sanitize_file_name(
            $private_file['stored_name']
        )
    );

    update_post_meta(
        $post_id,
        '_wcp_private_original_name',
        sanitize_file_name(
            isset($private_file['original_name'])
                ? $private_file['original_name']
                : 'uploaded-file'
        )
    );

    update_post_meta(
        $post_id,
        '_wcp_private_mime',
        sanitize_text_field(
            isset($private_file['mime_type'])
                ? $private_file['mime_type']
                : 'application/octet-stream'
        )
    );

    update_post_meta(
        $post_id,
        '_wcp_private_encrypted',
        !empty($private_file['encrypted'])
            ? '1'
            : '0'
    );


    return true;
}


function wcp_discard_private_submission_file(
    $private_file
) {

    if (
        !is_array($private_file) ||
        empty($private_file['stored_name'])
    ) {
        return;
    }


    $directory =
        wcp_private_submission_storage_dir();

    if ($directory === '') {
        return;
    }


    $stored_name =
        sanitize_file_name(
            $private_file['stored_name']
        );

    $path =
        trailingslashit($directory) .
        $stored_name;


    if (file_exists($path)) {
        wp_delete_file($path);
    }
}


function wcp_private_submission_download_url(
    $post_id
) {

    $post_id = absint($post_id);

    if (!$post_id) {
        return '';
    }


    $url = add_query_arg(
        array(
            'action' =>
                'wcp_download_submission_file',

            'submission_id' =>
                $post_id,
        ),
        admin_url('admin-post.php')
    );


    return wp_nonce_url(
        $url,
        'wcp_download_submission_' .
            $post_id
    );
}


/*
|--------------------------------------------------------------------------
| ADMIN-ONLY DOWNLOAD ACTION
|--------------------------------------------------------------------------
*/

function wcp_download_submission_file() {

    if (
        !is_user_logged_in() ||
        !current_user_can(
            'manage_options'
        )
    ) {

        wp_die(
            'You do not have permission to download this file.',
            'Access denied',
            array(
                'response' => 403,
            )
        );
    }


    $post_id =
        isset($_GET['submission_id'])
            ? absint(
                $_GET['submission_id']
            )
            : 0;


    if (!$post_id) {

        wp_die(
            'Invalid submission.',
            'Invalid request',
            array(
                'response' => 400,
            )
        );
    }


    check_admin_referer(
        'wcp_download_submission_' .
            $post_id
    );


    $post =
        get_post($post_id);

    $post_type =
        wcp_get_submissions_post_type();


    if (
        !$post ||
        !$post_type ||
        $post->post_type !== $post_type
    ) {

        wp_die(
            'Submission not found.',
            'Not found',
            array(
                'response' => 404,
            )
        );
    }


    $stored_name =
        sanitize_file_name(
            (string)
            get_post_meta(
                $post_id,
                '_wcp_private_file',
                true
            )
        );


    if ($stored_name === '') {

        wp_die(
            'No uploaded file is stored with this submission.',
            'File not found',
            array(
                'response' => 404,
            )
        );
    }


    $directory =
        wcp_private_submission_storage_dir();

    $directory_real =
        $directory
            ? realpath($directory)
            : false;

    $file_path =
        $directory !== ''
            ? trailingslashit($directory) .
                $stored_name
            : '';

    $file_real =
        $file_path !== ''
            ? realpath($file_path)
            : false;


    if (
        !$directory_real ||
        !$file_real ||
        strpos(
            $file_real,
            $directory_real .
                DIRECTORY_SEPARATOR
        ) !== 0 ||
        !is_file($file_real) ||
        !is_readable($file_real)
    ) {

        wp_die(
            'The stored file could not be found.',
            'File not found',
            array(
                'response' => 404,
            )
        );
    }


    $payload =
        @file_get_contents(
            $file_real
        );


    if (
        $payload === false ||
        strlen($payload) < 4
    ) {

        wp_die(
            'The stored file could not be read.',
            'File error',
            array(
                'response' => 500,
            )
        );
    }


    $header =
        substr(
            $payload,
            0,
            4
        );

    $contents = '';


    if ($header === 'WCP1') {

        if (
            !function_exists(
                'openssl_decrypt'
            )
        ) {

            wp_die(
                'This server cannot decrypt the stored file.',
                'File error',
                array(
                    'response' => 500,
                )
            );
        }


        if (strlen($payload) < 32) {

            wp_die(
                'The stored file is invalid.',
                'File error',
                array(
                    'response' => 500,
                )
            );
        }


        $iv =
            substr(
                $payload,
                4,
                12
            );

        $tag =
            substr(
                $payload,
                16,
                16
            );

        $ciphertext =
            substr(
                $payload,
                32
            );


        $key =
            wcp_private_submission_key();


        if (is_wp_error($key)) {

            wp_die(
                'The stored file could not be decrypted.',
                'File error',
                array(
                    'response' => 500,
                )
            );
        }


        $contents =
            openssl_decrypt(
                $ciphertext,
                'aes-256-gcm',
                $key,
                OPENSSL_RAW_DATA,
                $iv,
                $tag
            );


        if ($contents === false) {

            wp_die(
                'The stored file could not be decrypted.',
                'File error',
                array(
                    'response' => 500,
                )
            );
        }

    } elseif ($header === 'WCP0') {

        $contents =
            substr(
                $payload,
                4
            );

    } else {

        wp_die(
            'The stored file format is invalid.',
            'File error',
            array(
                'response' => 500,
            )
        );
    }


    $original_name =
        sanitize_file_name(
            (string)
            get_post_meta(
                $post_id,
                '_wcp_private_original_name',
                true
            )
        );


    if ($original_name === '') {
        $original_name = 'submission-file';
    }


    $mime_type =
        sanitize_text_field(
            (string)
            get_post_meta(
                $post_id,
                '_wcp_private_mime',
                true
            )
        );


    if ($mime_type === '') {
        $mime_type = 'application/octet-stream';
    }


    while (ob_get_level()) {
        ob_end_clean();
    }


    nocache_headers();

    header(
        'Content-Type: ' .
        $mime_type
    );

    header(
        'Content-Disposition: attachment; filename="' .
        str_replace(
            '"',
            '',
            $original_name
        ) .
        '"'
    );

    header(
        'Content-Length: ' .
        strlen($contents)
    );

    header(
        'X-Content-Type-Options: nosniff'
    );


    echo $contents; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    exit;
}

add_action(
    'admin_post_wcp_download_submission_file',
    'wcp_download_submission_file'
);


/*
|--------------------------------------------------------------------------
| DELETE PRIVATE FILE WHEN SUBMISSION IS PERMANENTLY DELETED
|--------------------------------------------------------------------------
*/

function wcp_delete_private_file_with_submission(
    $post_id
) {

    $post_id = absint($post_id);

    if (!$post_id) {
        return;
    }


    $post_type =
        wcp_get_submissions_post_type();

    if (
        !$post_type ||
        get_post_type($post_id) !==
            $post_type
    ) {
        return;
    }


    $stored_name =
        sanitize_file_name(
            (string)
            get_post_meta(
                $post_id,
                '_wcp_private_file',
                true
            )
        );


    if ($stored_name === '') {
        return;
    }


    $directory =
        wcp_private_submission_storage_dir();

    if ($directory === '') {
        return;
    }


    $path =
        trailingslashit($directory) .
        $stored_name;


    if (file_exists($path)) {
        wp_delete_file($path);
    }
}

add_action(
    'before_delete_post',
    'wcp_delete_private_file_with_submission'
);


/*
|--------------------------------------------------------------------------
| SUBMISSION DETAILS META BOX
|--------------------------------------------------------------------------
|
| This also attaches to an existing WCP Submissions post type, so Careers
| and Chatbot records remain readable even if that post type was created
| elsewhere.
|
*/

function wcp_add_submission_details_meta_box() {

    $post_type =
        wcp_get_submissions_post_type();


    if (!$post_type) {
        return;
    }


    add_meta_box(
        'wcp-submission-details',
        'Submission Details',
        'wcp_render_submission_details_meta_box',
        $post_type,
        'normal',
        'high'
    );
}

add_action(
    'add_meta_boxes',
    'wcp_add_submission_details_meta_box'
);


function wcp_render_submission_details_meta_box($post) {

    $fields = array(

        'form_source' =>
            'Form Source',

        'name' =>
            'Name',

        'business_name' =>
            'Business Name',

        'email' =>
            'Email',

        'phone' =>
            'Phone',

        'interest' =>
            'Request / Interest',

        'position' =>
            'Position',

        'message' =>
            'Message',

        'page_url' =>
            'Page',

        'source' =>
            'Source',

        'resume_filename' =>
            'Resume File',

        'resume_note' =>
            'Resume Note',

        'attachment_filename' =>
            'Uploaded File',

        'attachment_note' =>
            'File Note',

        'email_status' =>
            'Email Status',

        'submitted_at' =>
            'Submitted At',

    );


    $private_file =
        get_post_meta(
            $post->ID,
            '_wcp_private_file',
            true
        );

    $private_original_name =
        get_post_meta(
            $post->ID,
            '_wcp_private_original_name',
            true
        );


    if ($private_file !== '') {

        $download_url =
            wcp_private_submission_download_url(
                $post->ID
            );


        echo '<div style="margin:0 0 16px;padding:14px 16px;background:#f6f7f7;border:1px solid #dcdcde;border-radius:4px;">';

        echo '<strong>Secure Uploaded File</strong>';

        echo '<p style="margin:8px 0 10px;">';

        echo esc_html(
            $private_original_name !== ''
                ? $private_original_name
                : 'Uploaded file'
        );

        echo '</p>';

        echo '<a class="button button-primary" href="' .
            esc_url($download_url) .
            '">Download File</a>';

        echo '<p style="margin:10px 0 0;color:#646970;font-size:12px;">Only logged-in WordPress administrators can use this download link.</p>';

        echo '</div>';
    }


    echo '<table class="widefat striped" style="max-width:100%;">';


    foreach ($fields as $key => $label) {

        $value =
            get_post_meta(
                $post->ID,
                '_wcp_' . $key,
                true
            );


        if ($value === '') {
            continue;
        }


        echo '<tr>';

        echo '<th style="width:180px;">';
        echo esc_html($label);
        echo '</th>';

        echo '<td>';


        if (
            'email' === $key &&
            is_email($value)
        ) {

            echo '<a href="mailto:' .
                esc_attr($value) .
                '">';

            echo esc_html($value);

            echo '</a>';

        } elseif (
            'phone' === $key
        ) {

            $phone_href =
                preg_replace(
                    '/[^0-9+]/',
                    '',
                    $value
                );

            echo '<a href="tel:' .
                esc_attr($phone_href) .
                '">';

            echo esc_html($value);

            echo '</a>';

        } elseif (
            'page_url' === $key &&
            filter_var(
                $value,
                FILTER_VALIDATE_URL
            )
        ) {

            echo '<a href="' .
                esc_url($value) .
                '" target="_blank" rel="noopener noreferrer">';

            echo esc_html($value);

            echo '</a>';

        } else {

            echo nl2br(
                esc_html($value)
            );
        }


        echo '</td>';

        echo '</tr>';
    }


    echo '</table>';
}
