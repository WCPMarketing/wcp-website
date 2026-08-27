<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| ABOUT PAGE - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$about_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('about_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_heading = $about_field(
    'hero_heading',
    'Built on relationships, not just transactions'
);

$hero_description = $about_field(
    'hero_description',
    'A Rogers Authorized Dealer serving businesses across Canada since 1990 — still local, still hands-on, still answering the phone ourselves.'
);

$hero_image = $about_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-professional-call.jpg'
);


/*
|--------------------------------------------------------------------------
| OUR STORY
|--------------------------------------------------------------------------
*/

$story_heading = $about_field(
    'story_heading',
    'Our Story'
);

$story_paragraph_1 = $about_field(
    'story_paragraph_1',
    'Founded in 1990, WCP was built by entrepreneurs willing to take risks to get results.'
);

$story_paragraph_2 = $about_field(
    'story_paragraph_2',
    'Like the businesses we work with, we\'re business owners too — and we\'re just as driven to grow as our clients are. That shared perspective is what shapes how we work: we apply real experience to evaluate not just what a client needs today, but where their business is headed next.'
);

$story_paragraph_3 = $about_field(
    'story_paragraph_3',
    'Over the years, that approach has made us an established local leader with genuine, lasting relationships — built through face-to-face service, in-store and on-site, rather than call centres and hold music. We proudly hold ourselves to the same standards Rogers is known for, and we work hard to earn that trust every day.'
);

$story_paragraph_4 = $about_field(
    'story_paragraph_4',
    'At WCP, we\'re your single point of contact — removing complexity and resolving issues so you can stay focused on running your business. Our team of approximately 40 people helps us extend Rogers\' reach into communities and regions where a purely corporate presence often can\'t.'
);

$story_image = $about_field(
    'story_image',
    get_template_directory_uri() . '/images/rogers store front1.png'
);


/*
|--------------------------------------------------------------------------
| MISSION
|--------------------------------------------------------------------------
*/

$mission_heading = $about_field(
    'mission_heading',
    'Our Mission'
);

$mission_text = $about_field(
    'mission_text',
    'Total customer satisfaction. That\'s it — that\'s the whole mission. Connect with us today and let us help you get connected. For us, that means listening first, finding the right solution for your business, and being there long after the sale. Our goal is simple: make business connectivity easier.'
);


/*
|--------------------------------------------------------------------------
| SALES EXCELLENCE
|--------------------------------------------------------------------------
*/

$award_heading = $about_field(
    'award_heading',
    'Recognized for Sales Excellence'
);

$award_title = $about_field(
    'award_title',
    'Recognized by Rogers for Sales Excellence'
);

$award_subtitle = $about_field(
    'award_subtitle',
    'A Consistent Track Record of Outstanding Performance'
);

$award_text = $about_field(
    'award_text',
    'WCP has consistently been recognized by Rogers for strong sales performance and continued excellence. This recognition reflects the trust our customers place in us and our ongoing commitment to providing knowledgeable advice, reliable support, and an exceptional customer experience.'
);

$award_image = $about_field(
    'award_image',
    get_template_directory_uri() . '/images/about-award.jpg'
);


/*
|--------------------------------------------------------------------------
| LIFE AT WCP
|--------------------------------------------------------------------------
*/

$life_heading = $about_field(
    'life_heading',
    'Life at WCP'
);

$life_intro = $about_field(
    'life_intro',
    'Beyond wireless, internet, and phone plans, we care about the relationships behind the business — including with the customers who make it all possible.'
);

$life_text = $about_field(
    'life_text',
    'Every year, WCP hosts a Scramble Golf Tournament as a thank-you to the customers who do business with us. It\'s a day for our team and our customers to gather, connect, and have fun together — more like family or old friends than a client list.'
);


/*
|--------------------------------------------------------------------------
| GALLERY
|--------------------------------------------------------------------------
*/

