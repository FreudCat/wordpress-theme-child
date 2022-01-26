<?php
/**
 * Template Name: Sunny Landing Page */
get_header('sunny');

function console_log( $dataToLog ){
  echo '<script>';
  echo 'console.log('. json_encode( $dataToLog ) .')';
  echo '</script>';
}

$list = 'enqueued';
if (wp_style_is( 'bootstrapCSS', $list )) {
    console_log("BootstrapCSS was enqueued");
} else {
  console_log("BootstrapCSS was NOT enqueued");
}
if (wp_script_is( 'bootstrap', $list )) {
  console_log("Bootstrap was enqueued");
} else {
console_log("Bootstrap was NOT enqueued");
}
?>




<?php echo "This is echoed from sunny-page.php" ?>

<?php
        get_template_part( 'template-parts/content', get_post_type() );
get_footer('sunny'); 
  ?>

