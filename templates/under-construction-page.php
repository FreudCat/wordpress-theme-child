<?php
/**
 * Template Name: In Progress Page */
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
      <p class="col-12 offset-md-2 col-md-8 mb-5 d-flex justify-content-center text-center construction-text">The projects on this page are in various stages of construction. I am using Netlify so that updates (and missteps!) can be seen in real time with each git push.</p>
      <a class="card-link-text col-xs-12 offset-md-3 col-md-6" href="https://angelatest.netlify.app/" target="_blank">
        <div class="mb-3 mt-5 d-flex justify-content-center">
          <div class="card portfolio-card border-2 octo-image">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/portfolio-images/transparent-octo.png" class="w-75 mx-auto card-img-top portfolio-card-image" alt="Ceramic sculpture of orange-red octopus">
            <div class="card-body octo-body portfolio-card-body">
              <p class="card-text portfolio-card-text">Artist portfolio showcasing ceramic crafts. Now at user flow and wireframe stage.</p>
            </div>
            <div class="card-corner"><div class="corner-arrow">→</div></div>
          </div>
        </div>
      </a>
      <div class="col-12 d-flex justify-content-center about-git-icon">
        <a href="https://github.com/FreudCat/ceramic-arts" target="_blank"><i class="fab fa-github github-icon"></i></a>
      </div>
    </div>
  </main>
  <?php get_footer('portfolio') ?>
</body>