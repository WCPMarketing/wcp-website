<?php

/*
|--------------------------------------------------------------------------
| WCP LEGACY PORTAL REDIRECTS
|--------------------------------------------------------------------------
|
| Old WCP portal URLs are redirected to portal.wcpwireless.com.
|
| Incoming URLs are converted to lowercase for matching, so:
|
| /OREA
| /orea
| /Orea
|
| all match the same redirect.
|
| The destination capitalization is preserved exactly as entered below.
|
*/


/*
|--------------------------------------------------------------------------
| GET REQUESTED PATH
|--------------------------------------------------------------------------
*/

$request_uri = isset($_SERVER['REQUEST_URI'])
    ? wp_unslash($_SERVER['REQUEST_URI'])
    : '';


$request_path = parse_url(
    $request_uri,
    PHP_URL_PATH
);


$request_path = rawurldecode(
    $request_path
);


$request_path = trim(
    $request_path,
    '/'
);


$request_key = strtolower(
    $request_path
);


/*
|--------------------------------------------------------------------------
| LEGACY PORTAL REDIRECT LIST
|--------------------------------------------------------------------------
*/

$portal_redirects = array(

    /*
    |--------------------------------------------------------------------------
    | NEW LOGIN REDIRECT
    |--------------------------------------------------------------------------
    */

    'login' =>
        'https://portal.wcpwireless.com/login',


    /*
    |--------------------------------------------------------------------------
    | EXISTING PORTAL REDIRECTS
    |--------------------------------------------------------------------------
    */

    'vw' =>
        'https://portal.wcpwireless.com/VW#Home',

    'lakeridge' =>
        'https://portal.wcpwireless.com/Lakeridge#Home',

    'epp' =>
        'https://portal.wcpwireless.com/EPP#Home',

    'hospitalpromo1' =>
        'https://portal.wcpwireless.com/hospitalpromo1#Home',

    'uhn' =>
        'https://portal.wcpwireless.com/UHN#Home',

    'bph' =>
        'https://portal.wcpwireless.com/BPH#Home',

    'wohs' =>
        'https://portal.wcpwireless.com/WOHS#Home',

    'lhs' =>
        'https://portal.wcpwireless.com/LHS#Home',

    'sunnybrook' =>
        'https://portal.wcpwireless.com/Sunnybrook#Home',

    'hsc' =>
        'https://portal.wcpwireless.com/HSC#Home',

    'southlake' =>
        'https://portal.wcpwireless.com/Southlake#Home',

    'ocsb' =>
        'https://portal.wcpwireless.com/ocsb#Home',

    'promo1' =>
        'https://portal.wcpwireless.com/promo1#Home',

    'bee-clean' =>
        'https://portal.wcpwireless.com/bee-clean#Home',

    'peel' =>
        'https://portal.wcpwireless.com/Peel#Home',

    'promo3' =>
        'https://portal.wcpwireless.com/promo3#Home',

    'peelsb' =>
        'https://portal.wcpwireless.com/Peelsb#Home',

    'hrh' =>
        'https://portal.wcpwireless.com/HRH#Home',

    'msh' =>
        'https://portal.wcpwireless.com/MSH#Home',

    'publicsector1' =>
        'https://portal.wcpwireless.com/publicsector1#Home',

    'yrp' =>
        'https://portal.wcpwireless.com/YRP#Home',

    'rppoffer' =>
        'https://portal.wcpwireless.com/rppoffer#Home',

    'healthpromo' =>
        'https://portal.wcpwireless.com/healthpromo#Home',

    'magna' =>
        'https://portal.wcpwireless.com/Magna#Home',

    'hanon' =>
        'https://portal.wcpwireless.com/Hanon#Home',

    'litens' =>
        'https://portal.wcpwireless.com/litens#Home',

    'magnarpp' =>
        'https://portal.wcpwireless.com/Magnarpp#Home',

    'multimatic' =>
        'https://portal.wcpwireless.com/Multimatic#Home',

    'multimaticrpp' =>
        'https://portal.wcpwireless.com/Multimaticrpp#Home',

    'hospitalpromo3' =>
        'https://portal.wcpwireless.com/HOSPITALPROMO3#Home',

    'nygh' =>
        'https://portal.wcpwireless.com/NYGH#Home',

    'promo2' =>
        'https://portal.wcpwireless.com/promo2#Home',

    'selectrpp' =>
        'https://portal.wcpwireless.com/SelectRPP#Home',

    'lookup' =>
        'https://portal.wcpwireless.com/lookup#Home',

    'fblookup' =>
        'https://portal.wcpwireless.com/fblookup#Home',

    'eligibility' =>
        'https://portal.wcpwireless.com/Eligibility#Home',

    'lflgroup' =>
        'https://portal.wcpwireless.com/LFLgroup#Home',

    'facebook' =>
        'https://portal.wcpwireless.com/Facebook#Home',

    'wcprpp' =>
        'https://portal.wcpwireless.com/WCPRPP#Home',

    'meta' =>
        'https://portal.wcpwireless.com/Meta#Home',

    'fbrpp' =>
        'https://portal.wcpwireless.com/FBRPP#Home',

    'hsbc' =>
        'https://portal.wcpwireless.com/HSBC#Home',

    'crea' =>
        'https://portal.wcpwireless.com/CREA#Home',

    'kinark' =>
        'https://portal.wcpwireless.com/kinark#Home',

    'onhospital' =>
        'https://portal.wcpwireless.com/ONhospital#Home',

    'fbhospital' =>
        'https://portal.wcpwireless.com/FBhospital#Home',

    'orea' =>
        'https://portal.wcpwireless.com/OREA#Home',

    'fborea' =>
        'https://portal.wcpwireless.com/FBOREA#Home',

    'clar' =>
        'https://portal.wcpwireless.com/CLAR#Home',

    'rpp' =>
        'https://portal.wcpwireless.com/RPP#Home',

    'fedex' =>
        'https://portal.wcpwireless.com/FEDEX#Home',

    'fbpublicsector' =>
        'https://portal.wcpwireless.com/FBPUBLICSECTOR#Home',

    'rogersselect' =>
        'https://portal.wcpwireless.com/RogersSelect#Home',

    'td' =>
        'https://portal.wcpwireless.com/TD#Home',

    'bankrpp' =>
        'https://portal.wcpwireless.com/BankRPP#Home',

    'rbcepp' =>
        'https://portal.wcpwireless.com/RBCEPP#Home',

    'empoffers' =>
        'https://portal.wcpwireless.com/EMPOFFERS#Home',

);


