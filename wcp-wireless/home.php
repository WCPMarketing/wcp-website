<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| BLOG PAGE
|--------------------------------------------------------------------------
|
| WordPress automatically uses home.php for the Posts page.
|
*/

$blog_hero_image =
    get_template_directory_uri() .
    '/images/hero-office-meeting.jpg';

?>


<!-- =========================================================
     BLOG HERO
========================================================= -->

<section
    class="hero hero-photo"
    style="
        --hero-img:url('<?php echo esc_url($blog_hero_image); ?>');
    "
>

    <div class="container">

        <div class="hero-copy">

            <span class="hero-eyebrow">
                WCP Insights
            </span>

            <h1>
                Business Insights &amp; Updates
            </h1>

            <p>
                Helpful information about business wireless,
                internet, communications, and technology.
            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     BLOG POSTS
========================================================= -->

<section class="section reveal">

    <div class="container">


        <?php if (have_posts()) : ?>


            <div class="blog-grid">


                <?php while (have_posts()) : ?>

                    <?php the_post(); ?>


                    <article
                        id="post-<?php the_ID(); ?>"
                        <?php post_class('blog-card'); ?>
                    >


                        <!-- =====================================
                             FEATURED IMAGE
                        ====================================== -->

                        <?php if (has_post_thumbnail()) : ?>

                            <a
                                href="<?php the_permalink(); ?>"
                                class="blog-card-image"
                                aria-label="<?php echo esc_attr(get_the_title()); ?>"
                            >

                                <?php

                                the_post_thumbnail(
                                    'large',
                                    array(
                                        'loading' => 'lazy',
                                    )
                                );

                                ?>

                            </a>

                        <?php endif; ?>


                        <!-- =====================================
                             CONTENT
                        ====================================== -->

                        <div class="blog-card-content">


                            <div class="blog-card-date">

                                <?php
                                echo esc_html(
                                    get_the_date()
                                );
                                ?>

                            </div>


                            <h2 class="blog-card-title">

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                                </a>

                            </h2>


                            <div class="blog-card-excerpt">

                                <?php the_excerpt(); ?>

                            </div>


                            <a
                                href="<?php the_permalink(); ?>"
                                class="btn-card"
                            >
                                Read Article →
                            </a>


                        </div>


                    </article>


                <?php endwhile; ?>


            </div>


            <!-- =================================================
                 PAGINATION
            ================================================== -->

            <div class="blog-pagination">

                <?php

                the_posts_pagination(
                    array(

                        'mid_size'  => 2,

                        'prev_text' =>
                            '← Previous',

                        'next_text' =>
                            'Next →',

                    )
                );

                ?>

            </div>


        <?php else : ?>


            <!-- =================================================
                 NO POSTS
            ================================================== -->

            <div class="blog-empty">

                <h2>
                    Articles coming soon
                </h2>

                <p>
                    Check back soon for business wireless,
                    internet, communications, and technology
                    insights from WCP.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/')); ?>"
                    class="btn btn-primary"
                >
                    Back to Home
                </a>

            </div>


        <?php endif; ?>


    </div>

</section>


<!-- =========================================================
     BLOG STYLES
========================================================= -->

<style>

.blog-grid {
    display:grid;
    grid-template-columns:repeat(3, minmax(0, 1fr));
    gap:24px;
    align-items:stretch;
}


.blog-card {
    background:#fff;
    border:1px solid var(--border, #e5e5e5);
    border-radius:14px;
    overflow:hidden;

    display:flex;
    flex-direction:column;

    min-width:0;
}


.blog-card-image {
    display:block;
    width:100%;
    aspect-ratio:16 / 9;
    overflow:hidden;
    background:var(--surface, #f5f5f5);
}


.blog-card-image img {
    display:block;
    width:100%;
    height:100%;
    object-fit:cover;
    transition:transform .3s ease;
}


.blog-card-image:hover img {
    transform:scale(1.03);
}


.blog-card-content {
    padding:24px;

    display:flex;
    flex-direction:column;

    flex:1;
}


.blog-card-date {
    font-size:12px;
    font-weight:700;
    letter-spacing:.06em;
    text-transform:uppercase;

    color:var(--red);

    margin-bottom:10px;
}


.blog-card-title {
    font-size:22px;
    line-height:1.25;

    margin:0 0 12px;
}


.blog-card-title a {
    color:inherit;
    text-decoration:none;
}


.blog-card-title a:hover {
    color:var(--red);
}


.blog-card-excerpt {
    color:var(--text-muted);
    font-size:14.5px;
    line-height:1.65;

    margin-bottom:20px;

    flex:1;
}


.blog-card-excerpt p {
    margin:0;
}


.blog-card .btn-card {
    margin-top:auto;
    align-self:flex-start;
}


/* =========================================================
   PAGINATION
========================================================= */

.blog-pagination {
    margin-top:48px;
}


.blog-pagination .nav-links {
    display:flex;
    justify-content:center;
    align-items:center;
    flex-wrap:wrap;
    gap:8px;
}


.blog-pagination .page-numbers {
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-width:40px;
    min-height:40px;

    padding:8px 12px;

    border:1px solid var(--border, #ddd);
    border-radius:7px;

    color:var(--text);
    text-decoration:none;

    font-size:14px;
    font-weight:600;

    background:#fff;
}


.blog-pagination .page-numbers:hover {
    border-color:var(--red);
    color:var(--red);
}


.blog-pagination .page-numbers.current {
    background:var(--red);
    border-color:var(--red);
    color:#fff;
}


/* =========================================================
   EMPTY BLOG
========================================================= */

.blog-empty {
    max-width:620px;
    margin:0 auto;
    text-align:center;

    padding:60px 20px;
}


.blog-empty h2 {
    margin-bottom:12px;
}


.blog-empty p {
    color:var(--text-muted);
    margin-bottom:28px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width:900px) {

    .blog-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width:600px) {

    .blog-grid {
        grid-template-columns:1fr;
    }

    .blog-card-content {
        padding:20px;
    }

    .blog-card-title {
        font-size:20px;
    }

}

</style>


<?php get_footer(); ?>
