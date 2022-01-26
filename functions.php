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
    wp_enqueue_script ('fontawesome', 'https://kit.fontawesome.com/73971c4e5a.js', array(), true); //using the fontawesome cdn
    if (basename(get_page_template()) == 'gallery-page-coded-images.php') { 
        wp_enqueue_script( 'modal-JS',get_stylesheet_directory_uri().'/assets/js/modal.js', array(), rand(), true);
    }
    if (basename(get_page_template()) == 'sunny-page.php') { 
        wp_enqueue_style( 'bootstrapCSS','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), rand());
    }
}