/*
|--------------------------------------------------------------------------
| RUN LEGACY REDIRECT
|--------------------------------------------------------------------------
*/

if (
    $request_key !== '' &&
    isset($portal_redirects[$request_key])
) {

    $destination =
        $portal_redirects[$request_key];


    wp_redirect(
        $destination,
        301,
        'WCP Legacy Portal Redirect'
    );


    exit;

}


/*
|--------------------------------------------------------------------------
| NORMAL WORDPRESS 404
|--------------------------------------------------------------------------
|
| If the URL isn't one of the legacy portal URLs above,
| show the normal WCP branded 404 page.
|
*/

status_header(404);

nocache_headers();

get_header();

?>


<!-- =========================================================
     404 PAGE
========================================================= -->

<section
    class="section"
    style="
        min-height:520px;
        display:flex;
        align-items:center;
    "
>

    <div
        class="container"
        style="
            text-align:center;
            max-width:700px;
        "
    >


        <div
            style="
                font-size:15px;
                font-weight:700;
                letter-spacing:.08em;
                text-transform:uppercase;
                color:var(--red);
                margin-bottom:12px;
            "
        >
            404
        </div>


        <h1>
            Page Not Found
        </h1>


        <p
            class="lede"
            style="
                max-width:560px;
                margin-left:auto;
                margin-right:auto;
            "
        >
            The page you're looking for may have moved or no longer exists.
        </p>


        <div
            class="actions"
            style="
                justify-content:center;
                margin-top:28px;
            "
        >


            <a
                href="<?php echo esc_url(home_url('/')); ?>"
                class="btn btn-primary"
            >
                Back to Home
            </a>


            <a
                href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="btn btn-secondary"
            >
                Contact Us
            </a>


        </div>


    </div>

</section>


<?php get_footer(); ?>
