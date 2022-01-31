<?php
/**
 * Header file for the Sunny Landing Page templates.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
  <?php wp_head(); ?>

</head>
<body>
  <header>
    <nav>
      <logo></logo>
      <ul>
        <!-- These are expanded on the left in desktop view-->
        <li><a>Collections</a></li> <!--greyish text - class="shopping-header-items", class="shopping-header-links"-->
        <li><a>Men</a></li><!--on hover and active - border bottom is orange and thick, text becomes black-->
        <li><a>Women</a></li>
        <li><a>About</a></li>
        <li><a>Contact</a></li>
        <!-- These are in a column in a sidebar in mobile view -->
        <icon>image - hamburger menu</icon> 
        <icon>image - X to close when the sidebar is open</icon>
        <!-- This takes about 75% of width and goes from top to bottom -->
        <li><a>Collections</a></li>
        <li><a>Men</a></li>
        <li><a>Women</a></li>
        <li><a>About</a></li>
        <li><a>Contact</a></li>
        <!-- These are on the right and remain in both views-->
        <li><a>shopping cart image</a></li> <!--greyish, then becomes black on hover/active-->
          <!--class="cart"-->
        <cart>cart with items</cart> <!--oval/orange icon with white number in the center-->
        <cartmodal><!--rectangle with rounded borders and box shadow on desktop --- on mobile, covers move of the shoe image, also has box shadow--> 
          <modaltitle><p>Cart</p></modaltitle> <!--bold-->
          {if has items 
          <modalbody>small image of item, title, cost LITTLE CUTE TRASHCAN</modalbody>
        } else {
          <modalbody><p>Your cart is empty.</p></modalbody>
        }
        </cartmodal> 
        <li><a>avatar</a></li> <!--round; on hover and active - orange border; class="avatar"-->
      </ul>
    </nav> -> add border bottom (that's what it looks like, anyway)
  </header>
</body>
MOBILE view (375)
- collapses into hamburger on left 
- logo -> on open, the menu is on the entire left side that takes about 75% of width
- shopping cart
- avatar -> on active, there is an orange border

DESKTOP view (1220)
- logo on right 
- bootstrap navbar: Collections Men Women About Contact
- border bottom? 
- on hover of links, bottom border orange on same level as the header bottom border
- on left: shopping cart icon and avatar


