<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| BUSINESS POS CONTENT
|--------------------------------------------------------------------------
| Values come from ACF when filled in.
| If a field is blank, the original website content is used.
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$pos_hero_heading = wcp_field(
    'pos_hero_heading',
    'Smarter payments. Stronger business.'
);

$pos_hero_description = wcp_field(
    'pos_hero_description',
    'Accept payments anywhere, manage operations effortlessly, and give your customers the experience they expect with Rogers POS, powered by Clover.'
);

$pos_hero_button = wcp_field(
    'pos_hero_button',
    'Contact Sales'
);

$pos_hero_image = wcp_field(
    'pos_hero_image',
    get_template_directory_uri() . '/images/rogers_pos.jpg'
);


/*
|--------------------------------------------------------------------------
| FEATURES
|--------------------------------------------------------------------------
*/

$pos_features_heading = wcp_field(
    'pos_features_heading',
    'POS that keeps your business moving'
);

$pos_features_intro = wcp_field(
    'pos_features_intro',
    'Simple, scalable technology built to grow with your business.'
);


$pos_feature_1_title = wcp_field(
    'pos_feature_1_title',
    'Transparent pricing'
);

$pos_feature_1_text = wcp_field(
    'pos_feature_1_text',
    'Benefit from a clear cost pricing model and easy-to-read bills.'
);


$pos_feature_2_title = wcp_field(
    'pos_feature_2_title',
    'Enhanced savings'
);

$pos_feature_2_text = wcp_field(
    'pos_feature_2_text',
    'Enjoy lower transaction costs and reduced add-on fees.'
);


$pos_feature_3_title = wcp_field(
    'pos_feature_3_title',
    'Smarter management'
);

$pos_feature_3_text = wcp_field(
    'pos_feature_3_text',
    'Leading platform by Clover, with easy-to-use sales analytics, inventory management, employee management and more.'
);


$pos_feature_4_title = wcp_field(
    'pos_feature_4_title',
    'Reward your customers when they pay'
);

$pos_feature_4_text = wcp_field(
    'pos_feature_4_text',
    'With the Rogers Red World Elite Business Mastercard, cardholders earn an additional 1% cash back on eligible purchases — on top of the card\'s standard cash back.'
);


/*
|--------------------------------------------------------------------------
| PLANS
|--------------------------------------------------------------------------
*/

$pos_plans_heading = wcp_field(
    'pos_plans_heading',
    'Choose your POS plan'
);

$pos_plans_note = wcp_field(
    'pos_plans_note',
    'Pricing shown reflects month-to-month rates. Offers and pricing are subject to change. Contact WCP for current promotional pricing.'
);


/*
 * Fixed
 */

$pos_fixed_name = wcp_field(
    'pos_fixed_name',
    'Fixed'
);

$pos_fixed_price = wcp_field(
    'pos_fixed_price',
    '$35'
);

$pos_fixed_price_details = wcp_field(
    'pos_fixed_price_details',
    '.00/mo, month-to-month when paired with an eligible 3-yr Business Internet or 5G Business Internet plan'
);

$pos_fixed_features = wcp_field(
    'pos_fixed_features',
    "2.50% per successful credit card transaction fee\n" .
    "$0.10 per successful debit card transaction fee\n" .
    "Comes with one (1) Clover Flex or Clover Flex Pocket terminal\n" .
    "Access to Clover Dashboard included\n" .
    "Clover Mini upgrade available"
);


/*
 * Variable
 */

$pos_variable_name = wcp_field(
    'pos_variable_name',
    'Variable'
);

$pos_variable_price = wcp_field(
    'pos_variable_price',
    '$45'
);

$pos_variable_price_details = wcp_field(
    'pos_variable_price_details',
    '.00/mo, month-to-month when paired with an eligible 3-yr Business Internet or 5G Business Internet plan'
);

$pos_variable_features = wcp_field(
    'pos_variable_features',
    "Interchange + 0.30% + $0.08 per successful credit card transaction fee\n" .
    "$0.08 per successful debit card transaction fee\n" .
    "Comes with one (1) Clover Flex or Clover Flex Pocket terminal\n" .
    "Access to Clover Dashboard included\n" .
    "Clover Mini upgrade available"
);


