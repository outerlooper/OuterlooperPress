<?php

/* OuterlooperPress Functions */

add_action( 'wp_enqueue_scripts', 'parent_theme_enqueue_styles' );
function parent_theme_enqueue_styles() {
    $parenthandle = 'twentytwentyone'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'OuterlooperPress_enqueue_styles', 818 );
function OuterlooperPress_enqueue_styles() {
    $parenthandle = 'twentytwentyone'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( 'outerlooper-press-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

add_action( 'wp_enqueue_scripts', 'OuterlooperPress_enqueue_scripts', 818 );
function OuterlooperPress_enqueue_scripts() {
    wp_enqueue_script( 'outerlooper-press-scripts', get_stylesheet_directory_uri() . '/scripts.js');
}
?>