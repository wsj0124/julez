<div class="o-layout__item <?php echo $oembed->width(); ?>">
    <div class="<?php echo $oembed->classes(); ?>">
        <?php if ($oembed->title() || $oembed->subtitle()): ?>
            <div>
                <?php if ($title = $oembed->title()): ?>
                    <h4><?php echo $title; ?></h4>
                <?php endif; ?>

                <?php if ($subtitle = $oembed->subtitle()): ?>
                    <h5><?php echo $subtitle; ?></h5>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="o-embed-wrap">
            <?php echo $oembed->tag(); ?>
        </div>
    </div>
</div>
