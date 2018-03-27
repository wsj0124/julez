<?php

namespace Julez;

class Post extends Julez
{

    use ImageGrid;
    use SEO;

    /**
     * Returns the post content with the `the_content` filter applied.
     * @return string
     */
    public function content()
    {
        return apply_filters('the_content', $this->post->post_content);
    }

    /**
     * Returns the introduction, as defined in the ACF.
     * @return string
     */
    public function introduction()
    {
        if ($intro = $this->field('introduction')) {
            return $intro;
        }

        return '<p></p>';
    }

    /**
     * Returns the post thumbnail, as defined in the ACF.
     * @return object
     */
    public function thumbnail()
    {
        if ($thumbnail = $this->field('thumbnail')) {
            if (isset($thumbnail['id'])) {
                return new Attachment(get_post($thumbnail['id']));
            }
        }

        return new NullObject;
    }

}
