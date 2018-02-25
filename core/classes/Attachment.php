<?php

namespace Julez;

class Attachment
{

    /**
     * Defines the the class `post` object.
     * @param object $post The WP_Post object for a given page.
     */
    public function __construct($post)
    {
        $this->post = $this->build($post);
    }

    /**
     * Returns the image caption text.
     * @return string
     */
    public function caption()
    {
        return $this->post->post_excerpt;
    }

    /**
     * Returns the image post ID.
     * @return integer
     */
    public function ID()
    {
        return $this->post->ID;
    }

    /**
     * Returns the URL for the attachment at a given size.
     * @param string $size Image size to retrieve the SRC URL for.
     * @return string Image URL.
     */
    public function url($size = 'thumbnail')
    {
        if ($image = wp_get_attachment_image_src($this->ID(), $size, false)) {
            return $image[0];
        }

        return '';
    }

    /**
     * Applies the image meta data to the original WP_Post object, as WP will
     * not do this by default.
     * @param object $post The WP_Post object for this image.
     * @return object
     */
    private function build($post)
    {
        $meta = get_post_meta($post->ID, '_wp_attachment_metadata', true);

        if (is_array($meta)) {
            $post = array_merge((array) $post, $meta);
        }

        return (object) $post;
    }

}
