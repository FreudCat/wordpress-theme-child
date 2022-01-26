<?php
/**
 * Displays the Sunny Landing Page header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>


<div class="">
	<div class="entry-header-inner section-inner medium">
	
		<?php
		/**
		 * Allow child themes and plugins to filter the display of the categories in the entry header.
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param bool Whether to show the categories in header. Default true.
		 */
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

		if ( true === $show_categories && has_category() ) {
			?>

			<div class="entry-categories">
				<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
				<div class="entry-categories-inner">
					<?php the_category( ' ' ); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

			<?php
		}		

		if ( is_singular() ) {
			echo "this is something that is echoed from the entry-header-sunny.php page"; 
		} else {
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

	
		// Default to displaying the post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
		?>
		</div>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
