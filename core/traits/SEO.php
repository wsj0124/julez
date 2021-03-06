<?php

namespace Julez;

trait SEO
{

    /**
     * Returns the description meta tag content.
     * @return string
     */
    public function seoDescription()
    {
        if ($description = $this->field('seo_description')) {
            return $description;
        }

        if ($introduction = $this->introduction()) {
            return $introduction;
        }

        return '';
    }

    /**
     * Returns the title meta tag value.
     * @return string
     */
    public function seoTitle()
    {
        $postTitle = $this->title();
        $siteName  = get_bloginfo();
        $titleTag  = $this->field('seo_title');

        if (is_home()) {
            $postID   = get_option('page_on_front');
            $titleTag = get_field('seo_title', $postID);
        }

        return str_replace(['{post_title}', '{site_name}'], [$postTitle, $siteName], $titleTag);
    }

}
