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
<body>
  <header>
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <p><a class="navbar-brand" href="#">AN</a></p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#portfolioNavbar" aria-controls="portfolioNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="portfolioNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  </header>
</body>

<?php 
  get_footer('portfolio')
?>