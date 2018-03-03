            <?php wp_footer(); ?>
            <footer>
                <?php if (has_nav_menu('social')): ?>
                    <section class="social">
                        <?php wp_nav_menu(['theme_location' => 'social']); ?>
                    </section>
                <?php endif; ?>
                <span><a href="<?php echo site_url(); ?>/about">Tom Cash</a> &copy; 2006-<?php echo date('Y'); ?>, all rights reserved</span>
            </footer>
        </div> <!-- End of page wrapper -->
    </body>
</html>
