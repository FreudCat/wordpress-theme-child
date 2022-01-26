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
    if (basename(get_page_template()) == 'gallery-page-coded-images.php') { 
        wp_enqueue_script( 'modal-JS',get_stylesheet_directory_uri().'/assets/js/modal.js', array(), rand(), true);
    }
    if (basename(get_page_template()) == 'sunny-page.php') {
        wp_enqueue_style( 'sunny-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js', true);
        wp_enqueue_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', true);
        wp_enqueue_script( 'bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', true);
    }
}
