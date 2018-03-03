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

<section class="content">
    <?php construkt(); ?>
</section>

<?php get_footer(); ?>
