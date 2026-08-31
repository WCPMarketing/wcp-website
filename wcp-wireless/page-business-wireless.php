<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| BUSINESS WIRELESS - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$wireless_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('wireless_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_heading = $wireless_field(
    'hero_heading',
    'Mobile plans made for your business'
);

$hero_description = $wireless_field(
    'hero_description',
    'Help your team work together seamlessly — with plans backed by local, dealer-direct support instead of a call centre.'
);

$hero_button = $wireless_field(
    'hero_button',
    'Get My Free Business Review'
);

$hero_image = $wireless_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-professional-call.jpg'
);


/*
|--------------------------------------------------------------------------
| PLAN SELECTOR
|--------------------------------------------------------------------------
*/

$selector_heading = $wireless_field(
    'selector_heading',
    'How many lines does your business need?'
);

$selector_intro = $wireless_field(
    'selector_intro',
    'Select your team size and we\'ll show you the plans built for it.'
);

$pricing_disclaimer = $wireless_field(
    'pricing_disclaimer',
    'Offers and pricing are subject to change and address availability. Contact WCP for current promotional pricing.'
);


/*
|--------------------------------------------------------------------------
| 1–4 LINES
|--------------------------------------------------------------------------
*/

$small_intro = $wireless_field(
    'small_intro',
    'Plans built for small teams that want simple, predictable pricing.'
);

$small_include_1 = $wireless_field(
    'small_include_1',
    'All plans include Rogers Satellite'
);

$small_include_2 = $wireless_field(
    'small_include_2',
    'Prices include $5/mo Auto Pay discount'
);


$small_1_badge = $wireless_field(
    'small_1_badge',
    'Best Value for Most Businesses'
);

$small_1_name = $wireless_field(
    'small_1_name',
    '60GB Canada-Wide'
);

$small_1_note = $wireless_field(
    'small_1_note',
    'Non-shared data'
);

$small_1_price = $wireless_field(
    'small_1_price',
    '$65'
);

$small_1_price_suffix = $wireless_field(
    'small_1_price_suffix',
    '/mo per line'
);


$small_2_name = $wireless_field(
    'small_2_name',
    '100GB Canada-Wide'
);

$small_2_note = $wireless_field(
    'small_2_note',
    'Non-shared data'
);

$small_2_price = $wireless_field(
    'small_2_price',
    '$70'
);

$small_2_price_suffix = $wireless_field(
    'small_2_price_suffix',
    '/mo per line'
);


$small_3_name = $wireless_field(
    'small_3_name',
    'Unlimited Canada-Wide'
);

$small_3_note = $wireless_field(
    'small_3_note',
    'Non-shared data'
);

$small_3_price = $wireless_field(
    'small_3_price',
    '$85'
);

$small_3_price_suffix = $wireless_field(
    'small_3_price_suffix',
    '/mo per line'
);


$small_4_name = $wireless_field(
    'small_4_name',
    'Unlimited Canada + 64 Countries'
);

$small_4_note = $wireless_field(
    'small_4_note',
    'Non-shared data'
);

$small_4_price = $wireless_field(
    'small_4_price',
    '$100'
);

$small_4_price_suffix = $wireless_field(
    'small_4_price_suffix',
    '/mo per line'
);


/*
|--------------------------------------------------------------------------
| 5–9 LINE CORPORATE PLANS
|--------------------------------------------------------------------------
*/

$corp5_intro = $wireless_field(
    'corp5_intro',
    'Pooled data plans for growing teams.'
);

$corp5_plans = array(

    '10' => array(
        'name' => $wireless_field('corp5_10_name', '10GB Pooled'),
        'price' => $wireless_field('corp5_10_price', '$38'),
        'credit' => $wireless_field('corp5_10_credit', '+ $200 credit.'),
    ),

    '25' => array(
        'name' => $wireless_field('corp5_25_name', '25GB Pooled'),
        'price' => $wireless_field('corp5_25_price', '$43'),
        'credit' => $wireless_field('corp5_25_credit', '+ $200 credit.'),
    ),

    '50' => array(
        'name' => $wireless_field('corp5_50_name', '50GB Pooled'),
        'price' => $wireless_field('corp5_50_price', '$53'),
        'credit' => $wireless_field('corp5_50_credit', '+ $200 credit.'),
    ),

    '100' => array(
        'name' => $wireless_field('corp5_100_name', '100GB Pooled'),
        'price' => $wireless_field('corp5_100_price', '$63'),
        'credit' => $wireless_field('corp5_100_credit', '+ $200 credit.'),
    ),

    '250' => array(
        'name' => $wireless_field('corp5_250_name', '250GB Pooled'),
        'price' => $wireless_field('corp5_250_price', '$80'),
        'credit' => $wireless_field('corp5_250_credit', '+ $400 credit.'),
    ),

);


