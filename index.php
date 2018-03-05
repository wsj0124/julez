<?php get_header(); ?>

<?php if ($posts = posts()): ?>
    <div class="o-layout">
        <?php foreach ($posts as $story): ?>
            <div class="o-layout__item u-1/1@mobile u-1/2@tablet">
                <div class="card">
                    <a href="<?php echo $story->permalink(); ?>">
                        <div class="thumbnail">
                            <img
                                src="<?php echo $story->thumbnail()->url('golden-tiny'); ?>"
                                data-src="<?php echo $story->thumbnail()->url('golden-medium'); ?>"
                                class="lazyload blurup"
                                alt="<?php echo $story->title(); ?>"
                                title="<?php echo $story->title(); ?>">
                        </div>
                        <div class="details">
                            <h2><?php echo $story->title(); ?></h2>
                        </div>
                    </a>
                </div>
            </div>
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
