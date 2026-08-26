<?php
/**
 * WCP Legacy Portal Redirect
 *
 * Temporarily redirects unknown URLs on the main WCP site
 * to the same path on portal.wcpwireless.com.
 *
 * Example:
 *
 * https://www.wcpwireless.com/OREA
 * →
 * https://portal.wcpwireless.com/OREA
 *
 * This uses a 302 redirect while the new site is being tested.
 */

$request_uri = isset($_SERVER['REQUEST_URI'])
    ? wp_unslash($_SERVER['REQUEST_URI'])
    : '/';

$target_url = 'https://portal.wcpwireless.com' . $request_uri;

nocache_headers();

wp_redirect(
    $target_url,
    302,
    'WCP Legacy Portal Redirect'
);

exit;
