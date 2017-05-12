<?php

function blog_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'blog_resources');

function load_fonts() {
    wp_register_style('et-googleFonts',
        'https://fonts.googleapis.com/css?family=Bangers|Oswald');
    wp_enqueue_style( 'et-googleFonts');
}

add_action('wp_print_styles', 'load_fonts');

// Customize excerpt word count length
function custom_excerpt_length($length) {
    $posttags = get_the_tags();
    if ($posttags) {
      foreach($posttags as $tags) {
        if (has_tag("short")) {
          return 20;
        } else if(has_tag("medium")) {
          return 30;
        } else if (has_tag("long")) {
          return 50;
        }
      }
    } else {
      return 50;
    }
}

add_filter('excerpt_length', 'custom_excerpt_length');


// Theme setup

function blog_setup() {

    // Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));

    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));

}

add_action('after_setup_theme', 'blog_setup');

// Custom post type
function create_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project')
            ),
        'public' => true,
        'menu_position' => 5,
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
        )
    );
}

add_action('init', 'create_post_type');

// Include jQuery
function load_jquery() {
  wp_enqueue_script('my-script', get_template_directory_uri() .'/js/test.js', array('jquery'));
  wp_enqueue_script('my-script2', get_template_directory_uri() .'/js/test2.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'load_jquery');

// Syntax Highlighter for code
function add_prism() {

    wp_register_style('prismCSS', get_stylesheet_directory_uri() . '/prism.css');

    wp_register_script('prismJS', get_stylesheet_directory_uri() . '/prism.js');

    wp_enqueue_style('prismCSS');
    wp_enqueue_script('prismJS');

}

add_action('wp_enqueue_scripts', 'add_prism');

// Apply underlining to active website section
function add_custom_classes($classes, $item) {
    if (has_category('portfolio-post') && $item->title == 'Portfolio') {
        $classes[] = 'current-menu-item';
    }
    if (has_category('blog-post') && $item->title == 'Blog') {
        $classes[] = 'current-menu-item';
    }
    return array_unique($classes);
}

add_filter('nav_menu_css_class', 'add_custom_classes', 10, 2);
