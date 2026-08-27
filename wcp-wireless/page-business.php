<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| BUSINESS OVERVIEW - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$business_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('business_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_heading = $business_field(
    'hero_heading',
    'You Get Rogers. You Deal With Us.'
);

$hero_description = $business_field(
    'hero_description',
    'The Rogers products and network your business needs — backed by a local team that knows your business and answers the phone.'
);

$hero_image = $business_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-laptop-cafe.jpg'
);


/*
|--------------------------------------------------------------------------
| WHY WCP
|--------------------------------------------------------------------------
*/

$why_items = array(

    array(
        'number' => '01',

        'title' => $business_field(
            'why_1_title',
            'Your Own Account Manager'
        ),

        'text' => $business_field(
            'why_1_text',
            'No call queues. No bouncing between departments.'
        ),
    ),

    array(
        'number' => '02',

        'title' => $business_field(
            'why_2_title',
            'Local, Personal Support'
        ),

        'text' => $business_field(
            'why_2_text',
            'Face-to-face service when you need it.'
        ),
    ),

    array(
        'number' => '03',

        'title' => $business_field(
            'why_3_title',
            'The Right Rogers Plan'
        ),

        'text' => $business_field(
            'why_3_text',
            'We compare across Rogers\' full catalogue to find the best fit for your business.'
        ),
    ),

);


$banner_eyebrow = $business_field(
    'banner_eyebrow',
    'The Bottom Line'
);

$banner_heading = $business_field(
    'banner_heading',
    'Rogers network. WCP service.'
);

$banner_text = $business_field(
    'banner_text',
    'Same Rogers products and network — with a local team in your corner.'
);

$banner_button = $business_field(
    'banner_button',
    'Get My Free Business Review →'
);

$why_tagline = $business_field(
    'why_tagline',
    'Serving Canadian businesses since 1990'
);


/*
|--------------------------------------------------------------------------
| BUSINESS SERVICES
|--------------------------------------------------------------------------
*/

$services_heading = $business_field(
    'services_heading',
    'Rogers Business Services'
);

$services_intro = $business_field(
    'services_intro',
    'Everything your business needs to stay connected, in one place.'
);

$services_background = $business_field(
    'services_background',
    get_template_directory_uri() . '/images/office image.png'
);


