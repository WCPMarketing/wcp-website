<?php get_header(); ?>


<section
    class="hero hero-photo hero-sales"
    style="--hero-img: url('<?php echo esc_url(get_template_directory_uri() . '/images/hero-office-meeting.jpg'); ?>');"
>
    <div class="container">

        <div class="hero-copy">

            <span class="hero-eyebrow">
                Rogers Authorized Dealer • Serving Canadian Businesses Since 1990
            </span>

            <h1>
                Business wireless and connectivity, handled by local experts
            </h1>

            <p>
                Get business wireless, internet and phone solutions backed by a
                dedicated account manager who knows your business.
            </p>

            <div class="actions">

                <a href="#contact" class="btn btn-primary">
                    Upload My Bill for a Free Review
                </a>

                <a href="tel:+18338441977" class="link-inline">
                    Or call 1-833-844-1977
                </a>

            </div>

            <div class="hero-checks">

                <span>✓ No obligation</span>
                <span>✓ Local account manager</span>
                <span>✓ Canada-wide service</span>

            </div>

        </div>


        <div class="bill-review-card">

            <div class="bill-card-label">
                FREE BUSINESS BILL REVIEW
            </div>

            <h2>
                Think you're paying too much for business wireless?
            </h2>

            <p>
                Send us a recent wireless bill and we'll review your current
                services, pricing and available Rogers Business options.
            </p>

            <div class="bill-review-steps">

                <div class="bill-step">
                    <span class="step-number">1</span>
                    <span>Upload your current bill</span>
                </div>

                <div class="bill-step">
                    <span class="step-number">2</span>
                    <span>We review your services</span>
                </div>

                <div class="bill-step">
                    <span class="step-number">3</span>
                    <span>We show you your options</span>
                </div>

            </div>

            <a href="#contact" class="btn btn-primary bill-card-button">
                Upload My Bill
            </a>

            <p class="bill-card-note">
                🔒 Your bill is kept private and used only to review your
                business services. No obligation • Reviewed by a WCP business
                specialist
            </p>

        </div>

    </div>
</section>



<!-- Credibility -->

<section class="section credibility-section reveal">

    <div class="container">

        <div class="credibility-grid">

            <div class="credibility-item">

                <div class="credibility-icon">

                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <rect x="3" y="4" width="18" height="18" rx="2"/>
                        <path d="M16 2v4M8 2v4M3 10h18"/>
                    </svg>

                </div>

                <span class="credibility-num">35+</span>

                <p>Years in Business</p>

            </div>


            <div class="credibility-item">

                <div class="credibility-icon">

                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <path d="M3 21h18M5 21V7l7-4 7 4v14M9 9h1M14 9h1M9 13h1M14 13h1M9 17h1M14 17h1"/>
                    </svg>

                </div>

                <span class="credibility-num">500+</span>

                <p>Business Accounts Supported</p>

            </div>


            <div class="credibility-item">

                <div class="credibility-icon">

                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>

                </div>

                <span class="credibility-num">10,000+</span>

                <p>Customers Served</p>

            </div>


            <div class="credibility-item">

                <div class="credibility-icon">

                    <svg
                        width="24"
                        height="24"
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

                <span class="credibility-num">Official</span>

                <p>Rogers Authorized Dealer</p>

            </div>

        </div>

    </div>

</section>



<!-- Services -->

<section class="section reveal">

    <div class="container">

        <h2 style="text-align:center;">
            Our Services
        </h2>

        <p
            class="lede"
            style="text-align:center; margin-left:auto; margin-right:auto;"
        >
            Built around what your business needs most.
        </p>


        <div class="card-grid cols-5">

            <div class="card">

                <h3>Business Wireless</h3>

                <p>
                    Custom wireless plans for businesses of all sizes — with a
                    dedicated account manager who knows your business by name.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-wireless/')); ?>"
                    class="btn-card"
                >
                    See Wireless Plans
                </a>

            </div>


            <div class="card">

                <h3>Business Internet</h3>

                <p>
                    Reliable, fast internet with predictable pricing and local
                    support — whichever way your business connects.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-internet/')); ?>"
                    class="btn-card"
                >
                    See Internet Plans
                </a>

            </div>


            <div class="card">

                <h3>Business Phone</h3>

                <p>
                    Streamline business calls with an advanced cloud PBX
                    solution — Teams integration, mobile access, and 24/7
                    managed support.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/business-phone/')); ?>"
                    class="btn-card"
                >
                    See Phone Plans
                </a>

            </div>


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



<!-- Rogers Preferred Program -->

<section
    class="section reveal"
    style="
        background:var(--surface);
        padding-top:56px;
        padding-bottom:56px;
    "
