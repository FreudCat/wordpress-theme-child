
<?php
/**
 * Header file for the Sunny Landing Page template.
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
      <div id="nav-container" class="container-fluid">

        <a class="navbar-brand logo" href="#">bloom</a>
        <!-- Start the hamburger menu -->
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img class="navbar-toggler-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/icon-hamburger.svg">
        </button>
        
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarSupportedContent">
        <span class="arrow"></span>
          <ul class="navbar-nav ms-auto flex-nowrap">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link contact-button" href="#">CONTACT</a>
            </li>
          </ul>
        </div>

      </div>

    </nav>
  </header>
  
</body>
</html> 


