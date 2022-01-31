<?php
/**
 * Template Name: Shopping Landing Page */

?>

-->include entry-header-shopping.php and header-shopping.php 

MOBILE view (375)
- image of shoe takes up approx 1/3 of screen height
- carousel 
- "sneaker company" text h1 
- h2 - Fall Limited Edition Sneakers
- p - text 
- price with percent off then pre-sale price 
- counter to determine how many pairs to add 
- "Add to cart" button

DESKTOP (1220)
<main class="container">
  <div class="row">
    <section class="col left-col"> <!-- column 1 with large show image and four smaller shoe images below -->
      <div class="row">
        <img>Shoe
      </div>
      <div class="row"> <!-- nested row to hold the smaller images -->
        <div class="col">
          <img>small shoe 1
        </div>
        <div class="col">
          <img>small shoe 2
        </div>
        <div class="col">
          <img>small shoe 3
        </div>
        <div class="col">
          <img>small shoe 4
        </div>
      </div>
    </section>
    <section class="col right-col"> 
      <h1>Sneaker company</h1> <!-- small, orange, upper case - this can come from the page title-->
      <h2>Fall Limited Edition Sneakers</h2> <!-- large, black, bold --> 
      <p>These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.</p>
      <p>$125.00</p> <span>50%</span> <!-- Not sure if this is a span? -->
      <p>greyed out price</p>
      <div class="row">
        <div class="col">
          <img> minus sign<num>counter</num><img> + sign <!-- Attach a js counter? -->
        </div>
        <div class="col">
          <button class="add-to-cart">Add to cart</button> <!-- Don't forget the orange box shadow -->
        </div>
      </div>
    </section>
  </div> <!-- End main row holder -->
</main>
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