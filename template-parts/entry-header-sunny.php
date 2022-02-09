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
				<a href="#first-section"><svg class="pointer-down" viewBox = "0 0 36 114" width="36" height="114" xmlns="http://www.w3.org/2000/svg"><g stroke="#FFF" stroke-width="6" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M18 3v100M3 95.484l15 15 15-15"/></g></svg></a>
			</div>
			</div>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->

