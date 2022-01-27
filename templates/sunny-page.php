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
<div class="container-fluid sunny-page-container gx-0"> 
  <div class="row h-auto gx-0">
    <div class="col-sm order-sm-last">
    <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/transform.jpg'>
    </div>  
    <div class="col-sm align-self-center"> <!-- The order-lg-first means the div will be first in a larger viewscreen, but second in other screens -->
      <div class="col-lg-7 mx-auto text-holder">
        <p class="cube-header order-sm-first">Transform your brand</p>
        <p class="cube-text">We are a full-service creative agency specializing in helping brands grow fast. Engage your clients through compelling visuals that do most of the marketing for you.</p>
        <a class="cube-link transform-div" href="#">LEARN MORE</a>
      </div>
    </div>
  </div>

  <div class="row h-auto gx-0">
    <div class="col-sm main-page-image-div">
      <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/stand-out.jpg'>
    </div>
    <div class="col-sm align-self-center">
      <div class="col-lg-7 mx-auto text-holder">
        <p class="cube-header text-center">Stand out to the right audience</p>
        <p class="cube-text text-center">Using a collaborative formula of designer, researcher, photographers, videographers, and copywriters, we will build and extend you brand in digital places.</p>
      </div>
    </div>
  </div>

  <div class="row sunny-height gx-0">
    <div class="col-sm main-page-image-div" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/design.jpg');">  
      <p class="graphic-design-header">Graphic Design</p>
      <p>Great design makes you memorable. We deliver artwork that underscores your brand message and captures potential client's attention.</p>
    </div>
    <div class="col-sm main-page-image-div" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/photography.jpg');">
      <p class="photography-header">Photography</p>
      <p>Increase your credibility by getting the most stunning, high-quality photos that improve your business image.</p>
    </div>
  </div>

  <div class="testimonial-header row gx-0 text-center">
    <p>CLIENT TESTIMONIALS</p>
  </div>

  <div class="row text-center d-flex flex-wrap h-auto justify-content-evenly testimonial-row gx-0">

    <div class="col-sm-3">
      <img class="w-25 h-auto mx-auto d-block rounded-circle" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/image-emily.jpg'>
      <p class="client-testimonial">We put our trust in Sunnyside and they delivered, making sure our needs were met and deadlines were always hit.</p>
      <p class="client-name">Emily R.</p>
      <p class="client-job">Marketing Director</p>
    </div>
    
    <div class="col-sm-3">
    <img class="w-25 h-auto mx-auto d-block rounded-circle" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/image-thomas.jpg'>
      <p class="client-testimonial">Sunnyside's enthusiasm coupled with their keen interest in our brand's success made it a satisfying and enjoyable experience.</p>
      <p class="client-name">Thomas S.</p>
      <p class="client-job">Chief Operating Officer</p>
    </div>
    
    <div class="col-sm-3">
    <img class="w-25 h-auto mx-auto d-block rounded-circle" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/image-jennie.jpg'>
      <p class="client-testimonial">Incredible end result! Our sales increased over 400% when we worked with Sunnyside. Highly recommended!</p>
      <p class="client-name">Jennie F.</p>
      <p class="client-job">Business Owner</p>
    </div>

  </div> 

  <div class="row pictures-row gx-0">

    <div class="col-sm">
      <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/milkbottles.jpg'>
    </div>
    
    <div class="col-sm">
    <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/orange.jpg'>
    </div>
    
    <div class="col-sm">
    <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/cone.jpg'>
    </div>

    <div class="col-sm">
    <img src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/sugarcubes.jpg'>
      </div>

  </div> 
 
 
</div>





<?php echo "This is echoed from sunny-page.php";
get_footer('sunny')
 ?>








