<?php

/*
|--------------------------------------------------------------------------
| WCP THEME SETUP
|--------------------------------------------------------------------------
*/

function wcp_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
}

add_action('after_setup_theme', 'wcp_theme_setup');


/*
|--------------------------------------------------------------------------
| GOOGLE ANALYTICS 4
|--------------------------------------------------------------------------
|
| Live GA4 property for wcpwireless.com.
| Measurement ID: G-5S8YWZC25F
|
| Bob/chatbot events already use window.gtag when it is available, so
| loading the Google tag here also enables those existing GA4 events.
|
*/

function wcp_google_analytics() {

    ?>
    <!-- Google tag (gtag.js) -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-5S8YWZC25F"
    ></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-5S8YWZC25F');
    </script>
    <?php
}

add_action(
    'wp_head',
    'wcp_google_analytics',
    5
);


/*
|--------------------------------------------------------------------------
| LOAD CSS & JAVASCRIPT
|--------------------------------------------------------------------------
*/

function wcp_theme_assets() {

    wp_enqueue_style(
        'wcp-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'wcp-style',
        get_stylesheet_uri(),
        array('wcp-google-fonts'),
        '1.0.0'
    );

    wp_enqueue_script(
        'wcp-script',
        get_template_directory_uri() . '/script.js',
        array(),
        '1.0.0',
