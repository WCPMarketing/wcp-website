<?php get_header(); ?>

<?php

/*
|--------------------------------------------------------------------------
| CAREERS PAGE - WORDPRESS / ACF CONTENT
|--------------------------------------------------------------------------
*/

$careers_field = function ($name, $fallback = '') {

    if (function_exists('wcp_field')) {
        return wcp_field('careers_' . $name, $fallback);
    }

    return $fallback;
};


/*
|--------------------------------------------------------------------------
| TURN TEXTAREA LINES INTO LIST ITEMS
|--------------------------------------------------------------------------
*/

$careers_lines = function ($text) {

    if (!$text) {
        return array();
    }

    $lines = preg_split(
        '/\r\n|\r|\n/',
        trim($text)
    );

    return array_values(
        array_filter(
            array_map(
                'trim',
                $lines
            )
        )
    );
};


/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_eyebrow = $careers_field(
    'hero_eyebrow',
    'CAREERS AT WCP'
);

$hero_heading = $careers_field(
    'hero_heading',
    'Build your career with WCP'
);

$hero_description = $careers_field(
    'hero_description',
    'Join a team that helps Canadian businesses stay connected with the technology and support they need to succeed.'
);

$hero_button = $careers_field(
    'hero_button',
    'View Current Opportunity'
);

$hero_image = $careers_field(
    'hero_image',
    get_template_directory_uri() . '/images/hero-laptop-cafe.jpg'
);


/*
|--------------------------------------------------------------------------
| WHY WORK AT WCP
|--------------------------------------------------------------------------
*/

$why_heading = $careers_field(
    'why_heading',
    'Why work at WCP?'
);

$why_intro = $careers_field(
    'why_intro',
    'We combine the support of an experienced local team with access to leading Rogers business solutions.'
);

$why_items = array(

    array(
        'title' => $careers_field(
            'why_1_title',
            'A supportive team'
        ),
        'text' => $careers_field(
            'why_1_text',
            'Work with experienced people who support each other and share knowledge.'
        ),
    ),

    array(
        'title' => $careers_field(
            'why_2_title',
            'Opportunity to grow'
        ),
        'text' => $careers_field(
            'why_2_text',
            'Develop your sales, technology and business skills while building your career.'
        ),
    ),

    array(
        'title' => $careers_field(
            'why_3_title',
            'Leading technology'
        ),
        'text' => $careers_field(
            'why_3_text',
            'Help customers choose from Rogers wireless, internet, phone and other business solutions.'
        ),
    ),

    array(
        'title' => $careers_field(
            'why_4_title',
            'Make an impact'
        ),
        'text' => $careers_field(
            'why_4_text',
            'Build long-term relationships and help Canadian businesses stay connected and productive.'
        ),
    ),

);


/*
|--------------------------------------------------------------------------
| LIFE AT WCP
|--------------------------------------------------------------------------
*/

$life_heading = $careers_field(
    'life_heading',
    'More than just a workplace'
);

$life_text = $careers_field(
    'life_text',
    'At WCP, relationships matter. We work hard, support each other, celebrate our successes and focus on creating a positive environment for our team and our customers.'
);

$life_image = $careers_field(
    'life_image',
    ''
);


/*
|--------------------------------------------------------------------------
| WHAT WE LOOK FOR
|--------------------------------------------------------------------------
*/

$qualities_heading = $careers_field(
    'qualities_heading',
    'What we look for'
);

$qualities = array(

    $careers_field(
        'quality_1',
        'A customer-first mindset'
    ),

    $careers_field(
        'quality_2',
        'Strong communication skills'
    ),

    $careers_field(
        'quality_3',
        'A willingness to learn'
    ),

    $careers_field(
        'quality_4',
        'A positive, team-oriented attitude'
    ),

    $careers_field(
        'quality_5',
        'The drive to achieve results'
    ),

);


/*
|--------------------------------------------------------------------------
| BUSINESS ACCOUNT MANAGER
|--------------------------------------------------------------------------
*/

$job_eyebrow = $careers_field(
    'job_eyebrow',
    'CURRENT OPPORTUNITY'
);

$job_title = $careers_field(
    'job_title',
    'Business Account Manager'
);

