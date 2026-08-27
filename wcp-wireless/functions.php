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
/*
|--------------------------------------------------------------------------
| BUSINESS INTERNET - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_internet_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $internet_page = get_page_by_path('business-internet');

    if (!$internet_page) {
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
            'key'   => 'field_internet_tab_' . $key,
            'label' => $label,
            'name'  => '',
            'type'  => 'tab',
        );
    };


    $add_text = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_internet_' . $key,
            'label'         => $label,
            'name'          => 'internet_' . $key,
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
            'key'           => 'field_internet_' . $key,
            'label'         => $label,
            'name'          => 'internet_' . $key,
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
        'Internet for all your business needs'
    );

    $add_textarea(
        'hero_description',
        'Hero Description',
        'Reliable, fast internet with predictable pricing and local support — whichever way your business connects.'
    );

    $add_text(
        'hero_button',
        'Hero Button Text',
        'Get My Free Business Review'
    );

    $fields[] = array(
        'key'           => 'field_internet_hero_image',
        'label'         => 'Hero Image',
        'name'          => 'internet_hero_image',
        'type'          => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'library'       => 'all',
    );


    /*
    |--------------------------------------------------------------------------
    | TOP FEATURES
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'features',
        'Top Features'
    );

    $top_features = array(

        1 => array(
            'title' => 'Fast internet',
            'text'  => 'From everyday to blazing fast, scaling with you as your business grows.',
        ),

        2 => array(
            'title' => 'Reliable connection',
            'text'  => 'Keep productivity on track with wireless backup and 24/7 business support.',
        ),

        3 => array(
            'title' => 'Predictable cost',
            'text'  => 'Choose from term, monthly, and bundled plans with unlimited usage.',
        ),

        4 => array(
            'title' => 'Advanced security',
            'text'  => 'Keep your data safe with automatic, network-level security.',
        ),

    );

    foreach ($top_features as $number => $feature) {

        $add_text(
            'feature_' . $number . '_title',
            'Feature ' . $number . ' Title',
            $feature['title']
        );

        $add_textarea(
            'feature_' . $number . '_text',
            'Feature ' . $number . ' Description',
            $feature['text']
        );
    }


    /*
    |--------------------------------------------------------------------------
    | INTERNET SELECTOR
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'selector',
        'Internet Selector'
    );

    $add_text(
        'selector_heading',
        'Selector Heading',
        'Which internet is right for my business?'
    );

    $add_textarea(
        'selector_intro',
        'Selector Description',
        'Select how your business connects and we\'ll show you the plans built for it.'
    );

    $add_textarea(
        'pricing_disclaimer',
        'Pricing Disclaimer',
        'Offers and pricing are subject to change and address availability. Contact WCP for current promotional pricing.'
    );


    /*
     * Selector cards
     */

    $selector_cards = array(

        1 => array(
            'title' => 'Business Internet',
            'text'  => 'Flexible monthly & term plans',
        ),

        2 => array(
            'title' => 'Business Fibre',
            'text'  => 'Symmetrical speeds, 1 static IP',
        ),

        3 => array(
            'title' => 'Dedicated Fibre',
            'text'  => 'Fastest, most reliable option with 5 static IPs',
        ),

        4 => array(
            'title' => '5G Business Internet',
            'text'  => 'No wired connection needed',
        ),

    );

    foreach ($selector_cards as $number => $card) {

        $add_text(
            'selector_' . $number . '_title',
            'Selector ' . $number . ' Title',
            $card['title']
        );

        $add_text(
            'selector_' . $number . '_text',
            'Selector ' . $number . ' Subtitle',
            $card['text']
        );
    }


    /*
    |--------------------------------------------------------------------------
    | BUSINESS INTERNET
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'business_internet',
        'Business Internet'
    );

    $add_text(
        'business_heading',
        'Section Heading',
        'Rogers Business Internet'
    );

    $add_textarea(
        'business_intro',
        'Section Introduction',
        'Experience reliable internet performance with unlimited usage and 24/7 support.'
    );

    $add_text(
        'business_include_1',
        'Included Feature 1',
        'Unlimited data usage'
    );

    $add_text(
        'business_include_2',
        'Included Feature 2',
        'Automatic security updates'
    );

    $add_text(
        'business_include_3',
        'Included Feature 3',
        'Advanced WiFi technology'
    );


    /*
     * Business Internet plans
     */

    $business_plans = array(

        1 => array(
            'speed'  => '300 Mbps / 30 Mbps',
            'price'  => '$64',
            'suffix' => '.99/mo',
            'credit' => '+ $200 bill credit.',
        ),

        2 => array(
            'speed'  => '750 Mbps / 30 Mbps',
            'price'  => '$69',
            'suffix' => '.99/mo',
            'credit' => '+ $200 bill credit.',
        ),

        3 => array(
            'speed'  => '1 Gbps / 50 Mbps',
            'price'  => '$79',
            'suffix' => '.99/mo',
            'credit' => '+ $200 bill credit.',
        ),

        4 => array(
            'speed'  => '1.5 Gbps / 50 Mbps',
            'price'  => '$89',
            'suffix' => '.99/mo',
            'credit' => '+ $600 bill credit.',
        ),

        5 => array(
            'speed'  => '2 Gbps / 50 Mbps',
            'price'  => '$99',
            'suffix' => '.99/mo',
            'credit' => '+ $600 bill credit.',
        ),

    );

    foreach ($business_plans as $number => $plan) {

        $add_text(
            'business_' . $number . '_speed',
            'Plan ' . $number . ' Speed',
            $plan['speed']
        );

        $add_text(
            'business_' . $number . '_price',
            'Plan ' . $number . ' Price',
            $plan['price']
        );

        $add_text(
            'business_' . $number . '_suffix',
            'Plan ' . $number . ' Price Suffix',
            $plan['suffix']
        );

        $add_text(
            'business_' . $number . '_credit',
            'Plan ' . $number . ' Bill Credit',
            $plan['credit']
        );
    }


    /*
     * Best value badge
     */

    $add_text(
        'business_best_value',
        'Plan 3 Badge',
        'Best Value for Most Businesses'
    );

    $add_text(
        'business_contract_note',
        'Plan Contract Note',
        'Price subject to change per contract terms.'
    );


    /*
     * Bundles
     */

    $add_text(
        'bundle_heading',
        'Bundle Section Heading',
        'How much can I save on internet with bundles?'
    );

    $add_text(
        'bundle_1',
        'Bundle Offer 1',
        'Save $10/mo when you bundle internet with Business TV.'
    );

    $add_text(
        'bundle_2',
        'Bundle Offer 2',
        'Save $15/mo when you bundle internet with Business Phone.'
    );

    $add_text(
        'bundle_3',
        'Bundle Offer 3',
        'Save an additional $45/mo/line when you bundle internet with an Advantage Mobility plan.'
    );


    /*
    |--------------------------------------------------------------------------
    | BUSINESS FIBRE
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'fibre',
        'Business Fibre'
    );

    $add_text(
        'fibre_heading',
        'Section Heading',
        'Business Fibre Internet'
    );

    $add_textarea(
        'fibre_intro',
        'Section Introduction',
        'Symmetrical upload and download speeds with 1 static IP — consistent performance for businesses that depend on their connection.'
    );

    $add_text(
        'fibre_include_1',
        'Included Feature 1',
        'Symmetrical upload & download speeds'
    );

    $add_text(
        'fibre_include_2',
        'Included Feature 2',
        '60-month term'
    );


    $fibre_plans = array(

        1 => array(
            'speed' => '100 Mbps',
            'price' => '$79',
        ),

        2 => array(
            'speed' => '200 Mbps',
            'price' => '$99',
        ),

        3 => array(
            'speed' => '500 Mbps',
            'price' => '$109',
        ),

        4 => array(
            'speed' => '1000 Mbps',
            'price' => '$129',
        ),

    );

    foreach ($fibre_plans as $number => $plan) {

        $add_text(
            'fibre_' . $number . '_speed',
            'Fibre Plan ' . $number . ' Speed',
            $plan['speed']
        );

        $add_text(
            'fibre_' . $number . '_note',
            'Fibre Plan ' . $number . ' Note',
            'Symmetrical, 60-month term'
        );

        $add_text(
            'fibre_' . $number . '_price',
            'Fibre Plan ' . $number . ' Price',
            $plan['price']
        );

        $add_text(
            'fibre_' . $number . '_suffix',
            'Fibre Plan ' . $number . ' Price Suffix',
            '.99/mo'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | DEDICATED FIBRE
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'dedicated',
        'Dedicated Fibre'
    );

    $add_text(
        'dedicated_heading',
        'Section Heading',
        'Dedicated Fibre Internet'
    );

    $add_textarea(
        'dedicated_intro',
        'Section Introduction',
        'Experience our fastest, most reliable internet with 5 static IP addresses, IPv4 support, and optional DDoS protection.'
    );


    $dedicated_includes = array(
        1 => 'Unlimited usage',
        2 => 'Service level guarantees',
        3 => '24/7 technical support',
        4 => 'IPv4 support & static IP address',
    );

    foreach ($dedicated_includes as $number => $text) {

        $add_text(
            'dedicated_include_' . $number,
            'Included Feature ' . $number,
            $text
        );
    }


    /*
     * Dedicated plans
     */

    $dedicated_plans = array(

        1 => array(
            'name' => 'Up to 100 Mbps',
            'features' =>
                "Great for video conferencing\n" .
                "File sharing\n" .
                "Cloud based app usage",
        ),

        2 => array(
            'name' => 'Up to 500 Mbps',
            'features' =>
                "Seamless video streaming\n" .
                "Frequent cloud computing\n" .
                "Multiple server hosting",
        ),

        3 => array(
            'name' => 'Up to 1 Gbps',
            'features' =>
                "HD video conferencing\n" .
                "Very large file downloads and uploads\n" .
                "High speed operations",
        ),

        4 => array(
            'name' => 'Up to 10 Gbps',
            'features' =>
                "Adjusting to continuous data increases\n" .
                "Avoiding network congestion as you grow\n" .
                "AV over IP solutions",
        ),

    );

    foreach ($dedicated_plans as $number => $plan) {

        $add_text(
            'dedicated_' . $number . '_name',
            'Dedicated Plan ' . $number . ' Name',
            $plan['name']
        );

        $add_textarea(
            'dedicated_' . $number . '_features',
            'Dedicated Plan ' . $number . ' Features',
            $plan['features'],
            5
        );
    }


    /*
    |--------------------------------------------------------------------------
    | 5G BUSINESS INTERNET
    |--------------------------------------------------------------------------
    */

    $add_tab(
        '5g',
        '5G Business Internet'
    );

    $add_text(
        '5g_heading',
        'Section Heading',
        '5G Business Internet'
    );

    $add_textarea(
        '5g_intro',
        'Section Introduction',
        'Built for remote businesses, seasonal stores, and work that moves.'
    );


    $internet_5g_includes = array(
        1 => 'Fast & easy self-install',
        2 => 'Worry-free — powered by Canada\'s best 5G+ network',
        3 => 'No upfront cost, no setup or equipment fees',
        4 => '24/7 tech support',
    );

    foreach ($internet_5g_includes as $number => $text) {

        $add_text(
            '5g_include_' . $number,
            'Included Feature ' . $number,
            $text
        );
    }


    /*
     * 5G plans
     */

    $internet_5g_plans = array(

        1 => array(
            'name' => 'Starter',
            'note' => 'Compact design, high-capacity battery',
            'price' => '$70',
            'suffix' => '/mo, month-to-month',
            'features' =>
                "500 GB data at plan speeds, unlimited at reduced speeds thereafter\n" .
                "HD video capability\n" .
                "No term commitment",
        ),

        2 => array(
            'name' => 'Pro',
            'note' => 'Easy to transfer between locations',
            'price' => '$90',
            'suffix' => '/mo, month-to-month',
            'features' =>
                "1 TB data at plan speeds, unlimited at reduced speeds thereafter\n" .
                "HD video capability\n" .
                "No term commitment",
        ),

        3 => array(
            'name' => 'Premium',
            'note' => 'For users with high data needs',
            'price' => '$100',
            'suffix' => '/mo, month-to-month',
            'features' =>
                "Unlimited data at plan speeds\n" .
                "Full HD video capability\n" .
                "No term commitment",
        ),

    );

    foreach ($internet_5g_plans as $number => $plan) {

        $add_text(
            '5g_' . $number . '_name',
            '5G Plan ' . $number . ' Name',
            $plan['name']
        );

        $add_text(
            '5g_' . $number . '_note',
            '5G Plan ' . $number . ' Description',
            $plan['note']
        );

        $add_text(
            '5g_' . $number . '_price',
            '5G Plan ' . $number . ' Price',
            $plan['price']
        );

        $add_text(
            '5g_' . $number . '_suffix',
            '5G Plan ' . $number . ' Price Suffix',
            $plan['suffix']
        );

        $add_textarea(
            '5g_' . $number . '_features',
            '5G Plan ' . $number . ' Features',
            $plan['features'],
            5
        );
    }


    $add_textarea(
        '5g_term_note',
        'Bottom Note',
        'Need more than one device, or have questions? Contact us and we\'ll help you find the right fit.'
    );


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
        'FREE INTERNET BILL REVIEW'
    );

    $add_text(
        'review_heading',
        'Review Heading',
        'Upload your bill. We\'ll do the homework.'
    );

    $add_textarea(
        'review_intro',
        'Review Description',
        'Send us a recent internet bill and a WCP business specialist will review your current service and available options.'
    );


    /*
     * Review benefit 1
     */

    $add_text(
        'review_1_title',
        'Review Benefit 1 Title',
        'Review your current costs'
    );

    $add_textarea(
        'review_1_text',
        'Review Benefit 1 Description',
        'We\'ll look at what you\'re currently paying and what speeds you have.'
    );


    /*
     * Review benefit 2
     */

    $add_text(
        'review_2_title',
        'Review Benefit 2 Title',
        'Identify opportunities'
    );

    $add_textarea(
        'review_2_text',
        'Review Benefit 2 Description',
        'We\'ll check available Rogers Business internet options that may better fit your needs.'
    );


    /*
     * Review benefit 3
     */

    $add_text(
        'review_3_title',
        'Review Benefit 3 Title',
        'Talk to a real person'
    );

    $add_textarea(
        'review_3_text',
        'Review Benefit 3 Description',
        'Your review is handled by a WCP business specialist.'
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

        'key' => 'group_wcp_business_internet',

        'title' => 'Business Internet Content',

        'fields' => $fields,

        'location' => array(

            array(

                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => (string) $internet_page->ID,
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
    'wcp_register_internet_fields'
);
/*
|--------------------------------------------------------------------------
| BUSINESS PHONE - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_phone_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $phone_page = get_page_by_path('business-phone');

    if (!$phone_page) {
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
            'key'   => 'field_phone_tab_' . $key,
            'label' => $label,
            'name'  => '',
            'type'  => 'tab',
        );
    };


    $add_text = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_phone_' . $key,
            'label'         => $label,
            'name'          => 'phone_' . $key,
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
            'key'           => 'field_phone_' . $key,
            'label'         => $label,
            'name'          => 'phone_' . $key,
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
        'Business phone solutions with Advantage Voice'
    );

    $add_textarea(
        'hero_description',
        'Hero Description',
        'Streamline business calls with an advanced cloud PBX solution — Teams integration, mobile access, and 24/7 managed support.'
    );

    $add_text(
        'hero_button',
        'Hero Button Text',
        'Get My Free Business Review'
    );


    $fields[] = array(
        'key'           => 'field_phone_hero_image',
        'label'         => 'Hero Image',
        'name'          => 'phone_hero_image',
        'type'          => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'library'       => 'all',
    );


    /*
    |--------------------------------------------------------------------------
    | FEATURES
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'features',
        'Features'
    );

    $add_text(
        'features_heading',
        'Section Heading',
        'Stay connected from your office to the road'
    );


    /*
     * Feature 1
     */

    $add_text(
        'feature_1_title',
        'Feature 1 Title',
        'Work from anywhere'
    );

    $add_textarea(
        'feature_1_text',
        'Feature 1 Description',
        'Make and receive calls from your desk, mobile, or laptop on the same business line.'
    );


    /*
     * Feature 2
     */

    $add_text(
        'feature_2_title',
        'Feature 2 Title',
        'Nationwide calling'
    );

    $add_textarea(
        'feature_2_text',
        'Feature 2 Description',
        'Included CAN/US long distance calling and virtual receptionist on every plan.'
    );


    /*
     * Feature 3
     */

    $add_text(
        'feature_3_title',
        'Feature 3 Title',
        'Predictable pricing'
    );

    $add_textarea(
        'feature_3_text',
        'Feature 3 Description',
        'Simple per-seat pricing that scales as your team grows.'
    );


    /*
     * Feature 4
     */

    $add_text(
        'feature_4_title',
        'Feature 4 Title',
        'Seamless transfers'
    );

    $add_textarea(
        'feature_4_text',
        'Feature 4 Description',
        'Move calls between devices without missing a beat.'
    );


    /*
    |--------------------------------------------------------------------------
    | PHONE PLANS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'plans',
        'Phone Plans'
    );

    $add_text(
        'plans_heading',
        'Plans Heading',
        'Choose an Advantage Voice business phone plan'
    );

    $add_textarea(
        'pricing_disclaimer',
        'Pricing Disclaimer',
        'Offers and pricing are subject to change and address availability. Contact WCP for current promotional pricing.'
    );

    $add_textarea(
        'seat_note',
        'Seat Calculator Note',
        'Number of seats — contact us to see your monthly cost for the seats you need.'
    );


    /*
    |--------------------------------------------------------------------------
    | PLAN 1 - BASIC 5 YEAR
    |--------------------------------------------------------------------------
    */

    $add_text(
        'plan_1_name',
        'Plan 1 Name',
        'Basic — 5-Year Term'
    );

    $add_text(
        'plan_1_price',
        'Plan 1 Price',
        '$18'
    );

    $add_text(
        'plan_1_suffix',
        'Plan 1 Price Suffix',
        '.00/seat/mo on a 5-yr term'
    );

    $add_textarea(
        'plan_1_note',
        'Plan 1 Description',
        'Requires 11+ lines. Includes CAN/US long distance calling and virtual receptionist.'
    );

    $add_textarea(
        'plan_1_features',
        'Plan 1 Features',
        "Minimum 11 lines required\n" .
        "Includes Edge 550 handset\n" .
        "Available with any internet connection\n" .
        "Make and receive calls on any device",
        6
    );

    $add_text(
        'plan_1_button',
        'Plan 1 Button Text',
        'Contact Sales'
    );


    /*
    |--------------------------------------------------------------------------
    | PLAN 2 - INTERNET BUNDLE
    |--------------------------------------------------------------------------
    */

    $add_text(
        'plan_2_badge',
        'Plan 2 Badge',
        'Bundle & Save'
    );

    $add_text(
        'plan_2_name',
        'Plan 2 Name',
        'Bundle with Internet'
    );

    $add_text(
        'plan_2_price',
        'Plan 2 Price',
        '$21'
    );

    $add_text(
        'plan_2_suffix',
        'Plan 2 Price Suffix',
        '.00/seat/mo starting at, on a 3-yr term'
    );

    $add_textarea(
        'plan_2_note',
        'Plan 2 Description',
        'Save when bundling with an eligible 3-yr Business Internet plan. Save $5/mo/line in a bundle.'
    );

    $add_textarea(
        'plan_2_features',
        'Plan 2 Features',
        "All the features of Advantage Voice Basic, plus a Business Internet plan\n" .
        "Download speeds up to 2 Gbps\n" .
        "Wireless backup on select plans\n" .
        "Automatic security updates",
        6
    );

    $add_text(
        'plan_2_button',
        'Plan 2 Button Text',
        'Explore Bundles'
    );


    /*
    |--------------------------------------------------------------------------
    | PLAN 3 - BASIC
    |--------------------------------------------------------------------------
    */

    $add_text(
        'plan_3_name',
        'Plan 3 Name',
        'Basic'
    );

    $add_text(
        'plan_3_price',
        'Plan 3 Price',
        '$26'
    );

    $add_text(
        'plan_3_suffix',
        'Plan 3 Price Suffix',
        '.00/seat/mo on a 3-yr term'
    );

    $add_textarea(
        'plan_3_note',
        'Plan 3 Description',
        'A phone system for small teams. Includes CAN/US long distance calling and virtual receptionist.'
    );

    $add_textarea(
        'plan_3_features',
        'Plan 3 Features',
        "Includes handset\n" .
        "Available with any internet connection\n" .
        "Make and receive calls on any device\n" .
        "No installation required",
        6
    );

    $add_text(
        'plan_3_button',
        'Plan 3 Button Text',
        'Contact Sales'
    );


    /*
    |--------------------------------------------------------------------------
    | PLAN 4 - REMOTE WITH TEAMS
    |--------------------------------------------------------------------------
    */

    $add_text(
        'plan_4_name',
        'Plan 4 Name',
        'Remote with Teams'
    );

    $add_text(
        'plan_4_price',
        'Plan 4 Price',
        '$28'
    );

    $add_text(
        'plan_4_suffix',
        'Plan 4 Price Suffix',
        '.95/seat/mo on a 3-yr term'
    );

    $add_textarea(
        'plan_4_note',
        'Plan 4 Description',
        'Full collaboration suite for call, chat and video conferencing. Includes CAN/US long distance calling and virtual receptionist.'
    );

    $add_textarea(
        'plan_4_features',
        'Plan 4 Features',
        "Everything in Basic, plus:\n" .
        "Microsoft Teams calling & collaboration tools\n" .
        "Does not include handset — best for field team members",
        6
    );

    $add_text(
        'plan_4_button',
        'Plan 4 Button Text',
        'Contact Sales'
    );


    /*
    |--------------------------------------------------------------------------
    | DIAL TONE
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'dial_tone',
        'Dial Tone'
    );

    $add_text(
        'dial_heading',
        'Dial Tone Heading',
        'Looking for a dial tone?'
    );

    $add_textarea(
        'dial_text',
        'Dial Tone Description',
        'If you\'re simply looking to power business security equipment, alarm panels, or elevators, we have a solution for you. Contact us to discuss your needs.'
    );

    $add_text(
        'dial_button',
        'Dial Tone Button Text',
        'Contact Sales'
    );


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
        'FREE PHONE BILL REVIEW'
    );

    $add_text(
        'review_heading',
        'Review Heading',
        'Upload your bill. We\'ll do the homework.'
    );

    $add_textarea(
        'review_intro',
        'Review Description',
        'Send us a recent phone bill and a WCP business specialist will review your current service and available options.'
    );


    /*
     * Review Benefit 1
     */

    $add_text(
        'review_1_title',
        'Review Benefit 1 Title',
        'Review your current costs'
    );

    $add_textarea(
        'review_1_text',
        'Review Benefit 1 Description',
        'We\'ll look at what you\'re currently paying and what services you have.'
    );


    /*
     * Review Benefit 2
     */

    $add_text(
        'review_2_title',
        'Review Benefit 2 Title',
        'Identify opportunities'
    );

    $add_textarea(
        'review_2_text',
        'Review Benefit 2 Description',
        'We\'ll check available Advantage Voice options that may better fit your team.'
    );


    /*
     * Review Benefit 3
     */

    $add_text(
        'review_3_title',
        'Review Benefit 3 Title',
        'Talk to a real person'
    );

    $add_textarea(
        'review_3_text',
        'Review Benefit 3 Description',
        'Your review is handled by a WCP business specialist.'
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

        'key' => 'group_wcp_business_phone',

        'title' => 'Business Phone Content',

        'fields' => $fields,

        'location' => array(

            array(

                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => (string) $phone_page->ID,
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
    'wcp_register_phone_fields'
);
/*
|--------------------------------------------------------------------------
| FLEET MANAGEMENT - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_fleet_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $fleet_page = get_page_by_path('fleet-management');

    if (!$fleet_page) {
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
            'key'   => 'field_fleet_tab_' . $key,
            'label' => $label,
            'name'  => '',
            'type'  => 'tab',
        );
    };


    $add_text = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_fleet_' . $key,
            'label'         => $label,
            'name'          => 'fleet_' . $key,
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
            'key'           => 'field_fleet_' . $key,
            'label'         => $label,
            'name'          => 'fleet_' . $key,
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
        'Best-in-class fleet monitoring, all in one place'
    );

    $add_textarea(
        'hero_description',
        'Hero Description',
        'Control costs, increase driver safety, simplify compliance, and decrease downtime with Rogers Fleet Management.'
    );

    $add_text(
        'hero_button',
        'Hero Button Text',
        'Speak With a Fleet Specialist'
    );


    $fields[] = array(
        'key'           => 'field_fleet_hero_image',
        'label'         => 'Hero Image',
        'name'          => 'fleet_hero_image',
        'type'          => 'image',
        'return_format' => 'url',
        'preview_size'  => 'medium',
        'library'       => 'all',
    );


    /*
    |--------------------------------------------------------------------------
    | BENEFITS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'benefits',
        'Benefits'
    );

    $add_text(
        'benefits_heading',
        'Section Heading',
        'Drive change with fleet management'
    );

    $add_textarea(
        'benefits_intro',
        'Section Introduction',
        'Full insight into your vehicles, so you can steer your business in the right direction.'
    );


    /*
     * Benefit 1
     */

    $add_text(
        'benefit_1_title',
        'Benefit 1 Title',
        'Improve safety'
    );

    $add_textarea(
        'benefit_1_text',
        'Benefit 1 Description',
        'Protect your staff, vehicles, and cargo with alerts and reporting for weather, engine diagnostic data, and driver behaviour.'
    );


    /*
     * Benefit 2
     */

    $add_text(
        'benefit_2_title',
        'Benefit 2 Title',
        'Reduce costs'
    );

    $add_textarea(
        'benefit_2_text',
        'Benefit 2 Description',
        'Decrease downtime, minimize wasteful activities, and maximize fleet operations with route optimization, fuel monitoring, and proactive maintenance.'
    );


    /*
     * Benefit 3
     */

    $add_text(
        'benefit_3_title',
        'Benefit 3 Title',
        'Simplify compliance'
    );

    $add_textarea(
        'benefit_3_text',
        'Benefit 3 Description',
        'Take the administration and bookkeeping out of regulatory compliance with automated reporting and ELDs designed to satisfy all levels of government regulation.'
    );


    /*
    |--------------------------------------------------------------------------
    | FLEET SOLUTIONS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'solutions',
        'Fleet Solutions'
    );

    $add_text(
        'solutions_heading',
        'Section Heading',
        'What fleet management solutions give you'
    );

    $add_textarea(
        'solutions_intro',
        'Section Introduction',
        'Comprehensive insight into the forces shaping your business — on a single interactive dashboard, available 24/7 on your device.'
    );


    $solutions = array(

        1 => array(
            'title' => 'Monitoring & Management',
            'text'  => 'Track vehicle location, speed, and more to optimize operational efficiencies, save costs, and promote safety.',
        ),

        2 => array(
            'title' => 'Mixed Fleets',
            'text'  => 'Leverage a single solution to manage and track your fleet of vehicles, equipment, trailers, or other mobile assets.',
        ),

        3 => array(
            'title' => 'Winter Fleets',
            'text'  => 'Monitor fleet health, improve dispatch efficiency, and optimize asset utilization through winter conditions.',
        ),

        4 => array(
            'title' => 'ELDs & HoS Compliance',
            'text'  => 'Officially certified to comply with the federal ELD mandate and keep everyone on the road safe.',
        ),

        5 => array(
            'title' => 'Driver Monitoring & Coaching',
            'text'  => 'AI dashcams help prevent accidents with immediate alerts for speeding and seatbelt use, along with fuel usage monitoring.',
        ),

    );


    foreach ($solutions as $number => $solution) {

        $add_text(
            'solution_' . $number . '_title',
            'Solution ' . $number . ' Title',
            $solution['title']
        );

        $add_textarea(
            'solution_' . $number . '_text',
            'Solution ' . $number . ' Description',
            $solution['text']
        );

        $add_text(
            'solution_' . $number . '_button',
            'Solution ' . $number . ' Button Text',
            'Learn More'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | VIDEO
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'video',
        'Video'
    );

    $add_text(
        'video_heading',
        'Video Heading',
        'See it in action'
    );

    $add_textarea(
        'video_intro',
        'Video Description',
        'A closer look at how Rogers fleet monitoring helps businesses like yours.'
    );

    $add_text(
        'video_url',
        'YouTube Embed URL',
        'https://www.youtube.com/embed/Q1jGyOwYXVs'
    );

    $add_text(
        'video_title',
        'Video Accessibility Title',
        'IoT fleet management with Rogers'
    );


    /*
    |--------------------------------------------------------------------------
    | WHY ROGERS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'why',
        'Why Rogers'
    );

    $add_text(
        'why_heading',
        'Section Heading',
        'Why Rogers for Fleet Management'
    );


    $why_items = array(

        1 => 'Over 20 years of experience delivering carefully selected IoT solutions',

        2 => 'A dedicated service delivery team handles the details, start to finish',

        3 => 'Simple installation — self-install, or certified installers come to you',

        4 => 'Coast-to-coast network options, from 4G LTE and 5G to low-power IoT networks',

    );


    foreach ($why_items as $number => $text) {

        $add_textarea(
            'why_' . $number,
            'Why Rogers Item ' . $number,
            $text,
            2
        );
    }


    $add_textarea(
        'why_note',
        'Technology Partners Note',
        'Built on trusted technology from industry leaders like Geotab and PowerFleet, turning your vehicle and asset data into actionable safety and operational insights.'
    );


    /*
    |--------------------------------------------------------------------------
    | FLEET CONSULTATION
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'consultation',
        'Fleet Consultation'
    );

    $add_text(
        'consultation_eyebrow',
        'Consultation Eyebrow',
        'FREE FLEET CONSULTATION'
    );

    $add_text(
        'consultation_heading',
        'Consultation Heading',
        'Tell us about your fleet. We\'ll do the homework.'
    );

    $add_textarea(
        'consultation_intro',
        'Consultation Description',
        'Share a few details about your vehicles and a WCP business specialist will recommend the right fleet management solution.'
    );


    /*
     * Benefit 1
     */

    $add_text(
        'consultation_1_title',
        'Consultation Benefit 1 Title',
        'Review your current setup'
    );

    $add_textarea(
        'consultation_1_text',
        'Consultation Benefit 1 Description',
        'We\'ll look at your fleet size and how you\'re tracking it today, if at all.'
    );


    /*
     * Benefit 2
     */

    $add_text(
        'consultation_2_title',
        'Consultation Benefit 2 Title',
        'Identify opportunities'
    );

    $add_textarea(
        'consultation_2_text',
        'Consultation Benefit 2 Description',
        'We\'ll match you to the right monitoring and compliance solution for your fleet.'
    );


    /*
     * Benefit 3
     */

    $add_text(
        'consultation_3_title',
        'Consultation Benefit 3 Title',
        'Talk to a real person'
    );

    $add_textarea(
        'consultation_3_text',
        'Consultation Benefit 3 Description',
        'Your consultation is handled by a WCP business specialist.'
    );


    $add_text(
        'consultation_button',
        'Form Button Text',
        'Get My Free Fleet Consultation'
    );


    /*
    |--------------------------------------------------------------------------
    | REGISTER FIELD GROUP
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key' => 'group_wcp_fleet_management',

        'title' => 'Fleet Management Content',

        'fields' => $fields,

        'location' => array(

            array(

                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => (string) $fleet_page->ID,
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
    'wcp_register_fleet_fields'
);
/*
|--------------------------------------------------------------------------
| HOMEPAGE - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_home_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    /*
     * Attach fields to whichever page is selected as:
     * Settings → Reading → Homepage
     */

    $home_page_id = (int) get_option('page_on_front');

    if (!$home_page_id) {
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
            'key'   => 'field_home_tab_' . $key,
            'label' => $label,
            'name'  => '',
            'type'  => 'tab',
        );
    };


    $add_text = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_home_' . $key,
            'label'         => $label,
            'name'          => 'home_' . $key,
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
            'key'           => 'field_home_' . $key,
            'label'         => $label,
            'name'          => 'home_' . $key,
            'type'          => 'textarea',
            'rows'          => $rows,
            'default_value' => $default,
        );
    };


    $add_url = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_home_' . $key,
            'label'         => $label,
            'name'          => 'home_' . $key,
            'type'          => 'url',
            'default_value' => $default,
        );
    };


    $add_image = function ($key, $label) use (&$fields) {

        $fields[] = array(
            'key'           => 'field_home_' . $key,
            'label'         => $label,
            'name'          => 'home_' . $key,
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'library'       => 'all',
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
        'hero_eyebrow',
        'Hero Eyebrow',
        'Rogers Authorized Dealer • Serving Canadian Businesses Since 1990'
    );

    $add_text(
        'hero_heading',
        'Hero Heading',
        'Business wireless and connectivity, handled by local experts'
    );

    $add_textarea(
        'hero_description',
        'Hero Description',
        'Get business wireless, internet and phone solutions backed by a dedicated account manager who knows your business.'
    );

    $add_text(
        'hero_button',
        'Hero Button Text',
        'Upload My Bill for a Free Review'
    );

    $add_text(
        'hero_check_1',
        'Hero Checkmark 1',
        'No obligation'
    );

    $add_text(
        'hero_check_2',
        'Hero Checkmark 2',
        'Local account manager'
    );

    $add_text(
        'hero_check_3',
        'Hero Checkmark 3',
        'Canada-wide service'
    );

    $add_image(
        'hero_image',
        'Hero Background Image'
    );


    /*
    |--------------------------------------------------------------------------
    | HERO BILL REVIEW CARD
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'hero_review',
        'Hero Bill Review'
    );

    $add_text(
        'hero_review_label',
        'Card Label',
        'FREE BUSINESS BILL REVIEW'
    );

    $add_text(
        'hero_review_heading',
        'Card Heading',
        'Think you\'re paying too much for business wireless?'
    );

    $add_textarea(
        'hero_review_text',
        'Card Description',
        'Send us a recent wireless bill and we\'ll review your current services, pricing and available Rogers Business options.'
    );

    $add_text(
        'hero_review_step_1',
        'Step 1',
        'Upload your current bill'
    );

    $add_text(
        'hero_review_step_2',
        'Step 2',
        'We review your services'
    );

    $add_text(
        'hero_review_step_3',
        'Step 3',
        'We show you your options'
    );

    $add_text(
        'hero_review_button',
        'Card Button Text',
        'Upload My Bill'
    );

    $add_textarea(
        'hero_review_note',
        'Privacy Note',
        'Your bill is kept private and used only to review your business services. No obligation • Reviewed by a WCP business specialist.'
    );


    /*
    |--------------------------------------------------------------------------
    | CREDIBILITY
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'credibility',
        'Credibility'
    );


    $add_text(
        'credibility_1_number',
        'Item 1 Number',
        '35+'
    );

    $add_text(
        'credibility_1_label',
        'Item 1 Label',
        'Years in Business'
    );


    $add_text(
        'credibility_2_number',
        'Item 2 Number',
        '500+'
    );

    $add_text(
        'credibility_2_label',
        'Item 2 Label',
        'Business Accounts Supported'
    );


    $add_text(
        'credibility_3_number',
        'Item 3 Number',
        '10,000+'
    );

    $add_text(
        'credibility_3_label',
        'Item 3 Label',
        'Customers Served'
    );


    $add_text(
        'credibility_4_number',
        'Item 4 Number',
        'Official'
    );

    $add_text(
        'credibility_4_label',
        'Item 4 Label',
        'Rogers Authorized Dealer'
    );


    /*
    |--------------------------------------------------------------------------
    | SERVICES
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'services',
        'Services'
    );

    $add_text(
        'services_heading',
        'Section Heading',
        'Our Services'
    );

    $add_text(
        'services_intro',
        'Section Description',
        'Built around what your business needs most.'
    );


    /*
     * Wireless
     */

    $add_text(
        'service_1_title',
        'Service 1 Title',
        'Business Wireless'
    );

    $add_textarea(
        'service_1_text',
        'Service 1 Description',
        'Custom wireless plans for businesses of all sizes — with a dedicated account manager who knows your business by name.'
    );

    $add_text(
        'service_1_button',
        'Service 1 Button',
        'See Wireless Plans'
    );


    /*
     * Internet
     */

    $add_text(
        'service_2_title',
        'Service 2 Title',
        'Business Internet'
    );

    $add_textarea(
        'service_2_text',
        'Service 2 Description',
        'Reliable, fast internet with predictable pricing and local support — whichever way your business connects.'
    );

    $add_text(
        'service_2_button',
        'Service 2 Button',
        'See Internet Plans'
    );


    /*
     * Phone
     */

    $add_text(
        'service_3_title',
        'Service 3 Title',
        'Business Phone'
    );

    $add_textarea(
        'service_3_text',
        'Service 3 Description',
        'Streamline business calls with an advanced cloud PBX solution — Teams integration, mobile access, and 24/7 managed support.'
    );

    $add_text(
        'service_3_button',
        'Service 3 Button',
        'See Phone Plans'
    );


    /*
     * POS
     */

    $add_text(
        'service_4_title',
        'Service 4 Title',
        'Point of Sale'
    );

    $add_textarea(
        'service_4_text',
        'Service 4 Description',
        'Rogers POS, powered by Clover — accept payments anywhere with transparent pricing and easy-to-use sales, inventory, and employee management tools.'
    );

    $add_text(
        'service_4_button',
        'Service 4 Button',
        'See POS Options'
    );


    /*
     * Fleet
     */

    $add_text(
        'service_5_title',
        'Service 5 Title',
        'Fleet Management'
    );

    $add_textarea(
        'service_5_text',
        'Service 5 Description',
        'Control costs, increase driver safety, and simplify compliance with best-in-class fleet monitoring for your vehicles and mobile assets.'
    );

    $add_text(
        'service_5_button',
        'Service 5 Button',
        'See Fleet Options'
    );


    /*
    |--------------------------------------------------------------------------
    | PREFERRED PROGRAM
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'preferred',
        'Preferred Program'
    );

    $add_text(
        'preferred_eyebrow',
        'Eyebrow',
        'Employer & Association Pricing'
    );

    $add_text(
        'preferred_heading',
        'Heading',
        'Rogers Preferred Program'
    );

    $add_textarea(
        'preferred_text',
        'Description',
        'Exclusive pricing on the latest phones and plans for eligible employers and associations. Check in seconds if your business qualifies.'
    );

    $add_text(
        'preferred_button',
        'Button Text',
        'Check Eligibility'
    );

    $add_url(
        'preferred_url',
        'Eligibility Page URL',
        'https://wcpwireless.com/lookup#Home'
    );


    /*
    |--------------------------------------------------------------------------
    | LOCAL STOREFRONT
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'storefront',
        'Storefront'
    );

    $add_textarea(
        'storefront_text',
        'Storefront Message',
        'A local team you can walk in and talk to — not just a call centre.'
    );

    $add_image(
        'storefront_image',
        'Storefront Image'
    );


    /*
    |--------------------------------------------------------------------------
    | ROGERS DEALER
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'dealer',
        'Rogers Dealer'
    );

    $add_textarea(
        'dealer_text',
        'Dealer Description',
        'As an Official Rogers Authorized Dealer since 1990, WCP is held to Rogers\' own standards for pricing, service, and support.'
    );


    /*
    |--------------------------------------------------------------------------
    | TESTIMONIALS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'testimonials',
        'Testimonials'
    );

    $add_text(
        'testimonials_heading',
        'Section Heading',
        'What Our Clients Say'
    );

    $add_text(
        'testimonials_intro',
        'Section Description',
        'Real feedback from businesses we\'ve worked with.'
    );


    /*
     * Testimonial 1
     */

    $add_textarea(
        'testimonial_1_quote',
        'Testimonial 1 Quote',
        'The WCP team made switching to Rogers Business very painless. I\'d definitely work with them again.',
        5
    );

    $add_text(
        'testimonial_1_initials',
        'Testimonial 1 Initials',
        'RN'
    );

    $add_text(
        'testimonial_1_name',
        'Testimonial 1 Name',
        'Rob N.'
    );

    $add_text(
        'testimonial_1_role',
        'Testimonial 1 Company / Role',
        'President, Simcoe IT Solutions Inc.'
    );


    /*
     * Testimonial 2
     */

    $add_textarea(
        'testimonial_2_quote',
        'Testimonial 2 Quote',
        'I highly recommend the WCP team. During recent contract negotiations with Rogers, they demonstrated strong professionalism and expertise, ensuring a fair and efficient outcome. They\'re approachable, responsive, and always willing to help — and their problem-solving ability means they quickly find practical solutions. Overall, a great experience.',
        8
    );

    $add_text(
        'testimonial_2_initials',
        'Testimonial 2 Initials',
        'DB'
    );

    $add_text(
        'testimonial_2_name',
        'Testimonial 2 Name',
        'Debbie B.'
    );

    $add_text(
        'testimonial_2_role',
        'Testimonial 2 Company / Role',
        'Deals Desk Manager / Sales Operations Specialist, Avaya'
    );


    /*
     * Testimonial 3
     */

    $add_textarea(
        'testimonial_3_quote',
        'Testimonial 3 Quote',
        'I\'ve worked with the WCP team for over 9 years now. They\'ve looked after our corporate plan for our employees at Markham Stouffville Hospital, keeping our staff up to date with current offers and promotions. Very knowledgeable at what they do.',
        7
    );

    $add_text(
        'testimonial_3_initials',
        'Testimonial 3 Initials',
        'LE'
    );

    $add_text(
        'testimonial_3_name',
        'Testimonial 3 Name',
        'Lee E.'
    );

    $add_text(
        'testimonial_3_role',
        'Testimonial 3 Company / Role',
        'Network Analyst, OVH'
    );


    /*
     * Google Review CTA
     */

    $add_text(
        'google_review_text',
        'Google Review Link Text',
        '⭐ Had a great experience with us? Leave us a review on Google →'
    );

    $add_url(
        'google_review_url',
        'Google Review URL',
        'https://g.page/r/CX3o5GNSAmziEAE/review'
    );


    /*
    |--------------------------------------------------------------------------
    | BILL REVIEW FORM
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'review',
        'Bill Review Form'
    );

    $add_text(
        'review_eyebrow',
        'Review Eyebrow',
        'FREE BUSINESS BILL REVIEW'
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


    /*
     * Benefit 1
     */

    $add_text(
        'review_1_title',
        'Review Benefit 1 Title',
        'Review your current costs'
    );

    $add_textarea(
        'review_1_text',
        'Review Benefit 1 Description',
        'We\'ll look at what you\'re currently paying and what services you have.'
    );


    /*
     * Benefit 2
     */

    $add_text(
        'review_2_title',
        'Review Benefit 2 Title',
        'Identify opportunities'
    );

    $add_textarea(
        'review_2_text',
        'Review Benefit 2 Description',
        'We\'ll check available Rogers Business options that may better fit your needs.'
    );


    /*
     * Benefit 3
     */

    $add_text(
        'review_3_title',
        'Review Benefit 3 Title',
        'Talk to a real person'
    );

    $add_textarea(
        'review_3_text',
        'Review Benefit 3 Description',
        'Your review is handled by a WCP business specialist.'
    );


    $add_text(
        'review_form_heading',
        'Form Heading',
        'Get My Free Bill Review'
    );

    $add_text(
        'review_form_intro',
        'Form Introduction',
        'Tell us a little about your business.'
    );

    $add_text(
        'review_button',
        'Submit Button Text',
        'Get My Free Bill Review'
    );


    /*
    |--------------------------------------------------------------------------
    | REGISTER HOMEPAGE FIELD GROUP
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key' => 'group_wcp_homepage',

        'title' => 'Homepage Content',

        'fields' => $fields,

        'location' => array(

            array(

                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => (string) $home_page_id,
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
    'wcp_register_home_fields'
);
/*
|--------------------------------------------------------------------------
| BUSINESS OVERVIEW - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_business_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $business_page = get_page_by_path('business');

    if (!$business_page) {
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
            'key'   => 'field_business_tab_' . $key,
            'label' => $label,
            'name'  => '',
            'type'  => 'tab',
        );
    };


    $add_text = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_business_' . $key,
            'label'         => $label,
            'name'          => 'business_' . $key,
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
            'key'           => 'field_business_' . $key,
            'label'         => $label,
            'name'          => 'business_' . $key,
            'type'          => 'textarea',
            'rows'          => $rows,
            'default_value' => $default,
        );
    };


    $add_url = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_business_' . $key,
            'label'         => $label,
            'name'          => 'business_' . $key,
            'type'          => 'url',
            'default_value' => $default,
        );
    };


    $add_image = function ($key, $label) use (&$fields) {

        $fields[] = array(
            'key'           => 'field_business_' . $key,
            'label'         => $label,
            'name'          => 'business_' . $key,
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'library'       => 'all',
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
        'You Get Rogers. You Deal With Us.'
    );

    $add_textarea(
        'hero_description',
        'Hero Description',
        'The Rogers products and network your business needs — backed by a local team that knows your business and answers the phone.'
    );

    $add_image(
        'hero_image',
        'Hero Background Image'
    );


    /*
    |--------------------------------------------------------------------------
    | WHY WCP
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'why',
        'Why WCP'
    );


    $add_text(
        'why_1_title',
        'Reason 1 Heading',
        'Your Own Account Manager'
    );

    $add_textarea(
        'why_1_text',
        'Reason 1 Description',
        'No call queues. No bouncing between departments.'
    );


    $add_text(
        'why_2_title',
        'Reason 2 Heading',
        'Local, Personal Support'
    );

    $add_textarea(
        'why_2_text',
        'Reason 2 Description',
        'Face-to-face service when you need it.'
    );


    $add_text(
        'why_3_title',
        'Reason 3 Heading',
        'The Right Rogers Plan'
    );

    $add_textarea(
        'why_3_text',
        'Reason 3 Description',
        'We compare across Rogers\' full catalogue to find the best fit for your business.'
    );


    /*
     * Bottom line banner
     */

    $add_text(
        'banner_eyebrow',
        'Banner Eyebrow',
        'The Bottom Line'
    );

    $add_text(
        'banner_heading',
        'Banner Heading',
        'Rogers network. WCP service.'
    );

    $add_textarea(
        'banner_text',
        'Banner Description',
        'Same Rogers products and network — with a local team in your corner.'
    );

    $add_text(
        'banner_button',
        'Banner Button Text',
        'Get My Free Business Review →'
    );

    $add_text(
        'why_tagline',
        'Bottom Tagline',
        'Serving Canadian businesses since 1990'
    );


    /*
    |--------------------------------------------------------------------------
    | SERVICES
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'services',
        'Business Services'
    );

    $add_text(
        'services_heading',
        'Section Heading',
        'Rogers Business Services'
    );

    $add_textarea(
        'services_intro',
        'Section Description',
        'Everything your business needs to stay connected, in one place.'
    );

    $add_image(
        'services_background',
        'Services Background Image'
    );


    /*
     * Wireless
     */

    $add_text(
        'service_1_title',
        'Service 1 Title',
        'Business Wireless'
    );

    $add_textarea(
        'service_1_text',
        'Service 1 Description',
        'Data plans, device financing, and BYOD options for teams of any size. We\'ll match you to the right plan instead of the most expensive one.'
    );

    $add_text(
        'service_1_button',
        'Service 1 Button',
        'See Wireless Options'
    );


    /*
     * Internet
     */

    $add_text(
        'service_2_title',
        'Service 2 Title',
        'Business Internet'
    );

    $add_textarea(
        'service_2_text',
        'Service 2 Description',
        'Reliable, fast internet built for day-to-day operations — from single-location offices to multi-site businesses that need dependable uptime.'
    );

    $add_text(
        'service_2_button',
        'Service 2 Button',
        'See Internet Options'
    );


    /*
     * Phone
     */

    $add_text(
        'service_3_title',
        'Service 3 Title',
        'Business Phone'
    );

    $add_textarea(
        'service_3_text',
        'Service 3 Description',
        'Keep your team connected with landline and cloud-based phone solutions that scale as you grow.'
    );

    $add_text(
        'service_3_button',
        'Service 3 Button',
        'See Phone Options'
    );


    /*
     * POS
     */

    $add_text(
        'service_4_title',
        'Service 4 Title',
        'Point of Sale'
    );

    $add_textarea(
        'service_4_text',
        'Service 4 Description',
        'Rogers POS, powered by Clover — accept payments anywhere with transparent pricing and easy-to-use sales, inventory, and employee management tools.'
    );

    $add_text(
        'service_4_button',
        'Service 4 Button',
        'See POS Options'
    );


    /*
     * Fleet
     */

    $add_text(
        'service_5_title',
        'Service 5 Title',
        'Fleet Management'
    );

    $add_textarea(
        'service_5_text',
        'Service 5 Description',
        'Control costs, increase driver safety, and simplify compliance with best-in-class fleet monitoring for your vehicles and mobile assets.'
    );

    $add_text(
        'service_5_button',
        'Service 5 Button',
        'See Fleet Options'
    );


    /*
    |--------------------------------------------------------------------------
    | TESTIMONIALS
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'testimonials',
        'Testimonials'
    );

    $add_text(
        'testimonials_heading',
        'Section Heading',
        'What Our Clients Say'
    );

    $add_text(
        'testimonials_intro',
        'Section Description',
        'Real feedback from businesses we\'ve worked with.'
    );


    /*
     * Testimonial 1
     */

    $add_textarea(
        'testimonial_1_quote',
        'Testimonial 1 Quote',
        'The WCP team made switching to Rogers Business very painless. I\'d definitely work with them again.',
        5
    );

    $add_text(
        'testimonial_1_name',
        'Testimonial 1 Name',
        'Rob N.'
    );

    $add_text(
        'testimonial_1_role',
        'Testimonial 1 Role / Company',
        'President, Simcoe IT Solutions Inc.'
    );


    /*
     * Testimonial 2
     */

    $add_textarea(
        'testimonial_2_quote',
        'Testimonial 2 Quote',
        'I highly recommend the WCP team. During recent contract negotiations with Rogers, they demonstrated strong professionalism and expertise, ensuring a fair and efficient outcome. They\'re approachable, responsive, and always willing to help — and their problem-solving ability means they quickly find practical solutions. Overall, a great experience.',
        8
    );

    $add_text(
        'testimonial_2_name',
        'Testimonial 2 Name',
        'Debbie B.'
    );

    $add_text(
        'testimonial_2_role',
        'Testimonial 2 Role / Company',
        'Deals Desk Manager / Sales Operations Specialist, Avaya'
    );


    /*
     * Testimonial 3
     */

    $add_textarea(
        'testimonial_3_quote',
        'Testimonial 3 Quote',
        'I\'ve worked with the WCP team for over 9 years now. They\'ve looked after our corporate plan for our employees at Markham Stouffville Hospital, keeping our staff up to date with current offers and promotions. Very knowledgeable at what they do.',
        7
    );

    $add_text(
        'testimonial_3_name',
        'Testimonial 3 Name',
        'Lee E.'
    );

    $add_text(
        'testimonial_3_role',
        'Testimonial 3 Role / Company',
        'Network Analyst, OVH'
    );


    $add_text(
        'review_link_text',
        'Google Review Link Text',
        '⭐ Had a great experience with us? Leave us a review on Google →'
    );

    $add_url(
        'review_link_url',
        'Google Review URL',
        'https://g.page/r/CX3o5GNSAmziEAE/review'
    );


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
        'FREE BUSINESS BILL REVIEW'
    );

    $add_text(
        'review_heading',
        'Review Heading',
        'Upload your bill. We\'ll do the homework.'
    );

    $add_textarea(
        'review_intro',
        'Review Description',
        'Send us a recent bill and a WCP business specialist will review your current services and available options.'
    );


    $add_text(
        'review_1_title',
        'Benefit 1 Title',
        'Review your current costs'
    );

    $add_textarea(
        'review_1_text',
        'Benefit 1 Description',
        'We\'ll look at what you\'re currently paying and what services you have.'
    );


    $add_text(
        'review_2_title',
        'Benefit 2 Title',
        'Identify opportunities'
    );

    $add_textarea(
        'review_2_text',
        'Benefit 2 Description',
        'We\'ll check available Rogers Business options that may better fit your needs.'
    );


    $add_text(
        'review_3_title',
        'Benefit 3 Title',
        'Talk to a real person'
    );

    $add_textarea(
        'review_3_text',
        'Benefit 3 Description',
        'Your review is handled by a WCP business specialist.'
    );


    $add_text(
        'review_form_heading',
        'Form Heading',
        'Get My Free Bill Review'
    );

    $add_text(
        'review_form_intro',
        'Form Introduction',
        'Tell us a little about your business.'
    );

    $add_text(
        'review_button',
        'Submit Button Text',
        'Get My Free Bill Review'
    );


    /*
    |--------------------------------------------------------------------------
    | REGISTER FIELD GROUP
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key' => 'group_wcp_business_overview',

        'title' => 'Business Overview Content',

        'fields' => $fields,

        'location' => array(

            array(

                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => (string) $business_page->ID,
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
    'wcp_register_business_fields'
);
/*
|--------------------------------------------------------------------------
| ABOUT PAGE - EDITABLE WORDPRESS FIELDS
|--------------------------------------------------------------------------
*/