/*
 * Standalone
 */

$pos_standalone_name = wcp_field(
    'pos_standalone_name',
    'Standalone'
);

$pos_standalone_price = wcp_field(
    'pos_standalone_price',
    '$40'
);

$pos_standalone_price_details = wcp_field(
    'pos_standalone_price_details',
    '.00/mo, month-to-month'
);

$pos_standalone_features = wcp_field(
    'pos_standalone_features',
    "2.65% per successful credit card transaction fee\n" .
    "$0.15 per successful debit card transaction fee\n" .
    "Comes with one (1) Clover Flex or Clover Flex Pocket terminal\n" .
    "Access to Clover Dashboard included\n" .
    "Clover Mini upgrade available"
);


/*
 * App Only
 */

$pos_app_name = wcp_field(
    'pos_app_name',
    'App-Only'
);

$pos_app_price = wcp_field(
    'pos_app_price',
    '$20'
);

$pos_app_price_details = wcp_field(
    'pos_app_price_details',
    '.00/mo, month-to-month when paired with an eligible Business Mobile plan'
);

$pos_app_features = wcp_field(
    'pos_app_features',
    "No Clover terminal required — use your iPhone as a payment terminal\n" .
    "Access to Apple Tap to Pay using Clover Go software\n" .
    "Access to Clover Dashboard included\n" .
    "Fixed or Variable rate available\n" .
    "Manual input and payment links available for merchants"
);


/*
|--------------------------------------------------------------------------
| HARDWARE CTA
|--------------------------------------------------------------------------
*/

$pos_hardware_heading = wcp_field(
    'pos_hardware_heading',
    'Not sure which hardware fits your business?'
);

$pos_hardware_text = wcp_field(
    'pos_hardware_text',
    'Clover Flex is a powerful, portable POS built for speed and mobility — accept every payment type on the go, manage inventory with the built-in barcode scanner, and access cloud-based reporting from anywhere. Clover Flex Pocket and Clover Mini are also available depending on your setup.'
);

$pos_hardware_button = wcp_field(
    'pos_hardware_button',
    'Contact Sales'
);


/*
|--------------------------------------------------------------------------
| PROCESSING REVIEW
|--------------------------------------------------------------------------
*/

$pos_review_eyebrow = wcp_field(
    'pos_review_eyebrow',
    'FREE PROCESSING REVIEW'
);

$pos_review_heading = wcp_field(
    'pos_review_heading',
    'Upload your statement. We\'ll do the homework.'
);

$pos_review_intro = wcp_field(
    'pos_review_intro',
    'Send us a recent processing statement and a WCP business specialist will review your current rates and available options.'
);

$pos_review_button = wcp_field(
    'pos_review_button',
    'Get My Free Processing Review'
);


/*
|--------------------------------------------------------------------------
| HELPER FOR PLAN FEATURE LISTS
|--------------------------------------------------------------------------
*/

