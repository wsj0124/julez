<?php get_header('about'); ?>

<section class="content">
    <?php if ($body = $julez->body()): ?>
        <?php echo $body; ?>
    <?php endif; ?>

    <?php if ($links = $julez->links()): ?>
       <ul>
        <?php foreach ($links as $link): ?>
            <li><a href="<?php echo $link->url; ?>"><?php echo $link->title; ?></a></li>
        <?php endforeach; ?>
       </ul>
    <?php endif; ?>
</section>

<?php get_footer('about'); ?>
