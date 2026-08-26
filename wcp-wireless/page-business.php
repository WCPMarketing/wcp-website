<?php get_header(); ?>


<!-- Business Hero -->

<section
    class="hero hero-photo"
    style="--hero-img: url('<?php echo esc_url(get_template_directory_uri() . '/images/hero-laptop-cafe.jpg'); ?>');"
>
    <div class="container">

        <h1>You Get Rogers. You Deal With Us.</h1>

        <p>
            The Rogers products and network your business needs — backed by a
            local team that knows your business and answers the phone.
        </p>

    </div>
</section>


<!-- Why WCP -->

<section
    class="section reveal"
    style="background:var(--surface);"
>
    <div class="container">

        <div class="why-numbered-grid">

            <div class="why-numbered-item">
                <span class="why-num">01</span>

                <h3>Your Own Account Manager</h3>

                <p>
                    No call queues. No bouncing between departments.
                </p>
            </div>


            <div class="why-numbered-item">
                <span class="why-num">02</span>

                <h3>Local, Personal Support</h3>

                <p>
                    Face-to-face service when you need it.
                </p>
            </div>


            <div class="why-numbered-item">
                <span class="why-num">03</span>

                <h3>The Right Rogers Plan</h3>

                <p>
                    We compare across Rogers' full catalogue to find the best
                    fit for your business.
                </p>
            </div>

        </div>


        <div class="why-banner">

            <div class="why-banner-text">

                <span class="why-banner-eyebrow">
                    The Bottom Line
                </span>

                <h3>
                    Rogers network. WCP service.
                </h3>

                <p>
                    Same Rogers products and network — with a local team in
                    your corner.
                </p>

            </div>


            <a
                href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="btn btn-primary"
            >
                Get My Free Business Review →
            </a>

        </div>


        <p class="why-tagline">
            Serving Canadian businesses since 1990
        </p>

    </div>
</section>


<!-- Business Services -->

<section
    class="section reveal section-photo-bg"
    style="
        --section-bg-img: url('<?php echo esc_url(get_template_directory_uri() . '/images/office image.png'); ?>');
        padding-top:64px;
        padding-bottom:64px;
    "
>
    <div class="container">

        <h2 style="text-align:center;">
            Rogers Business Services
        </h2>

        <p
            class="lede"
            style="
                text-align:center;
                margin-left:auto;
                margin-right:auto;
            "
        >
            Everything your business needs to stay connected, in one place.
        </p>


        <div class="card-grid cols-5">

            <!-- Wireless -->

            <div class="card">

                <h3>Business Wireless</h3>

                <p>
                    Data plans, device financing, and BYOD options for teams of
                    any size. We'll match you to the right plan instead of the
                    most expensive one.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-wireless/')); ?>"
                    class="btn-card"
                >
                    See Wireless Options
                </a>

            </div>


            <!-- Internet -->

            <div class="card">

                <h3>Business Internet</h3>

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


            <!-- Phone -->

            <div class="card">

                <h3>Business Phone</h3>

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


            <!-- POS -->

            <div class="card">

                <h3>Point of Sale</h3>

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


            <!-- Fleet -->

            <div class="card">

                <h3>Fleet Management</h3>

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

        </div>

    </div>
</section>


<!-- Testimonials -->

<section
    class="section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>
    <div class="container">

        <h2 style="text-align:center;">
            What Our Clients Say
        </h2>

        <p
            class="lede"
            style="
                text-align:center;
                margin-left:auto;
                margin-right:auto;
            "
        >
            Real feedback from businesses we've worked with.
        </p>


        <div class="testimonial-grid">

            <div class="testimonial-card">

                <p class="testimonial-quote">
                    The WCP team made switching to Rogers Business very
                    painless. I'd definitely work with them again.
                </p>

                <p class="testimonial-attribution">
                    Rob N.
                </p>

                <p class="testimonial-role">
                    President, Simcoe IT Solutions Inc.
                </p>

            </div>


            <div class="testimonial-card">

                <p class="testimonial-quote">
                    I highly recommend the WCP team. During recent contract
                    negotiations with Rogers, they demonstrated strong
                    professionalism and expertise, ensuring a fair and efficient
                    outcome. They're approachable, responsive, and always
                    willing to help — and their problem-solving ability means
                    they quickly find practical solutions. Overall, a great
                    experience.
                </p>

                <p class="testimonial-attribution">
                    Debbie B.
                </p>

                <p class="testimonial-role">
                    Deals Desk Manager / Sales Operations Specialist, Avaya
                </p>

            </div>


            <div class="testimonial-card">

                <p class="testimonial-quote">
                    I've worked with the WCP team for over 9 years now. They've
                    looked after our corporate plan for our employees at Markham
                    Stouffville Hospital, keeping our staff up to date with
                    current offers and promotions. Very knowledgeable at what
                    they do.
                </p>

                <p class="testimonial-attribution">
                    Lee E.
                </p>

                <p class="testimonial-role">
                    Network Analyst, OVH
                </p>

            </div>

        </div>


        <div class="review-cta">

            <a
                href="https://g.page/r/CX3o5GNSAmziEAE/review"
                target="_blank"
                rel="noopener noreferrer"
            >
                ⭐ Had a great experience with us? Leave us a review on Google →
            </a>

        </div>

    </div>
