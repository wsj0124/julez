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

        return '';
    }

    /**
     * Returns the title meta tag value.
     * @return string
     */
    public function seoTitle()
    {
        if ($title = $this->field('seo_title')) {
            return $title;
            return str_replace('{site}', bloginfo(), $title);
        }

        return $this->title();
    }

}
