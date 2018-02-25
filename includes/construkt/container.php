<section data-c-animation-delay="400ms" data-c-animation="fadeInUp" class="lazyload <?php echo $container->classes(); ?>" <?php echo $container->showAnchor() ? 'id="' . $container->anchorSlug() . '"' : '' ?>>
    <?php if ($title = $container->title()): ?>
        <h3 class="c-container-title"><?php echo $title; ?></h3>
    <?php endif; ?>

    <?php if ($subtitle = $container->subtitle()): ?>
        <p class="c-container-subtitle"><?php echo $subtitle; ?></p>
    <?php endif; ?>

    <div class="o-layout">
        <?php foreach ($container->blocks() as $block): ?>
            <?php echo $block->content(); ?>
        <?php endforeach; ?>
    </div>
</section>
