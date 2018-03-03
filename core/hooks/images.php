<?php

namespace Julez;

/**
 * Defines the image upload/resizing settings.
 * @return null
 */
function imageSizes()
{
    add_theme_support('post-thumbnails');

    // 1:1 (Squares)
    add_image_size('square-large', 1600, 1600, ['centre', 'centre']);
    add_image_size('square-medium', 800, 800, ['centre', 'centre']);
    add_image_size('square-small', 400, 400, ['centre', 'centre']);
    add_image_size('square-tiny', 10, 10, ['centre', 'centre']);

    // 1.6:1 (The Golden Ratio)
    add_image_size('golden-large', 1600, 1000, ['centre', 'centre']);
    add_image_size('golden-medium', 800, 500, ['centre', 'centre']);
    add_image_size('golden-small', 400, 250, ['centre', 'centre']);
    add_image_size('golden-tiny', 16, 10, ['centre', 'centre']);

}
add_action('after_setup_theme', 'Julez\imageSizes');

/**
 * Sets the jpeg quality for the theme.
 * @param integer $quality The existing quality.
 * @return integer
 */
function jpegQuality($quality)
{
    return 75;
}
add_filter('jpeg_quality', '\Julez\jpegQuality');
