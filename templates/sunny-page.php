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

$list = 'enqueued';
if (wp_style_is( 'bootstrapCSS', $list )) {
    console_log("BootstrapCSS was enqueued");
} else {
  console_log("BootstrapCSS was NOT enqueued");
}
?>
<?php
        get_template_part( 'template-parts/content', get_post_type() ); 
  ?>


<?php
$list = 'enqueued';
if (wp_style_is( 'bootstrapCSS', $list )) {
    console_log("BootstrapCSS was enqueued");
} else {
  console_log("BootstrapCSS was NOT enqueued");
}
?>

<!-- gx-0 removes all of the "gutters" which is the padding associated with the container and row classes -->
<div class="container-fluid g-0"> 
  <section class="row sunny-sections g-0">
    <div class="col-md order-md-last">
    <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/transform.jpg'>
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
      <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/stand-out.jpg'>
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
    <div class="col-sm image-div" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/design.jpg');">  
      <div class="col-lg-7 mx-auto design-holder">
        <p class="graphic-design-header text-center">Graphic Design</p>
        <p class="graphic-design-text text-center">Great design makes you memorable. We deliver artwork that underscores your brand message and captures potential client's attention.</p>
      </div>
    </div>
    <div class="col-sm main-page-image-div" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/photography.jpg');">
      <div class="col-lg-6 mx-auto design-holder">  
        <p class="photography-header text-center">Photography</p>
        <p class="photography-text text-center">Increase your credibility by getting the most stunning, high-quality photos that improve your business image.</p>
      </div>
    </div>
  </section>

  <section class="row sunny-sections testimonial-header-row align-items-end">
    <div class="col text-center ">
      <p class="testimonial-header">CLIENT TESTIMONIALS</p>
    </div>
  </section>


  <section class="row sunny-sections testimonial-row text-center">
    <div class="col-sm-4 testimonial-container">
      <img class="w-25 h-auto mx-auto d-block rounded-circle" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/image-emily.jpg'>
      <p class="client-testimonial">We put our trust in Sunnyside and they delivered, making sure our needs were met and deadlines were always hit.</p>
      <p class="client-name">Emily R.</p>
      <p class="client-job">Marketing Director</p>
    </div>
    
    <div class="col-sm-4 testimonial-container">
    <img class="w-25 h-auto mx-auto d-block rounded-circle" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/image-thomas.jpg'>
      <p class="client-testimonial">Sunnyside's enthusiasm coupled with their keen interest in our brand's success made it a satisfying and enjoyable experience.</p>
      <p class="client-name">Thomas S.</p>
      <p class="client-job">Chief Operating Officer</p>
    </div>
    
    <div class="col-sm-4 testimonial-container">
    <img class="w-25 h-auto mx-auto d-block rounded-circle" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/image-jennie.jpg'>
      <p class="client-testimonial">Incredible end result! Our sales increased over 400% when we worked with Sunnyside. Highly recommended!</p>
      <p class="client-name">Jennie F.</p>
      <p class="client-job">Business Owner</p>
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








