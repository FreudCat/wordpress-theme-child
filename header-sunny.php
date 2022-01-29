<?php
/**
 * Header file for the Sunny Landing Page templates.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg transparent">
      <div class="container-fluid nav-container g-0">
        <a class="navbar-brand logo" href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/logo.svg"></a>

        <button class="navbar-toggler sunny-nav-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img class="navbar-toggler-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/icon-hamburger.svg">
        </button>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarSupportedContent">
          <?php 
            wp_nav_menu (
              array (
                'menu' => 'sunny-menu',
                'container' => '',
                'theme_location' => 'sunny-menu',
                'items_wrap' => '<ul id="" class="navbar-nav ms-auto flex-nowrap text-center">%3$s</ul>',
              )
            )
          ?>
        </div>  <!-- End collapsible nav div -->
      </div>
    </nav>
  </header>
</body>
</html> 


