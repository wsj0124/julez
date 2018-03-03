<?php

namespace Julez;

/**
 * Enqueues the theme CSS.
 * @return null
 */
function CSS()
{
    if (is_page('about')) {
        wp_enqueue_style('julez', THEME_URL . '/assets/css/about.css', [], uniqid(), 'all');
    } else {
        wp_enqueue_style('julez', THEME_URL . '/assets/css/main.css', [], uniqid(), 'all');
    }
}
add_action('wp_enqueue_scripts', '\Julez\CSS');

/**
 * Enqueues the font awesome library JS.
 * @version 2.0.5
 * @return null
 */
function fontAwesome()
{
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/40d61d11c6.js', [], '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', '\Julez\fontAwesome');

/**
 * Enqueues the CSS and JS for Fresco.
 * @return null
 */
function fresco()
{
    wp_enqueue_style('theme-fresco', THEME_URL . '/assets/css/fresco/fresco.css', [], '2.1.2');
    wp_enqueue_script('theme-fresco', THEME_URL . '/assets/js/lib/fresco.min.js', ['jquery'], '2.1.2', true);
}
add_action('wp_enqueue_scripts', '\Julez\fresco');

/**
 * Enqueues the Google Maps API and supporting JS.
 * @return null
 */
function googleMaps()
{
    if (defined('GOOGLE_API_KEY')) {
        wp_enqueue_script('theme-google-map-api', 'https://maps.googleapis.com/maps/api/js?key=' . GOOGLE_API_KEY , [], '1.0.3', true);
        wp_enqueue_script('theme-google-map', THEME_URL . '/assets/js/map.js', ['jquery'], '1.0.2', true);
    }
}
add_action('wp_enqueue_scripts', '\Julez\googleMaps');

/**
 * Enqueue the theme JS.
 * @return null
 */
function JS()
{
    wp_enqueue_script('julez', THEME_URL . '/assets/js/lib/lazysizes.min.js', [], '4.0.1', false);

    if (is_page('about')) {
        wp_enqueue_script('julez', THEME_URL . '/assets/js/about.js', ['jquery'], '1.0,0', false);
    } else {
        wp_enqueue_script('julez', THEME_URL . '/assets/js/main.js', ['jquery'], '1.0,0', true);
        wp_enqueue_script('smooth-scroll', THEME_URL . '/assets/js/smooth-scroll.js', ['jquery'], '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', '\Julez\JS');

/**
 * Enqueues the Waypoints library.
 * @link https://github.com/imakewebthings/waypoints
 * @return null
 */
function waypoints()
{
    wp_enqueue_script('waypoints', THEME_URL . '/assets/js/waypoints.js', ['jquery', 'waypoints-lib'], '1.0.0', true);
    wp_enqueue_script('waypoints-lib', THEME_URL . '/assets/js/lib/waypoints.min.js', ['jquery'], '4.0.1', true);
}
add_action('wp_enqueue_scripts', '\Julez\waypoints');
