<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| HOMEPAGE - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$home_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('home_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_eyebrow = $home_field(
    'hero_eyebrow',
    'Rogers Authorized Dealer • Serving Canadian Businesses Since 1990'
);

$hero_heading = $home_field(
    'hero_heading',
    'Business wireless and connectivity, handled by local experts'
);

$hero_description = $home_field(
    'hero_description',
    'Get business wireless, internet and phone solutions backed by a dedicated account manager who knows your business.'
);

$hero_button = $home_field(
    'hero_button',
    'Upload My Bill for a Free Review'
);

$hero_check_1 = $home_field(
    'hero_check_1',
    'No obligation'
);

$hero_check_2 = $home_field(
    'hero_check_2',
    'Local account manager'
);

$hero_check_3 = $home_field(
    'hero_check_3',
    'Canada-wide service'
);

$hero_image = $home_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-office-meeting.jpg'
);


/*
|--------------------------------------------------------------------------
| HERO BILL REVIEW CARD
|--------------------------------------------------------------------------
*/

$hero_review_label = $home_field(
    'hero_review_label',
    'FREE BUSINESS BILL REVIEW'
);

$hero_review_heading = $home_field(
    'hero_review_heading',
    'Think you\'re paying too much for business wireless?'
);

$hero_review_text = $home_field(
    'hero_review_text',
    'Send us a recent wireless bill and we\'ll review your current services, pricing and available Rogers Business options.'
);

$hero_review_step_1 = $home_field(
    'hero_review_step_1',
    'Upload your current bill'
);

$hero_review_step_2 = $home_field(
    'hero_review_step_2',
    'We review your services'
);

$hero_review_step_3 = $home_field(
    'hero_review_step_3',
    'We show you your options'
);

$hero_review_button = $home_field(
    'hero_review_button',
    'Upload My Bill'
);

$hero_review_note = $home_field(
    'hero_review_note',
    'Your bill is kept private and used only to review your business services. No obligation • Reviewed by a WCP business specialist.'
);


/*
|--------------------------------------------------------------------------
| CREDIBILITY
|--------------------------------------------------------------------------
*/

