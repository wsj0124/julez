<?php

namespace Julez;

/**
 * Overrides the meta page title on certain areas of the website.
 * @return string
 */
if (function_exists('\Substrakt\SEO\Filters\pageMetaTitle')) {
    function metaTitle()
    {
        $seo = \Substrakt\SEO\SEO::instance();

        // What's On.
        if (is_post_type_archive('event') || is_page_template('templates/whats-on.php')) {
            return $seo->customTitle("What's On");
        }

        // Search.
        if (get_query_var('s')) {
            return $seo->customTitle("Search Results");
        }

        return $seo->metaTitle();
    }
    remove_filter('pre_get_document_title', '\Substrakt\SEO\Filters\pageMetaTitle');
    add_filter('pre_get_document_title', '\Julez\metaTitle');
}
