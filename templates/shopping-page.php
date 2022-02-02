<?php
/**
 * Template Name: Shopping Landing Page */
get_header('shopping');
remove_action('wp_head', '_admin_bar_bump_cb');

?>

<main class="container">
  <div class="row main-row">
    <section class="offset-md-1 col-md-5 col-sm-12 left-col"> <!-- column 1 with large show image and four smaller shoe images below -->
      <div class="row d-md-flex">
        <div class="col-12 p-0 p-md-3 main-shoe-div">
          <img class="main-shoe" data-bs-toggle="modal" data-bs-target="#shoeModal" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-1.jpg">
        </div>
      </div>
      <div class="row d-none p-md-3 d-md-flex justify-content-md-between thumbnail-row"> <!-- nested row to hold the smaller images -- NOT shown in mobile view-use bootstrap classes for this purpose -->
        <div class="col-3 p-0 shoe-div">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-1-thumbnail.jpg">
        </div>
        <div class="col-3 p-0 shoe-div">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-2-thumbnail.jpg">
        </div>
        <div class="col-3 px-0 shoe-div">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-3-thumbnail.jpg">
        </div>
        <div class="col-3 px-0 shoe-div">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-4-thumbnail.jpg">
        </div>
      </div>
    </section>
    <section class="offset-md-1 col-md-4 col-sm-12 right-col px-5 px-md-0"> 
      <h1 class="company-header">Sneaker Company</h1> <!-- small, orange, upper case - this can come from the page title-->
      <h2 class="shoe-title">Fall Limited Edition Sneakers</h2> <!-- large, black, bold --> 
      <p class="shoe-description">These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.</p>
      <div class="row price-row">
        <div class="col-4 col-md-3 price-div">
          <p class="current-price">$125.00</p> <!-- Not sure if this is a span? -->
        </div>
        <div class="col-1 col-2 sale-tag-div">
          <p class="sale-tag text-center">50%</p>
        </div>
        <div class="offset-3 g-0 col-2 offset-md-0 col-md-12">
          <p class="previous-price">$250.00</p>
        </div>
      </div>
      
      <div class="row counter-row">
        <div class="col-1 minus-sign d-flex align-items-center counter-holder">
          <img class="w-75" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-minus.svg">
        </div>
        <div class="col-10 text-center counter-holder">
          <p class="number-holder">0</p>
        </div>
        <div class="col-1 plus-sign d-flex align-items-center counter-holder">
          <img class="w-75" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-plus.svg">
        </div>
        <div class="col-12 d-grid button-div">
          <button type="button" class="btn add-cart-button"><img class="cart-in-button" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-cart.svg">Add to cart</button> <!-- Don't forget the orange box shadow -->
        </div>
      </div>
    </section>
  </div> <!-- End main row holder -->
</main>

<div class="modal fade" id="shoeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <button type="button" class="btn modal-close" data-bs-dismiss="modal" aria-label="Close"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-close.svg"></button>
          <img class="modal-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-1.jpg">
      <div class="row justify-content-between d-none d-md-flex modal-thumbnail-row"> <!-- nested row to hold the smaller images -- NOT shown in mobile view-use bootstrap classes for this purpose -->
        <div class="col-3">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-1-thumbnail.jpg">
        </div>
        <div class="col-3">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-2-thumbnail.jpg">
        </div>
        <div class="col-3">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-3-thumbnail.jpg">
        </div>
        <div class="col-3">
          <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-4-thumbnail.jpg">
        </div>
      </div>
    </div>
  </div>
</div>


<?php 
  get_footer('shopping')
?>