/*
|--------------------------------------------------------------------------
| 10+ LINE CORPORATE PLANS
|--------------------------------------------------------------------------
*/

$corp10_intro = $wireless_field(
    'corp10_intro',
    'Pooled data plans with dedicated account support for larger teams.'
);

$corp10_plans = array(

    '10' => array(
        'name' => $wireless_field('corp10_10_name', '10GB Pooled'),
        'price' => $wireless_field('corp10_10_price', '$30'),
        'credit' => $wireless_field('corp10_10_credit', '+ $375 credit per line.'),
    ),

    '25' => array(
        'name' => $wireless_field('corp10_25_name', '25GB Pooled'),
        'price' => $wireless_field('corp10_25_price', '$35'),
        'credit' => $wireless_field('corp10_25_credit', '+ $400 credit per line.'),
    ),

    '50' => array(
        'name' => $wireless_field('corp10_50_name', '50GB Pooled'),
        'price' => $wireless_field('corp10_50_price', '$45'),
        'credit' => $wireless_field('corp10_50_credit', '+ $400 credit per line.'),
    ),

    '100' => array(
        'name' => $wireless_field('corp10_100_name', '100GB Pooled'),
        'price' => $wireless_field('corp10_100_price', '$55'),
        'credit' => $wireless_field('corp10_100_credit', '+ $500 credit per line.'),
    ),

    '250' => array(
        'name' => $wireless_field('corp10_250_name', '250GB Pooled'),
        'price' => $wireless_field('corp10_250_price', '$80'),
        'credit' => $wireless_field('corp10_250_credit', '+ $500 credit per line.'),
    ),

);


/*
|--------------------------------------------------------------------------
| CONNECTIVITY FEATURES
|--------------------------------------------------------------------------
*/

$features_heading = $wireless_field(
    'features_heading',
    'Everything Your Business Needs to Stay Connected'
);

$feature_1_title = $wireless_field(
    'feature_1_title',
    '5G+'
);

$feature_1_text = $wireless_field(
    'feature_1_text',
    'Fast, reliable 5G+ connectivity on Canada\'s best 5G+ network.'
);

$feature_2_title = $wireless_field(
    'feature_2_title',
    'Flexible calling & data plans'
);

$feature_2_text = $wireless_field(
    'feature_2_text',
    'Flexible data plans without overage charges.'
);

$feature_3_title = $wireless_field(
    'feature_3_title',
    'Save on mobility'
);

$feature_3_text = $wireless_field(
    'feature_3_text',
    'Get the latest devices with financing and trade-in options.'
);

$feature_4_title = $wireless_field(
    'feature_4_title',
    'Bundle more, save more'
);

$feature_4_text = $wireless_field(
    'feature_4_text',
    'Save more when you add business internet to your plan.'
);


/*
|--------------------------------------------------------------------------
| ADD-ONS
|--------------------------------------------------------------------------
*/

$addons_heading = $wireless_field(
    'addons_heading',
    'Business add-ons'
);

