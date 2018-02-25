<?php if ($images = $imageGrid->images()): ?>
    <div class="o-layout__item u-1/1@desktop <?php echo $imageGrid->classes(); ?>">
        <div class="o-layout">
            <?php foreach ($images as $image): ?>
                <div class="o-layout__item <?php echo $image->width; ?>">
                    <?php if ($image->width === 'u-1/1@desktop'): ?>
                        <img src="<?php echo $image->image->url('large'); ?>">
                    <?php else: ?>
                        <img src="<?php echo $image->image->url('golden-large'); ?>">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
