<?php get_header(); ?>


<!-- Blog Hero -->

<section
    class="hero hero-photo"
    style="--hero-img: url('<?php echo esc_url(get_template_directory_uri() . '/images/hero-office-meeting.jpg'); ?>');"
>
    <div class="container">

        <h1>Blog</h1>

        <p>
            News, tips, and updates from the WCP team.
        </p>

    </div>
</section>


<!-- Blog Posts -->

<section
    class="section"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>
    <div class="container">

        <?php if (have_posts()) : ?>

            <div class="card-grid">

                <?php while (have_posts()) : the_post(); ?>

                    <article
                        <?php post_class('card'); ?>
                        id="post-<?php the_ID(); ?>"
                    >

                        <?php if (has_post_thumbnail()) : ?>

                            <a
                                href="<?php the_permalink(); ?>"
                                style="
                                    display:block;
                                    margin:-24px -24px 22px;
                                "
                            >

                                <?php
                                the_post_thumbnail(
                                    'large',
                                    array(
                                        'style' => '
                                            width:100%;
                                            height:220px;
                                            object-fit:cover;
                                            display:block;
                                        '
                                    )
                                );
                                ?>

                            </a>

                        <?php endif; ?>


                        <p
                            style="
                                font-size:12px;
                                color:var(--text-muted);
                                margin-bottom:8px;
                            "
                        >
                            <?php echo esc_html(get_the_date()); ?>
                        </p>


                        <h2
                            style="
                                font-size:24px;
                                margin-bottom:12px;
                            "
                        >

                            <a
                                href="<?php the_permalink(); ?>"
                                style="
                                    color:inherit;
                                    text-decoration:none;
                                "
                            >
                                <?php the_title(); ?>
                            </a>

                        </h2>


                        <div
                            style="
                                color:var(--text-muted);
                                margin-bottom:20px;
                            "
                        >
                            <?php the_excerpt(); ?>
                        </div>


                        <a
                            href="<?php the_permalink(); ?>"
                            class="btn-card"
                        >
                            Read Article →
                        </a>

                    </article>

                <?php endwhile; ?>

            </div>


            <!-- Pagination -->

            <div
                style="
                    margin-top:48px;
                    text-align:center;
                "
            >

                <?php
                the_posts_pagination(
                    array(
                        'mid_size'  => 2,
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    )
                );
                ?>

            </div>


        <?php else : ?>


            <div
                style="
                    text-align:center;
                    max-width:620px;
                    margin:0 auto;
                "
            >

                <h2>
                    Articles coming soon
                </h2>

                <p class="lede">
                    Check back for business wireless, internet, phone,
                    connectivity, and technology updates from the WCP team.
                </p>

            </div>


        <?php endif; ?>

    </div>
</section>


<?php get_footer(); ?>
