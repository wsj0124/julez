<?php

namespace Julez;

trait ImageGrid
{

    /**
     * Returns the page image grid.
     * @return array
     */
    public function imageGrid()
    {
        if ($grid = $this->field('image_grid')) {
            return array_map(function($image) {
                return (object) [
                    'image'   => new Attachment($image['image']),
                    'mobile'  => $image['mobile'],
                    'tablet'  => $image['tablet'],
                    'desktop' => $image['desktop'],
                ];
            }, $grid);
        }

        return [];
    }

}
