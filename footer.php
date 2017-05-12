<!-- /site content-->
</div>
<footer class="site-footer">

    <nav>

        <?php

            $args = array(
                'theme_location' => 'footer'
            );

        ?>

        <?php wp_nav_menu( $args); ?>

    </nav>


    <h3 class="footer-content"><?php bloginfo('name'); ?> - &copy; <?php echo date("Y"); ?></h3>

</footer>

<! -- container -->

<?php wp_footer(); ?>
</body>
</html>
