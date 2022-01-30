<?php
/**
 * Displays the sunny landing templates' entry header 
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<?php 
	if (get_the_post_thumbnail_url()) {
		$header_image = get_the_post_thumbnail_url();
	} else {
		$header_image = get_stylesheet_directory_uri() . '/assets/images/sunny-page-images/Pets.jpg;';
	}
?>

<header id="sunny-site-header" class="entry-header has-text-align-center" style="background-image: url('<?php echo $header_image?>');" role="banner">
	<div class="entry-header-inner section-inner medium">
			<div class="row g-0">
				<div class="col g-0">
					<h1 class='sunny-header-text'><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row g-0">
				<div class="col g-0">
				<img class="arrow-down" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/icon-arrow-down.svg'>
			</div>
			</div>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->

