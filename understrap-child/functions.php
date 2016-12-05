<?php
// Import child style sheets
function my_theme_enqueue_styles() {
    $parent_style = 'understrap-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:500,500i,700,700i,900', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Passion+One', false );
}
