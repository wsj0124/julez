<?php

namespace Julez;

// Remove Construkt stock scripts.
remove_action('wp_enqueue_scripts', '\Substrakt\Construkt\Enqueues\styles');
remove_action('wp_enqueue_scripts', '\Substrakt\Construkt\Enqueues\fresco');
remove_action('wp_enqueue_scripts', '\Substrakt\Construkt\Enqueues\googleMaps');
remove_action('wp_enqueue_scripts', '\Substrakt\Construkt\Enqueues\scripts');
remove_action('wp_enqueue_scripts', '\Substrakt\Construkt\Enqueues\waypoints');

/**
 * Adds custom fields to the Construkt Group.
 * @param array $group The existing group fields.
 * @return array
 * @codeCoverageIgnore
 */
function customGroupFields($group)
{
    // Remove 'Categories' from the `hide_on_screen` array.
    $group['hide_on_screen'][10] = '';

    // Update the Construkt location rules.
    $group = array_merge($group, [
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ]
            ],
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ]
            ],
        ],
    ]);

    return $group;
}
add_filter('construkt_register_group', '\Julez\customGroupFields', 999);
