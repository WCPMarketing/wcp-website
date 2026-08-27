<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| CONTACT PAGE - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$contact_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('contact_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_heading = $contact_field(
    'hero_heading',
    'Let\'s see where you can save'
);

$hero_description = $contact_field(
    'hero_description',
    'Send us a message, or email a copy of your current Rogers bill for a free business review — no obligation.'
);

$hero_image = $contact_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-laptop-cafe.jpg'
);


/*
|--------------------------------------------------------------------------
| CONTACT FORM
|--------------------------------------------------------------------------
*/

$form_heading = $contact_field(
    'form_heading',
    'Get In Touch'
);

$form_intro = $contact_field(
    'form_intro',
    'Fill out the form and we\'ll get back to you, usually within one business day.'
);

$form_button = $contact_field(
    'form_button',
    'Send My Message'
);


/*
|--------------------------------------------------------------------------
| FREE BUSINESS REVIEW
|--------------------------------------------------------------------------
*/

$review_badge = $contact_field(
    'review_badge',
    'Free Business Review'
);

$review_heading = $contact_field(
    'review_heading',
    'Already have Rogers? Let\'s find you savings.'
);

$review_text = $contact_field(
    'review_text',
    'Email a copy of your current bill and our team will review it for free — no obligation, no pressure. We\'ll let you know exactly where you could be saving.'
);

$review_button = $contact_field(
    'review_button',
    'Email sales@wcpwireless.com'
);


/*
|--------------------------------------------------------------------------
| CONTACT DETAILS
|--------------------------------------------------------------------------
*/

$details_heading = $contact_field(
    'details_heading',
    'Contact Details'
);

$phone = $contact_field(
    'phone',
    '1-833-844-1977'
);

$email = $contact_field(
    'email',
    'sales@wcpwireless.com'
);

$address = $contact_field(
    'address',
    '2875 14th Ave Unit 3, Markham, ON L3R 5H8'
);


/*
|--------------------------------------------------------------------------
| CREATE PHONE / EMAIL LINKS
|--------------------------------------------------------------------------
*/

$phone_digits = preg_replace(
    '/[^0-9]/',
    '',
    $phone
);

$phone_href = '';

if ($phone_digits) {
    $phone_href = 'tel:+' . $phone_digits;
}

$email_href = 'mailto:' . sanitize_email($email);


/*
|--------------------------------------------------------------------------
| PRIVACY
|--------------------------------------------------------------------------
*/

$privacy_heading = $contact_field(
    'privacy_heading',
    'A Note on Your Privacy'
);

$privacy_text = $contact_field(
    'privacy_text',
    'Any bill or document you send us is used only by our team to review your current plan and identify potential savings or upgrades. We don\'t share your information with anyone outside WCP and Rogers for the purpose of servicing your account.'
);

?>


<!-- =========================================================
     CONTACT HERO
========================================================= -->

<section
    class="hero hero-photo"
    style="
        --hero-img: url('<?php echo esc_url($hero_image); ?>');
        padding:56px 0;
    "
>

    <div class="container">

        <h1 style="font-size:30px;">
            <?php echo esc_html($hero_heading); ?>
        </h1>

        <p>
            <?php echo esc_html($hero_description); ?>
        </p>

        <p style="margin-top:10px;">

            <a
                href="<?php echo esc_url($email_href); ?>"
                style="
                    color:#fff;
                    text-decoration:underline;
                    font-weight:600;
                "
            >
                <?php echo esc_html($email); ?>
            </a>

        </p>

    </div>

</section>


<!-- =========================================================
     CONTACT CONTENT
========================================================= -->

