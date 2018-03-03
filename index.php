<?php get_header(); ?>

<?php if ($posts = posts()): ?>
    <section data-c-animation-delay="400ms" data-c-animation="fadeInUp" class="lazyload">
        <div class="o-layout">
            <?php foreach ($posts as $story): ?>
                <?php include ('includes/card.php'); ?>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="pagination">
        <?php echo paginate_links([
            'prev_text' => 'Newer Posts',
            'next_text' => 'Older Posts'
        ]); ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
