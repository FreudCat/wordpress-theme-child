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
  <navbar class="swervy-navbar">
    <div class="swervy-logo">1</div>
    <div class="try-button">2</div>
  </navbar>
  <header class="swervy-header">
    <h1><?php the_title(); ?></h1>
    <div class="swervy-header-content">
      <?php
        if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
          the_excerpt();
        } else {
          the_content( __( 'Continue reading', 'twentytwenty' ) );
        }
      ?>
    </div>

    <button class="get-started-button">Some button</button>
  </header>
  <section class="image-section">
    <svg viewBox="0 0 1035 739" width="1035" height="739" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="b" width="960" height="600" rx="20"/><filter x="-1.6%" y="-2.5%" width="103.1%" height="105%" filterUnits="objectBoundingBox" id="a"><feOffset in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0.145098039 0 0 0 0 0.180392157 0 0 0 0.181838768 0" in="shadowBlurOuter1"/></filter><path d="M20 0h920c11.046 0 20 8.954 20 20v44H0V20C0 8.954 8.954 0 20 0z" id="d"/><filter x="-1.6%" y="-23.4%" width="103.1%" height="146.9%" filterUnits="objectBoundingBox" id="c"><feOffset in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0.145098039 0 0 0 0 0.180392157 0 0 0 0.181838768 0" in="shadowBlurOuter1"/></filter><linearGradient x1="14.811%" y1="-22.362%" x2="75.996%" y2="119.406%" id="e"><stop stop-color="#FAD961" offset="0%"/><stop stop-color="#FF52C1" offset="100%"/></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="f"><stop stop-color="#00C7FA" offset="0%"/><stop stop-color="#007DFA" offset="100%"/></linearGradient><linearGradient x1="28.973%" y1="0%" x2="90.2%" y2="111.244%" id="g"><stop stop-color="#FF52C1" offset="0%"/><stop stop-color="#9952FF" offset="100%"/></linearGradient><rect id="i" width="320" height="512" rx="17.067"/><filter x="-4.2%" y="-2.6%" width="108.4%" height="105.3%" filterUnits="objectBoundingBox" id="h"><feOffset in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="4.5" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0.145098039 0 0 0 0 0.180392157 0 0 0 0.181838768 0" in="shadowBlurOuter1"/></filter><path d="M17.067 0h285.866C312.36 0 320 7.641 320 17.067v37.546H0V17.067C0 7.64 7.641 0 17.067 0z" id="k"/><filter x="-4.2%" y="-24.7%" width="108.4%" height="149.4%" filterUnits="objectBoundingBox" id="j"><feOffset in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="4.5" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0.145098039 0 0 0 0 0.180392157 0 0 0 0.181838768 0" in="shadowBlurOuter1"/></filter></defs><g fill="none" fill-rule="evenodd"><g transform="translate(10 10)"><use fill="#000" filter="url(#a)" xlink:href="#b"/><use fill="#FFF" xlink:href="#b"/><use fill="#000" filter="url(#c)" xlink:href="#d"/><use fill="#00252E" xlink:href="#d"/><rect fill="#E1E8EE" x="72" y="20" width="200" height="24" rx="5"/><g transform="translate(864 22)" fill="#D8D8D8"><rect width="32" height="4" rx="2"/><rect y="8" width="32" height="4" rx="2"/><rect y="16" width="32" height="4" rx="2"/></g><g transform="translate(72 138)"><circle fill="url(#e)" cx="48" cy="48" r="48"/><g transform="translate(152 12)" fill="#E1E8EE"><rect width="115" height="16" rx="3"/><rect y="32" width="400" height="8" rx="3"/><rect y="48" width="366.667" height="8" rx="3"/><rect y="64" width="333.333" height="8" rx="3"/></g><g transform="translate(600 36)" fill="#A7B9C8"><circle cx="12" cy="12" r="12"/><circle cx="76" cy="12" r="12"/><circle cx="44" cy="12" r="12"/><circle cx="108" cy="12" r="12"/><circle cx="140" cy="12" r="12"/></g></g><g transform="translate(72 274)"><circle fill="url(#f)" cx="45" cy="45" r="45"/><g transform="translate(149 9)" fill="#E1E8EE"><rect width="115" height="16" rx="3"/><rect y="32" width="400" height="8" rx="3"/><rect y="48" width="366.667" height="8" rx="3"/><rect y="64" width="333.333" height="8" rx="3"/></g><g transform="translate(597 33)" fill="#A7B9C8"><circle cx="12" cy="12" r="12"/><circle cx="76" cy="12" r="12"/><circle cx="44" cy="12" r="12"/></g></g><g transform="translate(72 417)"><circle fill="url(#g)" cx="45" cy="45" r="45"/><g transform="translate(149 9)" fill="#E1E8EE"><rect width="115" height="16" rx="3"/><rect y="32" width="400" height="8" rx="3"/><rect y="48" width="366.667" height="8" rx="3"/><rect y="64" width="333.333" height="8" rx="3"/></g><g transform="translate(597 33)" fill="#A7B9C8"><circle cx="12" cy="12" r="12"/><circle cx="76" cy="12" r="12"/><circle cx="44" cy="12" r="12"/><circle cx="108" cy="12" r="12"/></g></g></g><g transform="translate(706 218)"><use fill="#000" filter="url(#h)" xlink:href="#i"/><use fill="#FFF" xlink:href="#i"/></g><g transform="translate(706 218)"><use fill="#000" filter="url(#j)" xlink:href="#k"/><use fill="#00252E" xlink:href="#k"/></g><g transform="translate(738.133 236.773)"><rect fill="#E1E8EE" width="104" height="20.48" rx="4.267"/><g transform="translate(226.427 1.707)" fill="#D8D8D8"><rect width="27.307" height="3.413" rx="1.707"/><rect y="6.827" width="27.307" height="3.413" rx="1.707"/><rect y="13.653" width="27.307" height="3.413" rx="1.707"/></g></g><g transform="translate(738 326)"><circle fill="url(#e)" cx="15" cy="15" r="15"/><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g></g><g transform="translate(738 464)"><circle fill="url(#e)" cx="15" cy="15" r="15"/><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g></g><g transform="translate(738 372)"><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g><circle fill="url(#f)" cx="15" cy="15" r="15"/></g><g transform="translate(738 510)"><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g><circle fill="url(#f)" cx="15" cy="15" r="15"/></g><g transform="translate(738 418)"><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g><circle fill="url(#g)" cx="15" cy="15" r="15"/></g><g transform="translate(738 556)"><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g><circle fill="url(#g)" cx="15" cy="15" r="15"/></g><g transform="translate(738 602)"><circle fill="url(#e)" cx="15" cy="15" r="15"/><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g></g><g transform="translate(738 648)"><g transform="translate(46 3)" fill="#E1E8EE"><rect width="57.5" height="5.333" rx=".92"/><rect y="10.667" width="200" height="2.667" rx=".92"/><rect y="16" width="183.333" height="2.667" rx=".92"/><rect y="21.333" width="166.667" height="2.667" rx=".92"/></g><circle fill="url(#f)" cx="15" cy="15" r="15"/></g></g></svg>
  </section>
  <section class="numbers-section">
    <div class="numbers-section-left">
      <img src="" alt="">
      <p>1.4k+</p>
      <p>some text</p>
    </div>
    <div class="numbers-section-right">
      <img src="" alt="">
      <p>2.7m+</p>
      <p>some text</p>
    </div>
  </section>
  <section class="grow-section">
    <div class="grow-section-left">
      <h2>Grow Together</h2>
      <p>Some text</p>
    </div>
    <div class="grow-section-right">
      <p>grow together image</p>
    </div>
  </section>
  <section class="convo-section">
    <div class="convo-section-left">
      <p>flowering image</p>
    </div>
    <div class="convo-section-right">
      <h2>Flowing Conversations</h2>
    </div>
  </section>
  <section class="user-section">
    <div class="user-section-left">
      <h2>Your Users</h2>
    </div>
    <div class="user-section-right">
      <p>your user image</p>
    </div>
  </section>
  <section class="community-section">
    <h3>Ready To Build Your Community?</h3>
  </section>
  <footer class="swervy-footer">
    <div>Huddle</div>
    <div>contact form</div>
  </footer>

</main>