<?php if ($images = $imageGrid->images()): ?>
    <div class="o-layout__item u-1/1@desktop <?php echo $imageGrid->classes(); ?>">
        <div class="o-layout">
            <?php foreach ($images as $image): ?>
                <div class="o-layout__item <?php echo $image->width; ?>">
                    <a data-fresco-group="image-group" data-fresco-caption="<?php echo $image->image->caption(); ?>" class="fresco" href="<?php echo $image->image->url('large'); ?>">
                        <?php if ($image->width === 'u-1/1@desktop'): ?>
                            <img class="lazyload blur-up"
                                 src="<?php echo $image->image->url('thumbnail'); ?>"
                                 data-src="<?php echo $image->image->url('large'); ?>">
                        <?php else: ?>
                            <img class="lazyload blur-up"
                                 src="<?php echo $image->image->url('thumbnail'); ?>"
                                 data-src="<?php echo $image->image->url('golden-large'); ?>">
                        <?php endif; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
