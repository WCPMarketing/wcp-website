<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| BUSINESS PHONE - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$phone_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field(
            'phone_' . $name,
            $fallback
        );
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| TEXTAREA LIST HELPER
|--------------------------------------------------------------------------
*/

$phone_list = function ($text) {

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
| GLOBAL PHONE
|--------------------------------------------------------------------------
*/

$global_phone = function_exists('wcp_global_field')
    ? wcp_global_field(
        'phone',
        '1-833-844-1977'
    )
    : '1-833-844-1977';


$global_phone_href = function_exists('wcp_global_phone_href')
    ? wcp_global_phone_href()
    : 'tel:+18338441977';


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_heading = $phone_field(
    'hero_heading',
    'Business phone solutions with Advantage Voice'
);

$hero_description = $phone_field(
    'hero_description',
    'Streamline business calls with an advanced cloud PBX solution — Teams integration, mobile access, and 24/7 managed support.'
);

$hero_button = $phone_field(
    'hero_button',
    'Get My Free Business Review'
);

$hero_image = $phone_field(
    'hero_image',
    get_template_directory_uri() .
    '/images/hero-professional-call.jpg'
);


/*
|--------------------------------------------------------------------------
| FEATURES
|--------------------------------------------------------------------------
*/

$features_heading = $phone_field(
    'features_heading',
    'Stay connected from your office to the road'
);


$features = array(

    array(
        'title' => $phone_field(
            'feature_1_title',
            'Work from anywhere'
        ),

        'text' => $phone_field(
            'feature_1_text',
            'Make and receive calls from your desk, mobile, or laptop on the same business line.'
        ),
    ),

    array(
        'title' => $phone_field(
            'feature_2_title',
            'Nationwide calling'
        ),

        'text' => $phone_field(
            'feature_2_text',
            'Included CAN/US long distance calling and virtual receptionist on every plan.'
        ),
    ),

    array(
        'title' => $phone_field(
            'feature_3_title',
            'Predictable pricing'
        ),

        'text' => $phone_field(
            'feature_3_text',
            'Simple per-seat pricing that scales as your team grows.'
        ),
    ),

    array(
        'title' => $phone_field(
            'feature_4_title',
            'Seamless transfers'
        ),

        'text' => $phone_field(
            'feature_4_text',
            'Move calls between devices without missing a beat.'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| PHONE PLANS
|--------------------------------------------------------------------------
*/

$plans_heading = $phone_field(
    'plans_heading',
    'Choose an Advantage Voice business phone plan'
);

$pricing_disclaimer = $phone_field(
    'pricing_disclaimer',
    'Offers and pricing are subject to change and address availability. Contact WCP for current promotional pricing.'
);

$seat_note = $phone_field(
    'seat_note',
    'Number of seats — contact us to see your monthly cost for the seats you need.'
);


$plans = array(


    /*
    |--------------------------------------------------------------------------
    | PLAN 1
    |--------------------------------------------------------------------------
    */

    array(

        'badge' => '',

        'name' => $phone_field(
            'plan_1_name',
            'Basic — 5-Year Term'
        ),

        'price' => $phone_field(
            'plan_1_price',
            '$18'
        ),

        'suffix' => $phone_field(
            'plan_1_suffix',
            '.00/seat/mo on a 5-yr term'
        ),

        'note' => $phone_field(
            'plan_1_note',
            'Requires 11+ lines. Includes CAN/US long distance calling and virtual receptionist.'
        ),

        'features' => $phone_field(
            'plan_1_features',
            "Minimum 11 lines required\n" .
            "Includes Edge 550 handset\n" .
            "Available with any internet connection\n" .
            "Make and receive calls on any device"
        ),

        'button' => $phone_field(
            'plan_1_button',
            'Contact Sales'
        ),

        'popular' => false,

    ),


    /*
    |--------------------------------------------------------------------------
    | PLAN 2
    |--------------------------------------------------------------------------
    */

    array(

        'badge' => $phone_field(
            'plan_2_badge',
            'Bundle & Save'
        ),

        'name' => $phone_field(
            'plan_2_name',
            'Bundle with Internet'
        ),

        'price' => $phone_field(
            'plan_2_price',
            '$21'
        ),

        'suffix' => $phone_field(
            'plan_2_suffix',
            '.00/seat/mo starting at, on a 3-yr term'
        ),

        'note' => $phone_field(
            'plan_2_note',
            'Save when bundling with an eligible 3-yr Business Internet plan. Save $5/mo/line in a bundle.'
        ),

        'features' => $phone_field(
            'plan_2_features',
            "All the features of Advantage Voice Basic, plus a Business Internet plan\n" .
            "Download speeds up to 2 Gbps\n" .
            "Wireless backup on select plans\n" .
            "Automatic security updates"
        ),

        'button' => $phone_field(
            'plan_2_button',
            'Explore Bundles'
        ),

        'popular' => true,

    ),


    /*
    |--------------------------------------------------------------------------
    | PLAN 3
    |--------------------------------------------------------------------------
    */

    array(

        'badge' => '',

        'name' => $phone_field(
            'plan_3_name',
            'Basic'
        ),

        'price' => $phone_field(
            'plan_3_price',
            '$26'
        ),

        'suffix' => $phone_field(
            'plan_3_suffix',
            '.00/seat/mo on a 3-yr term'
        ),

        'note' => $phone_field(
            'plan_3_note',
            'A phone system for small teams. Includes CAN/US long distance calling and virtual receptionist.'
        ),

        'features' => $phone_field(
            'plan_3_features',
            "Includes handset\n" .
            "Available with any internet connection\n" .
            "Make and receive calls on any device\n" .
            "No installation required"
        ),

        'button' => $phone_field(
            'plan_3_button',
            'Contact Sales'
        ),

        'popular' => false,

    ),


    /*
    |--------------------------------------------------------------------------
    | PLAN 4
    |--------------------------------------------------------------------------
    */

    array(

        'badge' => '',

        'name' => $phone_field(
            'plan_4_name',
            'Remote with Teams'
        ),

        'price' => $phone_field(
            'plan_4_price',
            '$28'
        ),

        'suffix' => $phone_field(
            'plan_4_suffix',
            '.95/seat/mo on a 3-yr term'
        ),

        'note' => $phone_field(
            'plan_4_note',
            'Full collaboration suite for call, chat and video conferencing. Includes CAN/US long distance calling and virtual receptionist.'
        ),

        'features' => $phone_field(
            'plan_4_features',
            "Everything in Basic, plus:\n" .
            "Microsoft Teams calling & collaboration tools\n" .
            "Does not include handset — best for field team members"
        ),

        'button' => $phone_field(
            'plan_4_button',
            'Contact Sales'
        ),

        'popular' => false,

    ),

);


/*
|--------------------------------------------------------------------------
| DIAL TONE
|--------------------------------------------------------------------------
*/

$dial_heading = $phone_field(
    'dial_heading',
    'Looking for a dial tone?'
);

$dial_text = $phone_field(
    'dial_text',
    'If you\'re simply looking to power business security equipment, alarm panels, or elevators, we have a solution for you. Contact us to discuss your needs.'
);

$dial_button = $phone_field(
    'dial_button',
    'Contact Sales'
);


/*
|--------------------------------------------------------------------------
| BILL REVIEW
|--------------------------------------------------------------------------
*/

$review_eyebrow = $phone_field(
    'review_eyebrow',
    'FREE PHONE BILL REVIEW'
);

$review_heading = $phone_field(
    'review_heading',
    'Upload your bill. We\'ll do the homework.'
);

$review_intro = $phone_field(
    'review_intro',
    'Send us a recent phone bill and a WCP business specialist will review your current service and available options.'
);


$review_benefits = array(

    array(

        'title' => $phone_field(
            'review_1_title',
            'Review your current costs'
        ),

        'text' => $phone_field(
            'review_1_text',
            'We\'ll look at what you\'re currently paying and what services you have.'
        ),

    ),

    array(

        'title' => $phone_field(
            'review_2_title',
            'Identify opportunities'
        ),

        'text' => $phone_field(
            'review_2_text',
            'We\'ll check available Advantage Voice options that may better fit your team.'
        ),

    ),

    array(

        'title' => $phone_field(
            'review_3_title',
            'Talk to a real person'
        ),

        'text' => $phone_field(
            'review_3_text',
            'Your review is handled by a WCP business specialist.'
        ),

    ),

);


$review_button = $phone_field(
    'review_button',
    'Get My Free Bill Review'
);

?>


<!-- =========================================================
     HERO
========================================================= -->

<section
    class="hero hero-photo"
    style="
        --hero-img:url('<?php echo esc_url($hero_image); ?>');
    "
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
                href="#contact"
                class="btn btn-primary"
            >
                <?php echo esc_html($hero_button); ?>
            </a>


            <a
                href="<?php echo esc_attr($global_phone_href); ?>"
                class="link-inline"
            >
                Or call <?php echo esc_html($global_phone); ?>
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     FEATURES + PHONE PLANS
========================================================= -->

<section class="section">

    <div class="container">


        <h2 style="text-align:center;">
            <?php echo esc_html($features_heading); ?>
        </h2>


        <div class="feature-strip reveal">


            <!-- FEATURE 1 -->

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
                            x="5"
                            y="2"
                            width="14"
                            height="20"
                            rx="2"
                        />

                        <path d="M12 18h.01"/>

                    </svg>

                </div>


                <h4>
                    <?php echo esc_html($features[0]['title']); ?>
                </h4>


                <p>
                    <?php echo esc_html($features[0]['text']); ?>
                </p>

            </div>


            <!-- FEATURE 2 -->

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

                        <path d="M3 12h18"/>

                        <path
                            d="M12 3a15 15 0 0 1 0 18 15 15 0 0 1 0-18z"
                        />

                    </svg>

                </div>


                <h4>
                    <?php echo esc_html($features[1]['title']); ?>
                </h4>


                <p>
                    <?php echo esc_html($features[1]['text']); ?>
                </p>

            </div>


            <!-- FEATURE 3 -->

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

                        <path
                            d="M12 7v10M9 9.5c0-1.4 1.3-2.5 3-2.5s3 1.1 3 2.5-1.3 2-3 2.5-3 1.1-3 2.5 1.3 2.5 3 2.5 3-1.1 3-2.5"
                        />

                    </svg>

                </div>


                <h4>
                    <?php echo esc_html($features[2]['title']); ?>
                </h4>


                <p>
                    <?php echo esc_html($features[2]['text']); ?>
                </p>

            </div>


            <!-- FEATURE 4 -->

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

                        <path d="M17 2l4 4-4 4"/>

                        <path
                            d="M3 11V9a4 4 0 0 1 4-4h14"
                        />

                        <path d="M7 22l-4-4 4-4"/>

                        <path
                            d="M21 13v2a4 4 0 0 1-4 4H3"
                        />

                    </svg>

                </div>


                <h4>
                    <?php echo esc_html($features[3]['title']); ?>
                </h4>


                <p>
                    <?php echo esc_html($features[3]['text']); ?>
                </p>

            </div>


        </div>


        <!-- =================================================
             PLAN HEADING
        ================================================== -->

        <h2
            style="
                text-align:center;
                margin-top:48px;
            "
        >
            <?php echo esc_html($plans_heading); ?>
        </h2>


        <p
            style="
                text-align:center;
                font-size:15px;
                color:var(--text-muted);
                max-width:560px;
                margin:8px auto 0;
            "
        >
            <?php echo esc_html($pricing_disclaimer); ?>
        </p>


        <!-- =================================================
             SEAT NOTE
        ================================================== -->

        <div
            style="
                text-align:center;
                margin:20px 0 32px;
            "
        >

            <div
                class="seat-stepper"
                aria-hidden="true"
            >

                <span>−</span>

                <span class="seat-count">
                    1
                </span>

                <span>+</span>

            </div>


            <p
                style="
                    font-size:18px;
                    color:var(--text-muted);
                    margin-top:8px;
                "
            >
                <?php echo esc_html($seat_note); ?>
            </p>

        </div>


        <!-- =================================================
             PLAN CARDS
        ================================================== -->

        <div class="plan-grid">


            <?php foreach ($plans as $plan) : ?>


                <div
                    class="plan-card<?php echo $plan['popular'] ? ' popular' : ''; ?>"
                >


                    <?php if (!empty($plan['badge'])) : ?>

                        <span class="badge">
                            <?php echo esc_html($plan['badge']); ?>
                        </span>

                    <?php endif; ?>


                    <p class="plan-tier-label">
                        Advantage Voice
                    </p>


                    <h4>
                        <?php echo esc_html($plan['name']); ?>
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
                        <?php echo esc_html($plan['note']); ?>
                    </p>


                    <ul>

                        <?php foreach ($phone_list($plan['features']) as $feature) : ?>

                            <li>
                                <?php echo esc_html($feature); ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>


                    <div class="plan-cta-group">

                        <a
                            href="<?php echo esc_url(home_url('/contact/')); ?>"
                            class="btn btn-primary"
                            style="
                                width:100%;
                                text-align:center;
                                display:block;
                            "
                        >
                            <?php echo esc_html($plan['button']); ?>
                        </a>


                        <?php if (!$plan['popular']) : ?>

                            <a
                                href="<?php echo esc_url(home_url('/contact/')); ?>"
                                class="full-details-link"
                            >
                                Ask About This Plan →
                            </a>

                        <?php endif; ?>

                    </div>


                </div>


            <?php endforeach; ?>


        </div>


        <!-- =================================================
             DIAL TONE
        ================================================== -->

        <div class="dial-tone-box">

            <div>

                <h4>
                    <?php echo esc_html($dial_heading); ?>
                </h4>


                <p>
                    <?php echo esc_html($dial_text); ?>
                </p>

            </div>


            <a
                href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="btn btn-primary"
            >
                <?php echo esc_html($dial_button); ?>
            </a>

        </div>


    </div>

</section>


<!-- =========================================================
     PHONE BILL REVIEW
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


            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->

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


            <!-- =================================================
                 FORM STATUS
            ================================================== -->

            <?php

            $wcp_form_status = isset($_GET['wcp_form'])
                ? sanitize_key(
                    wp_unslash($_GET['wcp_form'])
                )
                : '';


            $wcp_form_reason = isset($_GET['wcp_reason'])
                ? sanitize_key(
                    wp_unslash($_GET['wcp_reason'])
                )
                : '';


            $wcp_error_messages = array(

                'security' =>
                    'Your session expired. Please refresh the page and try again.',

                'required' =>
                    'Please complete all required fields and try again.',

                'email' =>
                    'Please enter a valid email address.',

                'interest' =>
                    'Please select an option from the list.',

                'file_too_large' =>
                    'The uploaded bill is too large. Please choose a file under 10 MB.',

                'file_type' =>
                    'Please upload a PDF, JPG, JPEG or PNG file.',

                'upload_error' =>
                    'The bill could not be uploaded. Please try again.',

                'upload_save' =>
                    'The bill could not be saved. Please try again.',

                'storage' =>
                    'The bill could not be stored. Please try again or contact us.',

                'save' =>
                    'Your submission could not be saved. Please try again.',

                'too_fast' =>
                    'Please wait a moment and submit the form again.',

                'invalid_request' =>
                    'The form could not be submitted. Please try again.',

            );

            ?>


            <!-- =================================================
                 BILL REVIEW FORM
            ================================================== -->

            <form
                class="lead-form bill-review-form"
                action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                method="POST"
                enctype="multipart/form-data"
            >


                <!-- FORM ACTION -->

                <input
                    type="hidden"
                    name="action"
                    value="wcp_bill_review_submit"
                >


                <!-- NONCE -->

                <?php

                wp_nonce_field(
                    'wcp_bill_review_submit',
                    'wcp_bill_review_nonce'
                );

                ?>


                <!-- RETURN URL -->

                <input
                    type="hidden"
                    name="redirect_to"
                    value="<?php echo esc_url(get_permalink() . '#contact'); ?>"
                >


                <!-- FORM SOURCE -->

                <input
                    type="hidden"
                    name="form_source"
                    value="Business Phone"
                >


                <!-- TIMING FIELD -->

                <input
                    type="hidden"
                    name="wcp_started"
                    value="<?php echo esc_attr(time()); ?>"
                >


                <!-- =================================================
                     SPAM HONEYPOT
                ================================================== -->

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


                <!-- =================================================
                     FORM HEADING
                ================================================== -->

                <div class="form-heading">

                    <h3>
                        <?php echo esc_html($review_button); ?>
                    </h3>


                    <p>
                        Tell us a little about your business.
                    </p>

                </div>


                <!-- =================================================
                     SUCCESS / ERROR
                ================================================== -->

                <?php if ('success' === $wcp_form_status) : ?>


                    <div
                        class="form-message form-success"
                        role="status"
                    >

                        <strong>
                            Thank you.
                        </strong>

                        We received your request and a WCP business specialist
                        will follow up with you.

                    </div>


                <?php elseif ('error' === $wcp_form_status) : ?>


                    <div
                        class="form-message form-error"
                        role="alert"
                    >

                        <?php

                        echo esc_html(

                            isset(
                                $wcp_error_messages[
                                    $wcp_form_reason
                                ]
                            )

                                ? $wcp_error_messages[
                                    $wcp_form_reason
                                ]

                                : 'Something went wrong. Please review the form and try again.'

                        );

                        ?>

                    </div>


                <?php endif; ?>


                <!-- =================================================
                     NAME / BUSINESS
                ================================================== -->

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


                <!-- =================================================
                     PHONE / EMAIL
                ================================================== -->

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


                <!-- =================================================
                     INTEREST
                ================================================== -->

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
                        Review my current phone bill
                    </option>


                    <option value="New business phone">
                        New business phone system
                    </option>


                    <option value="Switching provider">
                        Switching from another provider
                    </option>


                    <option value="Not sure">
                        I'm not sure yet
                    </option>

                </select>


                <!-- =================================================
                     BILL UPLOAD
                ================================================== -->

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


                <!-- =================================================
                     MESSAGE
                ================================================== -->

                <textarea
                    name="message"
                    rows="4"
                    placeholder="Anything else you'd like us to know? (optional)"
                ></textarea>


                <!-- =================================================
                     SUBMIT
                ================================================== -->

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    <?php echo esc_html($review_button); ?>
                </button>


                <!-- =================================================
                     PRIVACY
                ================================================== -->

                <p class="form-disclaimer">

                    🔒 Your bill is kept private and used only to review your
                    business services. No obligation. Prefer to talk?

                    <a
                        href="<?php echo esc_attr($global_phone_href); ?>"
                    >
                        Call <?php echo esc_html($global_phone); ?>
                    </a>

                </p>


            </form>


        </div>

    </div>

</section>


<?php get_footer(); ?>