>

    <div
        class="container"
        style="
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:24px;
            flex-wrap:wrap;
        "
    >

        <div style="max-width:520px;">

            <span
                class="eyebrow"
                style="
                    display:block;
                    font-size:11.5px;
                    font-weight:700;
                    letter-spacing:0.08em;
                    text-transform:uppercase;
                    color:var(--red);
                    margin-bottom:8px;
                "
            >
                Employer &amp; Association Pricing
            </span>

            <h3 style="margin:0 0 6px;">
                Rogers Preferred Program
            </h3>

            <p
                style="
                    margin:0;
                    color:var(--text-muted);
                    font-size:14.5px;
                "
            >
                Exclusive pricing on the latest phones and plans for eligible
                employers and associations. Check in seconds if your business
                qualifies.
            </p>

        </div>


        <a
            href="https://wcpwireless.com/lookup#Home"
            class="btn btn-primary"
            style="flex:0 0 auto;"
        >
            Check Eligibility
        </a>

    </div>

</section>



<!-- Storefront Photo -->

<section class="photo-band">

    <img
        src="<?php echo esc_url(get_template_directory_uri() . '/images/rogers store front1.png'); ?>"
        alt="Rogers storefront signage"
    >

    <div class="overlay">

        <div class="container">

            <p>
                A local team you can walk in and talk to — not just a call
                centre.
            </p>

        </div>

    </div>

</section>



<!-- Rogers Dealer -->

<section
    class="section"
    style="
        padding-top:44px;
        padding-bottom:44px;
        background:var(--surface);
        text-align:center;
    "
>

    <div class="container">

        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/Rogers_AuthorizedDealer_Logo_Red_EN.png'); ?>"
            alt="Official Rogers Authorized Dealer"
            style="
                height:30px;
                width:auto;
                margin:0 auto 14px;
            "
        >

        <p
            style="
                font-size:13.5px;
                color:var(--text-muted);
                max-width:480px;
                margin:0 auto;
            "
        >
            As an Official Rogers Authorized Dealer since 1990, WCP is held to
            Rogers' own standards for pricing, service, and support.
        </p>

    </div>

</section>



<!-- Testimonials -->

<section
    class="section reveal"
    style="
        padding-top:100px;
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

                <div class="testimonial-footer">

                    <span class="testimonial-avatar">
                        RN
                    </span>

                    <div>

                        <p class="testimonial-attribution">
                            Rob N.
                        </p>

                        <p class="testimonial-role">
                            President, Simcoe IT Solutions Inc.
                        </p>

                    </div>

                </div>

            </div>


            <div class="testimonial-card">

                <p class="testimonial-quote">
                    I highly recommend the WCP team. During recent contract
                    negotiations with Rogers, they demonstrated strong
                    professionalism and expertise, ensuring a fair and efficient
                    outcome. They're approachable, responsive, and always willing
                    to help — and their problem-solving ability means they
                    quickly find practical solutions. Overall, a great experience.
                </p>

                <div class="testimonial-footer">

                    <span class="testimonial-avatar">
                        DB
                    </span>

                    <div>

                        <p class="testimonial-attribution">
                            Debbie B.
                        </p>

                        <p class="testimonial-role">
                            Deals Desk Manager / Sales Operations Specialist,
                            Avaya
                        </p>

                    </div>

                </div>

            </div>


            <div class="testimonial-card">

                <p class="testimonial-quote">
                    I've worked with the WCP team for over 9 years now. They've
                    looked after our corporate plan for our employees at Markham
                    Stouffville Hospital, keeping our staff up to date with
                    current offers and promotions. Very knowledgeable at what
                    they do.
                </p>

                <div class="testimonial-footer">

                    <span class="testimonial-avatar">
                        LE
                    </span>

                    <div>

                        <p class="testimonial-attribution">
                            Lee E.
                        </p>

                        <p class="testimonial-role">
                            Network Analyst, OVH
                        </p>

                    </div>

                </div>

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
>

    <div class="container">

        <div class="review-form-layout">


            <div class="review-form-intro">

                <span class="section-eyebrow">
                    FREE BUSINESS BILL REVIEW
                </span>

                <h2>
                    Upload your bill. We'll do the homework.
                </h2>

                <p class="lede">
                    Send us a recent wireless bill and a WCP business specialist
                    will review your current services and available options.
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

                    <option value="" disabled selected>
                        What can we help you with?
                    </option>

                    <option value="Current bill review">
                        Review my current wireless bill
                    </option>

                    <option value="New business wireless">
                        New business wireless plans
                    </option>

                    <option value="Switching carrier">
                        Switching from another carrier
                    </option>

                    <option value="Internet and phone">
                        Business internet &amp; phone
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
