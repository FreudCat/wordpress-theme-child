<?php
/**
 * Twenty Twenty child theme functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<?php
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
function child_theme_enqueue_styles() {
    $parenthandle = 'twentytwenty-style'; 
    $theme = wp_get_theme();
    //shopping-page uses it's bootstrap and a custom items
    if (basename(get_page_template()) != 'shopping-page.php') {
        wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
            array(),  // if the parent theme code has a dependency, copy it to here
            $theme->parent()->get('Version')
        );
    }
    wp_enqueue_style( 'twentytwenty-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    wp_enqueue_script ('fontawesome', 'https://kit.fontawesome.com/73971c4e5a.js', array(), true); //using the fontawesome cdn
    if (basename(get_page_template()) == 'gallery-page-coded-images.php') { 
        wp_enqueue_script( 'modal-JS', get_stylesheet_directory_uri().'/assets/js/modal.js', array(), rand(), true);
    }
    if ((basename(get_page_template()) == 'shopping-page.php')) { 
        wp_enqueue_script( 'shopping-JS',get_stylesheet_directory_uri().'/assets/js/shopping.js', array(), rand(), true);
        wp_enqueue_script( 'bootstrap-JS',get_stylesheet_directory_uri().'/assets/bootstrap-5.1.3-dist/js/bootstrap.js', array(), rand(), true);
        wp_enqueue_script( 'bootstrap-CSS',get_stylesheet_directory_uri().'/assets/bootstrap-5.1.3-dist/css/bootstrap.css', array(), rand(), true);
        wp_enqueue_style( $parenthandle, get_stylesheet_directory_uri() . '/shoe-style.css', array());
    }
    if ((basename(get_page_template()) == 'main-portfolio-page.php')) { 
        wp_enqueue_script( 'bootstrapPortfolioJS',get_stylesheet_directory_uri().'/bootstrap-5.1.3-dist/js/bootstrap.js', array(), rand());
        wp_enqueue_style( 'bootstrapPortfolioCSS',get_stylesheet_directory_uri().'/bootstrap-5.1.3-dist/css/bootstrap.css', array(), rand());
        wp_enqueue_style( "portfolioCSS", get_stylesheet_directory_uri() . '/portfolio.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    }
    if ((basename(get_page_template()) == 'sunny-page.php') || (basename(get_page_template()) == 'sunny-page-dynamic.php')) { 
        wp_enqueue_style( 'bootstrapCSS','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), rand());
        wp_enqueue_script( 'testimonial-JS', get_stylesheet_directory_uri().'/assets/js/create-testimonial.js', array(), rand(), true);
    }
    if ((basename(get_page_template()) == 'sunny-page.php')) { 
        wp_enqueue_style( 'bootstrapCSS','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), rand());
    }
    //Sending over an array from php to javascript if we are on the sunny landing page (how to send over variables!)
    $directory_uri=get_stylesheet_directory_uri();
    $testimonial_array=array();
    $array_holder=array();
    $i=1;
    do {
        if (get_field('testimonial_' . $i)[0] === 'Yes') {
            $array_holder = array(
                'image' => get_field('testimonial_' . $i . '_image'),
                'text' => get_field('testimonial_' . $i . '_text'),
                'name' => get_field('testimonial_' . $i . '_name'),
                'job' => get_field('testimonial_' . $i . '_job')
            );
            array_push($testimonial_array, $array_holder);
            $array_holder=array();
            $i = $i+1;
        }
    } while (get_field('testimonial_' . $i)[0] === 'Yes');
    
    wp_add_inline_script( 'testimonial-JS', 'let testimonial_array = ' . wp_json_encode( $testimonial_array ), 'before' );
    wp_add_inline_script( 'testimonial-JS', 'let directory_uri = ' . wp_json_encode( $directory_uri ), 'before' );
}

//function removes the white stripe at the top of the template associated with the admin toolbar
add_action('get_header', 'remove_admin_tolbar_on_frontend');
function remove_admin_tolbar_on_frontend() {  
    if ((basename(get_page_template()) == 'sunny-page.php') || (basename(get_page_template()) == 'shopping-page.php') || (basename(get_page_template()) == 'swervy-landing-page.php'))  { 
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
}

//Register new menus for sunny landing page 
function register_menus() { 
    register_nav_menus(
        array(
            'sunny-menu' => 'Sunny Main Menu',
            'sunny-footer-menu' => 'Sunny Footer Menu',
        )
    ); 
}
add_action( 'init', 'register_menus' );

//add nav-link class to anchor tags in the sunny landing page - both fxns needed
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'sunny-menu') {
        $classes[] = 'nav-link';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

?>
