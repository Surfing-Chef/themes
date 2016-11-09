<?php
// Import child style sheets
function my_theme_enqueue_styles() {
    $parent_style = 'amadeus-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:500,500i,700,700i,900', false );
}


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Import custom jquery functions
function sc_scripts() {
    wp_enqueue_script(
        'sc-scripts',
        get_stylesheet_directory_uri() . '/js/style-scripts.js',
        array( 'jquery' )
    );
}
//add_action( 'wp_enqueue_scripts', 'sc_scripts' );
