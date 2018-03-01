<?php

// Theme constants.
define('THEMES_PATH', dirname(dirname(__DIR__)));
define('THEME_PATH', dirname(__DIR__));
define('THEME_URL', get_template_directory_uri());
define('GOOGLE_API_KEY', 'AIzaSyB5whqtsMranyL-dCY1UpTaY1xDkoDEFGE');

// Helpers.
require_once 'functions/helpers.php';
require_once 'functions/queries.php';

// Hooks.
require_once 'hooks/construkt.php';
require_once 'hooks/enqueues.php';
require_once 'hooks/menus.php';
require_once 'hooks/images.php';
require_once 'hooks/seo.php';

// Traits.
require_once 'traits/SEO.php';

// Classes.
require_once 'classes/Attachment.php';
require_once 'classes/NullObject.php';
require_once 'classes/Julez.php';
require_once 'classes/Post.php';
require_once 'classes/Page.php';
require_once 'classes/About.php';

// Instantiate required classes, once WP has loaded.
add_action('wp', function() {
    global $post, $julez;

    // Posts.
    if (is_singular()) {
        $julez = new \Julez\Post($post);
    }

    // Pages.
    if (is_page() || is_front_page() || is_404()) {
        if (is_front_page()) {
            $frontPageID = get_option('page_on_front');
            $post = get_post($frontPageID);
        }

        $julez = new \Julez\Page($post);

        if (is_page('about')) {
            $julez = new \Julez\About($post);
        }
    }

});
