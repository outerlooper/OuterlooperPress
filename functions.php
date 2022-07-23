<?php

/* OuterlooperPress Functions */

// Parent Theme Style
// add_action( 'wp_enqueue_scripts', 'parent_theme_enqueue_styles' );
// function parent_theme_enqueue_styles() {
//     $parenthandle = 'twentytwentyone';
//     $theme = wp_get_theme();
//     wp_enqueue_style( $parenthandle, 
//         get_template_directory_uri() . '/style.css', 
//         array(),  // if the parent theme code has a dependency, copy it to here
//         $theme->parent()->get('Version')
//     );
// }


// OuterlooperPress Style
add_action( 'wp_enqueue_scripts', 'OuterlooperPress_enqueue_styles', 818 );
function OuterlooperPress_enqueue_styles() {
    $parenthandle = 'twentytwentyone'; 
    $theme = wp_get_theme();
    wp_enqueue_style( 'outerlooper-press-style', 
        get_stylesheet_directory_uri() . '/style.min.css',
        array( $parenthandle ),
        $theme->get('Version') 
    );
}

// OuterlooperPress Scripts
add_action( 'wp_enqueue_scripts', 'OuterlooperPress_enqueue_scripts', 818 );
function OuterlooperPress_enqueue_scripts() {
    $theme   = wp_get_theme();
    $version = $theme->get( 'Version' );
    wp_enqueue_script( 'outerlooper-press-scripts', 
        get_stylesheet_directory_uri() . '/scripts.min.js', 
        array(), 
        $theme->get('Version'),
        true
    );
}
?>