<?php
/**
 * Template Name: Landing Page */
get_header();
?>

<?php 
	$topic = get_field("page_image_header");
  $basePrice = get_field("middling_price");
  if (get_field("price_multiplier_mini")) {
    $miniPrice = (get_field("price_multiplier_mini")) * $basePrice;
  } else {
    $miniPrice = $basePrice;
  }
  if (get_field("price_multiplier_massive")) {
    $massivePrice = (get_field("price_multiplier_massive")) * $basePrice;
  } else {
    $massivePrice = $basePrice;
  }
?>

<main id="landingPageContent" role="main">
  <label for="accordion-checkbox" class="accordion-label">Abstract</label>  
  <input type="checkbox" id="accordion-checkbox" />
  <div class="accordion-content">
    <p>This is a landing page that...</p>
  </div> 


  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content', get_post_type() );
      }
    }
  ?>

  <section class="cardHolder">
    <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/landing-page-images/<?php echo $topic ?>1.jpg" class="cardImg" alt="">
    <div class="container">
      <p><b>Mini</b></p>
      <p>Price: $<?php echo number_format($miniPrice, 2, '.', ''); ?></p>
    </div>
    </div>
    <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/landing-page-images/<?php echo $topic ?>2.jpg')" class="cardImg" alt="">
    <div class="container">
    <p><b>Middle</b></p>
      <p>Price: $<?php echo number_format($basePrice, 2, '.', ''); ?></p>
    </div>
    </div>
    <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/landing-page-images/<?php echo $topic ?>3.jpg" class="cardImg" alt="">
    <div class="container">
    <p><b>Massive</b></p>
      <p>Price: $<?php echo number_format($massivePrice, 2, '.', ''); ?></p>
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