$gallery_images = array(

    array(
        'url' => $about_field(
            'gallery_1',
            get_template_directory_uri() . '/images/about-award.jpg'
        ),
        'alt' => 'WCP team members receiving an award at the annual golf tournament',
        'class' => 'wide',
    ),

    array(
        'url' => $about_field(
            'gallery_2',
            get_template_directory_uri() . '/images/golf1pic.JPG'
        ),
        'alt' => 'WCP team members holding prize boxes and Rogers gift bags at the annual golf tournament',
        'class' => 'wide',
    ),

    array(
        'url' => $about_field(
            'gallery_3',
            get_template_directory_uri() . '/images/about-golf-cart.jpg'
        ),
        'alt' => 'WCP team members sharing a laugh at the annual golf tournament',
        'class' => '',
    ),

    array(
        'url' => $about_field(
            'gallery_4',
            get_template_directory_uri() . '/images/about-group-hug.jpg'
        ),
        'alt' => 'WCP team and customers together at the annual golf tournament',
        'class' => '',
    ),

    array(
        'url' => $about_field(
            'gallery_5',
            get_template_directory_uri() . '/images/golf2pic.JPG'
        ),
        'alt' => 'WCP team and customers together at the annual golf tournament',
        'class' => '',
    ),

    array(
        'url' => $about_field(
            'gallery_6',
            get_template_directory_uri() . '/images/golf3pic.JPG'
        ),
        'alt' => 'Rogers tent at the WCP golf tournament',
        'class' => '',
    ),

);

?>


<!-- =========================================================
     ABOUT HERO
========================================================= -->

<section
    class="hero hero-photo"
    style="--hero-img: url('<?php echo esc_url($hero_image); ?>');"
>

    <div class="container">

        <h1>
            <?php echo esc_html($hero_heading); ?>
        </h1>

        <p>
            <?php echo esc_html($hero_description); ?>
        </p>

    </div>

</section>


<!-- =========================================================
     OUR STORY
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <h2>
            <?php echo esc_html($story_heading); ?>
        </h2>


        <div
            class="split-content"
            style="margin-top:24px;"
        >


            <div>


                <p
                    style="
                        max-width:520px;
                        color:var(--text-muted);
                        line-height:1.7;
                    "
                >
                    <?php echo esc_html($story_paragraph_1); ?>
                </p>


                <p
                    style="
                        max-width:520px;
                        color:var(--text-muted);
                        line-height:1.7;
                    "
                >
                    <?php echo esc_html($story_paragraph_2); ?>
                </p>


                <p
                    style="
                        max-width:520px;
                        color:var(--text-muted);
                        line-height:1.7;
                    "
                >
                    <?php echo esc_html($story_paragraph_3); ?>
                </p>


                <p
                    style="
                        max-width:520px;
                        color:var(--text-muted);
                        line-height:1.7;
                    "
                >
                    <?php echo esc_html($story_paragraph_4); ?>
                </p>


            </div>


            <img
                src="<?php echo esc_url($story_image); ?>"
                alt="WCP storefront with Rogers signage"
            >


        </div>

    </div>

</section>


<!-- =========================================================
     MISSION
========================================================= -->

<section
    class="section reveal"
    style="
        background:var(--surface);
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">


        <h2>
            <?php echo esc_html($mission_heading); ?>
        </h2>


        <p
            style="
                max-width:700px;
                font-size:17px;
                color:var(--text);
            "
        >
            <?php echo esc_html($mission_text); ?>
        </p>


    </div>

</section>


<!-- =========================================================
     SALES EXCELLENCE
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">


        <div
            class="split-content"
            style="
                margin-top:24px;
                align-items:start;
            "
        >


            <img
                src="<?php echo esc_url($award_image); ?>"
                alt="WCP team members receiving an award at the annual golf tournament"
            >


            <div>


                <h2 style="margin-bottom:16px;">
                    <?php echo esc_html($award_heading); ?>
                </h2>


                <div
                    class="award-card"
                    style="
                        background:none;
                        padding:0;
                    "
                >


                    <div class="icon">

                        <svg
                            width="28"
                            height="28"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                            <path d="M8.5 13.5 7 22l5-3 5 3-1.5-8.5"/>
                        </svg>

                    </div>


                    <div>


                        <h3>
                            <?php echo esc_html($award_title); ?>
                        </h3>


                        <h3>
                            <?php echo esc_html($award_subtitle); ?>
                        </h3>


                        <p>
                            <?php echo esc_html($award_text); ?>
                        </p>


                    </div>


                </div>


            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     LIFE AT WCP
========================================================= -->

<section
    class="section reveal"
    style="
        background:var(--surface);
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">


        <h2>
            <?php echo esc_html($life_heading); ?>
        </h2>


        <p class="lede">
            <?php echo esc_html($life_intro); ?>
        </p>


        <p
            style="
                max-width:760px;
                color:var(--text-muted);
                line-height:1.7;
            "
        >
            <?php echo esc_html($life_text); ?>
        </p>


        <div class="about-gallery">


            <?php foreach ($gallery_images as $image) : ?>

                <img
                    src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>"
                    <?php
                    if (!empty($image['class'])) {
                        echo 'class="' . esc_attr($image['class']) . '"';
                    }
                    ?>
                >

            <?php endforeach; ?>


        </div>


    </div>

</section>


<?php get_footer(); ?>