$job_location = $careers_field(
    'job_location',
    'Markham, Ontario'
);

$job_type = $careers_field(
    'job_type',
    'Full Time'
);

$job_intro = $careers_field(
    'job_intro',
    'We are looking for a motivated Business Account Manager to join our team and help businesses find the right Rogers communications solutions.'
);

$job_about_heading = $careers_field(
    'job_about_heading',
    'About the role'
);

$job_about = $careers_field(
    'job_about',
    'As a Business Account Manager, you will build relationships with new and existing business customers, understand their communications needs and recommend solutions that help their businesses operate more effectively.'
);

$job_responsibilities_heading = $careers_field(
    'job_responsibilities_heading',
    'What you\'ll do'
);

$job_responsibilities = $careers_lines(
    $careers_field(
        'job_responsibilities',
        "Develop and manage relationships with business customers\nIdentify new business opportunities and generate leads\nUnderstand customer needs and recommend appropriate Rogers Business solutions\nPrepare proposals and follow up with prospective customers\nManage the sales process from initial contact through activation\nMaintain strong relationships with existing customers\nMeet and exceed individual sales targets"
    )
);

$job_qualifications_heading = $careers_field(
    'job_qualifications_heading',
    'What we\'re looking for'
);

$job_qualifications = $careers_lines(
    $careers_field(
        'job_qualifications',
        "Strong communication and relationship-building skills\nA customer-focused approach\nMotivated and results-oriented attitude\nAbility to work independently and as part of a team\nComfortable learning new technology and business solutions\nPrevious sales or business-to-business experience is an asset"
    )
);

$job_offer_heading = $careers_field(
    'job_offer_heading',
    'What we offer'
);

$job_offer = $careers_lines(
    $careers_field(
        'job_offer',
        "Competitive compensation structure\nOpportunity to earn performance-based incentives\nTraining and ongoing support\nOpportunity for career growth\nAccess to leading Rogers Business products and solutions\nA supportive and experienced team environment"
    )
);

$job_button = $careers_field(
    'job_button',
    'Apply Now'
);


/*
|--------------------------------------------------------------------------
| APPLICATION
|--------------------------------------------------------------------------
*/

$apply_eyebrow = $careers_field(
    'apply_eyebrow',
    'JOIN OUR TEAM'
);

$apply_heading = $careers_field(
    'apply_heading',
    'Apply for Business Account Manager'
);

$apply_text = $careers_field(
    'apply_text',
    'Complete the form below and upload your resume. We look forward to learning more about you.'
);

$apply_form_heading = $careers_field(
    'apply_form_heading',
    'Submit Your Application'
);

$apply_button = $careers_field(
    'apply_button',
    'Submit Application'
);

$apply_privacy = $careers_field(
    'apply_privacy',
    'Your application and uploaded documents will only be used for recruitment purposes.'
);

?>


<!-- =========================================================
     HERO
========================================================= -->

<section
    class="hero hero-photo"
    style="
        --hero-img:url('<?php echo esc_url($hero_image); ?>');
    "
