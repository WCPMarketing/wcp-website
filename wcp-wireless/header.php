<?php

/*
|--------------------------------------------------------------------------
| GLOBAL HEADER SETTINGS
|--------------------------------------------------------------------------
*/

$front_page_id = (int) get_option('page_on_front');


/*
|--------------------------------------------------------------------------
| PHONE NUMBER
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

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >


    <!-- =====================================================
         FAVICONS
    ====================================================== -->

    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="<?php
            echo esc_url(
                get_template_directory_uri() .
                '/images/favicon-32.png'
            );
        ?>"
    >


    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="<?php
            echo esc_url(
                get_template_directory_uri() .
                '/images/favicon-16.png'
            );
        ?>"
    >


    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="<?php
            echo esc_url(
                get_template_directory_uri() .
                '/images/favicon-180.png'
            );
        ?>"
    >


    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<!-- =========================================================
     TOP PHONE BAR
========================================================= -->

<div class="top-bar">

    <div class="container">

        <a
            href="<?php echo esc_attr($global_phone_href); ?>"
            aria-label="Call <?php echo esc_attr($global_phone); ?>"
        >
            📞 <?php echo esc_html($global_phone); ?>
        </a>

    </div>

</div>


<!-- =========================================================
     SITE HEADER
========================================================= -->

<header class="site-header">

    <div class="container">


        <!-- =================================================
             LOGOS
        ================================================== -->

        <a
            href="<?php echo esc_url(home_url('/')); ?>"
            class="logo-block"
            aria-label="Wireless Communications Plus home"
        >


            <img
                src="<?php
                    echo esc_url(
                        get_template_directory_uri() .
                        '/images/wcp-logo.png'
                    );
                ?>"
                alt="Wireless Communications Plus"
                class="wcp-logo"
            >


            <span class="divider"></span>


            <img
                src="<?php
                    echo esc_url(
                        get_template_directory_uri() .
                        '/images/Rogers_AuthorizedDealer_Logo_Red_EN.png'
                    );
                ?>"
                alt="Rogers Authorized Dealer"
                class="dealer-badge"
            >


        </a>


        <!-- =================================================
             MOBILE MENU BUTTON
        ================================================== -->

        <button
            class="menu-toggle"
            id="menuToggle"
            aria-label="Toggle menu"
            aria-expanded="false"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>


        <!-- =================================================
             MAIN NAVIGATION
        ================================================== -->

        <nav
            class="main-nav"
            id="mainNav"
        >


            <!-- HOME -->

            <a href="<?php echo esc_url(home_url('/')); ?>">
                Home
            </a>


            <!-- =================================================
                 BUSINESS SOLUTIONS
            ================================================== -->

            <div class="nav-dropdown">

                <a
                    href="<?php echo esc_url(home_url('/business/')); ?>"
                    class="nav-dropdown-toggle"
                >

                    Business Solutions


                    <svg
                        width="11"
                        height="11"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >

                        <path d="M6 9l6 6 6-6"/>

                    </svg>

                </a>


                <div class="nav-dropdown-menu">


                    <a
                        href="<?php
                            echo esc_url(
                                home_url('/business-wireless/')
                            );
                        ?>"
                    >
                        Business Wireless
                    </a>


                    <a
                        href="<?php
                            echo esc_url(
                                home_url('/business-internet/')
                            );
                        ?>"
                    >
                        Business Internet
                    </a>


                    <a
                        href="<?php
                            echo esc_url(
                                home_url('/business-phone/')
                            );
                        ?>"
                    >
                        Business Phone
                    </a>


                    <a
                        href="<?php
                            echo esc_url(
                                home_url('/business-pos/')
                            );
                        ?>"
                    >
                        Point of Sale
                    </a>


                    <a
                        href="<?php
                            echo esc_url(
                                home_url('/fleet-management/')
                            );
                        ?>"
                    >
                        Fleet Management
                    </a>


                    <a
                        href="<?php
                            echo esc_url(
                                home_url('/business-mastercard/')
                            );
                        ?>"
                    >
                        Rogers Business Mastercard
                    </a>


                    <a
                        href="<?php
                            echo esc_url(
                                $preferred_program_url
                            );
                        ?>"
                    >
                        Preferred Program
                    </a>


                </div>

            </div>


            <!-- ABOUT -->

            <a
                href="<?php
                    echo esc_url(
                        home_url('/about/')
                    );
                ?>"
            >
                About
            </a>


            <!-- CAREERS -->

            <a
                href="<?php
                    echo esc_url(
                        home_url('/careers/')
                    );
                ?>"
            >
                Careers
            </a>


            <!-- CONTACT -->

            <a
                href="<?php
                    echo esc_url(
                        home_url('/contact/')
                    );
                ?>"
            >
                Contact
            </a>


        </nav>


    </div>

</header>
