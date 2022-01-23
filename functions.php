<?php
/**
 * Twenty Twenty child theme functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
function child_theme_enqueue_styles() {
    $parenthandle = 'twentytwenty-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'twentytwenty-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
