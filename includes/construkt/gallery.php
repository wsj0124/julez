<div class="o-layout__item <?php echo $gallery->width(); ?>">
    <div class="<?php echo $gallery->classes(); ?>">
        <?php if ($title = $gallery->title()): ?>
            <h4 class="c-container-title"><?php echo $title; ?></h4>
        <?php endif; ?>

        <?php if ($subtitle = $gallery->subtitle()): ?>
            <p class="c-container-subtitle"><?php echo $subtitle; ?></p>
        <?php endif; ?>

        <div class="o-layout o-layout--small c-gallery">
            <?php foreach (array_slice($gallery->images(), 0, 6) as $image): ?>
                <div class="o-layout__item u-1/2@tablet u-1/3@desktop">
                    <a data-fresco-group="<?php echo $gallery->ID(); ?>" data-fresco-caption="" class="fresco" href="<?php echo $image->url('large'); ?>">
                        <img class="c-gallery__img" src="<?php echo $image->url('640x400-crop'); ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if ($gallery->count() > 6): ?>
            <?php foreach (array_slice($gallery->images(), 6) as $i => $image): ?>
                <?php if ($i === 0): ?>
                    <div class="c-load-more">
                        <a class="c-btn c-btn--primary c-btn--ghost fresco" data-fresco-group="<?php echo $gallery->ID(); ?>" data-fresco-caption="" href="<?php echo $image->url('large'); ?>">
                            View full gallery
                            <?php if ($extraPics = $gallery->count() - 6): ?>
                                +<?php echo $extraPics; ?>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php else: ?>
                    <a style="display: none;" data-fresco-group="<?php echo $gallery->ID(); ?>" data-fresco-caption="" class="fresco" href="<?php echo $image->url('large'); ?>"></a>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
