<?php
/**
 * Template Name: Landing Page */
get_header("landing");
?>

<?php 
	$topic = get_field("page_image_header");
  $basePrice = get_field("middling_price");
  $miniPrice = get_field("price_multiplier_mini") ? $miniPrice = (get_field("price_multiplier_mini")) * $basePrice : $miniPrice = $basePrice;
  $massivePrice = get_field("price_multiplier_massive") ? $massivePrice = (get_field("price_multiplier_massive")) * $basePrice : $massivePrice = $basePrice;
  $miniItems = get_field("mini_price_items");
  $middleItems = get_field("middling_price_items");
  $massiveItems = get_field("massive_price_items");
?>

<main id="landing-page-content" role="main">
<input type="checkbox" id="accordion-checkbox" />
  <label for="accordion-checkbox" id="accordion-label">Abstract</label>  
  <!-- Note to self: "id" was used in the label element to provide more specificity over the parent style.css that was previously overriding my styles when just using tag:class -->
  
  <div class="accordion-content">
    <p>This page is one of three pages that utilize the Landing Page template. My first attempt at creating a flexible template, the focus is on exploring how to set up a WordPress site, the functionality of PHP, and injecting information from Advanced Custom Fields.</p>
    <p>Rather than hardcoding the content, users can utilize Advanced Custom Fields and the WordPress editor to customize this template by changing the background image, page title, and card content. Here, I used the ACF and editor to highlight elements of southern California boardwalks where I would see lots of fancy dogs, excellent food, and interesting people.</p>
  </div> 


  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content', get_post_type() );
      }
    }
  ?>

  <section class="card-holder">
    <div class="landing-page-card">
      <div class="front">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/landing-page-images/<?php echo $topic ?>1.jpg" class="card-img" alt="">
        <div class="container">
          <p><b>Mini</b></p>
          <p>Price: $<?php echo number_format($miniPrice, 2, '.', ''); ?></p>
        </div>
      </div>
      <div class="back">
        <p class="card-back-header">Included in this package:</p>
        <p class="card-back-text"><?php echo $miniItems ?></p>
      </div>
    </div>
    <div class="landing-page-card">
      <div class="front">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/landing-page-images/<?php echo $topic ?>2.jpg')" class="card-img" alt="">
        <div class="container">
          <p><b>Middle</b></p>
          <p>Price: $<?php echo number_format($basePrice, 2, '.', ''); ?></p>
        </div>
      </div>
      <div class="back">
        <p class="card-back-header">Included in this package:</p>
        <p class="card-back-text"><?php echo $middleItems ?></p>
      </div>
    </div>
    <div class="landing-page-card">
      <div class="front">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/landing-page-images/<?php echo $topic ?>3.jpg" class="card-img" alt="">
        <div class="container">
          <p><b>Massive</b></p>
          <p>Price: $<?php echo number_format($massivePrice, 2, '.', ''); ?></p>
        </div>
      </div>
      <div class="back">
        <p class="card-back-header">Included in this package:</p>
        <p class="card-back-text"><?php echo $massiveItems ?></p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

<!-- function to use console.log in PHP -->
<?php function console_log( $dataToLog ){
  echo '<script>';
  echo 'console.log('. json_encode( $dataToLog ) .')';
  echo '</script>';
}
?>
