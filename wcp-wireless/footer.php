<?php

/*
|--------------------------------------------------------------------------
| GLOBAL FOOTER SETTINGS
|--------------------------------------------------------------------------
*/

$front_page_id = (int) get_option('page_on_front');


/*
|--------------------------------------------------------------------------
| CONTACT INFORMATION
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


$global_email = function_exists('wcp_global_field')
    ? wcp_global_field(
        'email',
        'sales@wcpwireless.com'
    )
    : 'sales@wcpwireless.com';


$global_address = function_exists('wcp_global_field')
    ? wcp_global_field(
        'address',
        '2875 14th Ave Unit 3, Markham, ON L3R 5H8'
    )
    : '2875 14th Ave Unit 3, Markham, ON L3R 5H8';


/*
|--------------------------------------------------------------------------
| SOCIAL MEDIA
|--------------------------------------------------------------------------
*/

$global_facebook = function_exists('wcp_global_field')
    ? wcp_global_field(
        'facebook',
        'https://www.facebook.com/wcpwireless/'
    )
    : 'https://www.facebook.com/wcpwireless/';


$global_instagram = function_exists('wcp_global_field')
    ? wcp_global_field(
        'instagram',
        'https://www.instagram.com/wcpwireless/'
    )
    : 'https://www.instagram.com/wcpwireless/';


$global_linkedin = function_exists('wcp_global_field')
    ? wcp_global_field(
        'linkedin',
        'https://www.linkedin.com/company/wirelesscommunicationsplus/'
    )
    : 'https://www.linkedin.com/company/wirelesscommunicationsplus/';


/*
|--------------------------------------------------------------------------
| PREFERRED PROGRAM URL
|--------------------------------------------------------------------------
*/

$preferred_program_url =
    'https://portal.wcpwireless.com/lookup#Home';


if (
    function_exists('get_field') &&
    $front_page_id
) {

    $saved_preferred_url = get_field(
        'home_preferred_url',
        $front_page_id
    );

    if (!empty($saved_preferred_url)) {
        $preferred_program_url = $saved_preferred_url;
    }
}


/*
|--------------------------------------------------------------------------
| NORMALIZE OLD PREFERRED PROGRAM URL
|--------------------------------------------------------------------------
*/

if (
    $preferred_program_url ===
        'https://wcpwireless.com/lookup#Home' ||
    $preferred_program_url ===
        'https://www.wcpwireless.com/lookup#Home'
) {

    $preferred_program_url =
        'https://portal.wcpwireless.com/lookup#Home';
}

?>


<!-- =========================================================
     FOOTER CALL TO ACTION
========================================================= -->

<div class="footer-cta">

    <div class="container">

        <p>

            Prefer to talk now? Call

            <strong>

                <a
                    href="<?php echo esc_attr($global_phone_href); ?>"
                >
                    <?php echo esc_html($global_phone); ?>
                </a>

            </strong>

            — we're happy to help.

        </p>

    </div>

</div>


<!-- =========================================================
     SITE FOOTER
========================================================= -->

