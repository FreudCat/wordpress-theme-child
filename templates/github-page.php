<?php
/**
 * Template Name: Github Page */
get_header("portfolio");
remove_action('wp_head', '_admin_bar_bump_cb');
?>

<body class="portfolio-body">
  <?php get_template_part( 'template-parts/portfolio-nav' );?>
  <header class="portfolio-header mb-5">
    <h1 class="text-center py-5 portfolio-header-font"><?php echo get_the_title(); ?></h1>
  </header>
  <main class="container">
    <div class="row">
      <div class="offset-1 col-10 col-md-6">
        <?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'class'  => 'featured-image'  ) ); ?>
      </div>
      <button type="button" class="btn btn-warning w-25"></button>

</div>

  </main>
   
   <?php 
  get_footer('portfolio')
  ?>
</body>