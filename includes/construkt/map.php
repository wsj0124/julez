<div class="o-layout__item <?php echo $map->width(); ?>">
    <div class="<?php echo $map->classes(); ?>">
        <?php if ($map->title() || $map->subtitle()): ?>
            <div>
                <?php if ($title = $map->title()): ?>
                    <h4><?php echo $title; ?></h4>
                <?php endif; ?>

                <?php if ($subtitle = $map->subtitle()): ?>
                    <h5><?php echo $subtitle; ?></h5>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($map->latitude() !== '' && $map->longitude() !== ''): ?>
            <div class="google-map">
                <div class="marker" data-lat="<?php echo $map->latitude(); ?>" data-lng="<?php echo $map->longitude(); ?>"></div>
            </div>
        <?php endif; ?>
    </div>
</div>