<footer class="site-footer">

    <div class="container">

        <div class="footer-grid">


            <!-- =================================================
                 BRAND
            ================================================== -->

            <div class="footer-brand">


                <img
                    src="<?php
                        echo esc_url(
                            get_template_directory_uri() .
                            '/images/wcp-logo-white.png'
                        );
                    ?>"
                    alt="Wireless Communications Plus"
                >


                <p>
                    WCP is a Rogers Authorized Dealer serving businesses across
                    Canada since 1990 — wireless, internet, phone, POS, fleet,
                    and connectivity solutions from a local team who knows
                    your name.
                </p>


                <!-- =================================================
                     SOCIAL MEDIA
                ================================================== -->

                <div class="footer-social">


                    <!-- FACEBOOK -->

                    <a
                        href="<?php echo esc_url($global_facebook); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook"
                    >

                        <svg
                            viewBox="0 0 24 24"
                            width="16"
                            height="16"
                            aria-hidden="true"
                        >

                            <path
                                d="M22 12.06C22 6.51 17.52 2 12 2S2 6.51 2 12.06C2 17.06 5.66 21.2 10.44 21.95V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.21 5.96C15.31 5.96 16.46 6.16 16.46 6.16V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.95C18.34 21.2 22 17.06 22 12.06Z"
                            />

                        </svg>

                    </a>


                    <!-- INSTAGRAM -->

                    <a
                        href="<?php echo esc_url($global_instagram); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                    >

                        <svg
                            viewBox="0 0 24 24"
                            width="16"
                            height="16"
                            aria-hidden="true"
                        >

                            <path
                                d="M12 2C14.72 2 15.06 2.01 16.12 2.06C17.18 2.11 17.9 2.28 18.53 2.52C19.19 2.77 19.74 3.11 20.29 3.66C20.79 4.16 21.18 4.76 21.43 5.42C21.67 6.05 21.84 6.77 21.89 7.83C21.94 8.89 21.95 9.23 21.95 11.95C21.95 14.67 21.94 15.01 21.89 16.07C21.84 17.13 21.67 17.85 21.43 18.48C21.18 19.14 20.79 19.69 20.29 20.24C19.74 20.79 19.19 21.13 18.53 21.38C17.9 21.62 17.18 21.79 16.12 21.84C15.06 21.89 14.72 21.9 12 21.9C9.28 21.9 8.94 21.89 7.88 21.84C6.82 21.79 6.1 21.62 5.47 21.38C4.81 21.13 4.26 20.79 3.71 20.24C3.21 19.69 2.82 19.14 2.57 18.48C2.33 17.85 2.16 17.13 2.11 16.07C2.06 15.01 2.05 14.67 2.05 11.95C2.05 9.23 2.06 8.89 2.11 7.83C2.16 6.77 2.33 6.05 2.57 5.42C2.82 4.76 3.21 4.16 3.71 3.66C4.26 3.11 4.81 2.77 5.47 2.52C6.1 2.28 6.82 2.11 7.88 2.06C8.94 2.01 9.28 2 12 2ZM12 7.38C9.44 7.38 7.38 9.44 7.38 12C7.38 14.56 9.44 16.62 12 16.62C14.56 16.62 16.62 14.56 16.62 12C16.62 9.44 14.56 7.38 12 7.38ZM12 15C10.34 15 9 13.66 9 12C9 10.34 10.34 9 12 9C13.66 9 15 10.34 15 12C15 13.66 13.66 15 12 15ZM18.4 7.2C18.4 7.86 17.86 8.4 17.2 8.4C16.54 8.4 16 7.86 16 7.2C16 6.54 16.54 6 17.2 6C17.86 6 18.4 6.54 18.4 7.2Z"
                            />

                        </svg>

                    </a>


                    <!-- LINKEDIN -->

                    <a
                        href="<?php echo esc_url($global_linkedin); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn"
                    >

                        <svg
                            viewBox="0 0 24 24"
                            width="16"
                            height="16"
                            aria-hidden="true"
                        >

                            <path
                                d="M20.45 20.45H16.9V14.88C16.9 13.55 16.87 11.85 15.05 11.85C13.2 11.85 12.92 13.29 12.92 14.79V20.45H9.36V9H12.77V10.56H12.82C13.3 9.66 14.46 8.71 16.19 8.71C19.79 8.71 20.45 11.08 20.45 14.17V20.45ZM5.34 7.43C4.19 7.43 3.26 6.5 3.26 5.34C3.26 4.19 4.19 3.26 5.34 3.26C6.49 3.26 7.43 4.19 7.43 5.34C7.43 6.5 6.49 7.43 5.34 7.43ZM7.12 20.45H3.56V9H7.12V20.45Z"
                            />

                        </svg>

                    </a>


                </div>

            </div>


            <!-- =================================================
                 BUSINESS SOLUTIONS
            ================================================== -->

            <div class="footer-col">

                <h4>
                    Business Solutions
                </h4>


                <a href="<?php echo esc_url(home_url('/business-wireless/')); ?>">
                    Business Wireless
                </a>


                <a href="<?php echo esc_url(home_url('/business-internet/')); ?>">
                    Business Internet
                </a>


                <a href="<?php echo esc_url(home_url('/business-phone/')); ?>">
                    Business Phone
                </a>


                <a href="<?php echo esc_url(home_url('/business-pos/')); ?>">
                    Point of Sale
                </a>


                <a href="<?php echo esc_url(home_url('/fleet-management/')); ?>">
                    Fleet Management
                </a>


                <a href="<?php echo esc_url(home_url('/business-mastercard/')); ?>">
                    Rogers Business Mastercard
                </a>


                <a href="<?php echo esc_url($preferred_program_url); ?>">
                    Preferred Program
                </a>


            </div>


            <!-- =================================================
                 COMPANY
            ================================================== -->

            <div class="footer-col">

                <h4>
                    Company
                </h4>


                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Home
                </a>


                <a href="<?php echo esc_url(home_url('/about/')); ?>">
                    About Us
                </a>


                <a href="<?php echo esc_url(home_url('/business/')); ?>">
                    Business Solutions Overview
                </a>


                <a href="<?php echo esc_url(home_url('/careers/')); ?>">
                    Careers
                </a>


                <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                    Contact Us
                </a>


            </div>


            <!-- =================================================
                 CONTACT
            ================================================== -->

            <div class="footer-col">

                <h4>
                    Contact
                </h4>


                <!-- PHONE -->

                <div class="footer-contact-item">

                    <svg
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >

                        <path
                            d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.5 2.1L8 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2z"
                        />

                    </svg>


                    <a
                        href="<?php echo esc_attr($global_phone_href); ?>"
                    >
                        <?php echo esc_html($global_phone); ?>
                    </a>

                </div>


                <!-- EMAIL -->

                <div class="footer-contact-item">

                    <svg
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >

                        <path d="M4 4h16v16H4z"/>

                        <path d="m4 6 8 7 8-7"/>

                    </svg>


                    <a
                        href="<?php
                            echo esc_attr(
                                'mailto:' . sanitize_email($global_email)
                            );
                        ?>"
                    >
                        <?php echo esc_html($global_email); ?>
                    </a>

                </div>


                <!-- ADDRESS -->

                <div class="footer-contact-item">

                    <svg
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >

                        <path
                            d="M12 22s8-7.4 8-13a8 8 0 1 0-16 0c0 5.6 8 13 8 13z"
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
                                esc_html($global_address)
                            );
                        ?>
                    </span>

                </div>


            </div>


        </div>


        <!-- =================================================
             COPYRIGHT
        ================================================== -->

        <div class="footer-bottom">

            <span>

                &copy;
                <?php echo esc_html(wp_date('Y')); ?>

                Wireless Communications Plus — Rogers Authorized Dealer

            </span>

        </div>


    </div>

</footer>


<?php wp_footer(); ?>

</body>

</html>
