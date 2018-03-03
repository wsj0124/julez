<?php get_header(); ?>

<?php if ($posts = posts()): ?>
    <div class="o-layout">
        <?php foreach ($posts as $story): ?>
            <?php include ('includes/card.php'); ?>
        <?php endforeach; ?>
    </div>

    <section class="pagination">
        <?php echo paginate_links([
            'prev_text' => 'Newer Posts',
            'next_text' => 'Older Posts'
        ]); ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
