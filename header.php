<?php global $julez; ?><!doctype html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114829304-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-114829304-1');
        </script>

        <title><?php echo $julez->seoTitle(); ?></title>
        <?php if ($description = $julez->seoDescription()): ?>
        <meta description content="<?php echo $description; ?>">
        <?php endif; ?>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="<?php echo is_singular() ? 'single-wrapper' : 'wrapper'; ?>">
            <header>
                <h1><a href="<?php echo site_url(); ?>"><?php echo bloginfo(); ?></a></h1>
            </header>

