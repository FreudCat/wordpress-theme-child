<?php
/**
 * Displays the header for the main portfolio-related pages
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<nav class="navbar navbar-expand navbar-dark pb-0 portfolio-navbar">
  <div class="container-fluid d-flex align-items-end">
    <a class="navbar-brand" href="#">
      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/portfolio-images/nav-logo.png" alt="logo" class="d-inline-block align-text-top logo-image">
    </a>
    <div id="navbarNav">
      <ul class="navbar-nav me-mid-lg-5">
        <li class="nav-item">
          <a class="nav-link pb-3 pb-mid-lg-4 portfolio-navlink home 
          <?php if (basename(get_page_template()) == 'main-portfolio-page.php') { ?>
            <? echo 'active' ?>
            <?php } ?>
            " aria-current="page" href="<? echo home_url()?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pb-3 pb-mid-lg-4 portfolio-navlink about
          <?php if (basename(get_page_template()) == 'about-page.php') { ?>
            <? echo 'active' ?>
            <?php } ?>" href="<? echo home_url('/about')?>">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>