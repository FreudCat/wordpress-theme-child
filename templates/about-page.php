<?php
/**
 * Template Name: About Page */
get_header("portfolio");
remove_action('wp_head', '_admin_bar_bump_cb');
?>

<body class="portfolio-body">
  <?php get_template_part( 'template-parts/portfolio-nav' );?>
  <header class="container mb-5 portfolio-header">
    <div class="row">
      <div class="col-2 col-8 mt-5 mb-5 about-image-holder">
        <h1 class="about-header-text">About</h1>
        <img class="about-image" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/portfolio-images/cherry-blossom.jpg" alt="Close up of cherry blossom">
      </div>
    </div>
  </header>
  <main class="container">
    <div class="row">
      <div class="offset-1 col-10 offset-md-3 col-md-6">
        <p class="text-center mt-5 pt-md-5 mb-md-5 about-body-text">Just my little corner of the web showing my landing page exercises. The focus was on establishing foundational concepts, so each page has an abstract explaining tools I used and things I learned.</p>
      </div>
      <div class="offset-3 col-6 offset-md-4 col-md-4">
        <h2 class="text-center mt-5 pt-md-5 about-bold-text">Excited to learn more!</h2>
      </div>
    </div>
  </main>
  <?php 
  get_footer('portfolio')
  ?>
</body>