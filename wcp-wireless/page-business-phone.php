<?php get_header(); ?>

<section
    class="hero hero-photo"
    style="--hero-img: url('<?php echo esc_url(get_template_directory_uri() . '/images/hero-professional-call.jpg'); ?>');"
>
    <div class="container">

        <h1>Business phone solutions that keep your team connected</h1>

        <p>
            Modern business phone solutions with cloud features, mobile access,
            and local support from a team that knows your business.
        </p>

        <div class="actions">

            <a
                class="btn btn-primary"
                href="<?php echo esc_url(home_url('/contact/')); ?>"
            >
                Get My Free Business Review
            </a>

            <a
                class="link-inline"
                href="tel:+18338441977"
            >
                Or call 1-833-844-1977
            </a>

        </div>

    </div>
</section>
