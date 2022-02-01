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
        <div class="col px-3">
          <img class="main-shoe" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopping-page-images/image-product-1.jpg">
        </div>
      </div>
      <div class="row px-1 justify-content-between thumbnail-row"> <!-- nested row to hold the smaller images -- NOT shown in mobile view-use bootstrap classes for this purpose -->
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
    <section class="col-5 right-col"> 
      <h1 class="company-header">Sneaker company</h1> <!-- small, orange, upper case - this can come from the page title-->
      <h2 class="shoe-title">Fall Limited Edition Sneakers</h2> <!-- large, black, bold --> 
      <p class="shoe-description">These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.</p>
      <p class="current-price">$125.00</p> <span>50%</span> <!-- Not sure if this is a span? -->
      <p class="previous-price">greyed out price</p>
      <div class="row add-row">
        <div class="col counter">
          <img> minus sign<num>counter</num><img> + sign <!-- Attach a js counter? -->
        </div>
        <div class="col">
          <button class="add-cart-button">Add to cart</button> <!-- Don't forget the orange box shadow -->
        </div>
      </div>
    </section>
  </div> <!-- End main row holder -->
</main>

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

