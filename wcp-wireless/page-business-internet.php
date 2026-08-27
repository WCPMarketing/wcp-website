<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| BUSINESS INTERNET - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$internet_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('internet_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| TEXTAREA LIST HELPER
|--------------------------------------------------------------------------
*/

$internet_list = function ($text) {

    $lines = preg_split(
        '/\r\n|\r|\n/',
        (string) $text
    );

    $lines = array_map(
        'trim',
        $lines
    );

    return array_filter($lines);
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_heading = $internet_field(
    'hero_heading',
    'Internet for all your business needs'
);

$hero_description = $internet_field(
    'hero_description',
    'Reliable, fast internet with predictable pricing and local support — whichever way your business connects.'
);

$hero_button = $internet_field(
    'hero_button',
    'Get My Free Business Review'
);

$hero_image = $internet_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-laptop-cafe.jpg'
);


/*
|--------------------------------------------------------------------------
| TOP FEATURES
|--------------------------------------------------------------------------
*/

$top_features = array(

    array(
        'title' => $internet_field(
            'feature_1_title',
            'Fast internet'
        ),
        'text' => $internet_field(
            'feature_1_text',
            'From everyday to blazing fast, scaling with you as your business grows.'
        ),
    ),

    array(
        'title' => $internet_field(
            'feature_2_title',
            'Reliable connection'
        ),
        'text' => $internet_field(
            'feature_2_text',
            'Keep productivity on track with wireless backup and 24/7 business support.'
        ),
    ),

    array(
        'title' => $internet_field(
            'feature_3_title',
            'Predictable cost'
        ),
        'text' => $internet_field(
            'feature_3_text',
            'Choose from term, monthly, and bundled plans with unlimited usage.'
        ),
    ),

    array(
        'title' => $internet_field(
            'feature_4_title',
            'Advanced security'
        ),
        'text' => $internet_field(
            'feature_4_text',
            'Keep your data safe with automatic, network-level security.'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| SELECTOR
|--------------------------------------------------------------------------
*/

$selector_heading = $internet_field(
    'selector_heading',
    'Which internet is right for my business?'
);

$selector_intro = $internet_field(
    'selector_intro',
    'Select how your business connects and we\'ll show you the plans built for it.'
);

$pricing_disclaimer = $internet_field(
    'pricing_disclaimer',
    'Offers and pricing are subject to change and address availability. Contact WCP for current promotional pricing.'
);


$selector_cards = array(

    array(
        'target' => 'business-internet',
        'title' => $internet_field(
            'selector_1_title',
            'Business Internet'
        ),
        'text' => $internet_field(
            'selector_1_text',
            'Flexible monthly & term plans'
        ),
    ),

    array(
        'target' => 'business-fibre-internet',
        'title' => $internet_field(
            'selector_2_title',
            'Business Fibre'
        ),
        'text' => $internet_field(
            'selector_2_text',
            'Symmetrical speeds, 1 static IP'
        ),
    ),

    array(
        'target' => 'dedicated-fibre',
        'title' => $internet_field(
            'selector_3_title',
            'Dedicated Fibre'
        ),
        'text' => $internet_field(
            'selector_3_text',
            'Fastest, most reliable option with 5 static IPs'
        ),
    ),

    array(
        'target' => '5g-internet',
        'title' => $internet_field(
            'selector_4_title',
            '5G Business Internet'
        ),
        'text' => $internet_field(
            'selector_4_text',
            'No wired connection needed'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| BUSINESS INTERNET
|--------------------------------------------------------------------------
*/

$business_heading = $internet_field(
    'business_heading',
    'Rogers Business Internet'
);

$business_intro = $internet_field(
    'business_intro',
    'Experience reliable internet performance with unlimited usage and 24/7 support.'
);

$business_includes = array(

    $internet_field(
        'business_include_1',
        'Unlimited data usage'
    ),

    $internet_field(
        'business_include_2',
        'Automatic security updates'
    ),

    $internet_field(
        'business_include_3',
        'Advanced WiFi technology'
    ),

);


$business_plans = array(

    1 => array(
        'speed' => $internet_field(
            'business_1_speed',
            '300 Mbps / 30 Mbps'
        ),
        'price' => $internet_field(
            'business_1_price',
            '$64'
        ),
        'suffix' => $internet_field(
            'business_1_suffix',
            '.99/mo'
        ),
        'credit' => $internet_field(
            'business_1_credit',
            '+ $200 bill credit.'
        ),
    ),

    2 => array(
        'speed' => $internet_field(
            'business_2_speed',
            '750 Mbps / 30 Mbps'
        ),
        'price' => $internet_field(
            'business_2_price',
            '$69'
        ),
        'suffix' => $internet_field(
            'business_2_suffix',
            '.99/mo'
        ),
        'credit' => $internet_field(
            'business_2_credit',
            '+ $200 bill credit.'
        ),
    ),

    3 => array(
        'speed' => $internet_field(
            'business_3_speed',
            '1 Gbps / 50 Mbps'
        ),
        'price' => $internet_field(
            'business_3_price',
            '$79'
        ),
        'suffix' => $internet_field(
            'business_3_suffix',
            '.99/mo'
        ),
        'credit' => $internet_field(
            'business_3_credit',
            '+ $200 bill credit.'
        ),
    ),

    4 => array(
        'speed' => $internet_field(
            'business_4_speed',
            '1.5 Gbps / 50 Mbps'
        ),
        'price' => $internet_field(
            'business_4_price',
            '$89'
        ),
        'suffix' => $internet_field(
            'business_4_suffix',
            '.99/mo'
        ),
        'credit' => $internet_field(
            'business_4_credit',
            '+ $600 bill credit.'
        ),
    ),

    5 => array(
        'speed' => $internet_field(
            'business_5_speed',
            '2 Gbps / 50 Mbps'
        ),
        'price' => $internet_field(
            'business_5_price',
            '$99'
        ),
        'suffix' => $internet_field(
            'business_5_suffix',
            '.99/mo'
        ),
        'credit' => $internet_field(
            'business_5_credit',
            '+ $600 bill credit.'
        ),
    ),

);


$business_best_value = $internet_field(
    'business_best_value',
    'Best Value for Most Businesses'
);

$business_contract_note = $internet_field(
    'business_contract_note',
    'Price subject to change per contract terms.'
);


$bundle_heading = $internet_field(
    'bundle_heading',
    'How much can I save on internet with bundles?'
);

$bundles = array(

    $internet_field(
        'bundle_1',
        'Save $10/mo when you bundle internet with Business TV.'
    ),

    $internet_field(
        'bundle_2',
        'Save $15/mo when you bundle internet with Business Phone.'
    ),

    $internet_field(
        'bundle_3',
        'Save an additional $45/mo/line when you bundle internet with an Advantage Mobility plan.'
    ),

);


/*
|--------------------------------------------------------------------------
| BUSINESS FIBRE
|--------------------------------------------------------------------------
*/

$fibre_heading = $internet_field(
    'fibre_heading',
    'Business Fibre Internet'
);

$fibre_intro = $internet_field(
    'fibre_intro',
    'Symmetrical upload and download speeds with 1 static IP — consistent performance for businesses that depend on their connection.'
);

$fibre_includes = array(

    $internet_field(
        'fibre_include_1',
        'Symmetrical upload & download speeds'
    ),

    $internet_field(
        'fibre_include_2',
        '60-month term'
    ),

);


$fibre_plans = array();

$fibre_defaults = array(

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


foreach ($fibre_defaults as $number => $default) {

    $fibre_plans[$number] = array(

        'speed' => $internet_field(
            'fibre_' . $number . '_speed',
            $default['speed']
        ),

        'note' => $internet_field(
            'fibre_' . $number . '_note',
            'Symmetrical, 60-month term'
        ),

        'price' => $internet_field(
            'fibre_' . $number . '_price',
            $default['price']
        ),

        'suffix' => $internet_field(
            'fibre_' . $number . '_suffix',
            '.99/mo'
        ),

    );
}


/*
|--------------------------------------------------------------------------
| DEDICATED FIBRE
|--------------------------------------------------------------------------
*/

$dedicated_heading = $internet_field(
    'dedicated_heading',
    'Dedicated Fibre Internet'
);

$dedicated_intro = $internet_field(
    'dedicated_intro',
    'Experience our fastest, most reliable internet with 5 static IP addresses, IPv4 support, and optional DDoS protection.'
);

$dedicated_includes = array(

    $internet_field(
        'dedicated_include_1',
        'Unlimited usage'
    ),

    $internet_field(
        'dedicated_include_2',
        'Service level guarantees'
    ),

    $internet_field(
        'dedicated_include_3',
        '24/7 technical support'
    ),

    $internet_field(
        'dedicated_include_4',
        'IPv4 support & static IP address'
    ),

);


$dedicated_defaults = array(

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


$dedicated_plans = array();


foreach ($dedicated_defaults as $number => $default) {

    $dedicated_plans[$number] = array(

        'name' => $internet_field(
            'dedicated_' . $number . '_name',
            $default['name']
        ),

        'features' => $internet_field(
            'dedicated_' . $number . '_features',
            $default['features']
        ),

    );
}


/*
|--------------------------------------------------------------------------
| 5G BUSINESS INTERNET
|--------------------------------------------------------------------------
*/

$g5_heading = $internet_field(
    '5g_heading',
    '5G Business Internet'
);

$g5_intro = $internet_field(
    '5g_intro',
    'Built for remote businesses, seasonal stores, and work that moves.'
);


$g5_includes = array(

    $internet_field(
        '5g_include_1',
        'Fast & easy self-install'
    ),

    $internet_field(
        '5g_include_2',
        'Worry-free — powered by Canada\'s best 5G+ network'
    ),

    $internet_field(
        '5g_include_3',
        'No upfront cost, no setup or equipment fees'
    ),

    $internet_field(
        '5g_include_4',
        '24/7 tech support'
    ),

);


$g5_defaults = array(

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


$g5_plans = array();


foreach ($g5_defaults as $number => $default) {

    $g5_plans[$number] = array(

        'name' => $internet_field(
            '5g_' . $number . '_name',
            $default['name']
        ),

        'note' => $internet_field(
            '5g_' . $number . '_note',
            $default['note']
        ),

        'price' => $internet_field(
            '5g_' . $number . '_price',
            $default['price']
        ),

        'suffix' => $internet_field(
            '5g_' . $number . '_suffix',
            $default['suffix']
        ),

        'features' => $internet_field(
            '5g_' . $number . '_features',
            $default['features']
        ),

    );
}


$g5_term_note = $internet_field(
    '5g_term_note',
    'Need more than one device, or have questions? Contact us and we\'ll help you find the right fit.'
);


/*
|--------------------------------------------------------------------------
| BILL REVIEW
|--------------------------------------------------------------------------
*/

$review_eyebrow = $internet_field(
    'review_eyebrow',
    'FREE INTERNET BILL REVIEW'
);

$review_heading = $internet_field(
    'review_heading',
    'Upload your bill. We\'ll do the homework.'
);

$review_intro = $internet_field(
    'review_intro',
    'Send us a recent internet bill and a WCP business specialist will review your current service and available options.'
);


$review_benefits = array(

    array(
        'title' => $internet_field(
            'review_1_title',
            'Review your current costs'
        ),

        'text' => $internet_field(
            'review_1_text',
            'We\'ll look at what you\'re currently paying and what speeds you have.'
        ),
    ),

    array(
        'title' => $internet_field(
            'review_2_title',
            'Identify opportunities'
        ),

        'text' => $internet_field(
            'review_2_text',
            'We\'ll check available Rogers Business internet options that may better fit your needs.'
        ),
    ),

    array(
        'title' => $internet_field(
            'review_3_title',
            'Talk to a real person'
        ),

        'text' => $internet_field(
            'review_3_text',
            'Your review is handled by a WCP business specialist.'
        ),
    ),

);


$review_button = $internet_field(
    'review_button',
    'Get My Free Bill Review'
);

?>



<!-- =========================================================
     HERO
========================================================= -->

<section
    class="hero hero-photo"
    style="--hero-img: url('<?php echo esc_url($hero_image); ?>');"
>

    <div class="container">

        <h1>
            <?php echo esc_html($hero_heading); ?>
        </h1>

        <p>
            <?php echo esc_html($hero_description); ?>
        </p>

        <div class="actions">

            <a
                class="btn btn-primary"
                href="<?php echo esc_url(home_url('/contact/')); ?>"
            >
                <?php echo esc_html($hero_button); ?>
            </a>

            <a
                class="link-inline"
                href="tel:+18338441977"
            >
                Or call 1-833-844-1977
            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     FEATURES + INTERNET SELECTOR
========================================================= -->

<section class="section">

    <div class="container">

        <div class="feature-strip reveal">


            <?php foreach ($top_features as $index => $feature) : ?>

                <div>

                    <div class="feature-icon">

                        <?php if ($index === 0) : ?>

                            <svg
                                fill="none"
                                height="26"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="26"
                            >
                                <path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z"></path>
                            </svg>

                        <?php elseif ($index === 1) : ?>

                            <svg
                                fill="none"
                                height="26"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="26"
                            >
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M8 12l3 3 5-6"></path>
                            </svg>

                        <?php elseif ($index === 2) : ?>

                            <svg
                                fill="none"
                                height="26"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="26"
                            >
                                <path d="M3 3v18h18"></path>
                                <path d="M7 15l4-5 3 3 5-7"></path>
                            </svg>

                        <?php else : ?>

                            <svg
                                fill="none"
                                height="26"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="26"
                            >
                                <path d="M12 2l8 3v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V5l8-3z"></path>
                            </svg>

                        <?php endif; ?>

                    </div>

                    <h4>
                        <?php echo esc_html($feature['title']); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($feature['text']); ?>
                    </p>

                </div>

            <?php endforeach; ?>


        </div>



        <h2
            style="
                text-align:center;
                margin-top:48px;
            "
        >
            <?php echo esc_html($selector_heading); ?>
        </h2>


        <p
            style="
                text-align:center;
                font-size:18px;
                color:var(--text-muted);
                max-width:560px;
                margin:8px auto 0;
            "
        >
            <?php echo esc_html($selector_intro); ?>
        </p>



        <div class="line-gate">

            <div class="line-gate-options cols-4">


                <?php foreach ($selector_cards as $card) : ?>

                    <button
                        class="plan-tab-btn line-gate-card"
                        data-target="<?php echo esc_attr($card['target']); ?>"
                    >

                        <span
                            class="line-gate-label"
                            style="font-size:19px;"
                        >
                            <?php echo esc_html($card['title']); ?>
                        </span>

                        <span class="line-gate-sublabel">
                            <?php echo esc_html($card['text']); ?>
                        </span>

                    </button>

                <?php endforeach; ?>


            </div>

        </div>


        <p
            style="
                text-align:center;
                font-size:12px;
                color:var(--text-muted);
                margin:16px 0 0;
            "
        >
            <?php echo esc_html($pricing_disclaimer); ?>
        </p>



        <!-- =====================================================
             BUSINESS INTERNET
        ====================================================== -->

        <div
            class="plan-tab-panel"
            id="business-internet"
        >

            <h2>
                <?php echo esc_html($business_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($business_intro); ?>
            </p>


            <ul class="include-strip">

                <?php foreach ($business_includes as $item) : ?>

                    <li>
                        ✓ <?php echo esc_html($item); ?>
                    </li>

                <?php endforeach; ?>

            </ul>


            <div class="plan-grid">


                <?php foreach ($business_plans as $number => $plan) : ?>

                    <div
                        class="plan-card<?php echo ($number === 3) ? ' best-value' : ''; ?>"
                    >

                        <?php if ($number === 3 && $business_best_value) : ?>

                            <span class="badge-best-value">
                                <?php echo esc_html($business_best_value); ?>
                            </span>

                        <?php endif; ?>


                        <p class="plan-tier-label">
                            Business Internet
                        </p>


                        <h4>
                            <?php echo esc_html($plan['speed']); ?>
                        </h4>


                        <p class="price">

                            <?php echo esc_html($plan['price']); ?>

                            <span>
                                <?php echo esc_html($plan['suffix']); ?>
                            </span>

                        </p>


                        <p
                            style="
                                font-size:12px;
                                color:var(--text-muted);
                                margin:-10px 0 14px;
                            "
                        >

                            <strong
                                style="
                                    color:var(--red);
                                    font-weight:700;
                                "
                            >
                                <?php echo esc_html($plan['credit']); ?>
                            </strong>

                            <?php echo esc_html($business_contract_note); ?>

                        </p>


                        <div class="plan-cta-group">

                            <a
                                class="btn btn-primary"
                                href="<?php echo esc_url(home_url('/contact/')); ?>"
                                style="
                                    width:100%;
                                    text-align:center;
                                    display:block;
                                "
                            >
                                Contact Sales
                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>


            </div>



            <h3
                style="
                    text-align:center;
                    margin-top:48px;
                "
            >
                <?php echo esc_html($bundle_heading); ?>
            </h3>


            <div class="bundle-grid">

                <?php foreach ($bundles as $index => $bundle) : ?>

                    <div
                        class="bundle-card b<?php echo esc_attr($index + 1); ?>"
                    >
                        <?php echo esc_html($bundle); ?>
                    </div>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- =====================================================
             BUSINESS FIBRE
        ====================================================== -->

        <div
            class="plan-tab-panel"
            id="business-fibre-internet"
        >

            <h2>
                <?php echo esc_html($fibre_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($fibre_intro); ?>
            </p>


            <ul class="include-strip">

                <?php foreach ($fibre_includes as $item) : ?>

                    <li>
                        ✓ <?php echo esc_html($item); ?>
                    </li>

                <?php endforeach; ?>

            </ul>


            <div class="plan-grid">

                <?php foreach ($fibre_plans as $plan) : ?>

                    <div class="plan-card">

                        <p class="plan-tier-label">
                            Business Fibre Internet
                        </p>

                        <h4>
                            <?php echo esc_html($plan['speed']); ?>
                        </h4>

                        <p class="device-note">
                            <?php echo esc_html($plan['note']); ?>
                        </p>

                        <p class="price">

                            <?php echo esc_html($plan['price']); ?>

                            <span>
                                <?php echo esc_html($plan['suffix']); ?>
                            </span>

                        </p>


                        <div class="plan-cta-group">

                            <a
                                class="btn btn-primary"
                                href="<?php echo esc_url(home_url('/contact/')); ?>"
                                style="
                                    width:100%;
                                    text-align:center;
                                    display:block;
                                "
                            >
                                Contact Sales
                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- =====================================================
             DEDICATED FIBRE
        ====================================================== -->

        <div
            class="plan-tab-panel"
            id="dedicated-fibre"
        >

            <h2>
                <?php echo esc_html($dedicated_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($dedicated_intro); ?>
            </p>


            <ul class="include-strip">

                <?php foreach ($dedicated_includes as $item) : ?>

                    <li>
                        ✓ <?php echo esc_html($item); ?>
                    </li>

                <?php endforeach; ?>

            </ul>


            <div class="plan-grid">


                <?php foreach ($dedicated_plans as $plan) : ?>

                    <div class="plan-card">

                        <p class="plan-tier-label">
                            Dedicated Internet
                        </p>


                        <h4>
                            <?php echo esc_html($plan['name']); ?>
                        </h4>


                        <ul class="benefits">

                            <?php foreach ($internet_list($plan['features']) as $feature) : ?>

                                <li class="benefit-row">

                                    <span class="benefit-icon">

                                        <svg
                                            fill="none"
                                            height="15"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                            width="15"
                                        >
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="9"
                                            ></circle>

                                            <path d="M8 12l3 3 5-6"></path>
                                        </svg>

                                    </span>

                                    <span>
                                        <?php echo esc_html($feature); ?>
                                    </span>

                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <div class="plan-cta-group">

                            <a
                                class="btn btn-primary"
                                href="<?php echo esc_url(home_url('/contact/')); ?>"
                                style="
                                    width:100%;
                                    text-align:center;
                                    display:block;
                                    margin-top:14px;
                                "
                            >
                                Contact Sales
                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>


            </div>

        </div>



        <!-- =====================================================
             5G BUSINESS INTERNET
        ====================================================== -->

        <div
            class="plan-tab-panel"
            id="5g-internet"
        >

            <h2>
                <?php echo esc_html($g5_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($g5_intro); ?>
            </p>


            <ul class="include-strip">

                <?php foreach ($g5_includes as $item) : ?>

                    <li>
                        ✓ <?php echo esc_html($item); ?>
                    </li>

                <?php endforeach; ?>

            </ul>


            <div class="plan-grid">


                <?php foreach ($g5_plans as $plan) : ?>

                    <div class="plan-card">

                        <p class="plan-tier-label">
                            5G Business Internet
                        </p>

                        <h4>
                            <?php echo esc_html($plan['name']); ?>
                        </h4>

                        <p class="device-note">
                            <?php echo esc_html($plan['note']); ?>
                        </p>


                        <p class="price">

                            <?php echo esc_html($plan['price']); ?>

                            <span>
                                <?php echo esc_html($plan['suffix']); ?>
                            </span>

                        </p>


                        <ul class="benefits">

                            <?php foreach ($internet_list($plan['features']) as $feature) : ?>

                                <li class="benefit-row">

                                    <span class="benefit-icon">

                                        <svg
                                            fill="none"
                                            height="15"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                            width="15"
                                        >
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="9"
                                            ></circle>

                                            <path d="M8 12l3 3 5-6"></path>
                                        </svg>

                                    </span>

                                    <span>
                                        <?php echo esc_html($feature); ?>
                                    </span>

                                </li>

                            <?php endforeach; ?>

                        </ul>


                        <div class="plan-cta-group">

                            <a
                                class="btn btn-primary"
                                href="<?php echo esc_url(home_url('/contact/')); ?>"
                                style="
                                    width:100%;
                                    text-align:center;
                                    display:block;
                                "
                            >
                                Check Availability
                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>


            </div>


            <p class="term-note">
                <?php echo esc_html($g5_term_note); ?>
            </p>

        </div>


    </div>

</section>



<!-- =========================================================
     BILL REVIEW
========================================================= -->

<section
    id="contact"
    class="section form-section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <div class="review-form-layout">


            <!-- Review Intro -->

            <div class="review-form-intro">

                <span class="section-eyebrow">
                    <?php echo esc_html($review_eyebrow); ?>
                </span>


                <h2>
                    <?php echo esc_html($review_heading); ?>
                </h2>


                <p class="lede">
                    <?php echo esc_html($review_intro); ?>
                </p>


                <div class="review-benefits">


                    <?php foreach ($review_benefits as $benefit) : ?>

                        <div class="review-benefit">

                            <span>
                                ✓
                            </span>

                            <div>

                                <strong>
                                    <?php echo esc_html($benefit['title']); ?>
                                </strong>

                                <p>
                                    <?php echo esc_html($benefit['text']); ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>


                </div>

            </div>



            <!-- Bill Review Form -->

            <form
                class="lead-form bill-review-form"
                action="https://formspree.io/f/xvkppvjl"
                method="POST"
                enctype="multipart/form-data"
            >

                <div class="form-heading">

                    <h3>
                        <?php echo esc_html($review_button); ?>
                    </h3>

                    <p>
                        Tell us a little about your business.
                    </p>

                </div>



                <div class="form-row">

                    <input
                        type="text"
                        name="name"
                        placeholder="Your name"
                        autocomplete="name"
                        required
                    >

                    <input
                        type="text"
                        name="business_name"
                        placeholder="Business name"
                        autocomplete="organization"
                        required
                    >

                </div>



                <div class="form-row">

                    <input
                        type="tel"
                        name="phone"
                        placeholder="Phone number"
                        autocomplete="tel"
                        required
                    >

                    <input
                        type="email"
                        name="email"
                        placeholder="Email address"
                        autocomplete="email"
                        required
                    >

                </div>



                <select
                    name="interest"
                    required
                >

                    <option
                        value=""
                        disabled
                        selected
                    >
                        What can we help you with?
                    </option>

                    <option value="Current bill review">
                        Review my current internet bill
                    </option>

                    <option value="New business internet">
                        New business internet plans
                    </option>

                    <option value="Switching provider">
                        Switching from another provider
                    </option>

                    <option value="Not sure">
                        I'm not sure yet
                    </option>

                </select>



                <div class="bill-upload">

                    <label for="bill-upload">

                        <span class="upload-icon">
                            ↑
                        </span>

                        <span class="upload-copy">

                            <strong>
                                Upload your current bill
                            </strong>

                            <small>
                                Optional — PDF, JPG or PNG
                            </small>

                        </span>

                    </label>


                    <input
                        type="file"
                        id="bill-upload"
                        name="current_bill"
                        accept=".pdf,.jpg,.jpeg,.png,application/pdf,image/jpeg,image/png"
                    >

                </div>



                <textarea
                    name="message"
                    rows="4"
                    placeholder="Anything else you'd like us to know? (optional)"
                ></textarea>



                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    <?php echo esc_html($review_button); ?>
                </button>



                <p class="form-disclaimer">

                    🔒 Your bill is kept private and used only to review your
                    business services. No obligation. Prefer to talk?

                    <a href="tel:+18338441977">
                        Call 1-833-844-1977
                    </a>

                </p>


            </form>


        </div>

    </div>

</section>


<?php get_footer(); ?>
