<?php
/**
 * WCP Legacy Portal Redirect
 *
 * Any URL that WordPress cannot find is forwarded to the same
 * path on portal.wcpwireless.com.
 *
 * Example:
 * https://www.wcpwireless.com/OREA
 * becomes
 * https://portal.wcpwireless.com/OREA
 */

status_header(200);
nocache_headers();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="robots"
        content="noindex, nofollow"
    >

    <title>
        Redirecting… | Wireless Communications Plus
    </title>

    <style>

        body {
            font-family:
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            background: #F6F6F4;
            color: #222;

            display: flex;
            align-items: center;
            justify-content: center;

            min-height: 100vh;

            margin: 0;
            padding: 20px;

            text-align: center;
        }

        a {
            color: #B40E2A;
            font-weight: 600;
        }

    </style>


    <script>

        /*
         * Preserve:
         *
         * - URL path
         * - query string
         * - hash
         *
         * Example:
         *
         * wcpwireless.com/OREA
         * →
         * portal.wcpwireless.com/OREA
         *
         *
         * wcpwireless.com/OREA?x=1#Home
         * →
         * portal.wcpwireless.com/OREA?x=1#Home
         */

        const target =
            'https://portal.wcpwireless.com' +
            window.location.pathname +
            window.location.search +
            window.location.hash;

        window.location.replace(target);

    </script>

</head>


<body>

    <p>

        Redirecting you to the right page…

        <br><br>

        If you're not redirected automatically,

        <a
            id="fallback-link"
            href="https://portal.wcpwireless.com"
        >
            click here
        </a>.

    </p>


    <script>

        document
            .getElementById('fallback-link')
            .href = target;

    </script>

</body>

</html>
