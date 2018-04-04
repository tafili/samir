<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyfifteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.



    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );


    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function my_theme_enqueue_scripts() {
	wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/script.js');
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>