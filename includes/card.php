<div class="o-layout__item u-1/1@mobile u-1/2@tablet">
    <div data-c-animation-delay="4000ms" data-c-animation="fadeInUp" class="lazyload card">
        <a href="<?php echo $story->permalink(); ?>">
            <div class="thumbnail">
                <img src="<?php echo $story->thumbnail()->url('golden-medium'); ?>" alt="<?php echo $story->title(); ?>" title="<?php echo $story->title(); ?>">
            </div>
            <div class="details">
                <h2><?php echo $story->date('d.m.Y'); ?> &ndash; <?php echo $story->title(); ?></h2>
            </div>
        </a>
    </div>
</div>
