<?php get_header(); ?>

<section class="info">
    <h1><?php echo $julez->title(); ?></h1>
    <h6>~ <?php echo $julez->date('F jS, Y'); ?> ~</h6>
</section>

<?php if ($introduction = $julez->introduction()): ?>
    <section class="introduction">
        <?php echo $introduction; ?>
    </section>
<?php endif; ?>

<?php if ($imageGrid = $julez->imageGrid()): ?>
    <div class="o-layout images">
    <?php foreach ($imageGrid as $item): ?>
        <div class="o-layout__item u-<?php echo $item->mobile; ?>@mobile u-<?php echo $item->tablet; ?>@tablet u-<?php echo $item->desktop; ?>@desktop">
            <a
            data-fresco-group="image-group"
            data-fresco-caption="<?php echo $item->image->caption(); ?>"
            class="fresco" href="<?php echo $item->image->url('large'); ?>">
                <img
                    src="<?php echo $item->image->url('golden-tiny'); ?>"
                    data-src="<?php echo $item->image->url('golden-large'); ?>"
                    class="lazyload blurup">
            </a>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
