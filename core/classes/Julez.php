<?php

namespace Julez;

class Julez
{

    /**
     * Defines the the class `post` object.
     * @param object $post The WP_Post object for a given page.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Returns the post date.
     * @param string $format The date format.
     * @return string
     */
    public function date($format = 'Y-m-d')
    {
        return get_the_date($format, $this->ID());
    }

    /**
     * Returns an ACF field value for this post.
     * @param string $label The field name to retrieve.
     * @return mixed
     */
    public function field($label)
    {
        if (function_exists('get_field') && $field = get_field($label, $this->id())) {
            return $field;
        }

        return false;
    }

    /**
     * Returns this post's ID.
     * @return integer
     */
    public function ID()
    {
        if (isset($this->post->ID)) return $this->post->ID;
    }

    /**
     * Returns this post's permalink.
     * @return string
     */
    public function permalink()
    {
        return get_permalink($this->ID());
    }

    /**
     * Returns this post's tags.
     * @return object
     */
    public function tags()
    {
        if ($tags = wp_get_post_tags($this->id())) {
            return (object) $tags;
        }

        return new NullObject;
    }

    /**
     * @return string Post title.
     */
    public function title()
    {
        if ($title = get_the_title($this->id())) {
            return $title;
        }

        return '';
    }

}
