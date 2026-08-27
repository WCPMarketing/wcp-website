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
        true
    );

    wp_enqueue_script(
        'wcp-chatbot',
        get_template_directory_uri() . '/chatbot.js',
        array(),
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'wcp_theme_assets');


/*
|--------------------------------------------------------------------------
| ACF HELPER
|--------------------------------------------------------------------------
|
| Returns the WordPress/ACF value when one exists.
| Otherwise it returns the original website content.
|
*/

function wcp_field($field_name, $fallback = '') {

    if (function_exists('get_field')) {

        $value = get_field($field_name);

        if (
            $value !== false &&
            $value !== null &&
            $value !== ''
        ) {
            return $value;
        }
    }

    return $fallback;
}


/*
|--------------------------------------------------------------------------
| BUSINESS POS - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_pos_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    /*
     * Find the WordPress page with the slug:
     * business-pos
     */

    $pos_page = get_page_by_path('business-pos');

    if (!$pos_page) {
        return;
    }


    acf_add_local_field_group(array(

        'key' => 'group_wcp_business_pos',

        'title' => 'Business POS Content',

        'fields' => array(


            /*
            |--------------------------------------------------------------------------
            | HERO
            |--------------------------------------------------------------------------
            */

            array(
                'key' => 'field_pos_tab_hero',
                'label' => 'Hero',
                'name' => '',
                'type' => 'tab',
            ),

            array(
                'key' => 'field_pos_hero_heading',
                'label' => 'Hero Heading',
                'name' => 'pos_hero_heading',
                'type' => 'text',
                'default_value' => 'Smarter payments. Stronger business.',
            ),

            array(
                'key' => 'field_pos_hero_description',
                'label' => 'Hero Description',
                'name' => 'pos_hero_description',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'Accept payments anywhere, manage operations effortlessly, and give your customers the experience they expect with Rogers POS, powered by Clover.',
            ),

            array(
                'key' => 'field_pos_hero_button',
                'label' => 'Hero Button Text',
                'name' => 'pos_hero_button',
                'type' => 'text',
                'default_value' => 'Contact Sales',
            ),

            array(
                'key' => 'field_pos_hero_image',
                'label' => 'Hero Image',
                'name' => 'pos_hero_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),


            /*
            |--------------------------------------------------------------------------
            | FEATURE SECTION
            |--------------------------------------------------------------------------
            */

            array(
                'key' => 'field_pos_tab_features',
                'label' => 'Features',
                'name' => '',
                'type' => 'tab',
            ),

            array(
                'key' => 'field_pos_features_heading',
                'label' => 'Features Heading',
                'name' => 'pos_features_heading',
                'type' => 'text',
                'default_value' => 'POS that keeps your business moving',
            ),

            array(
                'key' => 'field_pos_features_intro',
                'label' => 'Features Intro',
                'name' => 'pos_features_intro',
                'type' => 'text',
                'default_value' => 'Simple, scalable technology built to grow with your business.',
            ),


            /*
             * Feature 1
             */

            array(
                'key' => 'field_pos_feature_1_title',
                'label' => 'Feature 1 Title',
                'name' => 'pos_feature_1_title',
                'type' => 'text',
                'default_value' => 'Transparent pricing',
            ),

            array(
                'key' => 'field_pos_feature_1_text',
                'label' => 'Feature 1 Description',
                'name' => 'pos_feature_1_text',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Benefit from a clear cost pricing model and easy-to-read bills.',
            ),


            /*
             * Feature 2
             */

            array(
                'key' => 'field_pos_feature_2_title',
                'label' => 'Feature 2 Title',
                'name' => 'pos_feature_2_title',
                'type' => 'text',
                'default_value' => 'Enhanced savings',
            ),

            array(
                'key' => 'field_pos_feature_2_text',
                'label' => 'Feature 2 Description',
                'name' => 'pos_feature_2_text',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Enjoy lower transaction costs and reduced add-on fees.',
            ),


            /*
             * Feature 3
             */

            array(
                'key' => 'field_pos_feature_3_title',
                'label' => 'Feature 3 Title',
                'name' => 'pos_feature_3_title',
                'type' => 'text',
                'default_value' => 'Smarter management',
            ),

            array(
                'key' => 'field_pos_feature_3_text',
                'label' => 'Feature 3 Description',
                'name' => 'pos_feature_3_text',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Leading platform by Clover, with easy-to-use sales analytics, inventory management, employee management and more.',
            ),


            /*
             * Feature 4
             */

            array(
                'key' => 'field_pos_feature_4_title',
                'label' => 'Feature 4 Title',
                'name' => 'pos_feature_4_title',
                'type' => 'text',
                'default_value' => 'Reward your customers when they pay',
            ),

            array(
                'key' => 'field_pos_feature_4_text',
                'label' => 'Feature 4 Description',
                'name' => 'pos_feature_4_text',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'With the Rogers Red World Elite Business Mastercard, cardholders earn an additional 1% cash back on eligible purchases — on top of the card\'s standard cash back.',
            ),


            /*
            |--------------------------------------------------------------------------
            | POS PLANS
            |--------------------------------------------------------------------------
            */

            array(
                'key' => 'field_pos_tab_plans',
                'label' => 'POS Plans',
                'name' => '',
                'type' => 'tab',
            ),

            array(
                'key' => 'field_pos_plans_heading',
                'label' => 'Plans Heading',
                'name' => 'pos_plans_heading',
                'type' => 'text',
                'default_value' => 'Choose your POS plan',
            ),

            array(
                'key' => 'field_pos_plans_note',
                'label' => 'Plans Pricing Note',
                'name' => 'pos_plans_note',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Pricing shown reflects month-to-month rates. Offers and pricing are subject to change. Contact WCP for current promotional pricing.',
            ),


            /*
             * Fixed
             */

            array(
                'key' => 'field_pos_fixed_name',
                'label' => 'Fixed Plan Name',
                'name' => 'pos_fixed_name',
                'type' => 'text',
                'default_value' => 'Fixed',
            ),

            array(
                'key' => 'field_pos_fixed_price',
                'label' => 'Fixed Plan Price',
                'name' => 'pos_fixed_price',
                'type' => 'text',
                'default_value' => '$35',
            ),

            array(
                'key' => 'field_pos_fixed_price_details',
                'label' => 'Fixed Price Details',
                'name' => 'pos_fixed_price_details',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => '.00/mo, month-to-month when paired with an eligible 3-yr Business Internet or 5G Business Internet plan',
            ),

            array(
                'key' => 'field_pos_fixed_features',
                'label' => 'Fixed Plan Features',
                'name' => 'pos_fixed_features',
                'type' => 'textarea',
                'instructions' => 'Enter one feature per line.',
                'rows' => 7,
                'default_value' =>
                    "2.50% per successful credit card transaction fee\n" .
                    "$0.10 per successful debit card transaction fee\n" .
                    "Comes with one (1) Clover Flex or Clover Flex Pocket terminal\n" .
                    "Access to Clover Dashboard included\n" .
                    "Clover Mini upgrade available",
            ),


            /*
             * Variable
             */

            array(
                'key' => 'field_pos_variable_name',
                'label' => 'Variable Plan Name',
                'name' => 'pos_variable_name',
                'type' => 'text',
                'default_value' => 'Variable',
            ),

            array(
                'key' => 'field_pos_variable_price',
                'label' => 'Variable Plan Price',
                'name' => 'pos_variable_price',
                'type' => 'text',
                'default_value' => '$45',
            ),

            array(
                'key' => 'field_pos_variable_price_details',
                'label' => 'Variable Price Details',
                'name' => 'pos_variable_price_details',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => '.00/mo, month-to-month when paired with an eligible 3-yr Business Internet or 5G Business Internet plan',
            ),

            array(
                'key' => 'field_pos_variable_features',
                'label' => 'Variable Plan Features',
                'name' => 'pos_variable_features',
                'type' => 'textarea',
                'instructions' => 'Enter one feature per line.',
                'rows' => 7,
                'default_value' =>
                    "Interchange + 0.30% + $0.08 per successful credit card transaction fee\n" .
                    "$0.08 per successful debit card transaction fee\n" .
                    "Comes with one (1) Clover Flex or Clover Flex Pocket terminal\n" .
                    "Access to Clover Dashboard included\n" .
                    "Clover Mini upgrade available",
            ),


            /*
             * Standalone
             */

            array(
                'key' => 'field_pos_standalone_name',
                'label' => 'Standalone Plan Name',
                'name' => 'pos_standalone_name',
                'type' => 'text',
                'default_value' => 'Standalone',
            ),

            array(
                'key' => 'field_pos_standalone_price',
                'label' => 'Standalone Plan Price',
                'name' => 'pos_standalone_price',
                'type' => 'text',
                'default_value' => '$40',
            ),

            array(
                'key' => 'field_pos_standalone_price_details',
                'label' => 'Standalone Price Details',
                'name' => 'pos_standalone_price_details',
                'type' => 'text',
                'default_value' => '.00/mo, month-to-month',
            ),

            array(
                'key' => 'field_pos_standalone_features',
                'label' => 'Standalone Plan Features',
                'name' => 'pos_standalone_features',
                'type' => 'textarea',
                'instructions' => 'Enter one feature per line.',
                'rows' => 7,
                'default_value' =>
                    "2.65% per successful credit card transaction fee\n" .
                    "$0.15 per successful debit card transaction fee\n" .
                    "Comes with one (1) Clover Flex or Clover Flex Pocket terminal\n" .
                    "Access to Clover Dashboard included\n" .
                    "Clover Mini upgrade available",
            ),


            /*
             * App Only
             */

            array(
                'key' => 'field_pos_app_name',
                'label' => 'App-Only Plan Name',
                'name' => 'pos_app_name',
                'type' => 'text',
                'default_value' => 'App-Only',
            ),

            array(
                'key' => 'field_pos_app_price',
                'label' => 'App-Only Plan Price',
                'name' => 'pos_app_price',
                'type' => 'text',
                'default_value' => '$20',
            ),

            array(
                'key' => 'field_pos_app_price_details',
                'label' => 'App-Only Price Details',
                'name' => 'pos_app_price_details',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => '.00/mo, month-to-month when paired with an eligible Business Mobile plan',
            ),

            array(
                'key' => 'field_pos_app_features',
                'label' => 'App-Only Plan Features',
                'name' => 'pos_app_features',
                'type' => 'textarea',
                'instructions' => 'Enter one feature per line.',
                'rows' => 7,
                'default_value' =>
                    "No Clover terminal required — use your iPhone as a payment terminal\n" .
                    "Access to Apple Tap to Pay using Clover Go software\n" .
                    "Access to Clover Dashboard included\n" .
                    "Fixed or Variable rate available\n" .
                    "Manual input and payment links available for merchants",
            ),


            /*
            |--------------------------------------------------------------------------
            | HARDWARE CTA
            |--------------------------------------------------------------------------
            */

            array(
                'key' => 'field_pos_tab_hardware',
                'label' => 'Hardware CTA',
                'name' => '',
                'type' => 'tab',
            ),

            array(
                'key' => 'field_pos_hardware_heading',
                'label' => 'Hardware Heading',
                'name' => 'pos_hardware_heading',
                'type' => 'text',
                'default_value' => 'Not sure which hardware fits your business?',
            ),

            array(
                'key' => 'field_pos_hardware_text',
                'label' => 'Hardware Description',
                'name' => 'pos_hardware_text',
                'type' => 'textarea',
                'rows' => 5,
                'default_value' => 'Clover Flex is a powerful, portable POS built for speed and mobility — accept every payment type on the go, manage inventory with the built-in barcode scanner, and access cloud-based reporting from anywhere. Clover Flex Pocket and Clover Mini are also available depending on your setup.',
            ),

            array(
                'key' => 'field_pos_hardware_button',
                'label' => 'Hardware Button Text',
                'name' => 'pos_hardware_button',
                'type' => 'text',
                'default_value' => 'Contact Sales',
            ),


            /*
            |--------------------------------------------------------------------------
            | PROCESSING REVIEW SECTION
            |--------------------------------------------------------------------------
            */

            array(
                'key' => 'field_pos_tab_review',
                'label' => 'Processing Review',
                'name' => '',
                'type' => 'tab',
            ),

            array(
                'key' => 'field_pos_review_eyebrow',
                'label' => 'Review Eyebrow',
                'name' => 'pos_review_eyebrow',
                'type' => 'text',
                'default_value' => 'FREE PROCESSING REVIEW',
            ),

            array(
                'key' => 'field_pos_review_heading',
                'label' => 'Review Heading',
                'name' => 'pos_review_heading',
                'type' => 'text',
                'default_value' => 'Upload your statement. We\'ll do the homework.',
            ),

            array(
                'key' => 'field_pos_review_intro',
                'label' => 'Review Description',
                'name' => 'pos_review_intro',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Send us a recent processing statement and a WCP business specialist will review your current rates and available options.',
            ),

            array(
                'key' => 'field_pos_review_button',
                'label' => 'Form Button Text',
                'name' => 'pos_review_button',
                'type' => 'text',
                'default_value' => 'Get My Free Processing Review',
            ),

        ),


        /*
        |--------------------------------------------------------------------------
        | SHOW ONLY ON BUSINESS POS PAGE
        |--------------------------------------------------------------------------
        */

        'location' => array(

            array(

                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => (string) $pos_page->ID,
                ),

            ),

        ),

        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => true,

    ));
}

add_action('acf/init', 'wcp_register_pos_fields');
