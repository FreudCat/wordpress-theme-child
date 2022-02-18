<?php
/**
 * Template Name: Swervy Landing Page */
get_header("swervy");
remove_action("wp_head", "_admin_bar_bump_cb");
?>

<?php 
  function console_log( $dataToLog ){
    echo '<script>';
    echo 'console.log('. json_encode( $dataToLog ) .')';
    echo '</script>';
  }
?>

<main class="swervy-main">
  <header class="swervy-header">
    <div class="swervy-logo">1</div>
    <div class="try-button">2</div>
  </header>
  <section class="intro-text-section">
    <h1>This is the header text</h1>
    <p>some text</p>
    <button>Some button</button>
  </section>
  <section class="image-section">
    <img src="" alt=""/>
  </section>
  <section class="numbers-section">
    <p>210K</p>
    <p>150k</p>
  </section>
  <section class="grow-section">6</section>
  <section class="convo-section">7</section>
  <section class="user-section">8</section>
  <footer class="swervy-footer">9</footer>

</main>