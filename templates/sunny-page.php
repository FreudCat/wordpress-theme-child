<?php
/**
 * Template Name: Sunny Landing Page */
get_header('sunny');
?>
<head>

</head>


<?php
        get_template_part( 'template-parts/content', get_post_type() );
get_footer( 'sunny' ); 
  ?>