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
	if (basename(get_page_template()) == 'sunny-page-dynamic.php') { ?>
		<header id="sunny-site-header" class="entry-header has-text-align-center" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/header.jpg');" role="banner">
			<div class="row g-0">
				<div class="col g-0">
					<h1 class='dynamic-header-text'><?php the_title(); ?></h1>
				</div>
			</div>
		</header>

<?php } else { ?>

<header id="sunny-site-header" class="entry-header has-text-align-center" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/header.jpg');" role="banner">
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

<?php } ?>