</section>


<!-- Bill Review Form -->

<section
    id="contact"
    class="section form-section reveal"
    style="
        padding-top:64px;
        padding-bottom:64px;
    "
>
    <div class="container">

        <div class="review-form-layout">


            <!-- Intro -->

            <div class="review-form-intro">

                <span class="section-eyebrow">
                    FREE BUSINESS BILL REVIEW
                </span>

                <h2>
                    Upload your bill. We'll do the homework.
                </h2>

                <p class="lede">
                    Send us a recent bill and a WCP business specialist will
                    review your current services and available options.
                </p>


                <div class="review-benefits">

                    <div class="review-benefit">

                        <span>✓</span>

                        <div>
                            <strong>
                                Review your current costs
                            </strong>

                            <p>
                                We'll look at what you're currently paying and
                                what services you have.
                            </p>
                        </div>

                    </div>


                    <div class="review-benefit">

                        <span>✓</span>

                        <div>
                            <strong>
                                Identify opportunities
                            </strong>

                            <p>
                                We'll check available Rogers Business options
                                that may better fit your needs.
                            </p>
                        </div>

                    </div>


                    <div class="review-benefit">

                        <span>✓</span>

                        <div>
                            <strong>
                                Talk to a real person
                            </strong>

                            <p>
                                Your review is handled by a WCP business
                                specialist.
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Form -->

            <form
                class="lead-form bill-review-form"
                action="https://formspree.io/f/xvkppvjl"
                method="POST"
                enctype="multipart/form-data"
            >

                <div class="form-heading">

                    <h3>
                        Get My Free Bill Review
                    </h3>

                    <p>
                        Tell us a little about your business.
                    </p>

                </div>


                <div class="form-row">

                    <input
                        type="text"
                        name="name"
                        placeholder="Your name"
                        autocomplete="name"
                        required
                    >

                    <input
                        type="text"
                        name="business_name"
                        placeholder="Business name"
                        autocomplete="organization"
                        required
                    >

                </div>


                <div class="form-row">

                    <input
                        type="tel"
                        name="phone"
                        placeholder="Phone number"
                        autocomplete="tel"
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


                <select
                    name="interest"
                    required
                >

                    <option
                        value=""
                        disabled
                        selected
                    >
                        What can we help you with?
                    </option>

                    <option value="Current bill review">
                        Review my current bill
                    </option>

                    <option value="Wireless">
                        Business wireless plans
                    </option>

                    <option value="Internet">
                        Business internet plans
                    </option>

                    <option value="Phone">
                        Business phone plans
                    </option>

                    <option value="Not sure">
                        I'm not sure yet
                    </option>

                </select>


                <div class="bill-upload">

                    <label for="bill-upload">

                        <span class="upload-icon">
                            ↑
                        </span>

                        <span class="upload-copy">

                            <strong>
                                Upload your current bill
                            </strong>

                            <small>
                                Optional — PDF, JPG or PNG
                            </small>

                        </span>

                    </label>


                    <input
                        type="file"
                        id="bill-upload"
                        name="current_bill"
                        accept=".pdf,.jpg,.jpeg,.png,application/pdf,image/jpeg,image/png"
                    >

                </div>


                <textarea
                    name="message"
                    rows="4"
                    placeholder="Anything else you'd like us to know? (optional)"
                ></textarea>


                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Get My Free Bill Review
                </button>


                <p class="form-disclaimer">
                    🔒 Your bill is kept private and used only to review your
                    business services. No obligation. Prefer to talk?
                    <a href="tel:+18338441977">
                        Call 1-833-844-1977
                    </a>
                </p>

            </form>

        </div>

    </div>
</section>


<?php get_footer(); ?>