$credibility = array(

    array(
        'number' => $home_field(
            'credibility_1_number',
            '35+'
        ),
        'label' => $home_field(
            'credibility_1_label',
            'Years in Business'
        ),
    ),

    array(
        'number' => $home_field(
            'credibility_2_number',
            '500+'
        ),
        'label' => $home_field(
            'credibility_2_label',
            'Business Accounts Supported'
        ),
    ),

    array(
        'number' => $home_field(
            'credibility_3_number',
            '10,000+'
        ),
        'label' => $home_field(
            'credibility_3_label',
            'Customers Served'
        ),
    ),

    array(
        'number' => $home_field(
            'credibility_4_number',
            'Official'
        ),
        'label' => $home_field(
            'credibility_4_label',
            'Rogers Authorized Dealer'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| SERVICES
|--------------------------------------------------------------------------
*/

$services_heading = $home_field(
    'services_heading',
    'Our Services'
);

$services_intro = $home_field(
    'services_intro',
    'Built around what your business needs most.'
);


$services = array(

    array(
        'title' => $home_field(
            'service_1_title',
            'Business Wireless'
        ),

        'text' => $home_field(
            'service_1_text',
            'Custom wireless plans for businesses of all sizes — with a dedicated account manager who knows your business by name.'
        ),

        'button' => $home_field(
            'service_1_button',
            'See Wireless Plans'
        ),

        'url' => home_url('/business-wireless/'),
    ),


    array(
        'title' => $home_field(
            'service_2_title',
            'Business Internet'
        ),

        'text' => $home_field(
            'service_2_text',
            'Reliable, fast internet with predictable pricing and local support — whichever way your business connects.'
        ),

        'button' => $home_field(
            'service_2_button',
            'See Internet Plans'
        ),

        'url' => home_url('/business-internet/'),
    ),


    array(
        'title' => $home_field(
            'service_3_title',
            'Business Phone'
        ),

        'text' => $home_field(
            'service_3_text',
            'Streamline business calls with an advanced cloud PBX solution — Teams integration, mobile access, and 24/7 managed support.'
        ),

        'button' => $home_field(
            'service_3_button',
            'See Phone Plans'
        ),

        'url' => home_url('/business-phone/'),
    ),


    array(
        'title' => $home_field(
            'service_4_title',
            'Point of Sale'
        ),

        'text' => $home_field(
            'service_4_text',
            'Rogers POS, powered by Clover — accept payments anywhere with transparent pricing and easy-to-use sales, inventory, and employee management tools.'
        ),

        'button' => $home_field(
            'service_4_button',
            'See POS Options'
        ),

        'url' => home_url('/business-pos/'),
    ),


    array(
        'title' => $home_field(
            'service_5_title',
            'Fleet Management'
        ),

        'text' => $home_field(
            'service_5_text',
            'Control costs, increase driver safety, and simplify compliance with best-in-class fleet monitoring for your vehicles and mobile assets.'
        ),

        'button' => $home_field(
            'service_5_button',
            'See Fleet Options'
        ),

        'url' => home_url('/fleet-management/'),
    ),


    /*
    |--------------------------------------------------------------------------
    | ROGERS BUSINESS MASTERCARD
    |--------------------------------------------------------------------------
    */

    array(
        'title' => 'Rogers Business Mastercard',

        'text' =>
            'Earn cash back on everyday business purchases and unlock added value when you have an eligible Rogers or Shaw business service.',

        'button' =>
            'See Mastercard Benefits',

        'url' =>
            home_url('/business-mastercard/'),
    ),

);


/*
|--------------------------------------------------------------------------
| PREFERRED PROGRAM
|--------------------------------------------------------------------------
*/

$preferred_eyebrow = $home_field(
    'preferred_eyebrow',
    'Employer & Association Pricing'
);

$preferred_heading = $home_field(
    'preferred_heading',
    'Rogers Preferred Program'
);

$preferred_text = $home_field(
    'preferred_text',
    'Exclusive pricing on the latest phones and plans for eligible employers and associations. Check in seconds if your business qualifies.'
);

$preferred_button = $home_field(
    'preferred_button',
    'Check Eligibility'
);

$preferred_url = $home_field(
    'preferred_url',
    'https://portal.wcpwireless.com/lookup#Home'
);


/*
 * Older versions of the field used wcpwireless.com/lookup.
 * Automatically send that old value directly to the new portal.
 */

if (
    $preferred_url === 'https://wcpwireless.com/lookup#Home' ||
    $preferred_url === 'https://www.wcpwireless.com/lookup#Home'
) {
    $preferred_url =
        'https://portal.wcpwireless.com/lookup#Home';
}


/*
|--------------------------------------------------------------------------
| STOREFRONT
|--------------------------------------------------------------------------
*/

$storefront_text = $home_field(
    'storefront_text',
    'A local team you can walk in and talk to — not just a call centre.'
);

$storefront_image = $home_field(
    'storefront_image',
    get_template_directory_uri() . '/images/rogers store front1.png'
);


/*
|--------------------------------------------------------------------------
| ROGERS DEALER
|--------------------------------------------------------------------------
*/

$dealer_text = $home_field(
    'dealer_text',
    'As an Official Rogers Authorized Dealer since 1990, WCP is held to Rogers\' own standards for pricing, service, and support.'
);


/*
|--------------------------------------------------------------------------
| TESTIMONIALS
|--------------------------------------------------------------------------
*/

$testimonials_heading = $home_field(
    'testimonials_heading',
    'What Our Clients Say'
);

$testimonials_intro = $home_field(
    'testimonials_intro',
    'Real feedback from businesses we\'ve worked with.'
);


$testimonials = array(

    array(

        'logo' =>
            get_template_directory_uri() .
            '/images/testimonial-simcoe-it.png',

        'alt' =>
            'Simcoe IT Solutions',

        'quote' => $home_field(
            'testimonial_1_quote',
            'The WCP team made switching to Rogers Business very painless. I\'d definitely work with them again.'
        ),

        'name' => $home_field(
            'testimonial_1_name',
            'Rob N.'
        ),

        'role' => $home_field(
            'testimonial_1_role',
            'President, Simcoe IT Solutions Inc.'
        ),
    ),


    array(

        'logo' =>
            get_template_directory_uri() .
            '/images/testimonial-avaya.png',

        'alt' =>
            'Avaya',

        'quote' => $home_field(
            'testimonial_2_quote',
            'I highly recommend the WCP team. During recent contract negotiations with Rogers, they demonstrated strong professionalism and expertise, ensuring a fair and efficient outcome. They\'re approachable, responsive, and always willing to help — and their problem-solving ability means they quickly find practical solutions. Overall, a great experience.'
        ),

        'name' => $home_field(
            'testimonial_2_name',
            'Debbie B.'
        ),

        'role' => $home_field(
            'testimonial_2_role',
            'Deals Desk Manager / Sales Operations Specialist, Avaya'
        ),
    ),


    array(

        'logo' =>
            get_template_directory_uri() .
            '/images/testimonial-oak-valley-health.png',

        'alt' =>
            'Oak Valley Health',

        'quote' => $home_field(
            'testimonial_3_quote',
            'I\'ve worked with the WCP team for over 9 years now. They\'ve looked after our corporate plan for our employees at Markham Stouffville Hospital, keeping our staff up to date with current offers and promotions. Very knowledgeable at what they do.'
        ),

        'name' => $home_field(
            'testimonial_3_name',
            'Lee E.'
        ),

        'role' => $home_field(
            'testimonial_3_role',
            'Network Analyst, OVH'
        ),
    ),


    array(

        'logo' =>
            get_template_directory_uri() .
            '/images/testimonial-algonquin-family-health-team.png',

        'alt' =>
            'Algonquin Family Health Team',

        'quote' => $home_field(
            'testimonial_4_quote',
            'We have been working with WCP for several years. It\'s always a pleasure working with them - they are pleasant and professional. Their customer service is top-notch and they go above and beyond to find the best solutions for our organization while recognizing our needs. They are responsive and easy to get in touch with which I appreciate. Highly recommend.'
        ),

        'name' => $home_field(
            'testimonial_4_name',
            'Donna Hildebrand'
        ),

        'role' => $home_field(
            'testimonial_4_role',
            'Executive Assistant at Algonquin Family Health Team'
        ),
    ),

);


$google_review_text = $home_field(
    'google_review_text',
    '⭐ Had a great experience with us? Leave us a review on Google →'
);

$google_review_url = $home_field(
    'google_review_url',
    'https://g.page/r/CX3o5GNSAmziEAE/review'
);


/*
|--------------------------------------------------------------------------
| BILL REVIEW
|--------------------------------------------------------------------------
*/

$review_eyebrow = $home_field(
    'review_eyebrow',
    'FREE BUSINESS BILL REVIEW'
);

$review_heading = $home_field(
    'review_heading',
    'Upload your bill. We\'ll do the homework.'
);

$review_intro = $home_field(
    'review_intro',
    'Send us a recent wireless bill and a WCP business specialist will review your current services and available options.'
);


$review_benefits = array(

    array(

        'title' => $home_field(
            'review_1_title',
            'Review your current costs'
        ),

        'text' => $home_field(
            'review_1_text',
            'We\'ll look at what you\'re currently paying and what services you have.'
        ),
    ),


    array(

        'title' => $home_field(
            'review_2_title',
            'Identify opportunities'
        ),

        'text' => $home_field(
            'review_2_text',
            'We\'ll check available Rogers Business options that may better fit your needs.'
        ),
    ),


    array(

        'title' => $home_field(
            'review_3_title',
            'Talk to a real person'
        ),

        'text' => $home_field(
            'review_3_text',
            'Your review is handled by a WCP business specialist.'
        ),
    ),

);


$review_form_heading = $home_field(
    'review_form_heading',
    'Get My Free Bill Review'
);

$review_form_intro = $home_field(
    'review_form_intro',
    'Tell us a little about your business.'
);

$review_button = $home_field(
    'review_button',
    'Get My Free Bill Review'
);

?>


<!-- =========================================================
     HERO
========================================================= -->

<section
    class="hero hero-photo hero-sales"
    style="
        --hero-img:url('<?php echo esc_url($hero_image); ?>');
    "
>

    <div class="container">


        <div class="hero-copy">

            <span class="hero-eyebrow">
                <?php echo esc_html($hero_eyebrow); ?>
            </span>


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
                    href="tel:+18338441977"
                    class="link-inline"
                >
                    Or call 1-833-844-1977
                </a>

            </div>


            <div class="hero-checks">

                <span>
                    ✓ <?php echo esc_html($hero_check_1); ?>
                </span>

                <span>
                    ✓ <?php echo esc_html($hero_check_2); ?>
                </span>

                <span>
                    ✓ <?php echo esc_html($hero_check_3); ?>
                </span>

            </div>


        </div>


        <!-- =================================================
             HERO BILL REVIEW
        ================================================== -->

        <div class="bill-review-card">

            <div class="bill-card-label">
                <?php echo esc_html($hero_review_label); ?>
            </div>


            <h2>
                <?php echo esc_html($hero_review_heading); ?>
            </h2>


            <p>
                <?php echo esc_html($hero_review_text); ?>
            </p>


            <div class="bill-review-steps">


                <div class="bill-step">

                    <span class="step-number">
                        1
                    </span>

                    <span>
                        <?php echo esc_html($hero_review_step_1); ?>
                    </span>

                </div>


                <div class="bill-step">

                    <span class="step-number">
                        2
                    </span>

                    <span>
                        <?php echo esc_html($hero_review_step_2); ?>
                    </span>

                </div>


                <div class="bill-step">

                    <span class="step-number">
                        3
                    </span>

                    <span>
                        <?php echo esc_html($hero_review_step_3); ?>
                    </span>

                </div>


            </div>


            <a
                href="#contact"
                class="btn btn-primary bill-card-button"
            >
                <?php echo esc_html($hero_review_button); ?>
            </a>


            <p class="bill-card-note">
                🔒 <?php echo esc_html($hero_review_note); ?>
            </p>


        </div>


    </div>

</section>


<!-- =========================================================
     CREDIBILITY
========================================================= -->

<section class="section credibility-section reveal">

    <div class="container">

        <div class="credibility-grid">


            <?php foreach ($credibility as $index => $item) : ?>


                <div class="credibility-item">

                    <div class="credibility-icon">


                        <?php if ($index === 0) : ?>

                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >

                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="18"
                                    rx="2"
                                />

                                <path d="M16 2v4M8 2v4M3 10h18"/>

                            </svg>


                        <?php elseif ($index === 1) : ?>


                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >

                                <path
                                    d="M3 21h18M5 21V7l7-4 7 4v14M9 9h1M14 9h1M9 13h1M14 13h1M9 17h1M14 17h1"
                                />

                            </svg>


                        <?php elseif ($index === 2) : ?>


                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >

                                <path
                                    d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                                />

                                <circle
                                    cx="9"
                                    cy="7"
                                    r="4"
                                />

                                <path
                                    d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"
                                />

                            </svg>


                        <?php else : ?>


                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >

                                <path
                                    d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"
                                />

                                <path
                                    d="M8.5 13.5 7 22l5-3 5 3-1.5-8.5"
                                />

                            </svg>


                        <?php endif; ?>


                    </div>


                    <span class="credibility-num">
                        <?php echo esc_html($item['number']); ?>
                    </span>

                    <p>
                        <?php echo esc_html($item['label']); ?>
                    </p>


                </div>


            <?php endforeach; ?>


        </div>

    </div>

</section>


<!-- =========================================================
     SERVICES
========================================================= -->

<section class="section reveal">

    <div class="container">


        <h2 style="text-align:center;">
            <?php echo esc_html($services_heading); ?>
        </h2>


        <p
            class="lede"
            style="
                text-align:center;
                margin-left:auto;
                margin-right:auto;
            "
        >
            <?php echo esc_html($services_intro); ?>
        </p>


        <div class="card-grid home-services-grid">


            <?php foreach ($services as $service) : ?>


                <div class="card home-service-card">

                    <h3>
                        <?php echo esc_html($service['title']); ?>
                    </h3>


                    <p>
                        <?php echo esc_html($service['text']); ?>
                    </p>


                    <a
                        href="<?php echo esc_url($service['url']); ?>"
                        class="btn-card"
                    >
                        <?php echo esc_html($service['button']); ?>
                    </a>

                </div>


            <?php endforeach; ?>


        </div>


    </div>

</section>


<!-- =========================================================
     ROGERS PREFERRED PROGRAM
========================================================= -->

<section
    class="section reveal"
    style="
        background:var(--surface);
        padding-top:56px;
        padding-bottom:56px;
    "
>

    <div
        class="container"
        style="
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:24px;
            flex-wrap:wrap;
        "
    >


        <div style="max-width:520px;">


            <span
                class="eyebrow"
                style="
                    display:block;
                    font-size:11.5px;
                    font-weight:700;
                    letter-spacing:.08em;
                    text-transform:uppercase;
                    color:var(--red);
                    margin-bottom:8px;
                "
            >
                <?php echo esc_html($preferred_eyebrow); ?>
            </span>


            <h3 style="margin:0 0 6px;">
                <?php echo esc_html($preferred_heading); ?>
            </h3>


            <p
                style="
                    margin:0;
                    color:var(--text-muted);
                    font-size:14.5px;
                "
            >
                <?php echo esc_html($preferred_text); ?>
            </p>


        </div>


        <a
            href="<?php echo esc_url($preferred_url); ?>"
            class="btn btn-primary"
            style="
                flex:0 0 auto;
            "
        >
            <?php echo esc_html($preferred_button); ?>
        </a>


    </div>

</section>


<!-- =========================================================
     STOREFRONT
========================================================= -->

<section class="photo-band">

    <img
        src="<?php echo esc_url($storefront_image); ?>"
        alt="Rogers storefront signage"
    >


    <div class="overlay">

        <div class="container">

            <p>
                <?php echo esc_html($storefront_text); ?>
            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     ROGERS AUTHORIZED DEALER
========================================================= -->

<section
    class="section"
    style="
        padding-top:44px;
        padding-bottom:44px;
        background:var(--surface);
        text-align:center;
    "
>

    <div class="container">


        <img
            src="<?php echo esc_url(
                get_template_directory_uri() .
                '/images/Rogers_AuthorizedDealer_Logo_Red_EN.png'
            ); ?>"
            alt="Official Rogers Authorized Dealer"
            style="
                height:30px;
                width:auto;
                margin:0 auto 14px;
            "
        >


        <p
            style="
                font-size:13.5px;
                color:var(--text-muted);
                max-width:480px;
                margin:0 auto;
            "
        >
            <?php echo esc_html($dealer_text); ?>
        </p>


    </div>

</section>


<!-- =========================================================
     TESTIMONIALS
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:100px;
        padding-bottom:64px;
    "
>

    <div class="container">


        <div class="home-testimonials-heading">

            <h2>
                <?php echo esc_html($testimonials_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($testimonials_intro); ?>
            </p>

        </div>


        <div class="testimonial-grid">


            <?php foreach ($testimonials as $testimonial) : ?>


                <div class="testimonial-card home-testimonial-card">


                    <div class="home-testimonial-logo">

                        <img
                            src="<?php echo esc_url($testimonial['logo']); ?>"
                            alt="<?php echo esc_attr($testimonial['alt']); ?>"
                        >

                    </div>


                    <p class="testimonial-quote">
                        <?php echo esc_html($testimonial['quote']); ?>
                    </p>


                    <div class="home-testimonial-person">

                        <p class="testimonial-attribution">
                            <?php echo esc_html($testimonial['name']); ?>
                        </p>

                        <p class="testimonial-role">
                            <?php echo esc_html($testimonial['role']); ?>
                        </p>

                    </div>


                </div>


            <?php endforeach; ?>


        </div>


        <div class="review-cta">

            <a
                href="<?php echo esc_url($google_review_url); ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                <?php echo esc_html($google_review_text); ?>
            </a>

        </div>


    </div>

</section>


<!-- =========================================================
     BILL REVIEW FORM
========================================================= -->

<section
    id="contact"
    class="section form-section reveal"
>

    <div class="container">

        <div class="review-form-layout">


            <!-- Review Intro -->

            <div class="review-form-intro">

                <span class="section-eyebrow">
                    <?php echo esc_html( $review_eyebrow ); ?>
                </span>


                <h2>
                    <?php echo esc_html( $review_heading ); ?>
                </h2>


                <p class="lede">
                    <?php echo esc_html( $review_intro ); ?>
                </p>


                <div class="review-benefits">

                    <?php foreach ( $review_benefits as $benefit ) : ?>

                        <div class="review-benefit">

                            <span>
                                ✓
                            </span>


                            <div>

                                <strong>
                                    <?php echo esc_html( $benefit['title'] ); ?>
                                </strong>


                                <p>
                                    <?php echo esc_html( $benefit['text'] ); ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>


            <!-- Bill Review Form -->

            <?php

            $wcp_form_status = isset( $_GET['wcp_form'] )
                ? sanitize_key( wp_unslash( $_GET['wcp_form'] ) )
                : '';

            $wcp_form_reason = isset( $_GET['wcp_reason'] )
                ? sanitize_key( wp_unslash( $_GET['wcp_reason'] ) )
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


            <form
                class="lead-form bill-review-form"
                action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
                method="POST"
                enctype="multipart/form-data"
            >


                <!-- WordPress Form Handler -->

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
                    value="<?php echo esc_url( get_permalink() . '#contact' ); ?>"
                >


                <input
                    type="hidden"
                    name="wcp_started"
                    value="<?php echo esc_attr( time() ); ?>"
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


                <!-- Form Heading -->

                <div class="form-heading">

                    <h3>
                        <?php echo esc_html( $review_form_heading ); ?>
                    </h3>


                    <p>
                        <?php echo esc_html( $review_form_intro ); ?>
                    </p>

                </div>


                <!-- Success / Error Message -->

                <?php if ( 'success' === $wcp_form_status ) : ?>

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


                <?php elseif ( 'error' === $wcp_form_status ) : ?>

                    <div
                        class="form-message form-error"
                        role="alert"
                    >

                        <?php

                        echo esc_html(
                            isset( $wcp_error_messages[ $wcp_form_reason ] )
                                ? $wcp_error_messages[ $wcp_form_reason ]
                                : 'Something went wrong. Please review the form and try again.'
                        );

                        ?>

                    </div>

                <?php endif; ?>


                <!-- Name / Business Name -->

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


                <!-- Phone / Email -->

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


                <!-- Interest -->

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


                    <option value="Internet and phone">
                        Business internet &amp; phone
                    </option>


                    <option value="Not sure">
                        I'm not sure yet
                    </option>

                </select>


                <!-- Bill Upload -->

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


                <!-- Message -->

                <textarea
                    name="message"
                    rows="4"
                    placeholder="Anything else you'd like us to know? (optional)"
                ></textarea>


                <!-- Submit Button -->

                <button
                    type="submit"
                    class="btn btn-primary"
                >

                    <?php echo esc_html( $review_button ); ?>

                </button>


                <!-- Disclaimer -->

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

<!-- =========================================================
     HOMEPAGE ADDITIONAL STYLES
========================================================= -->

<style>

/* =========================================================
   SERVICES - 3 X 2
========================================================= */

.card-grid.home-services-grid {
    display:grid !important;
    grid-template-columns:repeat(3, minmax(0, 1fr)) !important;
    gap:18px !important;
    align-items:stretch;
}

.card-grid.home-services-grid .home-service-card {
    display:flex;
    flex-direction:column;
    min-width:0;
}

.card-grid.home-services-grid .home-service-card .btn-card {
    margin-top:auto;
    align-self:flex-start;
}


/* =========================================================
   TESTIMONIALS
========================================================= */

.home-testimonials-heading {
    text-align:center;
    margin-bottom:36px;
}

.home-testimonials-heading .lede {
    max-width:620px;
    margin-left:auto;
    margin-right:auto;
}

.home-testimonial-card {
    display:flex;
    flex-direction:column;
}


/* FOUR TESTIMONIALS - BALANCED 2 X 2 GRID */

.testimonial-grid {
    display:grid !important;
    grid-template-columns:repeat(2, minmax(0, 1fr)) !important;
}


/* COMPANY LOGOS */

.home-testimonial-logo {
    height:82px;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-bottom:22px;
    padding-bottom:18px;

    border-bottom:1px solid var(--border);
}

.home-testimonial-logo img {
    display:block;

    width:auto;
    height:auto;

    max-width:220px;
    max-height:64px;

    object-fit:contain;
}


/* ALIGN TESTIMONIAL CONTENT */

.home-testimonial-card .testimonial-quote {
    flex-grow:1;
}

.home-testimonial-person {
    margin-top:auto;
    padding-top:18px;
}

.home-testimonial-person .testimonial-attribution {
    margin-bottom:3px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width:800px) {

    .card-grid.home-services-grid {
        grid-template-columns:repeat(2, minmax(0, 1fr)) !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width:560px) {

    .card-grid.home-services-grid {
        grid-template-columns:1fr !important;
    }

    .testimonial-grid {
        grid-template-columns:1fr !important;
    }

    .home-testimonial-logo {
        height:72px;
    }

    .home-testimonial-logo img {
        max-width:190px;
        max-height:56px;
    }

}

</style>


<?php get_footer(); ?>
