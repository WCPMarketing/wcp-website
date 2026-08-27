<form
    class="lead-form careers-form"
    action="https://formspree.io/f/xnpqarvr"
    method="POST"
    enctype="multipart/form-data"
>

    <div class="form-heading">

        <h3>
            Apply to WCP
        </h3>

        <p>
            Tell us a little about yourself and upload your resume.
        </p>

    </div>


    <!-- Name + Email -->

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


    <!-- Phone + Position -->

    <div class="form-row">

        <input
            type="tel"
            name="phone"
            placeholder="Phone number"
            autocomplete="tel"
            required
        >

        <input
            type="text"
            name="position"
            placeholder="Position you're interested in"
        >

    </div>


    <!-- Message -->

    <textarea
        name="message"
        rows="5"
        placeholder="Tell us a little about yourself"
    ></textarea>


    <!-- Resume Upload -->

    <div class="bill-upload">

        <label for="resume-upload">

            <span class="upload-icon">
                ↑
            </span>

            <span class="upload-copy">

                <strong>
                    Upload your resume
                </strong>

                <small>
                    PDF, DOC or DOCX
                </small>

            </span>

        </label>

        <input
            type="file"
            id="resume-upload"
            name="resume"
            accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            required
        >

    </div>


    <!-- Optional Cover Letter -->

    <div class="bill-upload">

        <label for="cover-letter-upload">

            <span class="upload-icon">
                ↑
            </span>

            <span class="upload-copy">

                <strong>
                    Upload a cover letter
                </strong>

                <small>
                    Optional — PDF, DOC or DOCX
                </small>

            </span>

        </label>

        <input
            type="file"
            id="cover-letter-upload"
            name="cover_letter"
            accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
        >

    </div>


    <!-- Formspree Subject -->

    <input
        type="hidden"
        name="_subject"
        value="New WCP Careers Application"
    >


    <button
        type="submit"
        class="btn btn-primary"
    >
        Submit Application
    </button>


    <p class="form-disclaimer">
        🔒 Your application and resume will only be used for recruitment purposes.
    </p>

</form>