>

    <div class="container">

        <span
            class="eyebrow"
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
                href="#current-opportunity"
                class="btn btn-primary"
            >
                <?php echo esc_html($hero_button); ?>
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     WHY WORK AT WCP
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
            style="
                max-width:720px;
                margin:0 auto 36px;
                text-align:center;
            "
        >

            <h2>
                <?php echo esc_html($why_heading); ?>
            </h2>

            <p
                class="lede"
                style="
                    max-width:620px;
                    margin-left:auto;
                    margin-right:auto;
                "
            >
                <?php echo esc_html($why_intro); ?>
            </p>

        </div>


        <div class="card-grid">

            <?php foreach ($why_items as $item) : ?>

                <div class="card">

                    <div
                        style="
                            width:44px;
                            height:44px;
                            border-radius:50%;
                            background:rgba(218,41,28,.08);
                            color:var(--red);
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            margin-bottom:16px;
                        "
                    >

                        <svg
                            width="22"
                            height="22"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>

                    </div>


                    <h3>
                        <?php echo esc_html($item['title']); ?>
                    </h3>

                    <p>
                        <?php echo esc_html($item['text']); ?>
                    </p>

                </div>

            <?php endforeach; ?>

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

        <div
            class="<?php echo $life_image ? 'careers-life-grid' : ''; ?>"
        >

            <div>

                <span class="eyebrow">
                    LIFE AT WCP
                </span>

                <h2>
                    <?php echo esc_html($life_heading); ?>
                </h2>

                <p
                    style="
                        color:var(--text-muted);
                        line-height:1.7;
                    "
                >
                    <?php echo esc_html($life_text); ?>
                </p>

            </div>


            <?php if ($life_image) : ?>

                <div>

                    <img
                        src="<?php echo esc_url($life_image); ?>"
                        alt="Life at WCP"
                        style="
                            width:100%;
                            height:auto;
                            border-radius:var(--radius);
                            display:block;
                        "
                    >

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     WHAT WE LOOK FOR
========================================================= -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <h2 style="text-align:center;">
            <?php echo esc_html($qualities_heading); ?>
        </h2>


        <div
            class="careers-quality-grid"
            style="
                margin-top:32px;
            "
        >

            <?php foreach ($qualities as $quality) : ?>

                <?php if ($quality) : ?>

                    <div class="card careers-quality-card">

                        <span
                            style="
                                color:var(--red);
                                font-weight:800;
                                margin-right:8px;
                            "
                        >
                            ✓
                        </span>

                        <span>
                            <?php echo esc_html($quality); ?>
                        </span>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     BUSINESS ACCOUNT MANAGER
========================================================= -->

<section
    id="current-opportunity"
    class="section reveal"
    style="
        background:var(--surface);
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <div
            style="
                max-width:820px;
                margin:0 auto;
            "
        >

            <div style="text-align:center;">

                <span class="eyebrow">
                    <?php echo esc_html($job_eyebrow); ?>
                </span>

                <h2>
                    <?php echo esc_html($job_title); ?>
                </h2>


                <p
                    style="
                        font-weight:600;
                        margin-top:8px;
                    "
                >
                    <?php echo esc_html($job_location); ?>

                    <?php if ($job_location && $job_type) : ?>
                        &nbsp;·&nbsp;
                    <?php endif; ?>

                    <?php echo esc_html($job_type); ?>
                </p>


                <p
                    class="lede"
                    style="
                        max-width:680px;
                        margin-left:auto;
                        margin-right:auto;
                    "
                >
                    <?php echo esc_html($job_intro); ?>
                </p>

            </div>


            <div
                class="card"
                style="
                    margin-top:36px;
                    padding:32px;
                "
            >

                <h3>
                    <?php echo esc_html($job_about_heading); ?>
                </h3>

                <p
                    style="
                        line-height:1.7;
                    "
                >
                    <?php echo esc_html($job_about); ?>
                </p>


                <hr
                    style="
                        border:0;
                        border-top:1px solid var(--border);
                        margin:28px 0;
                    "
                >


                <h3>
                    <?php echo esc_html($job_responsibilities_heading); ?>
                </h3>

                <ul class="careers-job-list">

                    <?php foreach ($job_responsibilities as $item) : ?>

                        <li>
                            <?php echo esc_html($item); ?>
                        </li>

                    <?php endforeach; ?>

                </ul>


                <hr
                    style="
                        border:0;
                        border-top:1px solid var(--border);
                        margin:28px 0;
                    "
                >


                <h3>
                    <?php echo esc_html($job_qualifications_heading); ?>
                </h3>

                <ul class="careers-job-list">

                    <?php foreach ($job_qualifications as $item) : ?>

                        <li>
                            <?php echo esc_html($item); ?>
                        </li>

                    <?php endforeach; ?>

                </ul>


                <hr
                    style="
                        border:0;
                        border-top:1px solid var(--border);
                        margin:28px 0;
                    "
                >


                <h3>
                    <?php echo esc_html($job_offer_heading); ?>
                </h3>

                <ul class="careers-job-list">

                    <?php foreach ($job_offer as $item) : ?>

                        <li>
                            <?php echo esc_html($item); ?>
                        </li>

                    <?php endforeach; ?>

                </ul>


                <div
                    style="
                        text-align:center;
                        margin-top:32px;
                    "
                >

                    <a
                        href="#apply"
                        class="btn btn-primary"
                    >
                        <?php echo esc_html($job_button); ?>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     APPLICATION FORM
