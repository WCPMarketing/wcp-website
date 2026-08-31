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

        'email_status' =>
            'Email Status',

        'submitted_at' =>
            'Submitted At',

    );


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
