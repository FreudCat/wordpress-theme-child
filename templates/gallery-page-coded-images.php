<!--
  Note to self re styles for this template - followed guide here https://qodeinteractive.com/magazine/how-to-enqueue-scripts-wordpress/. The css is file for this template is in assets/css/gallerystyle.css, but is written in the corresponding sass page. It is then enqueued in the functions.php page of this theme under the function twentytwenty_register_styles
--> 

<?php
/**
 * Template Name: Gallery Page Static */
get_header();
get_template_part( 'template-parts/modal-image' );
?>

<!-- function to use console.log in PHP -->
<?php function console_log( $dataToLog ){
  echo '<script>';
  echo 'console.log('. json_encode( $dataToLog ) .')';
  echo '</script>';
}
?>

<main id="gallery-page-coded-images" role="main">
  <h1 class="gallery-font">Image Gallery</h1>
  <h2 class="gallery-font">Some of my favorite paintings, photos, and operas. In this version, the images are located in the assets folder and harcoded. See __THISpage for a template to dynamically create a gallery based on user input.</h2>

  <section class="imageHolder"> 
    <div class="imageColumn">
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/bosch.jpg" alt="Hieronymus Bosch's Garden of Earthly Delights">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/chicago.jpg" alt="Chicago marquee">

      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/eugene.jpg" alt="Eugene Onegin opera">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/hoffman.jpg" alt="Tales of Hoffman opera">

    </div>

    <div class="imageColumn">
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/hopper.jpg" alt="Edward Hopper's Room in New York">

      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/kawasaki.jpg" alt="Audrey Kawasaki backlit">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/nighthawks.jpg" alt="Edward Hopper's Nighhawks">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/lunch.jpg" alt="Georges Seurat's A Sunday on La Grande Jatte">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/magritte.jpg" alt="Magritte style painting">
    </div>
  
    <div class="imageColumn">
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/magritte2.jpg" alt="Magritte's The Lovers">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/nurse.jpg" alt="Roy Lichtenstein's Nurse">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/sydney.jpg" alt="Sydney Opera House">
    
      <img class="galleryImage toggle" data-toggle-target=".image-modal" data-target="#imageModal" data-toggle-body-class="showing-image-modal" data-set-focus=".image-modal" aria-expanded="false" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gallery-page-images/turandot.jpg" alt="Puccini Opera Turandot">
    </div> 
  </section>

  <div class="image-modal cover-modal header-footer-group" data-modal-target-string=".image-modal">
    <div class="image-modal-inner modal-inner">
      <div class="image-wrapper section-inner">
        <button class="toggle close-nav-toggle" data-toggle-target=".image-modal" data-toggle-body-class="showing-image-modal" aria-expanded="false" data-set-focus=".image-modal">
          <span class="toggle-text"><?php _e( 'Close', 'twentytwenty' ); ?></span>
          <?php twentytwenty_the_theme_svg( 'cross' ); ?>
        </button><!-- .nav-toggle -->
      
        <figure class="modalImage">
          <img id="imageForModal" src="">
          <figcaption></figcaption>
        </figure>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>