========================================================= -->

<section
    id="apply"
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>

    <div class="container">

        <div
            class="careers-apply-grid"
        >


            <!-- APPLICATION COPY -->

            <div>

                <span class="eyebrow">
                    <?php echo esc_html($apply_eyebrow); ?>
                </span>

                <h2>
                    <?php echo esc_html($apply_heading); ?>
                </h2>

                <p
                    style="
                        color:var(--text-muted);
                        line-height:1.7;
                        max-width:500px;
                    "
                >
                    <?php echo esc_html($apply_text); ?>
                </p>

            </div>


            <!-- APPLICATION FORM -->

            <div
                class="card"
                style="
                    padding:28px;
                    box-shadow:0 12px 36px rgba(0,0,0,.07);
                "
            >

                <?php

                $wcp_form_status = isset($_GET['wcp_form'])
                    ? sanitize_key(wp_unslash($_GET['wcp_form']))
                    : '';

                $wcp_form_reason = isset($_GET['wcp_reason'])
                    ? sanitize_key(wp_unslash($_GET['wcp_reason']))
                    : '';

                $wcp_error_messages = array(
                    'security'        => 'Your session expired. Please refresh the page and try again.',
                    'required'        => 'Please complete all required fields and try again.',
                    'email'           => 'Please enter a valid email address.',
                    'too_fast'        => 'Please wait a moment and submit the form again.',
                    'resume_required' => 'Please upload your resume.',
                    'file_too_large'  => 'The uploaded document is too large. Please choose a file under 10 MB.',
                    'file_type'       => 'Please upload a PDF, DOC or DOCX file.',
                    'upload_error'    => 'One of your documents could not be uploaded. Please try again.',
                    'mail'            => 'Your application could not be sent. Please try again or contact WCP directly.',
                    'invalid_request' => 'The application could not be submitted. Please try again.',
                );

                ?>

                <form
                    class="lead-form careers-form"
                    action="<?php echo esc_url(admin_url('admin-post.php', 'relative')); ?>"
                    method="POST"
                    enctype="multipart/form-data"
                    style="
                        width:100%;
                        max-width:none;
                        margin-top:0;
                    "
                >


                    <!-- WORDPRESS FORM HANDLER -->

                    <input
                        type="hidden"
                        name="action"
                        value="wcp_careers_submit"
                    >


                    <?php

                    wp_nonce_field(
                        'wcp_careers_submit',
                        'wcp_careers_nonce'
                    );

                    ?>


                    <input
                        type="hidden"
                        name="redirect_to"
                        value="<?php echo esc_url(wp_make_link_relative(get_permalink()) . '#apply'); ?>"
                    >


                    <input
                        type="hidden"
                        name="form_source"
                        value="Careers Page"
                    >


                    <input
                        type="hidden"
                        name="wcp_started"
                        value="<?php echo esc_attr(time()); ?>"
                    >


                    <!-- SPAM HONEYPOT -->

                    <div
                        aria-hidden="true"
                        style="
                            position:absolute;
                            left:-9999px;
                            width:1px;
                            height:1px;
                            overflow:hidden;
                        "
                    >

                        <label>

                            Leave this field empty

                            <input
                                type="text"
                                name="website"
                                value=""
                                tabindex="-1"
                                autocomplete="off"
                            >

                        </label>

                    </div>


                    <div>

                        <h3 style="margin-top:0;">
                            <?php echo esc_html($apply_form_heading); ?>
                        </h3>

                        <p
                            style="
                                color:var(--text-muted);
                                margin-bottom:20px;
                            "
                        >
                            Position:
                            <strong>
                                <?php echo esc_html($job_title); ?>
                            </strong>
                        </p>

                    </div>


                    <!-- SUCCESS / ERROR MESSAGE -->

                    <?php if ('success' === $wcp_form_status) : ?>

                        <div
                            class="form-message form-success"
                            role="status"
                        >

                            <strong>
                                Thank you.
                            </strong>

                            We received your application and will review it shortly.

                        </div>

                    <?php elseif ('error' === $wcp_form_status) : ?>

                        <div
                            class="form-message form-error"
                            role="alert"
                        >

                            <?php

                            echo esc_html(
                                isset($wcp_error_messages[$wcp_form_reason])
                                    ? $wcp_error_messages[$wcp_form_reason]
                                    : 'Something went wrong. Please review the form and try again.'
                            );

                            ?>

                        </div>

                    <?php endif; ?>


                    <!-- POSITION - ORIGINAL FIELD NAME PRESERVED -->

                    <input
                        type="hidden"
                        name="position"
                        value="<?php echo esc_attr($job_title); ?>"
                    >


                    <!-- SUBJECT - ORIGINAL FIELD NAME PRESERVED -->

                    <input
                        type="hidden"
                        name="_subject"
                        value="<?php echo esc_attr(
                            'WCP Careers Application - ' . $job_title
                        ); ?>"
                    >


                    <!-- NAME + EMAIL -->

                    <div class="form-row">

                        <input
                            type="text"
                            name="name"
                            placeholder="Your name"
                            autocomplete="name"
                            required
                        >

                        <input
                            type="email"
                            name="email"
                            placeholder="Email address"
                            autocomplete="email"
                            required
                        >

                    </div>


                    <!-- PHONE -->

                    <input
                        type="tel"
                        name="phone"
                        placeholder="Phone number"
                        autocomplete="tel"
                        required
                    >


                    <!-- MESSAGE -->

                    <textarea
                        name="message"
                        rows="5"
                        placeholder="Tell us a little about yourself and why you're interested in this opportunity"
                        style="
                            width:100%;
                            padding:12px 14px;
                            border:1px solid var(--border);
                            border-radius:var(--radius);
                            font-family:inherit;
                            font-size:15px;
                            resize:vertical;
                        "
                    ></textarea>


                    <!-- RESUME - ORIGINAL FIELD NAME PRESERVED -->

                    <div class="careers-upload">

                        <label for="careers-resume">

                            <strong>
                                Upload your resume *
                            </strong>

                        </label>

                        <input
                            type="file"
                            id="careers-resume"
                            name="resume"
                            accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            required
                        >

                        <small>
                            PDF, DOC or DOCX — max 10 MB
                        </small>

                    </div>


                    <!-- SUBMIT -->

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <?php echo esc_html($apply_button); ?>
                    </button>


                    <!-- PRIVACY -->

                    <p
                        style="
                            margin:0;
                            font-size:11px;
                            color:var(--text-muted);
                            line-height:1.5;
                        "
                    >
                        <?php echo esc_html($apply_privacy); ?>
                    </p>


                </form>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CAREERS PAGE RESPONSIVE STYLES
