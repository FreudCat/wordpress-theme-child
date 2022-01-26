
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php	wp_body_open(); ?>
    <header id="sunny-site-header" class="header-footer-group" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/header.jpg');" role="banner">

    <nav class="navbar transparent">
      <div class="container-fluid">
    <a class="navbar-brand logo" href="#">bloom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/icon-hamburger.svg"></button>
        
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="arrow"></div>
      <ul class="navbar-nav sunny-nav">
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