function wcp_register_about_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $about_page = get_page_by_path('about');

    if (!$about_page) {
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
            'key'   => 'field_about_tab_' . $key,
            'label' => $label,
            'name'  => '',
            'type'  => 'tab',
        );
    };


    $add_text = function ($key, $label, $default = '') use (&$fields) {

        $fields[] = array(
            'key'           => 'field_about_' . $key,
            'label'         => $label,
            'name'          => 'about_' . $key,
            'type'          => 'text',
            'default_value' => $default,
        );
    };


    $add_textarea = function (
        $key,
        $label,
        $default = '',
        $rows = 4
    ) use (&$fields) {

        $fields[] = array(
            'key'           => 'field_about_' . $key,
            'label'         => $label,
            'name'          => 'about_' . $key,
            'type'          => 'textarea',
            'rows'          => $rows,
            'default_value' => $default,
        );
    };


    $add_image = function ($key, $label) use (&$fields) {

        $fields[] = array(
            'key'           => 'field_about_' . $key,
            'label'         => $label,
            'name'          => 'about_' . $key,
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'library'       => 'all',
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
        'Built on relationships, not just transactions'
    );

    $add_textarea(
        'hero_description',
        'Hero Description',
        'A Rogers Authorized Dealer serving businesses across Canada since 1990 — still local, still hands-on, still answering the phone ourselves.'
    );

    $add_image(
        'hero_image',
        'Hero Background Image'
    );


    /*
    |--------------------------------------------------------------------------
    | OUR STORY
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'story',
        'Our Story'
    );

    $add_text(
        'story_heading',
        'Section Heading',
        'Our Story'
    );

    $add_textarea(
        'story_paragraph_1',
        'Story Paragraph 1',
        'Founded in 1990, WCP was built by entrepreneurs willing to take risks to get results.'
    );

    $add_textarea(
        'story_paragraph_2',
        'Story Paragraph 2',
        'Like the businesses we work with, we\'re business owners too — and we\'re just as driven to grow as our clients are. That shared perspective is what shapes how we work: we apply real experience to evaluate not just what a client needs today, but where their business is headed next.',
        6
    );

    $add_textarea(
        'story_paragraph_3',
        'Story Paragraph 3',
        'Over the years, that approach has made us an established local leader with genuine, lasting relationships — built through face-to-face service, in-store and on-site, rather than call centres and hold music. We proudly hold ourselves to the same standards Rogers is known for, and we work hard to earn that trust every day.',
        6
    );

    $add_textarea(
        'story_paragraph_4',
        'Story Paragraph 4',
        'At WCP, we\'re your single point of contact — removing complexity and resolving issues so you can stay focused on running your business. Our team of approximately 40 people helps us extend Rogers\' reach into communities and regions where a purely corporate presence often can\'t.',
        6
    );

    $add_image(
        'story_image',
        'Story Image'
    );


    /*
    |--------------------------------------------------------------------------
    | MISSION
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'mission',
        'Mission'
    );

    $add_text(
        'mission_heading',
        'Mission Heading',
        'Our Mission'
    );

    $add_textarea(
        'mission_text',
        'Mission Text',
        'Total customer satisfaction. That\'s it — that\'s the whole mission. Connect with us today and let us help you get connected. For us, that means listening first, finding the right solution for your business, and being there long after the sale. Our goal is simple: make business connectivity easier.',
        7
    );


    /*
    |--------------------------------------------------------------------------
    | SALES EXCELLENCE
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'award',
        'Sales Excellence'
    );

    $add_text(
        'award_heading',
        'Section Heading',
        'Recognized for Sales Excellence'
    );

    $add_text(
        'award_title',
        'Award Title',
        'Recognized by Rogers for Sales Excellence'
    );

    $add_text(
    'award_subtitle',
    'Award Subtitle',
    'A Consistent Track Record of Outstanding Performance'
);
    $add_textarea(
    'award_text',
    'Award Description',
    'WCP has consistently been recognized by Rogers for strong sales performance and continued excellence. This recognition reflects the trust our customers place in us and our ongoing commitment to providing knowledgeable advice, reliable support, and an exceptional customer experience.',
    7
);

    $add_image(
        'award_image',
        'Award Section Image'
    );


    /*
    |--------------------------------------------------------------------------
    | LIFE AT WCP
    |--------------------------------------------------------------------------
    */

    $add_tab(
        'life',
        'Life at WCP'
    );

    $add_text(
        'life_heading',
        'Section Heading',
        'Life at WCP'
    );

    $add_textarea(
        'life_intro',
        'Section Introduction',
        'Beyond wireless, internet, and phone plans, we care about the relationships behind the business — including with the customers who make it all possible.'
    );

    $add_textarea(
        'life_text',
        'Section Description',
        'Every year, WCP hosts a Scramble Golf Tournament as a thank-you to the customers who do business with us. It\'s a day for our team and our customers to gather, connect, and have fun together — more like family or old friends than a client list.',
        6
    );


    /*
    |--------------------------------------------------------------------------
    | GALLERY IMAGES
    |--------------------------------------------------------------------------
    */

    $add_image(
        'gallery_1',
        'Gallery Image 1'
    );

    $add_image(
        'gallery_2',
        'Gallery Image 2'
    );

    $add_image(
        'gallery_3',
        'Gallery Image 3'
    );

    $add_image(
        'gallery_4',
        'Gallery Image 4'
    );

    $add_image(
        'gallery_5',
        'Gallery Image 5'
    );

    $add_image(
        'gallery_6',
        'Gallery Image 6'
    );


    /*
    |--------------------------------------------------------------------------
    | REGISTER FIELD GROUP
    |--------------------------------------------------------------------------
    */

    acf_add_local_field_group(array(

        'key' => 'group_wcp_about',

        'title' => 'About Page Content',

        'fields' => $fields,

        'location' => array(

            array(

                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => (string) $about_page->ID,
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
    'wcp_register_about_fields'
);