========================================================= -->

<style>

.careers-life-grid {
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:48px;
    align-items:center;
}

.careers-quality-grid {
    display:grid;
    grid-template-columns:repeat(3, minmax(0, 1fr));
    gap:16px;
}

.careers-quality-card {
    display:flex;
    align-items:center;
}

.careers-job-list {
    padding-left:22px;
    margin-bottom:0;
}

.careers-job-list li {
    margin-bottom:10px;
    line-height:1.6;
}

.careers-apply-grid {
    display:grid;
    grid-template-columns:minmax(0, .85fr) minmax(0, 1.15fr);
    gap:48px;
    align-items:start;
}

.careers-upload {
    border:1px dashed var(--border);
    border-radius:var(--radius);
    padding:16px;
}

.careers-upload label {
    display:block;
    margin-bottom:10px;
}

.careers-upload small {
    display:block;
    margin-top:7px;
    color:var(--text-muted);
}


@media (max-width:900px) {

    .careers-quality-grid {
        grid-template-columns:repeat(2, minmax(0, 1fr));
    }

}


@media (max-width:800px) {

    .careers-life-grid,
    .careers-apply-grid {
        grid-template-columns:1fr;
        gap:28px;
    }

}


@media (max-width:600px) {

    .careers-quality-grid {
        grid-template-columns:1fr;
    }

}

</style>


<?php get_footer(); ?>
