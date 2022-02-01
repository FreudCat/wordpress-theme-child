<?php
/**
 * Template Name: Shopping Landing Page */
get_header('shopping');
remove_action('wp_head', '_admin_bar_bump_cb');

?>

<main class="container">
  <div class="row main-row">
    <section class="offset-md-1 col-5 left-col"> <!-- column 1 with large show image and four smaller shoe images below -->
      <div class="row">
        <div class="col px-4">
          <img class="main-shoe" data-bs-toggle="modal" data-bs-target="#shoeModal" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-1.jpg">
        </div>
      </div>
      <div class="row justify-content-between thumbnail-row"> <!-- nested row to hold the smaller images -- NOT shown in mobile view-use bootstrap classes for this purpose -->
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
    </section>
    <section class="offset-md-1 col-4 right-col"> 
      <h1 class="company-header">Sneaker Company</h1> <!-- small, orange, upper case - this can come from the page title-->
      <h2 class="shoe-title">Fall Limited Edition Sneakers</h2> <!-- large, black, bold --> 
      <p class="shoe-description">These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.</p>
      <div class="row price-row">
        <div class="col-3 price-div">
          <p class="current-price">$125.00</p> <!-- Not sure if this is a span? -->
        </div>
        <div class="col-2 sale-tag-div">
          <p class="sale-tag text-center">50%</p>
        </div>
      </div>
      <p class="previous-price">$250.00</p>
      <div class="row counter-row">
        <div class="col-1 minus-sign d-flex align-items-center counter-holder">
          <img class="w-75" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-minus.svg">
        </div>
        <div class="col-2 text-center counter-holder">
          <p class="number-holder">0</p>
        </div>
        <div class="col-1 plus-sign d-flex align-items-center counter-holder">
          <img class="w-75" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-plus.svg">
        </div>
        <div class="col-7 d-grid button-div">
          <button type="button" class="btn add-cart-button"><img class="cart-in-button" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/icon-cart.svg">Add to cart</button> <!-- Don't forget the orange box shadow -->
        </div>
      </div>
    </section>
  </div> <!-- End main row holder -->
</main>

<div class="modal fade" id="shoeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="shoeModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body shoe-modal-body">
        <img class="thumbnail-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-1-thumbnail.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<modal> <!-- has box shadow-->
  <modalheader>Cart</modalheader> <!-- black bold -->
  <modalbody>
    if empty {
      <p>Your cart is empty.</p> <!-- grey, bold(?)-->
    }
    if has item -mobile {
      <div class="container"> <!-- maybe container??-->
        <div class="row">
          <div class="col">
            <img>shoe thumbmail
          </div>
          <div class="col">
            <p>title of shoe</p> <!-- if mobile, then there will be ellipses since title won't fit, but when bigger can show all-->
            <p>price X amount <span styled bold>total price</span></p>
          </div>
          <div class="col">
            <img> trash can
          </div>
        </div>
        <div>
          <button>Checkout</button> <!-- orange with white text, rounded borders-->
        </div>
      </div>

  </modalbody>
</modal>

<modal>
  no header 
  <div class="container">
    <div class="row">
      big shoe image
    </div>
    <div class="row">
      four images in a row 
    </div>
  </div>
</modal>

function addProduct(){
    let products = [];
    if(localStorage.getItem('products')){
        products = JSON.parse(localStorage.getItem('products'));
    }
    products.push({'productId' : productId + 1, image : '<imageLink>'});
    localStorage.setItem('products', JSON.stringify(products));
}
function removeProduct(productId){

// Your logic for your app.

// strore products in local storage

let storageProducts = JSON.parse(localStorage.getItem('products'));
let products = storageProducts.filter(product => product.productId !== productId );
localStorage.setItem('products', JSON.stringify(products));
}
localStorage.getItem('<whatever_the_name>')
Column 1 (left)
- large image of shoe - rounded borders
- below is four smaller images
- active image is "greyed" out with an order border
ACTIVE ---- 
- when active an image of the smaller shoes, it is greyed out but not as much as the actual active image, no border though 
- add to cart button greys out a bit and then has an orange box shadow 
- the -/+ buttons are orange when clicked 

Column 2 (right)
- h1 "sneaker company" text 
- h2 "fall limited edition sneakers"
- p text 
- price and percent off 
- greyed out previous price 
- counter to add shoes and add to cart button 

Modal with carousel! on desktop view 
- overall background is greyed out a bit 
- larger image of shoe 
- four images below that
- active image is greyed out with orange border 
NOTE - the four images do not go edge to edge of the larger image like in the main desktop screen 
- X close button on upper right
ACTIVE ---- 
- x button is orange, carousel button is orange 
- the image is greyed out, but not as much as the actual active image 

Session should persist until user clears cookies - localstorage object?

<?php 
  get_footer('shopping')
?>