<section class="section reveal">

    <div
        class="container"
        style="
            display:grid;
            grid-template-columns:1.1fr 1fr;
            gap:48px;
        "
    >


        <!-- =====================================================
             CONTACT FORM
        ====================================================== -->

        <div>

            <h2>
                <?php echo esc_html($form_heading); ?>
            </h2>


            <p class="lede">
                <?php echo esc_html($form_intro); ?>
            </p>


            <form
                class="lead-form"
                action="https://formspree.io/f/xvkppvjl"
                method="POST"
            >


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
                    placeholder="Business name (if applicable)"
                    autocomplete="organization"
                >


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


                <textarea
                    name="message"
                    placeholder="How can we help?"
                    rows="4"
                    style="
                        padding:12px 14px;
                        border:1px solid var(--border);
                        border-radius:var(--radius);
                        font-family:inherit;
                        font-size:15px;
                        resize:vertical;
                    "
                ></textarea>


                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    <?php echo esc_html($form_button); ?>
                </button>


            </form>

        </div>


        <!-- =====================================================
             CONTACT SIDEBAR
        ====================================================== -->

        <div>


            <!-- =================================================
                 FREE BUSINESS REVIEW
            ================================================== -->

            <div
                class="card"
                style="
                    margin-bottom:20px;
                    border:2px solid var(--red);
                "
            >


                <span
                    class="badge"
                    style="
                        margin-bottom:10px;
                        display:inline-block;
                    "
                >
                    <?php echo esc_html($review_badge); ?>
                </span>


                <h3 style="margin-top:0;">
                    <?php echo esc_html($review_heading); ?>
                </h3>


                <p
                    style="
                        font-size:14px;
                        color:var(--text-muted);
                        margin-bottom:14px;
                    "
                >
                    <?php echo esc_html($review_text); ?>
                </p>


                <a
                    href="<?php echo esc_url($email_href); ?>"
                    class="btn btn-primary"
                    style="
                        width:100%;
                        text-align:center;
                        display:block;
                    "
                >
                    <?php echo esc_html($review_button); ?>
                </a>


            </div>


            <!-- =================================================
                 CONTACT DETAILS
            ================================================== -->

            <div
                class="card"
                style="margin-bottom:20px;"
            >


                <h3 style="margin-top:0;">
                    <?php echo esc_html($details_heading); ?>
                </h3>


                <!-- Phone -->

                <p
                    style="
                        margin-bottom:6px;
                        display:flex;
                        align-items:center;
                        gap:8px;
                    "
                >

                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="var(--red)"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="flex:0 0 auto;"
                        aria-hidden="true"
                    >

                        <path
                            d="M22 16.9v3a2 2 0 0 1-2.2 2
                            19.8 19.8 0 0 1-8.6-3.1
                            19.5 19.5 0 0 1-6-6
                            19.8 19.8 0 0 1-3.1-8.7
                            A2 2 0 0 1 4.1 2h3
                            a2 2 0 0 1 2 1.7
                            c.1.9.3 1.8.6 2.7
                            a2 2 0 0 1-.5 2.1
                            L8 9.7a16 16 0 0 0 6 6
                            l1.2-1.2a2 2 0 0 1 2.1-.5
                            c.9.3 1.8.5 2.7.6
                            a2 2 0 0 1 1.7 2z"
                        />

                    </svg>


                    <?php if ($phone_href) : ?>

                        <a href="<?php echo esc_url($phone_href); ?>">
                            <?php echo esc_html($phone); ?>
                        </a>

                    <?php else : ?>

                        <span>
                            <?php echo esc_html($phone); ?>
                        </span>

                    <?php endif; ?>


                </p>


                <!-- Email -->

                <p
                    style="
                        margin-bottom:6px;
                        display:flex;
                        align-items:center;
                        gap:8px;
                    "
                >

                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="var(--red)"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="flex:0 0 auto;"
                        aria-hidden="true"
                    >

                        <path d="M4 4h16v16H4z"/>
                        <path d="m4 6 8 7 8-7"/>

                    </svg>


                    <a href="<?php echo esc_url($email_href); ?>">
                        <?php echo esc_html($email); ?>
                    </a>


                </p>


                <!-- Address -->

                <p
                    style="
                        margin-bottom:0;
                        display:flex;
                        align-items:flex-start;
                        gap:8px;
                    "
                >

                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="var(--red)"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="
                            flex:0 0 auto;
                            margin-top:2px;
                        "
                        aria-hidden="true"
                    >

                        <path
                            d="M12 22s8-7.4 8-13
                            a8 8 0 1 0-16 0
                            c0 5.6 8 13 8 13z"
                        />

                        <circle
                            cx="12"
                            cy="9"
                            r="3"
                        />

                    </svg>


                    <span>
                        <?php
                        echo nl2br(
                            esc_html($address)
                        );
                        ?>
                    </span>


                </p>


            </div>


            <!-- =================================================
                 PRIVACY
            ================================================== -->

            <div class="card">

                <h3 style="margin-top:0;">
                    <?php echo esc_html($privacy_heading); ?>
                </h3>


                <p
                    style="
                        font-size:14px;
                        color:var(--text-muted);
                        margin-bottom:0;
                    "
                >
                    <?php echo esc_html($privacy_text); ?>
                </p>


            </div>


        </div>


    </div>

</section>


<?php get_footer(); ?>
