</div>
<footer class="site-footer">

    <nav class="site-nav clearfix">

        <?php 

            $args = array(
                'theme_location' => 'footer'
            );

        ?>

        <?php wp_nav_menu( $args); ?>

    </nav>            


    <p class="footer-content"><?php bloginfo('name'); ?> - &copy; <?php echo date("Y"); ?></p>

</footer>

<! -- container -->

<?php wp_footer(); ?>
</body>
</html>
