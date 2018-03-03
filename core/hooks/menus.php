<?php

namespace Julez;

/**
 * Registers the site menus for the theme to work with via appearance/menus on the UI.
 */
function menus()
{
    register_nav_menus([
        'header' => 'Header',
        'footer' => 'Footer',
        'social' => 'Social'
    ]);
}
add_action('init', '\Julez\menus');

/**
 * Registers the site options page via ACF.
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'  => 'Site Options',
        'menu_title'  => 'Site Options',
        'menu_slug'   => 'site-options',
        'parent_slug' => 'options-general.php'
    ]);
}
