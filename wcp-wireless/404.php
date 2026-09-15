<?php

/*
|--------------------------------------------------------------------------
| WCP 404 PAGE
|--------------------------------------------------------------------------
|
| Portal shortcut redirects are handled centrally in functions.php through
| template_redirect. This file now handles only genuine 404 responses.
|
*/

status_header(404);
nocache_headers();

get_header();

?>


<!-- =========================================================
     404 PAGE
========================================================= -->

<section
    class="section"
    style="
        min-height:520px;
        display:flex;
        align-items:center;
    "
>

    <div
        class="container"
        style="
            text-align:center;
            max-width:700px;
        "
    >

        <div
            style="
                font-size:15px;
                font-weight:700;
                letter-spacing:.08em;
                text-transform:uppercase;
                color:var(--red);
                margin-bottom:12px;
            "
        >
            404
        </div>

        <h1>
            Page Not Found
        </h1>

        <p
            class="lede"
            style="
                max-width:560px;
                margin-left:auto;
                margin-right:auto;
            "
        >
            The page you're looking for may have moved or no longer exists.
        </p>

        <div
            class="actions"
            style="
                justify-content:center;
                margin-top:28px;
            "
        >

            <a
                href="<?php echo esc_url(home_url('/')); ?>"
                class="btn btn-primary"
            >
                Back to Home
            </a>

            <a
                href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="btn btn-secondary"
            >
                Contact Us
            </a>

        </div>

    </div>

</section>


<?php get_footer(); ?>
