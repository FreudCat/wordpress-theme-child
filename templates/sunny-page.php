<?php
/**
 * Template Name: Sunny Landing Page */
get_header('sunny');
remove_action('wp_head', '_admin_bar_bump_cb');
?>

<?php 
  function console_log( $dataToLog ){
    echo '<script>';
    echo 'console.log('. json_encode( $dataToLog ) .')';
    echo '</script>';
  }

  $enqueue = 'enqueued';
  if (wp_style_is( 'bootstrapCSS', $enqueue )) {
      console_log("BootstrapCSS was enqueued");
  } else {
    console_log("BootstrapCSS was NOT enqueued");
  }
  if (wp_script_is( 'testimonial-JS', $enqueue )) {
    console_log("testimonialjs was enqueued");
} else {
  console_log("testimonialjs was NOT enqueued");
}
?>

<?php
  get_template_part( 'template-parts/content', get_post_type() );
  if (get_field('image_1')) {
    $image_1 = get_field('image_1');
  } else  {
    $image_1 = get_stylesheet_directory_uri() . '/assets/images/sunny-page-images/kitten.jpg;';
  }
  if (get_field('image_2')) {
    $image_2 = get_field('image_2');
  } else  {
    $image_2 = get_stylesheet_directory_uri() . '/assets/images/sunny-page-images/spilled-coffee.jpg;';
  }
  if (get_field('image_3')) {
    $image_3 = get_field('image_3');
  } else  {
    $image_3 = get_stylesheet_directory_uri() . '/assets/images/sunny-page-images/milkbottles.jpg;';
  }
  if (get_field('image_4')) {
    $image_4 = get_field('image_4');
  } else  {
    $image_4 = get_stylesheet_directory_uri() . '/assets/images/sunny-page-images/orange.jpg;';
  }

?>


<!-- gx-0 removes all of the "gutters" which is the padding associated with the container and row classes -->
<div class="container-fluid g-0"> 
  <section class="row sunny-sections g-0">
    <div class="col-md order-md-last">
    <img src= <?php echo $image_1?>>
    </div>  
    <div class="col-md align-self-center"> <!-- The order-lg-first means the div will be first in a larger viewscreen, but second in other screens -->
      <div class="col-md-7 mx-auto text-holder">
        <h2 class="cube-header order-md-first">Transform your brand</h2>
        <p class="cube-text">We are a full-service creative agency specializing in helping brands grow fast. Engage your clients through compelling visuals that do most of the marketing for you.</p>
        <a class="cube-link transform-div" href="#"><span>LEARN MORE</a>
      </div>
    </div>
  </section>

  <section class="row sunny-sections g-0">
    <div class="col-md image-div">
      <img src=<?php echo $image_2?>>
    </div>
    <div class="col-md align-self-center">
      <div class="col-md-8 mx-auto text-holder">
        <h2 class="cube-header">Stand out to the right audience</h2>
        <p class="cube-text">Using a collaborative formula of designer, researcher, photographers, videographers, and copywriters, we'll build and extend you brand in digital places.</p>
        <a class="cube-link stand-out-div" href="#"><span>LEARN MORE</a>
      </div>
    </div>
  </section>

  <section class="row sunny-sections h-auto g-0">
    <div class="col-md image-div" style="background-image: url(<?php echo $image_3?>">  
      <div class="col-lg-7 mx-auto design-holder">
        <p class="graphic-design-header text-center">Graphic Design</p>
        <p class="graphic-design-text text-center">Great design makes you memorable. We deliver artwork that underscores your brand message and captures potential client's attention.</p>
      </div>
    </div>
    <div class="col-md image-div" style="background-image: url(<?php echo $image_4?>">
      <div class="col-lg-6 mx-auto design-holder">  
        <p class="photography-header text-center">Photography</p>
        <p class="photography-text text-center">Increase your credibility by getting the most stunning, high-quality photos that improve your business image.</p>
      </div>
    </div>
  </section>

  <section class="row sunny-sections testimonial-header-row align-items-end">
    <div class="col text-center">
      <p class="testimonial-header">CLIENT TESTIMONIALS</p>
    </div>
  </section>

  <section class="row sunny-sections testimonial-row text-center">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <div id="testimonial-div" class="row text-center">
        
      </div>
    </div>
  </section>

  <section class="row sunny-sections pictures-row gx-0">
    <div class="col-lg-3  col-6 gx-0">
      <img class="square pictures-div" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/milkbottles.jpg'>
    </div>

    <div class="col-lg-3 col-6 gx-0" >
      <img class="pictures-div" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/orange.jpg'>
    </div>

    <div class="col-lg-3 col-6 gx-0">
      <img class="pictures-div" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/cone.jpg'>
    </div>

    <div class="col-lg-3 col-6 gx-0">
      <img class="pictures-div" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/sugarcubes.jpg'>
    </div>
  </section> 
</div>

<?php 
  get_footer('sunny')
?>








