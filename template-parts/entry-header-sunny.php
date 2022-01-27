<?php
/**
 * Displays the sunny landing page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}
?>

<header id="sunny-site-header" class="entry-header has-text-align-center" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/header.jpg');" role="banner">
	<div class="entry-header-inner section-inner medium">
	
		<?php
	
		if ( is_singular() ) {
			echo "<h1 class='sunny-header-text'>WE ARE CREATIVES</h1>";?>

			<img class="arrow-down" src='<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/icon-arrow-down.svg'>
			<?php
		} else {
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}



		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
