<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| FLEET MANAGEMENT - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$fleet_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('fleet_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_heading = $fleet_field(
    'hero_heading',
    'Best-in-class fleet monitoring, all in one place'
);

$hero_description = $fleet_field(
    'hero_description',
    'Control costs, increase driver safety, simplify compliance, and decrease downtime with Rogers Fleet Management.'
);

$hero_button = $fleet_field(
    'hero_button',
    'Speak With a Fleet Specialist'
);

$hero_image = $fleet_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-office-meeting.jpg'
);


/*
|--------------------------------------------------------------------------
| BENEFITS
|--------------------------------------------------------------------------
*/

$benefits_heading = $fleet_field(
    'benefits_heading',
    'Drive change with fleet management'
);

$benefits_intro = $fleet_field(
    'benefits_intro',
    'Full insight into your vehicles, so you can steer your business in the right direction.'
);

$benefits = array(

    array(
        'title' => $fleet_field(
            'benefit_1_title',
            'Improve safety'
        ),

        'text' => $fleet_field(
            'benefit_1_text',
            'Protect your staff, vehicles, and cargo with alerts and reporting for weather, engine diagnostic data, and driver behaviour.'
        ),
    ),

    array(
        'title' => $fleet_field(
            'benefit_2_title',
            'Reduce costs'
        ),

        'text' => $fleet_field(
            'benefit_2_text',
            'Decrease downtime, minimize wasteful activities, and maximize fleet operations with route optimization, fuel monitoring, and proactive maintenance.'
        ),
    ),

    array(
        'title' => $fleet_field(
            'benefit_3_title',
            'Simplify compliance'
        ),

        'text' => $fleet_field(
            'benefit_3_text',
            'Take the administration and bookkeeping out of regulatory compliance with automated reporting and ELDs designed to satisfy all levels of government regulation.'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| FLEET SOLUTIONS
|--------------------------------------------------------------------------
*/

$solutions_heading = $fleet_field(
    'solutions_heading',
    'What fleet management solutions give you'
);

$solutions_intro = $fleet_field(
    'solutions_intro',
    'Comprehensive insight into the forces shaping your business — on a single interactive dashboard, available 24/7 on your device.'
);


$solutions = array(

    array(
        'title' => $fleet_field(
            'solution_1_title',
            'Monitoring & Management'
        ),

        'text' => $fleet_field(
            'solution_1_text',
            'Track vehicle location, speed, and more to optimize operational efficiencies, save costs, and promote safety.'
        ),

        'button' => $fleet_field(
            'solution_1_button',
            'Learn More'
        ),
    ),

    array(
        'title' => $fleet_field(
            'solution_2_title',
            'Mixed Fleets'
        ),

        'text' => $fleet_field(
            'solution_2_text',
            'Leverage a single solution to manage and track your fleet of vehicles, equipment, trailers, or other mobile assets.'
        ),

        'button' => $fleet_field(
            'solution_2_button',
            'Learn More'
        ),
    ),

    array(
        'title' => $fleet_field(
            'solution_3_title',
            'Winter Fleets'
        ),

        'text' => $fleet_field(
            'solution_3_text',
            'Monitor fleet health, improve dispatch efficiency, and optimize asset utilization through winter conditions.'
        ),

        'button' => $fleet_field(
            'solution_3_button',
            'Learn More'
        ),
    ),

    array(
        'title' => $fleet_field(
            'solution_4_title',
            'ELDs & HoS Compliance'
        ),

        'text' => $fleet_field(
            'solution_4_text',
            'Officially certified to comply with the federal ELD mandate and keep everyone on the road safe.'
        ),

        'button' => $fleet_field(
            'solution_4_button',
            'Learn More'
        ),
    ),

    array(
        'title' => $fleet_field(
            'solution_5_title',
            'Driver Monitoring & Coaching'
        ),

        'text' => $fleet_field(
            'solution_5_text',
            'AI dashcams help prevent accidents with immediate alerts for speeding and seatbelt use, along with fuel usage monitoring.'
        ),

        'button' => $fleet_field(
            'solution_5_button',
            'Learn More'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| VIDEO
|--------------------------------------------------------------------------
*/

$video_heading = $fleet_field(
    'video_heading',
    'See it in action'
);

$video_intro = $fleet_field(
    'video_intro',
    'A closer look at how Rogers fleet monitoring helps businesses like yours.'
);

$video_url = $fleet_field(
    'video_url',
    'https://www.youtube.com/embed/Q1jGyOwYXVs'
);

$video_title = $fleet_field(
    'video_title',
    'IoT fleet management with Rogers'
);


/*
|--------------------------------------------------------------------------
| WHY ROGERS
|--------------------------------------------------------------------------
*/

$why_heading = $fleet_field(
    'why_heading',
    'Why Rogers for Fleet Management'
);

$why_items = array(

    $fleet_field(
        'why_1',
        'Over 20 years of experience delivering carefully selected IoT solutions'
    ),

    $fleet_field(
        'why_2',
        'A dedicated service delivery team handles the details, start to finish'
    ),

    $fleet_field(
        'why_3',
        'Simple installation — self-install, or certified installers come to you'
    ),

    $fleet_field(
        'why_4',
        'Coast-to-coast network options, from 4G LTE and 5G to low-power IoT networks'
    ),

);

$why_note = $fleet_field(
    'why_note',
    'Built on trusted technology from industry leaders like Geotab and PowerFleet, turning your vehicle and asset data into actionable safety and operational insights.'
);


/*
|--------------------------------------------------------------------------
| FLEET CONSULTATION
|--------------------------------------------------------------------------
*/

$consultation_eyebrow = $fleet_field(
    'consultation_eyebrow',
    'FREE FLEET CONSULTATION'
);

$consultation_heading = $fleet_field(
    'consultation_heading',
    'Tell us about your fleet. We\'ll do the homework.'
);

$consultation_intro = $fleet_field(
    'consultation_intro',
    'Share a few details about your vehicles and a WCP business specialist will recommend the right fleet management solution.'
);


$consultation_benefits = array(

    array(
        'title' => $fleet_field(
            'consultation_1_title',
            'Review your current setup'
        ),

        'text' => $fleet_field(
            'consultation_1_text',
            'We\'ll look at your fleet size and how you\'re tracking it today, if at all.'
        ),
    ),

    array(
        'title' => $fleet_field(
            'consultation_2_title',
            'Identify opportunities'
        ),

        'text' => $fleet_field(
            'consultation_2_text',
            'We\'ll match you to the right monitoring and compliance solution for your fleet.'
        ),
    ),

    array(
        'title' => $fleet_field(
            'consultation_3_title',
            'Talk to a real person'
        ),

        'text' => $fleet_field(
            'consultation_3_text',
            'Your consultation is handled by a WCP business specialist.'
        ),
    ),

);


$consultation_button = $fleet_field(
    'consultation_button',
    'Get My Free Fleet Consultation'
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
                href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="btn btn-primary"
            >
                <?php echo esc_html($hero_button); ?>
            </a>

            <a
                href="tel:+18338441977"
                class="link-inline"
            >
                Or call 1-833-844-1977
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     FLEET BENEFITS
========================================================= -->

<section
    class="section"
    style="padding-bottom:64px;"
>

    <div class="container">

        <h2 style="text-align:center;">
            <?php echo esc_html($benefits_heading); ?>
        </h2>

        <p
            class="lede"
            style="
                text-align:center;
                margin-left:auto;
                margin-right:auto;
            "
        >
            <?php echo esc_html($benefits_intro); ?>
        </p>


        <div class="feature-strip reveal">


            <?php foreach ($benefits as $index => $benefit) : ?>

                <div>

                    <div class="feature-icon">


                        <?php if ($index === 0) : ?>

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


                        <?php elseif ($index === 1) : ?>

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


                        <?php else : ?>

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

                                <path d="M8 12l3 3 5-6"/>
                            </svg>

                        <?php endif; ?>


                    </div>

                    <h4>
                        <?php echo esc_html($benefit['title']); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($benefit['text']); ?>
                    </p>

                </div>

            <?php endforeach; ?>


        </div>

    </div>

</section>


<!-- =========================================================
     FLEET SOLUTIONS
========================================================= -->

<section
    class="section reveal"
    style="
        background:var(--surface);
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <h2
            style="
                text-align:center;
                margin-top:48px;
            "
        >
            <?php echo esc_html($solutions_heading); ?>
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
            <?php echo esc_html($solutions_intro); ?>
        </p>


        <div
            class="card-grid cols-5"
            style="margin-top:32px;"
        >


            <?php foreach ($solutions as $solution) : ?>

                <div class="card">

                    <h3>
                        <?php echo esc_html($solution['title']); ?>
                    </h3>

                    <p>
                        <?php echo esc_html($solution['text']); ?>
                    </p>

                    <a
                        href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="btn-card"
                    >
                        <?php echo esc_html($solution['button']); ?>
                    </a>

                </div>

            <?php endforeach; ?>


        </div>

    </div>

</section>


<!-- =========================================================
     VIDEO
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <h2 style="text-align:center;">
            <?php echo esc_html($video_heading); ?>
        </h2>

        <p
            class="lede"
            style="
                text-align:center;
                margin-left:auto;
                margin-right:auto;
                margin-bottom:32px;
            "
        >
            <?php echo esc_html($video_intro); ?>
        </p>


        <?php if ($video_url) : ?>

            <div class="video-embed">

                <iframe
                    src="<?php echo esc_url($video_url); ?>"
                    title="<?php echo esc_attr($video_title); ?>"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    loading="lazy"
                ></iframe>

            </div>

        <?php endif; ?>


    </div>

</section>


<!-- =========================================================
     WHY ROGERS
========================================================= -->

<section
    class="section reveal"
    style="
        background:var(--surface);
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <h2 style="text-align:center;">
            <?php echo esc_html($why_heading); ?>
        </h2>


        <div
            class="why-grid"
            style="margin-top:24px;"
        >

            <?php foreach ($why_items as $item) : ?>

                <div class="why-item">

                    <span class="icon">
                        ✓
                    </span>

                    <?php echo esc_html($item); ?>

                </div>

            <?php endforeach; ?>

        </div>


        <p
            style="
                margin-top:24px;
                color:var(--text-muted);
                font-size:14.5px;
                max-width:640px;
            "
        >
            <?php echo esc_html($why_note); ?>
        </p>

    </div>

</section>


<!-- =========================================================
     FLEET CONSULTATION
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


            <!-- Consultation Intro -->

            <div class="review-form-intro">

                <span class="section-eyebrow">
                    <?php echo esc_html($consultation_eyebrow); ?>
                </span>

                <h2>
                    <?php echo esc_html($consultation_heading); ?>
                </h2>

                <p class="lede">
                    <?php echo esc_html($consultation_intro); ?>
                </p>


                <div class="review-benefits">

                    <?php foreach ($consultation_benefits as $benefit) : ?>

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


            <!-- Consultation Form -->

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
                'file_too_large'  => 'The uploaded fleet list is too large. Please choose a file under 10 MB.',
                'file_type'       => 'Please upload a PDF, JPG, JPEG or PNG file.',
                'upload_error'    => 'The fleet list could not be uploaded. Please try again.',
                'upload_save'     => 'The fleet list could not be saved. Please try again.',
                'storage'         => 'The fleet list could not be stored. Please try again or contact us.',
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
                    value="Fleet Management"
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
                        <?php echo esc_html($consultation_button); ?>
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

                    <option value="New fleet management">
                        Setting up fleet management
                    </option>

                    <option value="ELD compliance">
                        ELD &amp; HoS compliance
                    </option>

                    <option value="Switching provider">
                        Switching from another provider
                    </option>

                    <option value="Not sure">
                        I'm not sure yet
                    </option>

                </select>

                <div class="bill-upload">

                    <label for="fleet-list-upload">

                        <span class="upload-icon">
                            ↑
                        </span>

                        <span class="upload-copy">

                            <strong>
                                Upload your current fleet list
                            </strong>

                            <small>
                                Optional — PDF, JPG or PNG — max 10 MB
                            </small>

                        </span>

                    </label>

                    <input
                        type="file"
                        id="fleet-list-upload"
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
                    <?php echo esc_html($consultation_button); ?>
                </button>

                <p class="form-disclaimer">

                    🔒 Your information is kept private and used only to review
                    your business needs. No obligation. Prefer to talk?

                    <a href="tel:+18338441977">
                        Call 1-833-844-1977
                    </a>

                </p>

            </form>

        </div>

    </div>

</section>


<?php get_footer(); ?>
