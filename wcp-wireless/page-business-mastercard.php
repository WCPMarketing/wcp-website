<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| ROGERS BUSINESS MASTERCARD - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$mastercard_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('mastercard_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_eyebrow = $mastercard_field(
    'hero_eyebrow',
    'ROGERS RED WORLD ELITE BUSINESS MASTERCARD'
);

$hero_heading = $mastercard_field(
    'hero_heading',
    'Make your business spending more rewarding'
);

$hero_description = $mastercard_field(
    'hero_description',
    'Earn cash back on everyday business purchases and unlock additional value when you have an eligible Rogers or Shaw business service.'
);

$hero_button = $mastercard_field(
    'hero_button',
    'Learn More & Apply'
);

$hero_button_url = $mastercard_field(
    'hero_button_url',
    'https://www.rogersbank.com/en/business/'
);

$hero_image = $mastercard_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-laptop-cafe.jpg'
);

$card_image = $mastercard_field(
    'card_image',
    ''
);


/*
|--------------------------------------------------------------------------
| KEY BENEFITS
|--------------------------------------------------------------------------
*/

$benefits_heading = $mastercard_field(
    'benefits_heading',
    'More value from everyday business spending'
);

$benefits_intro = $mastercard_field(
    'benefits_intro',
    'The Rogers Red World Elite Business Mastercard combines cash back rewards with benefits designed for eligible Rogers Business customers.'
);