$wcp_plan_features = function ($text) {

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

?>



<!-- =========================================================
     POS HERO
========================================================= -->

<section class="hero-split">

    <div class="hero-split-image">

        <img
            src="<?php echo esc_url($pos_hero_image); ?>"
            alt="Rogers POS terminal accepting a tap payment"
        >

    </div>


    <div class="hero-split-content">

        <h1>
            <?php echo esc_html($pos_hero_heading); ?>
        </h1>

        <p>
            <?php echo esc_html($pos_hero_description); ?>
        </p>

        <div class="actions">

            <a
                class="btn btn-primary"
                href="<?php echo esc_url(home_url('/contact/')); ?>"
            >
                <?php echo esc_html($pos_hero_button); ?>
            </a>

            <a
                class="link-inline-dark"
                href="tel:+18338441977"
            >
                Or call 1-833-844-1977
            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     POS FEATURES
========================================================= -->

<section
    class="section"
    style="background:var(--surface);"
>

    <div class="container">

        <h2 style="text-align:center;">
            <?php echo esc_html($pos_features_heading); ?>
        </h2>

        <p
            class="lede"
            style="
                text-align:center;
                margin-left:auto;
                margin-right:auto;
            "
        >
            <?php echo esc_html($pos_features_intro); ?>
        </p>


        <div class="feature-strip reveal">


            <!-- Feature 1 -->

            <div>

                <div class="feature-icon">

                    <svg
                        width="26"
                        height="26"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <rect
                            x="2"
                            y="5"
                            width="20"
                            height="14"
                            rx="2"
                        />

                        <path d="M2 10h20"/>
                    </svg>

                </div>

                <h4>
                    <?php echo esc_html($pos_feature_1_title); ?>
                </h4>

                <p>
                    <?php echo esc_html($pos_feature_1_text); ?>
                </p>

            </div>



            <!-- Feature 2 -->

            <div>

                <div class="feature-icon">

                    <svg
                        width="26"
                        height="26"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <path d="M12 2l8 3v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V5l8-3z"/>
                    </svg>

                </div>

                <h4>
                    <?php echo esc_html($pos_feature_2_title); ?>
                </h4>

                <p>
                    <?php echo esc_html($pos_feature_2_text); ?>
                </p>

            </div>



            <!-- Feature 3 -->

            <div>

                <div class="feature-icon">

                    <svg
                        width="26"
                        height="26"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <path d="M3 3v18h18"/>
                        <path d="M7 15l4-5 3 3 5-7"/>
                    </svg>

                </div>

                <h4>
                    <?php echo esc_html($pos_feature_3_title); ?>
                </h4>

                <p>
                    <?php echo esc_html($pos_feature_3_text); ?>
                </p>

            </div>



            <!-- Feature 4 -->

            <div>

                <div class="feature-icon">

                    <svg
                        width="26"
                        height="26"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <circle
                            cx="12"
                            cy="12"
                            r="9"
                        />

                        <path d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1.1 3 2.5-1.3 2-3 2.5-3 1.1-3 2.5 1.3 2.5 3 2.5 3-1.1 3-2.5"/>
                    </svg>

                </div>

                <h4>
                    <?php echo esc_html($pos_feature_4_title); ?>
                </h4>

                <p>
                    <?php echo esc_html($pos_feature_4_text); ?>
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     POS PLANS
========================================================= -->

<section
    class="section reveal"
    style="
        background:#ffffff;
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <h2
            style="
                text-align:center;
                margin-top:0;
            "
        >
            <?php echo esc_html($pos_plans_heading); ?>
        </h2>

        <p
            style="
                text-align:center;
                font-size:13px;
                color:var(--text-muted);
                max-width:560px;
                margin:8px auto 0;
            "
        >
            <?php echo esc_html($pos_plans_note); ?>
        </p>


        <div
            class="plan-grid"
            style="margin-top:32px;"
        >


            <!-- =================================================
                 FIXED PLAN
            ================================================== -->

            <div class="plan-card">

                <p class="plan-tier-label">
                    Rogers POS
                </p>

                <h4>
                    <?php echo esc_html($pos_fixed_name); ?>
                </h4>

                <p class="price">

                    <?php echo esc_html($pos_fixed_price); ?>

                    <span>
                        <?php echo esc_html($pos_fixed_price_details); ?>
                    </span>

                </p>


                <ul>

                    <?php foreach ($wcp_plan_features($pos_fixed_features) as $feature) : ?>

                        <li>
                            <?php echo esc_html($feature); ?>
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
                        Contact Sales
                    </a>

                </div>

            </div>



            <!-- =================================================
                 VARIABLE PLAN
            ================================================== -->

            <div class="plan-card">

                <p class="plan-tier-label">
                    Rogers POS
                </p>

                <h4>
                    <?php echo esc_html($pos_variable_name); ?>
                </h4>

                <p class="price">

                    <?php echo esc_html($pos_variable_price); ?>

                    <span>
                        <?php echo esc_html($pos_variable_price_details); ?>
                    </span>

                </p>


                <ul>

                    <?php foreach ($wcp_plan_features($pos_variable_features) as $feature) : ?>

                        <li>
                            <?php echo esc_html($feature); ?>
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
                        Contact Sales
                    </a>

                </div>

            </div>



            <!-- =================================================
                 STANDALONE PLAN
            ================================================== -->

            <div class="plan-card">

                <p class="plan-tier-label">
                    Rogers POS
                </p>

                <h4>
                    <?php echo esc_html($pos_standalone_name); ?>
                </h4>

                <p class="price">

                    <?php echo esc_html($pos_standalone_price); ?>

                    <span>
                        <?php echo esc_html($pos_standalone_price_details); ?>
                    </span>

                </p>


                <ul>

                    <?php foreach ($wcp_plan_features($pos_standalone_features) as $feature) : ?>

                        <li>
                            <?php echo esc_html($feature); ?>
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
                        Contact Sales
                    </a>

                </div>

            </div>



            <!-- =================================================
                 APP-ONLY PLAN
            ================================================== -->

            <div class="plan-card">

                <p class="plan-tier-label">
                    Rogers POS
                </p>

                <h4>
                    <?php echo esc_html($pos_app_name); ?>
                </h4>

                <p class="price">

                    <?php echo esc_html($pos_app_price); ?>

                    <span>
                        <?php echo esc_html($pos_app_price_details); ?>
                    </span>

                </p>


                <ul>

                    <?php foreach ($wcp_plan_features($pos_app_features) as $feature) : ?>

                        <li>
                            <?php echo esc_html($feature); ?>
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
                        Contact Sales
                    </a>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     HARDWARE CTA
========================================================= -->

<section
    class="section"
    style="
        background:var(--surface);
        padding-top:48px;
        padding-bottom:48px;
    "
>

    <div class="container">

        <div
            class="dial-tone-box"
            style="margin-top:0;"
        >

            <div>

                <h4>
                    <?php echo esc_html($pos_hardware_heading); ?>
                </h4>

                <p>
                    <?php echo esc_html($pos_hardware_text); ?>
                </p>

            </div>


            <a
                class="btn btn-primary"
                href="<?php echo esc_url(home_url('/contact/')); ?>"
            >
                <?php echo esc_html($pos_hardware_button); ?>
            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     PROCESSING REVIEW
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


            <!-- Intro -->

            <div class="review-form-intro">

                <span class="section-eyebrow">
                    <?php echo esc_html($pos_review_eyebrow); ?>
                </span>

                <h2>
                    <?php echo esc_html($pos_review_heading); ?>
                </h2>

                <p class="lede">
                    <?php echo esc_html($pos_review_intro); ?>
                </p>


                <div class="review-benefits">


                    <div class="review-benefit">

                        <span>✓</span>

                        <div>

                            <strong>
                                Review your current rates
                            </strong>

                            <p>
                                We'll look at what you're currently paying in
                                transaction fees and add-ons.
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
                                We'll check available Rogers POS options that may
                                better fit your business.
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



            <!-- Form -->

            <form
                class="lead-form bill-review-form"
                action="https://formspree.io/f/xvkppvjl"
                method="POST"
                enctype="multipart/form-data"
            >

                <div class="form-heading">

                    <h3>
                        <?php echo esc_html($pos_review_button); ?>
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

                    <option value="Current processing review">
                        Review my current processing rates
                    </option>

                    <option value="New POS setup">
                        New POS setup
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
                                Upload your current statement
                            </strong>

                            <small>
                                Optional — PDF, JPG or PNG
                            </small>

                        </span>

                    </label>


                    <input
                        type="file"
                        id="bill-upload"
                        name="current_statement"
                        accept=".pdf,.jpg,.jpeg,.png,application/pdf,image/jpeg,image/png"
                    >

                </div>



                <textarea
                    name="message"
                    rows="4"
                    placeholder="Anything else you'd like us to know? (optional)"
                ></textarea>



                <button
                    class="btn btn-primary"
                    type="submit"
                >
                    <?php echo esc_html($pos_review_button); ?>
                </button>



                <p class="form-disclaimer">

                    🔒 Your statement is kept private and used only to review
                    your business services. No obligation. Prefer to talk?

                    <a href="tel:+18338441977">
                        Call 1-833-844-1977
                    </a>

                </p>

            </form>


        </div>

    </div>

</section>


<?php get_footer(); ?>
