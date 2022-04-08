<?php
/**
 * Template Name: Portfolio Page */
get_header('portfolio');
remove_action('wp_head', '_admin_bar_bump_cb');
?>

<?php 
  function console_log( $dataToLog ){
    echo '<script>';
    echo 'console.log('. json_encode( $dataToLog ) .')';
    echo '</script>';
  }
  $enqueue = 'enqueued';
  if (wp_style_is( 'portfolioCSS', $enqueue )) {
      console_log('portfolioCSS was enqueued');
  } else {
    console_log("portfolioCSS was NOT enqueued");
  }
?>
<body class="portfolio-body">
  <nav class="navbar navbar-expand navbar-dark portfolio-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/portfolio-images/nav-logo.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
      </a>
      <div id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link portfolio-navlink active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link portfolio-navlink" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link portfolio-navlink" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="portfolio-header mb-5">
    <h1 class="text-center py-5 portfolio-header-font">My Projects</h1>
  </header>
  <main class="container">
    <div class="row gy-5">
      <div class="col-xs-12 d-flex justify-content-center">
        <div class="card border-2 portfolio-card">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/landing-page-images/pets.jpg" class="card-img-top" alt="Two dogs and two cats sitting together in front of pink background">
          <div class="card-body">
            <p class="card-text portfolio-card-text">An uncomplicated page showcasing price packages for various activities.</p>
          </div>
          <div class="card-corner"><div class="corner-arrow">→</div></div>
          
        </div>
      </div>
      <div class="col-xs-12 d-flex justify-content-center">
        <div class="card portfolio-card border-2">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/portfolio-images/ecommerce.PNG" class="card-img-top portfolio-card-image" alt="Sideview of tan, brown, and orange sneaker with flat tread placed onto of two flat rocks">
          <div class="card-body">
            <p class="card-text portfolio-card-text">An example of an e-commerce site shopping site. Let's buy some shoes!</p>
          </div>
          <div class="card-corner"><div class="corner-arrow">→</div></div>
        </div>
      </div>
      <div class="col-xs-12 d-flex justify-content-center">
        <div class="card border-2 portfolio-card">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/portfolio-images/chicago.jpg" class="card-img-top portfolio-card-image" alt="Chicago marquee and skyline">
          <div class="card-body">
            <p class="card-text portfolio-card-text">A gallery showing some of my favorite paintings, operas, and artists.</p>
          </div>
          <div class="card-corner"><div class="corner-arrow">→</div></div>
        </div>
      </div>
      <div class="col-xs-12 d-flex justify-content-center">
        <div class="card border-2 portfolio-card">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/transform.jpg" class="card-img-top portfolio-card-image" alt="Two dogs and two cats sitting together in front of pink background">
          <div class="card-body">
            <p class="card-text portfolio-card-text">Light and cheery landing page to brighten up your day.</p>
          </div>
          <div class="card-corner"><div class="corner-arrow">→</div></div>
        </div>
      </div>
      <div class="col-xs-12 d-flex justify-content-center">
        <div class="card border-2 portfolio-card">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/swervy-page-images/illustration-your-users.svg" class="card-img-top portfolio-card-image" alt="Two dogs and two cats sitting together in front of pink background">
          <div class="card-body">
            <p class="card-text portfolio-card-text">Another landing page example, but this one is...curvy</p>
          </div>
          <div class="card-corner"><div class="corner-arrow">→</div></div>
        </div>
      </div>
    </div>
  </main>
</body>

<?php 
  get_footer('portfolio')
?>