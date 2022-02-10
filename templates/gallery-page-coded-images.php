<?php
/**
 * Template Name: Gallery Page Static */
get_header();
get_template_part( 'template-parts/modal-image' );
?>

<!--
  Note to self re styles for this template - followed guide here https://qodeinteractive.com/magazine/how-to-enqueue-scripts-wordpress/. The css is file for this template is in assets/css/gallerystyle.css, but is written in the corresponding sass page. It is then enqueued in the functions.php page of this theme under the function twentytwenty_register_styles
--> 

<!-- function to use console.log in PHP -->
<?php function console_log( $dataToLog ){
  echo '<script>';
  echo 'console.log('. json_encode( $dataToLog ) .')';
  echo '</script>';
}
?>

<main id="gallery-page-coded-images" role="main">
  <input type="checkbox" id="accordion-checkbox" />
  <label for="accordion-checkbox" id="accordion-label">Abstract</label>  
  <!-- Note to self: "id" was used in the label element to provide more specificity over the parent style.css that was previously overriding my styles when just using tag:class -->
  <div class="accordion-content">
    <p>This template contains some of my favoriate paintings, artists, locations, and operas. This is the first template of this portfolio to use Sass as a preprocessor, and also builds upon my prior use of CSS flex. I also took a bit of a time figuring out how to override the parent theme's styles.</p>
  </div> 

  <section class="image-holder"> 
    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/chicago.jpg" alt="Chicago marquee">
    
    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/bosch.jpg" alt="Bosch's Garden of Earthly Delights">

    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/eugene.jpg" alt="Tchaikovsky's Eugene Onegin">
  
    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/hoffman.jpg" alt="Offenbach's Tales of Hoffman">

    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/turandot.jpg" alt="Puccini's Turandot">

    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/kawasaki.jpg" alt="Audrey Kawasaki backlit">

    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/hopper.jpg" alt="Edward Hopper's Room in New York">

    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/nighthawks.jpg" alt="Edward Hopper's Nighhawks">

    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/lunch.jpg" alt="Seurat's A Sunday on La Grande Jatte">
  
    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/magritte.jpg" alt="Magritte-style painting">

    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/magritte2.jpg" alt="Magritte's The Lovers">
  
    <img class="gallery-image toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/nurse.jpg" alt="Roy Lichtenstein's Nurse">
  </section>

  <div class="image-modal cover-modal header-footer-group slide-holder" data-modal-target-string=".image-modal">
    <div class="image-modal-inner modal-inner">
      <div class="image-wrapper section-inner">

      <button class="toggle close-nav-toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" aria-expanded="false" data-set-focus=".image-modal">Close</button>
        <figure class="modal-image fade"> 
        <img id="image-for-modal" src="">
        <div class="caption-button-holder">
          <p class="previous">&#10094;</p>
          <figcaption></figcaption>
          <p class="next">&#10095;</p>
        </div>  
        </figure>

      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>

