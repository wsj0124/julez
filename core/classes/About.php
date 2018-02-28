<?php

namespace Julez;

class About extends Page
{

    /**
     * Returns the page body, as defined in the ACF.
     * @return string
     */
    public function body()
    {
        if ($body = $this->field('body')) {
            return $body;
        }

        return '<p></p>';
    }

    /**
     * Returns the page links, as defined in the ACF.
     * @return array
     */
    public function links()
    {
        if ($links = $this->field('links')) {
            return array_map(function($link) {
                return (object) $link;
            }, $links);
        }

        return [];
    }

}
