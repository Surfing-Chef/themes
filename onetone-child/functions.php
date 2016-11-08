<?php
function my_theme_enqueue_styles() {

    $parent_style = 'onetone-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
