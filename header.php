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
        <h3>
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

    <div class="icon-group">
      <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter-square"></i></a>
      <a href="https://www.linkedin.com/in/cameron-moorehead-64a03182" target="_blank"><i class="fa fa-linkedin-square"></i></a>
      <a href="https://github.com/cameronmoorehead" target="_blank"><i class="fa fa-github-square"></i></a>
      <i class="fa fa-envelope-square"></i>
    </div>
  </header>

  <div class="container">
      <!-- /site-header -->
