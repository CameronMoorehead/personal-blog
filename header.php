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

        </header>

    <div class="container">
        <!-- /site-header -->
