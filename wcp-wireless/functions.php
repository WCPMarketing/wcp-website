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
/*
|--------------------------------------------------------------------------
| BUSINESS WIRELESS - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_wireless_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $wireless_page = get_page_by_path('business-wireless');

    if (!$wireless_page) {
        return;
    }

    $fields = array();


    /*
    |--------------------------------------------------------------------------
    | FIELD HELPERS
    |--------------------------------------------------------------------------
    */

    $add_tab = function ($key, $label) use (&$fields) {

        $fields[] = array(
            'key'   => 'field_wireless_tab_' . $key,
            'label' => $label,
            'name'  => '',
            'type'  => 'tab',
        );
    };


    $add_text = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_wireless_' . $key,
            'label'         => $label,
            'name'          => 'wireless_' . $key,
            'type'          => 'text',
            'default_value' => $default,
        );
    };


    $add_textarea = function (
        $key,
        $label,
        $default = '',
        $rows = 3
    ) use (&$fields) {

        $fields[] = array(
            'key'           => 'field_wireless_' . $key,
            'label'         => $label,
            'name'          => 'wireless_' . $key,
            'type'          => 'textarea',
            'rows'          => $rows,
            'default_value' => $default,
        );
    };


    /*
    |--------------------------------------------------------------------------
    | HERO
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'hero',
        'Hero'
    );

    $add_text(
        'hero_heading',
        'Hero Heading',
        'Mobile plans made for your business'
    );

    $add_textarea(
        'hero_description',
        'Hero Description',
        'Help your team work together seamlessly — with plans backed by local, dealer-direct support instead of a call centre.'
    );

    $add_text(
        'hero_button',
        'Hero Button Text',
        'Get My Free Business Review'
    );


    $fields[] = array(
        'key'            => 'field_wireless_hero_image',
        'label'          => 'Hero Image',
        'name'           => 'wireless_hero_image',
        'type'           => 'image',
        'return_format'  => 'url',
        'preview_size'   => 'medium',
        'library'        => 'all',
    );


    /*
    |--------------------------------------------------------------------------
    | PLAN SELECTOR
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'selector',
        'Plan Selector'
    );

    $add_text(
        'selector_heading',
        'Selector Heading',
        'How many lines does your business need?'
    );

    $add_textarea(
        'selector_intro',
        'Selector Description',
        'Select your team size and we\'ll show you the plans built for it.'
    );

    $add_textarea(
        'pricing_disclaimer',
        'Pricing Disclaimer',
        'Offers and pricing are subject to change and address availability. Contact WCP for current promotional pricing.'
    );


    /*
    |--------------------------------------------------------------------------
    | SMALL BUSINESS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'small',
        '1–4 Lines'
    );

    $add_textarea(
        'small_intro',
        'Section Introduction',
        'Plans built for small teams that want simple, predictable pricing.'
    );

    $add_text(
        'small_include_1',
        'Included Note 1',
        'All plans include Rogers Satellite'
    );

    $add_text(
        'small_include_2',
        'Included Note 2',
        'Prices include $5/mo Auto Pay discount'
    );


    /*
     * Small Business Plan 1
     */

    $add_text(
        'small_1_badge',
        'Plan 1 Badge',
        'Best Value for Most Businesses'
    );

    $add_text(
        'small_1_name',
        'Plan 1 Name',
        '60GB Canada-Wide'
    );

    $add_text(
        'small_1_note',
        'Plan 1 Data Note',
        'Non-shared data'
    );

    $add_text(
        'small_1_price',
        'Plan 1 Price',
        '$65'
    );

    $add_text(
        'small_1_price_suffix',
        'Plan 1 Price Suffix',
        '/mo per line'
    );


    /*
     * Small Business Plan 2
     */

    $add_text(
        'small_2_name',
        'Plan 2 Name',
        '100GB Canada-Wide'
    );

    $add_text(
        'small_2_note',
        'Plan 2 Data Note',
        'Non-shared data'
    );

    $add_text(
        'small_2_price',
        'Plan 2 Price',
        '$70'
    );

    $add_text(
        'small_2_price_suffix',
        'Plan 2 Price Suffix',
        '/mo per line'
    );


    /*
     * Small Business Plan 3
     */

    $add_text(
        'small_3_name',
        'Plan 3 Name',
        'Unlimited Canada-Wide'
    );

    $add_text(
        'small_3_note',
        'Plan 3 Data Note',
        'Non-shared data'
    );

    $add_text(
        'small_3_price',
        'Plan 3 Price',
        '$85'
    );

    $add_text(
        'small_3_price_suffix',
        'Plan 3 Price Suffix',
        '/mo per line'
    );


    /*
     * Small Business Plan 4
     */

    $add_text(
        'small_4_name',
        'Plan 4 Name',
        'Unlimited Canada + 64 Countries'
    );

    $add_text(
        'small_4_note',
        'Plan 4 Data Note',
        'Non-shared data'
    );

    $add_text(
        'small_4_price',
        'Plan 4 Price',
        '$100'
    );

    $add_text(
        'small_4_price_suffix',
        'Plan 4 Price Suffix',
        '/mo per line'
    );


    /*
    |--------------------------------------------------------------------------
    | CORPORATE - 5–9 LINES
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'corporate_5',
        '5–9 Lines'
    );

    $add_textarea(
        'corp5_intro',
        'Section Introduction',
        'Pooled data plans for growing teams.'
    );


    $corp5_plans = array(

        '10' => array(
            'name'   => '10GB Pooled',
            'price'  => '$38',
            'credit' => '+ $200 credit.',
        ),

        '25' => array(
            'name'   => '25GB Pooled',
            'price'  => '$43',
            'credit' => '+ $200 credit.',
        ),

        '50' => array(
            'name'   => '50GB Pooled',
            'price'  => '$53',
            'credit' => '+ $200 credit.',
        ),

        '100' => array(
            'name'   => '100GB Pooled',
            'price'  => '$63',
            'credit' => '+ $200 credit.',
        ),

        '250' => array(
            'name'   => '250GB Pooled',
            'price'  => '$80',
            'credit' => '+ $400 credit.',
        ),

    );


    foreach ($corp5_plans as $slug => $plan) {

        $add_text(
            'corp5_' . $slug . '_name',
            $plan['name'] . ' — Plan Name',
            $plan['name']
        );

        $add_text(
            'corp5_' . $slug . '_price',
            $plan['name'] . ' — Price',
            $plan['price']
        );

        $add_text(
            'corp5_' . $slug . '_credit',
            $plan['name'] . ' — Credit / Promotion',
            $plan['credit']
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CORPORATE - 10+ LINES
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'corporate_10',
        '10+ Lines'
    );

    $add_textarea(
        'corp10_intro',
        'Section Introduction',
        'Pooled data plans with dedicated account support for larger teams.'
    );


    $corp10_plans = array(

        '10' => array(
            'name'   => '10GB Pooled',
            'price'  => '$30',
            'credit' => '+ $375 credit per line.',
        ),

        '25' => array(
            'name'   => '25GB Pooled',
            'price'  => '$35',
            'credit' => '+ $400 credit per line.',
        ),

        '50' => array(
            'name'   => '50GB Pooled',
            'price'  => '$45',
            'credit' => '+ $400 credit per line.',
        ),

        '100' => array(
            'name'   => '100GB Pooled',
            'price'  => '$55',
            'credit' => '+ $500 credit per line.',
        ),

        '250' => array(
            'name'   => '250GB Pooled',
            'price'  => '$80',
            'credit' => '+ $500 credit per line.',
        ),

    );


    foreach ($corp10_plans as $slug => $plan) {

        $add_text(
            'corp10_' . $slug . '_name',
            $plan['name'] . ' — Plan Name',
            $plan['name']
        );

        $add_text(
            'corp10_' . $slug . '_price',
            $plan['name'] . ' — Price',
            $plan['price']
        );

        $add_text(
            'corp10_' . $slug . '_credit',
            $plan['name'] . ' — Credit / Promotion',
            $plan['credit']
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CONNECTIVITY FEATURES
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'features',
        'Connectivity Features'
    );

    $add_text(
        'features_heading',
        'Section Heading',
        'Everything Your Business Needs to Stay Connected'
    );


    $add_text(
        'feature_1_title',
        'Feature 1 Title',
        '5G+'
    );

    $add_textarea(
        'feature_1_text',
        'Feature 1 Description',
        'Fast, reliable 5G+ connectivity on Canada\'s best 5G+ network.'
    );


    $add_text(
        'feature_2_title',
        'Feature 2 Title',
        'Flexible calling & data plans'
    );

    $add_textarea(
        'feature_2_text',
        'Feature 2 Description',
        'Flexible data plans without overage charges.'
    );


    $add_text(
        'feature_3_title',
        'Feature 3 Title',
        'Save on mobility'
    );

    $add_textarea(
        'feature_3_text',
        'Feature 3 Description',
        'Get the latest devices with financing and trade-in options.'
    );


    $add_text(
        'feature_4_title',
        'Feature 4 Title',
        'Bundle more, save more'
    );

    $add_textarea(
        'feature_4_text',
        'Feature 4 Description',
        'Save more when you add business internet to your plan.'
    );


    /*
    |--------------------------------------------------------------------------
    | ADD-ONS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'addons',
        'Add-ons'
    );

    $add_text(
        'addons_heading',
        'Section Heading',
        'Business add-ons'
    );


    $addons = array(

        1 => array(
            'title' => 'Business Collaboration',
            'text'  => 'Boost your team\'s productivity with tools like Microsoft 365 and Teams Phone.',
        ),

        2 => array(
            'title' => 'Mobility Management',
            'text'  => 'Improve productivity and data security across your team\'s mobile devices.',
        ),

        3 => array(
            'title' => 'Expense Management',
            'text'  => 'Manage and control the monthly costs of your team\'s mobile services.',
        ),

        4 => array(
            'title' => 'Premium Device Protection',
            'text'  => 'Accidents happen — get peace of mind with device protection and screen repair coverage.',
        ),

    );


    foreach ($addons as $number => $addon) {

        $add_text(
            'addon_' . $number . '_title',
            'Add-on ' . $number . ' Title',
            $addon['title']
        );

        $add_textarea(
            'addon_' . $number . '_text',
            'Add-on ' . $number . ' Description',
            $addon['text']
        );
    }


    /*
    |--------------------------------------------------------------------------
    | BILL REVIEW
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'review',
        'Bill Review'
    );

    $add_text(
        'review_eyebrow',
        'Review Eyebrow',
        'FREE WIRELESS BILL REVIEW'
    );

    $add_text(
        'review_heading',
        'Review Heading',
        'Upload your bill. We\'ll do the homework.'
    );

    $add_textarea(
        'review_intro',
        'Review Description',
        'Send us a recent wireless bill and a WCP business specialist will review your current services and available options.'
    );

    $add_text(
        'review_button',
        'Form Button Text',
        'Get My Free Bill Review'
    );


    /*
    |--------------------------------------------------------------------------
    | REGISTER FIELD GROUP
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key' => 'group_wcp_business_wireless',

        'title' => 'Business Wireless Content',

        'fields' => $fields,

        'location' => array(

            array(

                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => (string) $wireless_page->ID,
                ),

            ),

        ),

        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,

    ));
}

add_action(
    'acf/init',
    'wcp_register_wireless_fields'
);
