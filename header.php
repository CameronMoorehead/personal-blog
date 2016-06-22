<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>



        <!-- site-header -->
        <header class="site-header clearfix">

            <div id="site_image">
                <image src="<?php bloginfo('stylesheet_directory');

            ?>/images/atom.png" width="90" height="90" title="atom" />

            </div>

            <h1><a href="<?php echo home_url(); ?>">CAMERON<br>MOOREHEAD</a></h1>

            <div id="header_description">
                <h2><?php bloginfo('description'); ?></h2>
            </div>

            <nav class="site-nav clearfix">

                <?php 

                    $args = array(
                        'theme_location' => 'primary'
                    );

                ?>

                <?php wp_nav_menu( $args); ?>
            </nav>            

            <div class="mobile-nav">
                <div class="menu-btn" id="menu-btn">
                    <div id="mini-nav-image">
                        <image src="<?php bloginfo('stylesheet_directory');
                        ?>/images/hamburger.png" width="70" height="70" title="mini-nav" />
                    </div>
                    <div></div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="responsive-menu">
                    <?php wp_nav_menu( array(
                        'container_class' => 'mobile-nav',
                        'theme_location' => 'primary'
                    ) );
                    ?>
                </div>
            </div>



        </header>

    <div class="container">
        <!-- /site-header -->
