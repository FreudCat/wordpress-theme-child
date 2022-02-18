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
					<h1 class="sunny-header-text"><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row g-0">
				<div class="col g-0">
				
					<button type="button" class="btn btn-warning open-sunny-modal" data-bs-toggle="modal" data-bs-target="#abstractModal">Abstract</button>
					<div class="modal fade" id="abstractModal" tabindex="-1" aria-labelledby="abstractModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl sunny-modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<p class="modal-title sunny-modal-title" id="abstractModalLabel">Abtract</p>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body sunny-modal-body">This child template utilizes the Bootstrap grid system to recreate a mobile-responsive landing page challenge from <a href="https://www.frontendmentor.io/challenges/sunnyside-agency-landing-page-7yVs3B6ef" target="_blank">Frontend Mentor</a>. <br/><br/>The navigation links, images, and page title are derived from WordPress user input. Here, I developed logic to dynamically add classes to the links and move the Contact nav, if present, to the right-most place for styling purposes. <br/><br/>*The best thing I learned from this exercise is how to pass data, in this case an array, from PHP to Javascript.</div>
								<div class="modal-footer justify-content-center">
									<button type="button" class="btn btn-warning sunny-modal-close" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				<a href="#first-section"><svg class="pointer-down" viewBox = "0 0 36 114" width="36" height="114" xmlns="http://www.w3.org/2000/svg"><g stroke="#FFF" stroke-width="6" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M18 3v100M3 95.484l15 15 15-15"/></g></svg></a>
			</div>
			</div>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->

