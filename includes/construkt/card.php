<div class="o-layout__item <?php echo $card->width(); ?>">
    <div class="<?php echo $card->classes(); ?>">
        <?php echo ($link = $card->link()) ? '<a href="' . $link . '">' : '' ?>
            <?php if ($card->image()): ?>
                <img src="<?php echo $card->image()->url(calculateImageSize($card->width())); ?>">
            <?php endif; ?>
            <div>
                <?php if ($title = $card->title()): ?>
                    <h4><?php echo $title; ?></h4>
                <?php endif; ?>

                <?php if ($subtitle = $card->subtitle()): ?>
                    <h5><?php echo $subtitle; ?></h5>
                <?php endif; ?>

                <?php if ($content = $card->content()): ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
        <?php echo $link ? '</a>' : ''; ?>
    </div>
</div>
