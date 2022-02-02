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
    <nav class="navbar navbar-expand-lg navbar-light shopping-nav">
      <div class="container-fluid pt-3 pb-4 p-md-0 g-md-0 shopping-nav-container">
        <button class="navbar-toggler shopping-nav-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#shoppingSupportedContent" aria-controls="shoppingSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-menu.svg">
        </button>
        <a class="navbar-brand" href="#"><img class="shopping-logo" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/logo.svg"></a>
        <div class="collapse navbar-collapse">
        <ul class='navbar-nav flex-nowrap nav-list'>
          <li class='nav-item bottom-border'><a class = "nav-link offcanvas-link" href="#">Collections</a></li> 
          <li class='nav-item bottom-border'><a class = "nav-link offcanvas-link" href="#">Men</a></li>
          <li class='nav-item bottom-border'><a class = "nav-link offcanvas-link" href="#">Women</a></li>
          <li class='nav-item bottom-border'><a class = "nav-link offcanvas-link" href="#">About</a></li>
          <li class='nav-item bottom-border'><a class = "nav-link offcanvas-link" href="#">Contact</a></li>
        </ul>
      </div>

      <div class="d-flex ms-auto">
        <a class="ms-auto cart" href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-cart.svg"></a>
        <a class="avatar-holder" href="#"><img class="avatar rounded-circle p-0" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-avatar.png"></a>
      </div>

    </div>
  </nav>
  </header>
  
  <div class="offcanvas offcanvas-start shopping" tabindex="-1" id="shoppingSupportedContent" aria-labelledby="shoppingSupportedContent">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-close.svg"></button>
    </div>
    <div class="offcanvas-body">
      <ul class='navbar-nav flex-nowrap shopping-unordered-list'>
    <!-- These are expanded on the left in desktop view-->
        <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Collections</a></li> <!--greyish text - class="shopping-header-items", class="shopping-header-links"-->
        <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Men</a></li><!--on hover and active - border bottom is orange and thick, text becomes black-->
        <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Women</a></li>
        <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">About</a></li>
        <li class='nav-item'><a class = "nav-link offcanvas-link" href="#">Contact</a></li>
      <!-- These are in a column in a sidebar in mobile view -->
      <!-- These are on the right and remain in both views-->
      </ul>
    </div>
  </div>
</body>
