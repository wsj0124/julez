<div class="o-layout__item <?php echo $image->width(); ?>">
    <div class="<?php echo $image->classes(); ?>">
        <?php if ($image->title() || $image->subtitle()): ?>
            <div>

                <?php if ($title = $image->title()): ?>
                    <h4 class="c-column-title"><?php echo $title; ?></h4>
                <?php endif; ?>

                <?php if ($subtitle = $image->subtitle()): ?>
                    <p class="c-column-subtitle"><?php echo $subtitle; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($image->image()): ?>
            <a data-fresco-group="image-group" data-fresco-caption="" class="fresco" href="<?php echo $image->image()->url('large'); ?>">
                <img src="<?php echo $image->image()->url('large'); ?>">
            </a>
        <?php endif; ?>
    </div>
</div>
