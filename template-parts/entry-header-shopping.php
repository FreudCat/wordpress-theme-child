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

MOBILE view (375)
- collapses into hamburger on left 
- logo -> on open, the menu is on the entire left side that takes about 75% of width
- shopping car 
- avatar -> on active, there is an orange border

DESKTOP view (1220)
- logo on right 
- bootstrap navbar: Collections Men Women About Contact
- border bottom? 
- on hover of links, bottom border orange on same level as the header bottom border
- on left: shopping cart icon and avatar


