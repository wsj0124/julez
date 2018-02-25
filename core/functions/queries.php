<?php

/**
 * Returns post objects as properties of the `\Julez\Post` class.
 * Overrides the global query.
 * @param array $params Overrides for the query.
 * @return array
 */
function posts($params = []) {
    global $wp_query;

    $results = [];

    $wp_query = new WP_Query(array_merge([
        'post_type' => 'post',
        'paged' => max(1, get_query_var('page'))
    ], $params));

    if ($posts = $wp_query->posts) {
        foreach ($posts as $post) {
            $results[] = new \Julez\Post($post);
        }
    }

    return $results;
}
