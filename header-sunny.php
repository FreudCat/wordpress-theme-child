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
	<?php ?>
    <nav class="navbar navbar-expand-lg transparent">
      <div class="container-fluid nav-container g-0">

        <a class="navbar-brand logo" href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/logo.svg"></a>

        <!-- Start the hamburger menu -->        
        <button class="navbar-toggler sunny-nav-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img class="navbar-toggler-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/icon-hamburger.svg">
        </button>
        
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarSupportedContent">
        <span class="arrow"></span>
          <ul class="navbar-nav ms-auto flex-nowrap text-center">
            <li class="nav-item">
              <a class="nav-link header-link" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-link" href="#">Projects</a>
            </li>
            <li class="nav-item nav-contact">
              <a class="nav-link contact-button" href="#">CONTACT</a>
            </li>
          </ul>
        </div>  <!-- End collapsible nav div -->

      </div> <!-- End navbar-container div -->
    </nav>
  </header>
</body>
</html> 


