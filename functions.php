<?php

function blog_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'blog_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
));

function load_fonts() {
    wp_register_style('et-googleFonts',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,800');
    wp_enqueue_style( 'et-googleFonts');
}

add_action('wp_print_styles', 'load_fonts');
