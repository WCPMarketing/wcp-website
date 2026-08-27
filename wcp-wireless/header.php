<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon"
          type="image/png"
          sizes="32x32"
          href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon-32.png'); ?>">

    <link rel="icon"
          type="image/png"
          sizes="16x16"
          href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon-16.png'); ?>">

    <link rel="apple-touch-icon"
          sizes="180x180"
          href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon-180.png'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="top-bar">
    <div class="container">
        <a href="tel:+18338441977"
           aria-label="Call 1-833-844-1977">
            📞 1-833-844-1977
        </a>
    </div>
</div>

<header class="site-header">

    <div class="container">

        <a href="<?php echo esc_url(home_url('/')); ?>"
           class="logo-block"
           aria-label="Wireless Communications Plus home">

            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/images/wcp-logo.png'); ?>"
                alt="Wireless Communications Plus"
                class="wcp-logo">

            <span class="divider"></span>

            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/images/Rogers_AuthorizedDealer_Logo_Red_EN.png'); ?>"
                alt="Rogers Authorized Dealer"
                class="dealer-badge">

        </a>

        <button
            class="menu-toggle"
            id="menuToggle"
            aria-label="Toggle menu"
            aria-expanded="false">

            <span></span>
            <span></span>
            <span></span>

        </button>

        <nav class="main-nav" id="mainNav">

            <a href="<?php echo esc_url(home_url('/')); ?>">
                Home
            </a>

            <div class="nav-dropdown">

                <a
                    href="<?php echo esc_url(home_url('/business/')); ?>"
                    class="nav-dropdown-toggle">

                    Business Solutions

                    <svg
                        width="11"
                        height="11"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="round"
                        stroke-linejoin="round">

                        <path d="M6 9l6 6 6-6"/>

                    </svg>

                </a>

                <div class="nav-dropdown-menu">

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
                    
                    <a href="https://portal.wcpwireless.com/lookup#Home">
                        Preferred Program
                    </a>

                </div>

            </div>

            <a href="<?php echo esc_url(home_url('/about/')); ?>">
                About
            </a>
            
            <a href="<?php echo esc_url(home_url('/careers/')); ?>">
                Careers
            </a>
            
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                Contact
            </a>

        </nav>

    </div>

</header>