$addons = array(

    array(
        'title' => $wireless_field(
            'addon_1_title',
            'Business Collaboration'
        ),
        'text' => $wireless_field(
            'addon_1_text',
            'Boost your team\'s productivity with tools like Microsoft 365 and Teams Phone.'
        ),
    ),

    array(
        'title' => $wireless_field(
            'addon_2_title',
            'Mobility Management'
        ),
        'text' => $wireless_field(
            'addon_2_text',
            'Improve productivity and data security across your team\'s mobile devices.'
        ),
    ),

    array(
        'title' => $wireless_field(
            'addon_3_title',
            'Expense Management'
        ),
        'text' => $wireless_field(
            'addon_3_text',
            'Manage and control the monthly costs of your team\'s mobile services.'
        ),
    ),

    array(
        'title' => $wireless_field(
            'addon_4_title',
            'Premium Device Protection'
        ),
        'text' => $wireless_field(
            'addon_4_text',
            'Accidents happen — get peace of mind with device protection and screen repair coverage.'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| BILL REVIEW
|--------------------------------------------------------------------------
*/

$review_eyebrow = $wireless_field(
    'review_eyebrow',
    'FREE WIRELESS BILL REVIEW'
);

$review_heading = $wireless_field(
    'review_heading',
    'Upload your bill. We\'ll do the homework.'
);

$review_intro = $wireless_field(
    'review_intro',
    'Send us a recent wireless bill and a WCP business specialist will review your current services and available options.'
);

$review_button = $wireless_field(
    'review_button',
    'Get My Free Bill Review'
);


/*
|--------------------------------------------------------------------------
| REUSABLE BENEFIT ICONS
|--------------------------------------------------------------------------
*/

$icons = array(

    'phone' =>
        '<svg fill="none" height="15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="15"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.5 2.1L8 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2z"></path></svg>',

    'message' =>
        '<svg fill="none" height="15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="15"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>',

    'plane' =>
        '<svg fill="none" height="15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="15"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9 0-1.2.3l-.6.6c-.4.4-.3 1 .2 1.3L9 12l-2 2H4l-1.5 1.5 3 1 1 3L8 18v-3l2-2 3.6 5.8c.3.5.9.6 1.3.2l.6-.6c.3-.3.4-.7.3-1.2z"></path></svg>',

    'globe' =>
        '<svg fill="none" height="15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="15"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3a15 15 0 0 1 0 18 15 15 0 0 1 0-18z"></path></svg>',

);


$render_benefit = function ($icon, $text) use ($icons) {

    ?>
    <li class="benefit-row">

        <span class="benefit-icon">
            <?php echo $icons[$icon]; ?>
        </span>

        <span>
            <?php echo esc_html($text); ?>
        </span>

    </li>
    <?php
};


/*
|--------------------------------------------------------------------------
| COUNTRY LISTS
|--------------------------------------------------------------------------
*/

$countries_27 =
    'Argentina, Australia, Bangladesh, Brazil, China, Colombia, Costa Rica, France, Germany, Hong Kong, India, Ireland, Italy, Japan, Malaysia, Mexico, Netherlands, Nigeria, Pakistan, Peru, Philippines, Poland, Singapore, South Korea, Sri Lanka, Taiwan, United Kingdom';

$countries_64 =
    'Argentina, Aruba, Australia, Austria, Bahamas, Barbados, Belgium, Bonaire, Brazil, China, Colombia, Costa Rica, Croatia, Cuba, Curaçao, Czech Republic (Czechia), Denmark, Dominican Republic, Egypt, France, Germany, Great Britain (United Kingdom), Greece, Guadeloupe, Hong Kong, Hungary, Iceland, India, Indonesia, Ireland, Israel, Italy, Jamaica, Japan, Mexico, Morocco, Netherlands, New Zealand, Northern Ireland (United Kingdom), Pakistan, Panama, Philippines, Poland, Portugal, Qatar, Saudi Arabia, Scotland (United Kingdom), Singapore, Sint Maarten, South Korea, Spain, Sri Lanka, Sweden, Switzerland, Taiwan, Thailand, Trinidad, Turkey, Ukraine, United Arab Emirates, USA, Vatican City, Vietnam, Wales (United Kingdom)';

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
     PLAN SELECTOR
========================================================= -->

<section
    class="section"
    style="padding-bottom:64px;"
>

    <div class="container">

        <h2 style="text-align:center;">
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

            <div class="line-gate-options">


                <button
                    class="plan-tab-btn line-gate-card"
                    data-target="small-business"
                >

                    <span class="line-gate-range">
                        1–4
                    </span>

                    <span class="line-gate-unit">
                        Lines
                    </span>

                    <span class="line-gate-label">
                        Small Business
                    </span>

                    <span class="line-gate-sublabel">
                        Up to 20 lines - Simple pricing
                    </span>

                </button>



                <button
                    class="plan-tab-btn line-gate-card"
                    data-target="corporate-5"
                >

                    <span class="line-gate-range">
                        5–9
                    </span>

                    <span class="line-gate-unit">
                        Lines
                    </span>

                    <span class="line-gate-label">
                        Corporate
                    </span>

                    <span class="line-gate-sublabel">
                        Pooled data for growing teams
                    </span>

                </button>



                <button
                    class="plan-tab-btn line-gate-card"
                    data-target="corporate-10"
                >

                    <span class="line-gate-range">
                        10+
                    </span>

                    <span class="line-gate-unit">
                        Lines
                    </span>

                    <span class="line-gate-label">
                        Corporate Volume Pricing
                    </span>

                    <span class="line-gate-sublabel">
                        Dedicated account support
                    </span>

                </button>


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
             1–4 LINES
        ====================================================== -->

        <div
            class="plan-tab-panel"
            id="small-business"
        >

            <p class="lede">
                <?php echo esc_html($small_intro); ?>
            </p>

            <ul class="include-strip">

                <li>
                    ✓ <?php echo esc_html($small_include_1); ?>
                </li>

                <li>
                    ✓ <?php echo esc_html($small_include_2); ?>
                </li>

            </ul>


            <div class="plan-grid">


                <!-- Plan 1 -->

                <div class="plan-card best-value">

                    <?php if ($small_1_badge) : ?>

                        <span class="badge-best-value">
                            <?php echo esc_html($small_1_badge); ?>
                        </span>

                    <?php endif; ?>

                    <h4>
                        <?php echo esc_html($small_1_name); ?>
                    </h4>

                    <p class="device-note">
                        <?php echo esc_html($small_1_note); ?>
                    </p>

                    <p class="price">

                        <?php echo esc_html($small_1_price); ?>

                        <span>
                            <?php echo esc_html($small_1_price_suffix); ?>
                        </span>

                    </p>


                    <ul class="benefits">

                        <?php
                        $render_benefit(
                            'phone',
                            'Canada-Wide Talk, Text & Data'
                        );

                        $render_benefit(
                            'message',
                            'International Messaging'
                        );
                        ?>

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
                            Get This Plan
                        </a>

                    </div>

                </div>



                <!-- Plan 2 -->

                <div class="plan-card">

                    <h4>
                        <?php echo esc_html($small_2_name); ?>
                    </h4>

                    <p class="device-note">
                        <?php echo esc_html($small_2_note); ?>
                    </p>

                    <p class="price">

                        <?php echo esc_html($small_2_price); ?>

                        <span>
                            <?php echo esc_html($small_2_price_suffix); ?>
                        </span>

                    </p>


                    <ul class="benefits">

                        <?php
                        $render_benefit(
                            'phone',
                            'Canada-Wide Talk, Text & Data'
                        );

                        $render_benefit(
                            'message',
                            'International Messaging'
                        );

                        $render_benefit(
                            'plane',
                            'USA Roaming — 24 months'
                        );
                        ?>

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
                            Get This Plan
                        </a>

                    </div>

                </div>



                <!-- Plan 3 -->

                <div class="plan-card">

                    <h4>
                        <?php echo esc_html($small_3_name); ?>
                    </h4>

                    <p class="device-note">
                        <?php echo esc_html($small_3_note); ?>
                    </p>

                    <p class="price">

                        <?php echo esc_html($small_3_price); ?>

                        <span>
                            <?php echo esc_html($small_3_price_suffix); ?>
                        </span>

                    </p>


                    <ul class="benefits">

                        <?php
                        $render_benefit(
                            'phone',
                            'Canada-Wide Talk, Text & Data'
                        );

                        $render_benefit(
                            'message',
                            'International Messaging'
                        );

                        $render_benefit(
                            'plane',
                            'USA, Mexico & Caribbean Roaming — 24 months'
                        );

                        $render_benefit(
                            'globe',
                            'International Long Distance — 27 countries'
                        );
                        ?>

                    </ul>


                    <ul class="extras">
                        <li>
                            25% off Roam Like Home &amp; roaming travel passes
                        </li>
                    </ul>


                    <details class="country-toggle">

                        <summary>
                            View included countries
                        </summary>

                        <div class="country-list">
                            <?php echo esc_html($countries_27); ?>
                        </div>

                    </details>


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
                            Get This Plan
                        </a>

                    </div>

                </div>



                <!-- Plan 4 -->

                <div class="plan-card">

                    <h4>
                        <?php echo esc_html($small_4_name); ?>
                    </h4>

                    <p class="device-note">
                        <?php echo esc_html($small_4_note); ?>
                    </p>

                    <p class="price">

                        <?php echo esc_html($small_4_price); ?>

                        <span>
                            <?php echo esc_html($small_4_price_suffix); ?>
                        </span>

                    </p>


                    <ul class="benefits">

                        <?php
                        $render_benefit(
                            'phone',
                            'Canada-Wide Talk, Text & Data — includes 64 countries'
                        );

                        $render_benefit(
                            'message',
                            'International Messaging'
                        );

                        $render_benefit(
                            'globe',
                            'International Long Distance — 27 countries'
                        );
                        ?>

                    </ul>


                    <ul class="extras">

                        <li>
                            5-year price guarantee
                        </li>

                        <li>
                            50% off Roam Like Home &amp; roaming travel passes
                        </li>

                        <li>
                            24-month smart connection
                        </li>

                    </ul>


                    <details class="country-toggle">

                        <summary>
                            View included countries (64)
                        </summary>

                        <div class="country-list">
                            <?php echo esc_html($countries_64); ?>
                        </div>

                    </details>


                    <details
                        class="country-toggle"
                        style="margin-top:6px;"
                    >

                        <summary>
                            View included countries (27, unlimited minutes)
                        </summary>

                        <div class="country-list">
                            <?php echo esc_html($countries_27); ?>
                        </div>

                    </details>


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
                            Get This Plan
                        </a>

                    </div>

                </div>


            </div>

        </div>



        <!-- =====================================================
             5–9 LINES
        ====================================================== -->

        <div
            class="plan-tab-panel"
            id="corporate-5"
        >

            <p class="lede">
                <?php echo esc_html($corp5_intro); ?>
            </p>


            <ul class="include-strip">

                <li>
                    ✓ Unlimited calling to Canada &amp; USA
                </li>

                <li>
                    ✓ Unlimited messaging from Canada to Canada, USA &amp; international
                </li>

            </ul>


            <div class="plan-grid">


                <?php foreach ($corp5_plans as $size => $plan) : ?>

                    <?php

                    $popular = ($size === '25');

                    ?>

                    <div class="plan-card<?php echo $popular ? ' popular' : ''; ?>">

                        <?php if ($popular) : ?>
                            <span class="badge">
                                Popular
                            </span>
                        <?php endif; ?>


                        <h4>
                            <?php echo esc_html($plan['name']); ?>
                        </h4>


                        <p class="device-note">
                            Shared across your team
                        </p>


                        <p class="price">

                            <?php echo esc_html($plan['price']); ?>

                            <span>
                                /mo per line
                            </span>

                        </p>


                        <p
                            style="
                                font-size:12px;
                                color:var(--text-muted);
                                margin:-10px 0 14px;
                            "
                        >
                            <strong style="color:var(--red);">
                                <?php echo esc_html($plan['credit']); ?>
                            </strong>
                        </p>


                        <ul class="benefits">

                            <?php if ($size === '10') : ?>

                                <?php
                                $render_benefit(
                                    'phone',
                                    'Canada-Wide Talk & Text'
                                );
                                ?>


                            <?php elseif ($size === '25') : ?>

                                <?php
                                $render_benefit(
                                    'plane',
                                    'Canada + USA Roaming'
                                );

                                $render_benefit(
                                    'globe',
                                    'International Long Distance — 27 countries'
                                );
                                ?>


                            <?php elseif ($size === '50' || $size === '100') : ?>

                                <?php
                                $render_benefit(
                                    'plane',
                                    'Canada + USA + Mexico Roaming'
                                );

                                $render_benefit(
                                    'globe',
                                    'International Long Distance — 27 countries'
                                );
                                ?>


                            <?php else : ?>

                                <?php
                                $render_benefit(
                                    'plane',
                                    'Canada + 64 Countries Roaming'
                                );

                                $render_benefit(
                                    'globe',
                                    'International Long Distance — 27 countries'
                                );
                                ?>

                            <?php endif; ?>

                        </ul>


                        <?php if ($size === '50' || $size === '100' || $size === '250') : ?>

                            <ul class="extras">

                                <li>
                                    25% off Roam Like Home (not travel passes)
                                </li>

                            </ul>

                        <?php endif; ?>


                        <?php if ($size === '25' || $size === '50' || $size === '100') : ?>

                            <details class="country-toggle">

                                <summary>
                                    View included countries
                                </summary>

                                <div class="country-list">
                                    <?php echo esc_html($countries_27); ?>
                                </div>

                            </details>

                        <?php elseif ($size === '250') : ?>

                            <details class="country-toggle">

                                <summary>
                                    View included countries (64)
                                </summary>

                                <div class="country-list">
                                    <?php echo esc_html($countries_64); ?>
                                </div>

                            </details>


                            <details
                                class="country-toggle"
                                style="margin-top:6px;"
                            >

                                <summary>
                                    View included countries (27, long distance)
                                </summary>

                                <div class="country-list">
                                    <?php echo esc_html($countries_27); ?>
                                </div>

                            </details>

                        <?php endif; ?>


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
             10+ LINES
        ====================================================== -->

        <div
            class="plan-tab-panel"
            id="corporate-10"
        >

            <p class="lede">
                <?php echo esc_html($corp10_intro); ?>
            </p>


            <ul class="include-strip">

                <li>
                    ✓ Unlimited calling to Canada &amp; USA
                </li>

                <li>
                    ✓ Unlimited messaging from Canada to Canada, USA &amp; international
                </li>

            </ul>


            <div class="plan-grid">


                <?php foreach ($corp10_plans as $size => $plan) : ?>

                    <?php

                    $popular = ($size === '25');

                    ?>

                    <div class="plan-card<?php echo $popular ? ' popular' : ''; ?>">

                        <?php if ($popular) : ?>

                            <span class="badge">
                                Popular
                            </span>

                        <?php endif; ?>


                        <h4>
                            <?php echo esc_html($plan['name']); ?>
                        </h4>


                        <p class="device-note">
                            Shared across your team
                        </p>


                        <p class="price">

                            <?php echo esc_html($plan['price']); ?>

                            <span>
                                /mo per line
                            </span>

                        </p>


                        <p
                            style="
                                font-size:12px;
                                color:var(--text-muted);
                                margin:-10px 0 14px;
                            "
                        >

                            <strong style="color:var(--red);">
                                <?php echo esc_html($plan['credit']); ?>
                            </strong>

                        </p>


                        <ul class="benefits">


                            <?php if ($size === '10') : ?>

                                <?php
                                $render_benefit(
                                    'phone',
                                    'Canada-Wide Talk & Text'
                                );
                                ?>


                            <?php elseif ($size === '25') : ?>

                                <?php
                                $render_benefit(
                                    'plane',
                                    'Canada + USA Roaming'
                                );

                                $render_benefit(
                                    'globe',
                                    'International Long Distance — 27 countries'
                                );
                                ?>


                            <?php elseif (
                                $size === '50' ||
                                $size === '100'
                            ) : ?>

                                <?php
                                $render_benefit(
                                    'plane',
                                    'Canada + USA + Mexico Roaming'
                                );

                                $render_benefit(
                                    'globe',
                                    'International Long Distance — 27 countries'
                                );
                                ?>


                            <?php else : ?>

                                <?php
                                $render_benefit(
                                    'plane',
                                    'Canada + 64 Countries Roaming'
                                );
                                ?>

                            <?php endif; ?>


                        </ul>


                        <?php if ($size === '100') : ?>

                            <ul class="extras">

                                <li>
                                    25% off Roam Like Home (not travel passes)
                                </li>

                            </ul>

                        <?php endif; ?>


                        <?php if (
                            $size === '25' ||
                            $size === '50' ||
                            $size === '100'
                        ) : ?>

                            <details class="country-toggle">

                                <summary>
                                    View included countries
                                </summary>

                                <div class="country-list">
                                    <?php echo esc_html($countries_27); ?>
                                </div>

                            </details>


                        <?php elseif ($size === '250') : ?>

                            <details class="country-toggle">

                                <summary>
                                    View included countries (64)
                                </summary>

                                <div class="country-list">
                                    <?php echo esc_html($countries_64); ?>
                                </div>

                            </details>

                        <?php endif; ?>


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


    </div>

</section>



<!-- =========================================================
     CONNECTIVITY FEATURES
========================================================= -->

<section
    class="section"
    style="padding-top:40px;"
>

    <div class="container">

        <div
            style="
                border:2px solid var(--red);
                border-radius:14px;
                padding:40px 32px;
            "
        >

            <h2 style="text-align:center;">
                <?php echo esc_html($features_heading); ?>
            </h2>


            <div class="feature-strip reveal">


                <div>

                    <div class="feature-icon">

                        <svg
                            fill="none"
                            height="26"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-width="1.8"
                            viewBox="0 0 24 24"
                            width="26"
                        >
                            <path d="M2 20h.01M7 20v-4M12 20v-8M17 20v-12M22 20V4"></path>
                        </svg>

                    </div>

                    <h4>
                        <?php echo esc_html($feature_1_title); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($feature_1_text); ?>
                    </p>

                </div>



                <div>

                    <div class="feature-icon">

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
                            <rect
                                height="12"
                                rx="2"
                                width="18"
                                x="3"
                                y="6"
                            ></rect>

                            <path d="M7 10v4M12 9v6M17 10v4"></path>
                        </svg>

                    </div>

                    <h4>
                        <?php echo esc_html($feature_2_title); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($feature_2_text); ?>
                    </p>

                </div>



                <div>

                    <div class="feature-icon">

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
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            ></circle>

                            <path d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1.1 3 2.5-1.3 2-3 2.5-3 1.1-3 2.5 1.3 2.5 3 2.5 3-1.1 3-2.5"></path>
                        </svg>

                    </div>

                    <h4>
                        <?php echo esc_html($feature_3_title); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($feature_3_text); ?>
                    </p>

                </div>



                <div>

                    <div class="feature-icon">

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
                            <rect
                                height="20"
                                rx="2"
                                width="12"
                                x="6"
                                y="2"
                            ></rect>

                            <path d="M10 18h4"></path>
                        </svg>

                    </div>

                    <h4>
                        <?php echo esc_html($feature_4_title); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($feature_4_text); ?>
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     ADD-ONS
========================================================= -->

<section
    class="section"
    style="
        background:var(--surface);
        padding-top:56px;
    "
>

    <div class="container">

        <h3
            style="
                margin-top:0;
                text-align:center;
            "
        >
            <?php echo esc_html($addons_heading); ?>
        </h3>


        <div class="addon-grid">


            <?php foreach ($addons as $index => $addon) : ?>

                <div
                    class="addon-card"
                    style="text-align:center;"
                >

                    <div
                        class="addon-icon"
                        style="
                            margin-left:auto;
                            margin-right:auto;
                        "
                    >

                        <?php if ($index === 0) : ?>

                            <svg
                                fill="none"
                                height="22"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="22"
                            >
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>


                        <?php elseif ($index === 1) : ?>

                            <svg
                                fill="none"
                                height="22"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="22"
                            >
                                <rect
                                    height="20"
                                    rx="2"
                                    width="14"
                                    x="5"
                                    y="2"
                                ></rect>

                                <path d="M12 18h.01"></path>
                            </svg>


                        <?php elseif ($index === 2) : ?>

                            <svg
                                fill="none"
                                height="22"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="22"
                            >
                                <path d="M3 3v18h18"></path>
                                <path d="M7 15l4-5 3 3 5-7"></path>
                            </svg>


                        <?php else : ?>

                            <svg
                                fill="none"
                                height="22"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                viewBox="0 0 24 24"
                                width="22"
                            >
                                <path d="M12 2l8 3v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V5l8-3z"></path>
                            </svg>

                        <?php endif; ?>

                    </div>


                    <h4>
                        <?php echo esc_html($addon['title']); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($addon['text']); ?>
                    </p>


                    <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                        View solution →
                    </a>

                </div>

            <?php endforeach; ?>


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
        background:var(--white);
    "
>

    <div class="container">

        <div class="review-form-layout">


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


                    <div class="review-benefit">

                        <span>✓</span>

                        <div>

                            <strong>
                                Review your current costs
                            </strong>

                            <p>
                                We'll look at what you're currently paying and
                                what services you have.
                            </p>

                        </div>

                    </div>



                    <div class="review-benefit">

                        <span>✓</span>

                        <div>

                            <strong>
                                Identify opportunities
                            </strong>

                            <p>
                                We'll check available Rogers Business options
                                that may better fit your needs.
                            </p>

                        </div>

                    </div>



                    <div class="review-benefit">

                        <span>✓</span>

                        <div>

                            <strong>
                                Talk to a real person
                            </strong>

                            <p>
                                Your review is handled by a WCP business
                                specialist.
                            </p>

                        </div>

                    </div>


                </div>

            </div>



            <?php

            $wcp_form_status = isset($_GET['wcp_form'])
                ? sanitize_key(wp_unslash($_GET['wcp_form']))
                : '';

            $wcp_form_reason = isset($_GET['wcp_reason'])
                ? sanitize_key(wp_unslash($_GET['wcp_reason']))
                : '';

            $wcp_error_messages = array(
                'security'        => 'Your session expired. Please refresh the page and try again.',
                'required'        => 'Please complete all required fields and try again.',
                'email'           => 'Please enter a valid email address.',
                'interest'        => 'Please select an option from the list.',
                'file_too_large'  => 'The uploaded bill is too large. Please choose a file under 10 MB.',
                'file_type'       => 'Please upload a PDF, JPG, JPEG or PNG file.',
                'upload_error'    => 'The bill could not be uploaded. Please try again.',
                'upload_save'     => 'The bill could not be saved. Please try again.',
                'storage'         => 'The bill could not be stored. Please try again or contact us.',
                'save'            => 'Your submission could not be saved. Please try again.',
                'too_fast'        => 'Please wait a moment and submit the form again.',
                'invalid_request' => 'The form could not be submitted. Please try again.',
            );

            ?>

            <form
                class="lead-form bill-review-form"
                action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                method="POST"
                enctype="multipart/form-data"
            >

                <input
                    type="hidden"
                    name="action"
                    value="wcp_bill_review_submit"
                >

                <?php
                wp_nonce_field(
                    'wcp_bill_review_submit',
                    'wcp_bill_review_nonce'
                );
                ?>

                <input
                    type="hidden"
                    name="redirect_to"
                    value="<?php echo esc_url(get_permalink() . '#contact'); ?>"
                >

                <input
                    type="hidden"
                    name="form_source"
                    value="Business Wireless"
                >

                <input
                    type="hidden"
                    name="wcp_started"
                    value="<?php echo esc_attr(time()); ?>"
                >

                <!-- Spam Honeypot -->

                <div
                    aria-hidden="true"
                    style="
                        position:absolute;
                        left:-9999px;
                        width:1px;
                        height:1px;
                        overflow:hidden;
                    "
                >

                    <label>

                        Leave this field empty

                        <input
                            type="text"
                            name="website"
                            value=""
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </label>

                </div>

                <div class="form-heading">

                    <h3>
                        <?php echo esc_html($review_button); ?>
                    </h3>

                    <p>
                        Tell us a little about your business.
                    </p>

                </div>

                <!-- Success / Error Message -->

                <?php if ('success' === $wcp_form_status) : ?>

                    <div
                        class="form-message form-success"
                        role="status"
                    >

                        <strong>
                            Thank you.
                        </strong>

                        We received your request and a WCP business specialist will follow up with you.

                    </div>

                <?php elseif ('error' === $wcp_form_status) : ?>

                    <div
                        class="form-message form-error"
                        role="alert"
                    >

                        <?php
                        echo esc_html(
                            isset($wcp_error_messages[$wcp_form_reason])
                                ? $wcp_error_messages[$wcp_form_reason]
                                : 'Something went wrong. Please review the form and try again.'
                        );
                        ?>

                    </div>

                <?php endif; ?>

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
                        Review my current wireless bill
                    </option>

                    <option value="New business wireless">
                        New business wireless plans
                    </option>

                    <option value="Switching carrier">
                        Switching from another carrier
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
                                Optional — PDF, JPG or PNG — max 10 MB
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