$services = array(

    /*
    |--------------------------------------------------------------------------
    | BUSINESS WIRELESS
    |--------------------------------------------------------------------------
    */

    array(

        'title' => $business_field(
            'service_1_title',
            'Business Wireless'
        ),

        'text' => $business_field(
            'service_1_text',
            'Data plans, device financing, and BYOD options for teams of any size. We\'ll match you to the right plan instead of the most expensive one.'
        ),

        'button' => $business_field(
            'service_1_button',
            'See Wireless Options'
        ),

        'url' => home_url('/business-wireless/'),
    ),


    /*
    |--------------------------------------------------------------------------
    | BUSINESS INTERNET
    |--------------------------------------------------------------------------
    */

    array(

        'title' => $business_field(
            'service_2_title',
            'Business Internet'
        ),

        'text' => $business_field(
            'service_2_text',
            'Reliable, fast internet built for day-to-day operations — from single-location offices to multi-site businesses that need dependable uptime.'
        ),

        'button' => $business_field(
            'service_2_button',
            'See Internet Options'
        ),

        'url' => home_url('/business-internet/'),
    ),


    /*
    |--------------------------------------------------------------------------
    | BUSINESS PHONE
    |--------------------------------------------------------------------------
    */

    array(

        'title' => $business_field(
            'service_3_title',
            'Business Phone'
        ),

        'text' => $business_field(
            'service_3_text',
            'Keep your team connected with landline and cloud-based phone solutions that scale as you grow.'
        ),

        'button' => $business_field(
            'service_3_button',
            'See Phone Options'
        ),

        'url' => home_url('/business-phone/'),
    ),


    /*
    |--------------------------------------------------------------------------
    | POINT OF SALE
    |--------------------------------------------------------------------------
    */

    array(

        'title' => $business_field(
            'service_4_title',
            'Point of Sale'
        ),

        'text' => $business_field(
            'service_4_text',
            'Rogers POS, powered by Clover — accept payments anywhere with transparent pricing and easy-to-use sales, inventory, and employee management tools.'
        ),

        'button' => $business_field(
            'service_4_button',
            'See POS Options'
        ),

        'url' => home_url('/business-pos/'),
    ),


    /*
    |--------------------------------------------------------------------------
    | FLEET MANAGEMENT
    |--------------------------------------------------------------------------
    */

    array(

        'title' => $business_field(
            'service_5_title',
            'Fleet Management'
        ),

        'text' => $business_field(
            'service_5_text',
            'Control costs, increase driver safety, and simplify compliance with best-in-class fleet monitoring for your vehicles and mobile assets.'
        ),

        'button' => $business_field(
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
| TESTIMONIALS
|--------------------------------------------------------------------------
*/

$testimonials_heading = $business_field(
    'testimonials_heading',
    'What Our Clients Say'
);

$testimonials_intro = $business_field(
    'testimonials_intro',
    'Real feedback from businesses we\'ve worked with.'
);


$testimonials = array(


    /*
    |--------------------------------------------------------------------------
    | SIMCOE IT SOLUTIONS
    |--------------------------------------------------------------------------
    */

    array(

        'logo' =>
            get_template_directory_uri() .
            '/images/testimonial-simcoe-it.png',

        'logo_alt' =>
            'Simcoe IT Solutions',

        'quote' => $business_field(
            'testimonial_1_quote',
            'The WCP team made switching to Rogers Business very painless. I\'d definitely work with them again.'
        ),

        'name' => $business_field(
            'testimonial_1_name',
            'Rob N.'
        ),

        'role' => $business_field(
            'testimonial_1_role',
            'President, Simcoe IT Solutions Inc.'
        ),
    ),


    /*
    |--------------------------------------------------------------------------
    | AVAYA
    |--------------------------------------------------------------------------
    */

    array(

        'logo' =>
            get_template_directory_uri() .
            '/images/testimonial-avaya.png',

        'logo_alt' =>
            'Avaya',

        'quote' => $business_field(
            'testimonial_2_quote',
            'I highly recommend the WCP team. During recent contract negotiations with Rogers, they demonstrated strong professionalism and expertise, ensuring a fair and efficient outcome. They\'re approachable, responsive, and always willing to help — and their problem-solving ability means they quickly find practical solutions. Overall, a great experience.'
        ),

        'name' => $business_field(
            'testimonial_2_name',
            'Debbie B.'
        ),

        'role' => $business_field(
            'testimonial_2_role',
            'Deals Desk Manager / Sales Operations Specialist, Avaya'
        ),
    ),


    /*
    |--------------------------------------------------------------------------
    | OAK VALLEY HEALTH
    |--------------------------------------------------------------------------
    */

    array(

        'logo' =>
            get_template_directory_uri() .
            '/images/testimonial-oak-valley-health.png',

        'logo_alt' =>
            'Oak Valley Health',

        'quote' => $business_field(
            'testimonial_3_quote',
            'I\'ve worked with the WCP team for over 9 years now. They\'ve looked after our corporate plan for our employees at Markham Stouffville Hospital, keeping our staff up to date with current offers and promotions. Very knowledgeable at what they do.'
        ),

        'name' => $business_field(
            'testimonial_3_name',
            'Lee E.'
        ),

        'role' => $business_field(
            'testimonial_3_role',
            'Network Analyst, OVH'
        ),
    ),

);


$review_link_text = $business_field(
    'review_link_text',
    '⭐ Had a great experience with us? Leave us a review on Google →'
);

$review_link_url = $business_field(
    'review_link_url',
    'https://g.page/r/CX3o5GNSAmziEAE/review'
);


/*
|--------------------------------------------------------------------------
| BILL REVIEW
|--------------------------------------------------------------------------
*/

$review_eyebrow = $business_field(
    'review_eyebrow',
    'FREE BUSINESS BILL REVIEW'
);

$review_heading = $business_field(
    'review_heading',
    'Upload your bill. We\'ll do the homework.'
);

$review_intro = $business_field(
    'review_intro',
    'Send us a recent bill and a WCP business specialist will review your current services and available options.'
);


$review_benefits = array(

    array(

        'title' => $business_field(
            'review_1_title',
            'Review your current costs'
        ),

        'text' => $business_field(
            'review_1_text',
            'We\'ll look at what you\'re currently paying and what services you have.'
        ),
    ),

    array(

        'title' => $business_field(
            'review_2_title',
            'Identify opportunities'
        ),

        'text' => $business_field(
            'review_2_text',
            'We\'ll check available Rogers Business options that may better fit your needs.'
        ),
    ),

    array(

        'title' => $business_field(
            'review_3_title',
            'Talk to a real person'
        ),

        'text' => $business_field(
            'review_3_text',
            'Your review is handled by a WCP business specialist.'
        ),
    ),

);


$review_form_heading = $business_field(
    'review_form_heading',
    'Get My Free Bill Review'
);

$review_form_intro = $business_field(
    'review_form_intro',
    'Tell us a little about your business.'
);

$review_button = $business_field(
    'review_button',
    'Get My Free Bill Review'
);

?>


<!-- =========================================================
     BUSINESS HERO
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

    </div>

</section>


<!-- =========================================================
     WHY WCP
========================================================= -->

<section
    class="section reveal"
    style="
        background:var(--surface);
    "
>

    <div class="container">


        <div class="why-numbered-grid">

            <?php foreach ($why_items as $item) : ?>

                <div class="why-numbered-item">

                    <span class="why-num">
                        <?php echo esc_html($item['number']); ?>
                    </span>

                    <h3>
                        <?php echo esc_html($item['title']); ?>
                    </h3>

                    <p>
                        <?php echo esc_html($item['text']); ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>


        <!-- BOTTOM LINE BANNER -->

        <div class="why-banner">

            <div class="why-banner-text">

                <span class="why-banner-eyebrow">
                    <?php echo esc_html($banner_eyebrow); ?>
                </span>

                <h3>
                    <?php echo esc_html($banner_heading); ?>
                </h3>

                <p>
                    <?php echo esc_html($banner_text); ?>
                </p>

            </div>


            <a
                href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="btn btn-primary"
            >
                <?php echo esc_html($banner_button); ?>
            </a>

        </div>


        <p class="why-tagline">
            <?php echo esc_html($why_tagline); ?>
        </p>


    </div>

</section>


<!-- =========================================================
     ROGERS BUSINESS SERVICES
========================================================= -->

<section
    class="section reveal section-photo-bg business-services-section"
    style="
        --section-bg-img:url('<?php echo esc_url($services_background); ?>');
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">


        <div class="business-services-heading">

            <h2>
                <?php echo esc_html($services_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($services_intro); ?>
            </p>

        </div>


        <div class="card-grid business-services-six">

            <?php foreach ($services as $service) : ?>

                <div class="card business-service-card">

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
     TESTIMONIALS
========================================================= -->

<section
    class="section reveal testimonials-section"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">


        <div class="testimonials-heading">

            <h2>
                <?php echo esc_html($testimonials_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($testimonials_intro); ?>
            </p>

        </div>


        <div class="testimonial-grid">

            <?php foreach ($testimonials as $testimonial) : ?>

                <div class="testimonial-card">


                    <!-- COMPANY LOGO -->

                    <div class="testimonial-company-logo">

                        <img
                            src="<?php echo esc_url($testimonial['logo']); ?>"
                            alt="<?php echo esc_attr($testimonial['logo_alt']); ?>"
                        >

                    </div>


                    <!-- TESTIMONIAL -->

                    <p class="testimonial-quote">
                        <?php echo esc_html($testimonial['quote']); ?>
                    </p>


                    <!-- ATTRIBUTION -->

                    <div class="testimonial-person">

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


        <!-- GOOGLE REVIEW -->

        <div class="review-cta">

            <a
                href="<?php echo esc_url($review_link_url); ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                <?php echo esc_html($review_link_text); ?>
            </a>

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


            <!-- =================================================
                 REVIEW INTRO
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
                 BILL REVIEW FORM
            ================================================== -->

            <form
                class="lead-form bill-review-form"
                action="https://formspree.io/f/xvkppvjl"
                method="POST"
                enctype="multipart/form-data"
            >


                <div class="form-heading">

                    <h3>
                        <?php echo esc_html($review_form_heading); ?>
                    </h3>

                    <p>
                        <?php echo esc_html($review_form_intro); ?>
                    </p>

                </div>


                <!-- NAME + BUSINESS -->

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


                <!-- PHONE + EMAIL -->

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


                <!-- INTEREST -->

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
                        Review my current bill
                    </option>

                    <option value="Wireless">
                        Business wireless plans
                    </option>

                    <option value="Internet">
                        Business internet plans
                    </option>

                    <option value="Phone">
                        Business phone plans
                    </option>

                    <option value="POS">
                        Point of Sale
                    </option>

                    <option value="Fleet">
                        Fleet Management
                    </option>

                    <option value="Rogers Business Mastercard">
                        Rogers Business Mastercard
                    </option>

                    <option value="Not sure">
                        I'm not sure yet
                    </option>

                </select>


                <!-- BILL UPLOAD -->

                <div class="bill-upload">

                    <label for="business-bill-upload">

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
                        id="business-bill-upload"
                        name="current_bill"
                        accept=".pdf,.jpg,.jpeg,.png,application/pdf,image/jpeg,image/png"
                    >

                </div>


                <!-- MESSAGE -->

                <textarea
                    name="message"
                    rows="4"
                    placeholder="Anything else you'd like us to know? (optional)"
                ></textarea>


                <!-- SUBMIT -->

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


<!-- =========================================================
     BUSINESS PAGE ADDITIONAL STYLES
========================================================= -->

<style>

/* =========================================================
   BUSINESS SERVICES HEADING
========================================================= */

.business-services-heading {
    text-align:center;
    margin-bottom:36px;
}

.business-services-heading h2 {
    color:#ffffff;
}

.business-services-heading .lede {
    color:#ffffff;
    max-width:650px;
    margin-left:auto;
    margin-right:auto;
}


/* =========================================================
   BUSINESS SERVICES - SIX ACROSS
========================================================= */

.card-grid.business-services-six {
    display:grid !important;
    grid-template-columns:repeat(6, minmax(0, 1fr)) !important;
    gap:16px !important;
    align-items:stretch;
}


/* =========================================================
   BUSINESS SERVICE CARDS
========================================================= */

.card-grid.business-services-six .business-service-card {
    display:flex;
    flex-direction:column;

    width:100% !important;
    min-width:0 !important;

    background:#ffffff;
    border:1px solid var(--border);
    border-radius:12px;

    padding:20px 18px;
}


/* TITLE */

.card-grid.business-services-six .business-service-card h3 {
    font-size:17px;
    line-height:1.35;
    margin-top:0;
    margin-bottom:10px;
}


/* DESCRIPTION */

.card-grid.business-services-six .business-service-card p {
    font-size:13px;
    line-height:1.45;
    margin-top:0;
    margin-bottom:18px;
}


/* BUTTONS */

.card-grid.business-services-six .business-service-card .btn-card {
    margin-top:auto;
    align-self:flex-start;

    font-size:12px;
    line-height:1.35;
    padding:9px 12px;
}


/* =========================================================
   TESTIMONIAL HEADING
========================================================= */

.testimonials-heading {
    text-align:center;
    margin-bottom:36px;
}

.testimonials-heading .lede {
    max-width:620px;
    margin-left:auto;
    margin-right:auto;
}


/* =========================================================
   TESTIMONIAL CARDS
========================================================= */

.testimonial-card {
    display:flex;
    flex-direction:column;
}


/* =========================================================
   COMPANY LOGOS
========================================================= */

.testimonial-company-logo {
    height:82px;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-bottom:22px;
    padding-bottom:18px;

    border-bottom:1px solid var(--border);
}

.testimonial-company-logo img {
    display:block;

    width:auto;
    height:auto;

    max-width:220px;
    max-height:64px;

    object-fit:contain;
}


/* =========================================================
   TESTIMONIAL QUOTE
========================================================= */

.testimonial-quote {
    flex-grow:1;
}


/* =========================================================
   TESTIMONIAL PERSON
========================================================= */

.testimonial-person {
    margin-top:auto;
    padding-top:18px;
}

.testimonial-person .testimonial-attribution {
    margin-bottom:3px;
}


/* =========================================================
   SMALL DESKTOP / LAPTOP
========================================================= */

@media (max-width:1180px) {

    .card-grid.business-services-six {
        grid-template-columns:repeat(3, minmax(0, 1fr)) !important;
        gap:18px !important;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width:760px) {

    .card-grid.business-services-six {
        grid-template-columns:repeat(2, minmax(0, 1fr)) !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width:520px) {

    .card-grid.business-services-six {
        grid-template-columns:1fr !important;
    }

    .testimonial-company-logo {
        height:72px;
    }

    .testimonial-company-logo img {
        max-width:190px;
        max-height:56px;
    }

}

</style>


<?php get_footer(); ?>
