<?php

namespace Julez;

/**
 * Enqueues the admin CSS.
 * @return null
 */
function adminCSS()
{
    wp_enqueue_style('admin-css', THEME_URL . '/assets/css/acf.css', [], '1.0.1');
}
add_action('admin_enqueue_scripts', '\Julez\adminCSS');

/**
 * Enqueues the theme CSS.
 * @return null
 */
function CSS()
{
    if (is_page('about')) {
        wp_enqueue_style('julez', THEME_URL . '/assets/css/about.css', [], uniqid(), 'all');
    } {
        wp_enqueue_style('fresco', THEME_URL . '/assets/css/vendor/fresco/fresco.css', [], '2.1.2');
        wp_enqueue_style('julez', THEME_URL . '/assets/css/main.css', [], uniqid(), 'all');
    }
}
add_action('wp_enqueue_scripts', '\Julez\CSS');

/**
 * Enqueues the theme fonts.
 * @return null
 */
function fonts()
{
    wp_enqueue_style('source-sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro', [], '1.0.0', 'all');
    wp_enqueue_style('libre-baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville', [], '1.0.0', 'all');
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/40d61d11c6.js', [], '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', '\Julez\fonts');

/**
 * Enqueue the theme JS.
 * @return null
 */
function JS()
{
    if (is_page('about')) {
        wp_enqueue_script('julez', THEME_URL . '/assets/js/about.js', ['jquery'], uniqid(), true);
    } else {
        wp_enqueue_script('fresco', THEME_URL . '/assets/js/vendor/fresco.min.js', ['jquery'], '2.1.2', true);
        wp_enqueue_script('lazyload', THEME_URL . '/assets/js/vendor/lazysizes.min.js', [], '4.0.1', false);
        wp_enqueue_script('julez', THEME_URL . '/assets/js/main.js', ['jquery'], uniqid(), true);
    }

}
add_action('wp_enqueue_scripts', '\Julez\JS');
