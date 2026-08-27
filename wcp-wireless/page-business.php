<!-- =========================================================
     ROGERS BUSINESS SERVICES
========================================================= -->

<section
    class="section reveal section-photo-bg"
    style="
        --section-bg-img: url('<?php echo esc_url(get_template_directory_uri() . '/images/office image.png'); ?>');
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <h2
            style="
                text-align:center;
                color:#ffffff;
            "
        >
            Rogers Business Services
        </h2>

        <p
            class="lede"
            style="
                text-align:center;
                margin-left:auto;
                margin-right:auto;
                color:#ffffff;
            "
        >
            Everything your business needs to stay connected, in one place.
        </p>


        <div class="card-grid business-services-grid">


            <!-- =================================================
                 BUSINESS WIRELESS
            ================================================== -->

            <div class="card">

                <h3>
                    Business Wireless
                </h3>

                <p>
                    Data plans, device financing, and BYOD options for teams
                    of any size. We'll match you to the right plan instead
                    of the most expensive one.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-wireless/')); ?>"
                    class="btn-card"
                >
                    See Wireless Options
                </a>

            </div>


            <!-- =================================================
                 BUSINESS INTERNET
            ================================================== -->

            <div class="card">

                <h3>
                    Business Internet
                </h3>

                <p>
                    Reliable, fast internet built for day-to-day operations —
                    from single-location offices to multi-site businesses that
                    need dependable uptime.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-internet/')); ?>"
                    class="btn-card"
                >
                    See Internet Options
                </a>

            </div>


            <!-- =================================================
                 BUSINESS PHONE
            ================================================== -->

            <div class="card">

                <h3>
                    Business Phone
                </h3>

                <p>
                    Keep your team connected with landline and cloud-based
                    phone solutions that scale as you grow.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-phone/')); ?>"
                    class="btn-card"
                >
                    See Phone Options
                </a>

            </div>


            <!-- =================================================
                 POINT OF SALE
            ================================================== -->

            <div class="card">

                <h3>
                    Point of Sale
                </h3>

                <p>
                    Rogers POS, powered by Clover — accept payments anywhere
                    with transparent pricing and easy-to-use sales, inventory,
                    and employee management tools.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-pos/')); ?>"
                    class="btn-card"
                >
                    See POS Options
                </a>

            </div>


            <!-- =================================================
                 FLEET MANAGEMENT
            ================================================== -->

            <div class="card">

                <h3>
                    Fleet Management
                </h3>

                <p>
                    Control costs, increase driver safety, and simplify
                    compliance with best-in-class fleet monitoring for your
                    vehicles and mobile assets.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/fleet-management/')); ?>"
                    class="btn-card"
                >
                    See Fleet Options
                </a>

            </div>


            <!-- =================================================
                 ROGERS BUSINESS MASTERCARD
            ================================================== -->

            <div class="card">

                <h3>
                    Rogers Business Mastercard
                </h3>

                <p>
                    Earn cash back on everyday business purchases and unlock
                    added value when you have an eligible Rogers or Shaw
                    business service.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-mastercard/')); ?>"
                    class="btn-card"
                >
                    See Mastercard Benefits
                </a>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     BUSINESS SERVICES GRID
========================================================= -->

<style>

.card-grid.business-services-grid {
    display:grid !important;
    grid-template-columns:repeat(3, minmax(0, 1fr)) !important;
    gap:20px !important;
    max-width:1000px;
    margin-left:auto;
    margin-right:auto;
}

.card-grid.business-services-grid > .card {
    width:100% !important;
    min-width:0 !important;
}


/* TABLET */

@media (max-width:800px) {

    .card-grid.business-services-grid {
        grid-template-columns:repeat(2, minmax(0, 1fr)) !important;
    }

}


/* MOBILE */

@media (max-width:560px) {

    .card-grid.business-services-grid {
        grid-template-columns:1fr !important;
    }

}

</style>
