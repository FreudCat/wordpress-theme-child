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
    <nav class="navbar navbar-expand-lg shopping-nav navbar-light bg-light ">
      <div class="container-fluid shopping-nav">
        <div class="d-inline-flex align-items-center">
          <button class="navbar-toggler shopping-nav-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#shoppingSupportedContent" aria-controls="shoppingSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
          </button>
          <a class="navbar-brand shopping-logo" href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/logo.svg"></a>
        </div>
        <div class="offcanvas shopping offcanvas-start" tabindex="-1" id="shoppingSupportedContent" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-close.svg"></button>
          </div>
          <div class="offcanvas-body">
            <ul class='navbar-nav flex-nowrap shopping-unordered-list'>
          <!-- These are expanded on the left in desktop view-->
              <li class='nav-item shoe-header-item'><a class = "nav-link" id="offcanvas-link" href="#">Collections</a></li> <!--greyish text - class="shopping-header-items", class="shopping-header-links"-->
              <li class='nav-item shoe-header-item'><a class = "nav-link" id="offcanvas-link" href="#">Men</a></li><!--on hover and active - border bottom is orange and thick, text becomes black-->
              <li class='nav-item shoe-header-item'><a class = "nav-link" id="offcanvas-link" href="#">Women</a></li>
              <li class='nav-item shoe-header-item'><a class = "nav-link" id="offcanvas-link" href="#">About</a></li>
              <li class='nav-item shoe-header-item'><a class = "nav-link" id="offcanvas-link" href="#">Contact</a></li>
            <!-- These are in a column in a sidebar in mobile view -->
            <!-- These are on the right and remain in both views-->
            </ul>
          </div>
        </div>
        <div class="d-inline-flex">
          <a class ='nav-link ms-auto p-2' href="#"><img class="cart-image" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-cart.svg"></a> <!--cart with items ->oval/orange icon with white number in the center-->
          <!-- <cartmodal>rectangle with rounded borders and box shadow on desktop --- on mobile, covers move of the shoe image, also has box shadow  --> 
          <img class="avatar" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-avatar.png"> <!--round; on hover and active - orange border; class="avatar"-->
        </div>
      </div>
    </nav> 
  </header>
</body>

