<?php
/**
 * Displays the shopping templates' entry header 
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>
