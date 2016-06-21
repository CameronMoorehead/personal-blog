<?php

function blog_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'blog_resources');

function load_fonts() {
    wp_register_style('et-googleFonts',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,800');
    wp_enqueue_style( 'et-googleFonts');
}

add_action('wp_print_styles', 'load_fonts');

// Customize excerpt word count lenght
function custom_excerpt_length() {
    return 100;
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
