<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <!-- site-header -->
    <header class="site-header">


        <a href="<?php echo home_url(); ?>">
            <h3 id="name-tag">
                    Cameron<br>Moorehead
            </h3>
        </a>

        <nav class="site-nav">

            <?php 
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>

            <h2><?php wp_nav_menu( $args); ?></h2>

        </nav>            

    </header>

    <div class="container">
        <!-- /site-header -->
