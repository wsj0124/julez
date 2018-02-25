<div class="o-layout__item <?php echo $textArea->width(); ?>">
    <div class="<?php echo $textArea->classes(); ?>">

        <?php if ($title = $textArea->title()): ?>
            <h4 class="c-column-title"><?php echo $title; ?></h4>
        <?php endif; ?>

        <?php if ($subtitle = $textArea->subtitle()): ?>
            <p class="c-column-subtitle"><?php echo $subtitle; ?></p>
        <?php endif; ?>

        <?php echo $textArea->content(); ?>

    </div>
</div>
