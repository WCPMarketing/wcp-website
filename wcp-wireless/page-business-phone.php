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
