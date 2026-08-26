<?php get_header(); ?>


<!-- Contact Hero -->

<section
    class="hero hero-photo"
    style="
        --hero-img: url('<?php echo esc_url(get_template_directory_uri() . '/images/hero-laptop-cafe.jpg'); ?>');
        padding:56px 0;
    "
>
    <div class="container">

        <h1 style="font-size:30px;">
            Let's see where you can save
        </h1>

        <p>
            Send us a message, or email a copy of your current Rogers bill to
            <a
                href="mailto:sales@wcpwireless.com"
                style="
                    color:#fff;
                    text-decoration:underline;
                "
            >
                sales@wcpwireless.com
            </a>
            for a free business review — no obligation.
        </p>

    </div>
</section>



<!-- Contact Content -->

<section class="section reveal">

    <div
        class="container"
        style="
            display:grid;
            grid-template-columns:1.1fr 1fr;
            gap:48px;
        "
    >


        <!-- Contact Form -->

        <div>

            <h2>
                Get In Touch
            </h2>

            <p class="lede">
                Fill out the form and we'll get back to you, usually within one
                business day.
            </p>


            <form
                class="lead-form"
                action="https://formspree.io/f/xvkppvjl"
                method="POST"
            >

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
                    placeholder="Business name (if applicable)"
                    autocomplete="organization"
                >

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

                <textarea
                    name="message"
                    placeholder="How can we help?"
                    rows="4"
                    style="
                        padding:12px 14px;
                        border:1px solid var(--border);
                        border-radius:var(--radius);
                        font-family:inherit;
                        font-size:15px;
                        resize:vertical;
                    "
                ></textarea>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Send My Message
                </button>

            </form>

        </div>



        <!-- Contact Sidebar -->

        <div>


            <!-- Free Review -->

            <div
                class="card"
                style="
                    margin-bottom:20px;
                    border:2px solid var(--red);
                "
            >

                <span
                    class="badge"
                    style="
                        margin-bottom:10px;
                        display:inline-block;
                    "
                >
                    Free Business Review
                </span>

                <h3 style="margin-top:0;">
                    Already have Rogers? Let's find you savings.
                </h3>

                <p
                    style="
                        font-size:14px;
                        color:var(--text-muted);
                        margin-bottom:14px;
                    "
                >
                    Email a copy of your current bill and our team will review
                    it for free — no obligation, no pressure. We'll let you know
                    exactly where you could be saving.
                </p>

                <a
                    href="mailto:sales@wcpwireless.com"
                    class="btn btn-primary"
                    style="
                        width:100%;
                        text-align:center;
                        display:block;
                    "
                >
                    Email sales@wcpwireless.com
                </a>

            </div>



            <!-- Contact Details -->

            <div
                class="card"
                style="margin-bottom:20px;"
            >

                <h3 style="margin-top:0;">
                    Contact Details
                </h3>


                <p
                    style="
                        margin-bottom:6px;
                        display:flex;
                        align-items:center;
                        gap:8px;
                    "
                >

                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="var(--red)"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="flex:0 0 auto;"
                        aria-hidden="true"
                    >
                        <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.5 2.1L8 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2z"/>
                    </svg>

                    <a href="tel:+18338441977">
                        1-833-844-1977
                    </a>

                </p>


                <p
                    style="
                        margin-bottom:6px;
                        display:flex;
                        align-items:center;
                        gap:8px;
                    "
                >

                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="var(--red)"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="flex:0 0 auto;"
                        aria-hidden="true"
                    >
                        <path d="M4 4h16v16H4z"/>
                        <path d="m4 6 8 7 8-7"/>
                    </svg>

                    <a href="mailto:sales@wcpwireless.com">
                        sales@wcpwireless.com
                    </a>

                </p>


                <p
                    style="
                        margin-bottom:0;
                        display:flex;
                        align-items:flex-start;
                        gap:8px;
                    "
                >

                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="var(--red)"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="
                            flex:0 0 auto;
                            margin-top:2px;
                        "
                        aria-hidden="true"
                    >
                        <path d="M12 22s8-7.4 8-13a8 8 0 1 0-16 0c0 5.6 8 13 8 13z"/>
                        <circle cx="12" cy="9" r="3"/>
                    </svg>

                    2875 14th Ave Unit 3, Markham, ON L3R 5H8

                </p>

            </div>



            <!-- Privacy -->

            <div class="card">

                <h3 style="margin-top:0;">
                    A Note on Your Privacy
                </h3>

                <p
                    style="
                        font-size:14px;
                        color:var(--text-muted);
                        margin-bottom:0;
                    "
                >
                    Any bill or document you send us is used only by our team to
                    review your current plan and identify potential savings or
                    upgrades. We don't share your information with anyone
                    outside WCP and Rogers for the purpose of servicing your
                    account.
                </p>

            </div>


        </div>

    </div>

</section>


<?php get_footer(); ?>