$benefits = array(

    array(
        'title' => $mastercard_field(
            'benefit_1_title',
            'No annual fee'
        ),
        'text' => $mastercard_field(
            'benefit_1_text',
            'Enjoy the card with a $0 annual fee.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'benefit_2_title',
            'Earn 2% cash back'
        ),
        'text' => $mastercard_field(
            'benefit_2_text',
            'Earn 2% cash back on eligible purchases when you have an eligible Rogers or Shaw business service.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'benefit_3_title',
            '3% cash back in U.S. dollars'
        ),
        'text' => $mastercard_field(
            'benefit_3_text',
            'Earn 3% cash back on eligible purchases made in U.S. dollars.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'benefit_4_title',
            '1.5x redemption bonus'
        ),
        'text' => $mastercard_field(
            'benefit_4_text',
            'Redeem cash back for eligible Rogers, Fido, Shaw or Comwave purchases at 1.5 times the regular redemption value. This benefit is changing effective November 18, 2026.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'benefit_5_title',
            '5 Roam Like Home days'
        ),
        'text' => $mastercard_field(
            'benefit_5_text',
            'Eligible Rogers business mobile customers can receive 5 Roam Like Home days at no cost each year. This benefit is changing effective January 12, 2027.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'benefit_6_title',
            'Business support benefits'
        ),
        'text' => $mastercard_field(
            'benefit_6_text',
            'Access proactive identity and cybersecurity support through Cyberscout and unlimited 24/7 legal-support hotline access through My Friendly Lawyer.'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| ROGERS BUSINESS ADVANTAGE
|--------------------------------------------------------------------------
*/

$rogers_image = $mastercard_field(
    'rogers_image',
    ''
);

$rogers_heading = $mastercard_field(
    'rogers_heading',
    'Being a Rogers Business customer can be even more rewarding'
);

$rogers_intro = $mastercard_field(
    'rogers_intro',
    'Having an eligible Rogers or Shaw business service can unlock the card\'s enhanced 2% cash back earn rate on eligible purchases.'
);

$rogers_items = array(

    $mastercard_field(
        'rogers_item_1',
        'Rogers Business mobile'
    ),

    $mastercard_field(
        'rogers_item_2',
        'Rogers Business Internet'
    ),

    $mastercard_field(
        'rogers_item_3',
        'Rogers Business TV'
    ),

    $mastercard_field(
        'rogers_item_4',
        'Rogers Business Phone'
    ),

    $mastercard_field(
        'rogers_item_5',
        'Eligible Shaw Business services'
    ),

);


/*
|--------------------------------------------------------------------------
| ADDITIONAL BENEFITS
|--------------------------------------------------------------------------
*/

$additional_heading = $mastercard_field(
    'additional_heading',
    'More benefits for your business'
);

$additional_benefits = array(

    array(
        'title' => $mastercard_field(
            'additional_1_title',
            'Purchase protection & extended warranty'
        ),
        'text' => $mastercard_field(
            'additional_1_text',
            'Eligible purchases include purchase protection and extended warranty insurance, subject to the applicable insurance terms and conditions.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'additional_2_title',
            'Travel benefits'
        ),
        'text' => $mastercard_field(
            'additional_2_text',
            'The card includes eligible travel insurance benefits and access to Mastercard Travel Pass. Terms, exclusions and upcoming benefit changes apply.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'additional_3_title',
            'Mastercard Travel Pass'
        ),
        'text' => $mastercard_field(
            'additional_3_text',
            'Complimentary Mastercard Travel Pass membership provides access to more than 1,300 airport lounges worldwide at the applicable per-visit rate.'
        ),
    ),

    array(
        'title' => $mastercard_field(
            'additional_4_title',
            'Equal Payment Plans'
        ),
        'text' => $mastercard_field(
            'additional_4_text',
            'Eligible large purchases can be converted into equal monthly payments over available terms.'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| ELIGIBILITY
|--------------------------------------------------------------------------
*/

$eligibility_heading = $mastercard_field(
    'eligibility_heading',
    'Who can apply?'
);

$eligibility_intro = $mastercard_field(
    'eligibility_intro',
    'The Rogers Red World Elite Business Mastercard is currently available to eligible sole proprietors and is a personal-liability credit card.'
);

$eligibility_items = array(

    $mastercard_field(
        'eligibility_1',
        'Sole proprietors only'
    ),

    $mastercard_field(
        'eligibility_2',
        '$80,000 minimum personal annual income or $150,000 household income'
    ),

    $mastercard_field(
        'eligibility_3',
        'Subject to personal credit assessment and income verification'
    ),

    $mastercard_field(
        'eligibility_4',
        '$0 annual fee'
    ),

);

$eligibility_note = $mastercard_field(
    'eligibility_note',
    'Applications for corporations, partnerships and other entity types are not currently accepted. Eligibility and approval are determined by Rogers Bank.'
);


/*
|--------------------------------------------------------------------------
| UPCOMING CHANGES
|--------------------------------------------------------------------------
*/

$changes_heading = $mastercard_field(
    'changes_heading',
    'Important upcoming benefit changes'
);

$changes_intro = $mastercard_field(
    'changes_intro',
    'Rogers Bank has announced upcoming changes to some rewards, roaming and insurance benefits. Check Rogers Bank for the latest terms before applying.'
);

$change_1_date = $mastercard_field(
    'change_1_date',
    'November 18, 2026'
);

$change_1_text = $mastercard_field(
    'change_1_text',
    'The 1.5x redemption bonus will end. Rogers Bank has also announced a 5% cash back earn rate on certain eligible Rogers purchases, subject to applicable annual limits and terms.'
);

$change_2_date = $mastercard_field(
    'change_2_date',
    'January 12, 2027'
);

$change_2_text = $mastercard_field(
    'change_2_text',
    'The existing 5 Roam Like Home days benefit will be replaced by a $75 annual roaming credit for the Rogers Red World Elite Business Mastercard.'
);


/*
|--------------------------------------------------------------------------
| CALL TO ACTION
|--------------------------------------------------------------------------
*/

$cta_eyebrow = $mastercard_field(
    'cta_eyebrow',
    'ROGERS BUSINESS MASTERCARD'
);

$cta_heading = $mastercard_field(
    'cta_heading',
    'Ready to make your business spending work harder?'
);

$cta_text = $mastercard_field(
    'cta_text',
    'Visit Rogers Bank to review the latest card benefits, eligibility requirements, rates and terms.'
);

$cta_button = $mastercard_field(
    'cta_button',
    'View Rogers Business Mastercard'
);

$cta_url = $mastercard_field(
    'cta_url',
    'https://www.rogersbank.com/en/business/'
);

$disclaimer = $mastercard_field(
    'disclaimer',
    'The Rogers Red World Elite Business Mastercard is issued by Rogers Bank. Eligibility, rewards, insurance, interest rates, fees and benefits are subject to Rogers Bank terms and conditions and may change. WCP does not issue or approve credit cards.'
);

?>


<!-- =========================================================
     HERO
========================================================= -->

<section
    class="hero hero-photo mastercard-hero"
    style="
        --hero-img:url('<?php echo esc_url($hero_image); ?>');
    "
>

    <div class="container">

        <span
            class="section-eyebrow"
            style="color:#ffffff;"
        >
            <?php echo esc_html($hero_eyebrow); ?>
        </span>

        <h1>
            <?php echo esc_html($hero_heading); ?>
        </h1>

        <p>
            <?php echo esc_html($hero_description); ?>
        </p>

        <div class="actions">

            <a
                href="<?php echo esc_url($hero_button_url); ?>"
                class="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
            >
                <?php echo esc_html($hero_button); ?>
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     KEY BENEFITS
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">


        <?php if ($card_image) : ?>

            <div class="mastercard-card-image">

                <img
                    src="<?php echo esc_url($card_image); ?>"
                    alt="Rogers Red World Elite Business Mastercard"
                >

            </div>

        <?php endif; ?>


        <div class="mastercard-section-heading">

            <h2>
                <?php echo esc_html($benefits_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($benefits_intro); ?>
            </p>

        </div>


        <div class="feature-strip mastercard-benefits-grid">

            <?php foreach ($benefits as $benefit) : ?>

                <div class="mastercard-benefit">

                    <div class="feature-icon">

                        <svg
                            width="26"
                            height="26"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >

                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />

                            <path d="M8 12l3 3 5-6"/>

                        </svg>

                    </div>

                    <h4>
                        <?php echo esc_html($benefit['title']); ?>
                    </h4>

                    <p>
                        <?php echo esc_html($benefit['text']); ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     ROGERS BUSINESS ADVANTAGE
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

        <div class="mastercard-business-advantage">


            <!-- LEFT SIDE - IMAGE -->

            <?php if ($rogers_image) : ?>

                <div class="mastercard-business-advantage-image">

                    <img
                        src="<?php echo esc_url($rogers_image); ?>"
                        alt="Rogers Business customer"
                    >

                </div>

            <?php endif; ?>


            <!-- RIGHT SIDE - CONTENT -->

            <div class="mastercard-business-advantage-content">

                <span class="eyebrow">
                    ROGERS BUSINESS
                </span>

                <h2>
                    <?php echo esc_html($rogers_heading); ?>
                </h2>

                <p class="lede">
                    <?php echo esc_html($rogers_intro); ?>
                </p>


                <ul class="mastercard-business-list">

                    <?php foreach ($rogers_items as $item) : ?>

                        <?php if ($item) : ?>

                            <li>

                                <span class="mastercard-business-check">
                                    ✓
                                </span>

                                <span>
                                    <?php echo esc_html($item); ?>
                                </span>

                            </li>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </ul>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     ADDITIONAL BENEFITS
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <div class="mastercard-section-heading">

            <h2>
                <?php echo esc_html($additional_heading); ?>
            </h2>

        </div>


        <div class="card-grid mastercard-additional-grid">

            <?php foreach ($additional_benefits as $benefit) : ?>

                <div class="card">

                    <h3>
                        <?php echo esc_html($benefit['title']); ?>
                    </h3>

                    <p>
                        <?php echo esc_html($benefit['text']); ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     ELIGIBILITY
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

        <div class="mastercard-narrow">

            <div class="mastercard-section-heading">

                <h2>
                    <?php echo esc_html($eligibility_heading); ?>
                </h2>

                <p class="lede">
                    <?php echo esc_html($eligibility_intro); ?>
                </p>

            </div>


            <ul class="mastercard-eligibility-list">

                <?php foreach ($eligibility_items as $item) : ?>

                    <?php if ($item) : ?>

                        <li>

                            <span class="mastercard-business-check">
                                ✓
                            </span>

                            <span>
                                <?php echo esc_html($item); ?>
                            </span>

                        </li>

                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>


            <p class="mastercard-small-note">
                <?php echo esc_html($eligibility_note); ?>
            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     UPCOMING CHANGES
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <div class="mastercard-section-heading">

            <h2>
                <?php echo esc_html($changes_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($changes_intro); ?>
            </p>

        </div>


        <div class="mastercard-changes-grid">


            <!-- CHANGE 1 -->

            <div class="card">

                <span class="badge">
                    <?php echo esc_html($change_1_date); ?>
                </span>

                <h3>
                    Rewards changes
                </h3>

                <p>
                    <?php echo esc_html($change_1_text); ?>
                </p>

            </div>


            <!-- CHANGE 2 -->

            <div class="card">

                <span class="badge">
                    <?php echo esc_html($change_2_date); ?>
                </span>

                <h3>
                    Roaming changes
                </h3>

                <p>
                    <?php echo esc_html($change_2_text); ?>
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     CALL TO ACTION
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

        <div class="mastercard-cta">

            <span class="section-eyebrow">
                <?php echo esc_html($cta_eyebrow); ?>
            </span>

            <h2>
                <?php echo esc_html($cta_heading); ?>
            </h2>

            <p class="lede">
                <?php echo esc_html($cta_text); ?>
            </p>


            <a
                href="<?php echo esc_url($cta_url); ?>"
                class="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
            >
                <?php echo esc_html($cta_button); ?>
            </a>


            <p class="mastercard-disclaimer">
                <?php echo esc_html($disclaimer); ?>
            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     MASTERCARD PAGE STYLES
========================================================= -->

<style>

/* ---------------------------------------------------------
   HERO
--------------------------------------------------------- */

.mastercard-hero {
    min-height:430px;
    display:flex;
    align-items:center;
}


/* ---------------------------------------------------------
   STANDARD SECTION HEADINGS
--------------------------------------------------------- */

.mastercard-section-heading {
    max-width:720px;
    margin:0 auto 38px;
    text-align:center;
}

.mastercard-section-heading .lede {
    max-width:660px;
    margin-left:auto;
    margin-right:auto;
}


/* ---------------------------------------------------------
   OPTIONAL CARD IMAGE
--------------------------------------------------------- */

.mastercard-card-image {
    display:flex;
    justify-content:center;
    margin-bottom:40px;
}

.mastercard-card-image img {
    width:min(420px, 100%);
    height:auto;
    display:block;
}


/* ---------------------------------------------------------
   KEY BENEFITS - 3 X 2
--------------------------------------------------------- */

.feature-strip.mastercard-benefits-grid {
    display:grid !important;
    grid-template-columns:repeat(3, minmax(0, 1fr)) !important;
    gap:36px 44px !important;
    align-items:start;
}

.feature-strip.mastercard-benefits-grid > div {
    width:100% !important;
    min-width:0 !important;
}

.mastercard-benefit h4 {
    margin-top:10px;
    margin-bottom:7px;
}

.mastercard-benefit p {
    margin-bottom:0;
}


/* ---------------------------------------------------------
   ROGERS BUSINESS ADVANTAGE
--------------------------------------------------------- */

.mastercard-business-advantage {
    display:grid !important;
    grid-template-columns:minmax(0, 1fr) minmax(0, 1fr) !important;
    gap:56px !important;
    align-items:center !important;
}

.mastercard-business-advantage-image {
    width:100%;
}

.mastercard-business-advantage-image img {
    display:block;
    width:100%;
    height:380px;
    object-fit:cover;
    object-position:center;
    border-radius:12px;
}

.mastercard-business-advantage-content {
    width:100%;
}

.mastercard-business-advantage-content h2 {
    margin-top:8px;
    margin-bottom:16px;
}

.mastercard-business-advantage-content .lede {
    margin-left:0;
    margin-right:0;
    max-width:600px;
}

.mastercard-business-list {
    list-style:none !important;
    padding:0 !important;
    margin:28px 0 0 !important;
}

.mastercard-business-list li {
    list-style:none !important;
    display:flex;
    align-items:center;
    gap:12px;
    margin:0 0 14px;
    padding:0;
    font-size:16px;
}

.mastercard-business-list li::marker {
    content:"";
}

.mastercard-business-check {
    display:flex;
    align-items:center;
    justify-content:center;
    flex:0 0 28px;
    width:28px;
    height:28px;
    border-radius:50%;
    background:rgba(218,41,28,.10);
    color:var(--red);
    font-size:15px;
    font-weight:800;
}


/* ---------------------------------------------------------
   ADDITIONAL BENEFITS
--------------------------------------------------------- */

.card-grid.mastercard-additional-grid {
    display:grid !important;
    grid-template-columns:repeat(2, minmax(0, 1fr)) !important;
    gap:20px !important;
}


/* ---------------------------------------------------------
   ELIGIBILITY
--------------------------------------------------------- */

.mastercard-narrow {
    max-width:820px;
    margin:0 auto;
}

.mastercard-eligibility-list {
    list-style:none;
    padding:0;
    margin:30px auto 0;
    max-width:700px;
}

.mastercard-eligibility-list li {
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:14px;
    line-height:1.5;
}

.mastercard-small-note {
    max-width:700px;
    margin:24px auto 0;
    text-align:center;
    font-size:13px;
    line-height:1.6;
    color:var(--text-muted);
}


/* ---------------------------------------------------------
   UPCOMING CHANGES
--------------------------------------------------------- */

.mastercard-changes-grid {
    display:grid;
    grid-template-columns:repeat(2, minmax(0, 1fr));
    gap:20px;
    max-width:900px;
    margin:0 auto;
}

.mastercard-changes-grid .badge {
    display:inline-block;
    margin-bottom:12px;
}


/* ---------------------------------------------------------
   CTA
--------------------------------------------------------- */

.mastercard-cta {
    max-width:760px;
    margin:0 auto;
    text-align:center;
}

.mastercard-cta .lede {
    max-width:650px;
    margin-left:auto;
    margin-right:auto;
}

.mastercard-disclaimer {
    max-width:720px;
    margin:28px auto 0;
    font-size:11px;
    line-height:1.6;
    color:var(--text-muted);
}


/* ---------------------------------------------------------
   TABLET
--------------------------------------------------------- */

@media (max-width:800px) {

    .feature-strip.mastercard-benefits-grid {
        grid-template-columns:repeat(2, minmax(0, 1fr)) !important;
        gap:30px !important;
    }

    .mastercard-business-advantage {
        grid-template-columns:1fr !important;
        gap:30px !important;
    }

    .mastercard-business-advantage-image img {
        height:auto;
    }

    .card-grid.mastercard-additional-grid {
        grid-template-columns:1fr !important;
    }

    .mastercard-changes-grid {
        grid-template-columns:1fr;
    }

}


/* ---------------------------------------------------------
   MOBILE
--------------------------------------------------------- */

@media (max-width:560px) {

    .feature-strip.mastercard-benefits-grid {
        grid-template-columns:1fr !important;
    }

    .mastercard-hero {
        min-height:auto;
    }

}

</style>


<?php get_footer(); ?>
