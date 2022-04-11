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
      <div class="col-2 col-8 mt-2 about-image-holder">
        <h1 class="about-header-text">What is this all about?</h1>
        <img class="about-image" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/portfolio-images/cherry-blossom.jpg" alt="Close up of cherry blossom">
      </div>
    </div>
  </header>
  <main class="container">
    <div class="row">
      <div class="col-12">
        
      </div>
      <div class="col-12"></div>
    </div>
  </main>
  <?php 
  get_footer('portfolio')
  ?>
</body>