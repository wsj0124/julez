<?php if ($anchors = \Substrakt\Construkt\pageAnchors()): ?>
    <?php foreach ($anchors as $anchor): ?>
        <li><a href="#<?php echo $anchor->slug ?>"><?php echo $anchor->text; ?></a></li>
    <?php endforeach; ?>
<?php endif; ?>
