<?php get_header(); ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>


        <!-- Article Header -->

        <section
            class="section"
            style="
                padding-top:64px;
                padding-bottom:40px;
                background:var(--surface);
            "
        >
            <div
                class="container"
                style="
                    max-width:850px;
                    margin:0 auto;
                "
            >

                <p
                    style="
                        font-size:13px;
                        color:var(--text-muted);
                        margin-bottom:12px;
                    "
                >
                    <?php echo esc_html(get_the_date()); ?>
                </p>


                <h1
                    style="
                        margin-bottom:18px;
                        max-width:800px;
                    "
                >
                    <?php the_title(); ?>
                </h1>


                <?php if (has_excerpt()) : ?>

                    <p
                        class="lede"
                        style="
                            max-width:760px;
                            margin-bottom:0;
                        "
                    >
                        <?php echo esc_html(get_the_excerpt()); ?>
                    </p>

                <?php endif; ?>


            </div>
        </section>



        <!-- Featured Image -->

        <?php if (has_post_thumbnail()) : ?>

            <section
                style="
                    padding:0;
                    background:var(--surface);
                "
            >

                <div
                    class="container"
                    style="
                        max-width:950px;
                        margin:0 auto;
                    "
                >

                    <?php
                    the_post_thumbnail(
                        'large',
                        array(
                            'style' => '
                                width:100%;
                                height:auto;
                                max-height:520px;
                                object-fit:cover;
                                display:block;
                                border-radius:12px;
                            '
                        )
                    );
                    ?>

                </div>

            </section>

        <?php endif; ?>



        <!-- Article Content -->

        <section
            class="section"
            style="
                padding-top:56px;
                padding-bottom:72px;
            "
        >

            <div
                class="container"
                style="
                    max-width:780px;
                    margin:0 auto;
                "
            >

                <article
                    <?php post_class(); ?>
                    id="post-<?php the_ID(); ?>"
                >

                    <div
                        class="entry-content"
                        style="
                            font-size:17px;
                            line-height:1.75;
                        "
                    >

                        <?php the_content(); ?>

                    </div>


                    <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">',
                            'after'  => '</div>',
                        )
                    );
                    ?>


                    <!-- Categories -->

                    <?php if (has_category()) : ?>

                        <div
                            style="
                                margin-top:40px;
                                padding-top:24px;
                                border-top:1px solid var(--border);
                                font-size:14px;
                                color:var(--text-muted);
                            "
                        >

                            <strong>
                                Categories:
                            </strong>

                            <?php the_category(', '); ?>

                        </div>

                    <?php endif; ?>


                </article>



                <!-- Back to Blog -->

                <div
                    style="
                        margin-top:48px;
                        padding-top:32px;
                        border-top:1px solid var(--border);
                    "
                >

                    <?php
                    $blog_page_id = get_option('page_for_posts');

                    $blog_url = $blog_page_id
                        ? get_permalink($blog_page_id)
                        : home_url('/blog/');
                    ?>

                    <a
                        href="<?php echo esc_url($blog_url); ?>"
                        class="btn-card"
                    >
                        ← Back to Blog
                    </a>

                </div>



                <!-- Previous / Next Article -->

                <div
                    style="
                        display:flex;
                        justify-content:space-between;
                        gap:24px;
                        margin-top:32px;
                    "
                >

                    <div style="flex:1;">
                        <?php previous_post_link(
                            '%link',
                            '← %title'
                        ); ?>
                    </div>


                    <div
                        style="
                            flex:1;
                            text-align:right;
                        "
                    >
                        <?php next_post_link(
                            '%link',
                            '%title →'
                        ); ?>
                    </div>

                </div>


            </div>

        </section>


    <?php endwhile; ?>

<?php else : ?>


    <section class="section">

        <div class="container">

            <h1>
                Article not found
            </h1>

            <p>
                The article you're looking for could not be found.
            </p>

            <a
                href="<?php echo esc_url(home_url('/blog/')); ?>"
                class="btn btn-primary"
            >
                Return to Blog
            </a>

        </div>

    </section>


<?php endif; ?>


<?php get_footer(); ?>
