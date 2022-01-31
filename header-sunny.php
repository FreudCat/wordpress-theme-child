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
    <nav class="navbar navbar-expand-lg transparent">
      <div class="container-fluid nav-container g-0">
        <a class="navbar-brand logo" href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/logo.svg"></a>

        <button class="navbar-toggler sunny-nav-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img class="navbar-toggler-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/sunny-page-images/icon-hamburger.svg">
        </button>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarSupportedContent">
          <?php 
            if (get_field("contact_page") === "Yes") {
              $contact_page_id = get_field("contact_page_id"); //gets the id of the ACF field that the user filled in
              $menu_locations = get_nav_menu_locations();
              $sunny_header_links = wp_get_nav_menu_items($menu_locations["sunny-menu"]); //prev lines get all of the links and associated info of the navigation links of the pages the user added
              
              foreach ( $sunny_header_links as $key => $item) {
                if (get_post_meta( $item->ID, "_menu_item_object_id", true ) === $contact_page_id) { //checks if the page id of the link === the user input id value
                  $index = $key;
                  break; 
                }
              }

              if ($index) {
                $removed_item = array_splice($sunny_header_links, $index, $index); //removes that array from the array
                $sunny_header_links_reorder = array_merge($sunny_header_links, $removed_item); //now places that old array (the contact page array) to the end of the array and echos that out in the nav
                echo "<ul id='' class='navbar-nav ms-auto flex-nowrap text-center'>";
                
                foreach ($sunny_header_links_reorder as $key=>$new_item) {
                  if ($key === array_key_last($sunny_header_links_reorder)) {
                    echo "<li class='nav-item header-item'><a class = 'nav-link contact-link' href='$new_item->url'>$new_item->title</a></li>";
                  } else {
                  echo "<li class='nav-item header-item'><a class = 'nav-link' href='$new_item->url'>$new_item->title</a></li>";
                  }                  
                }
                echo "</ul>";

              } else {
                console_log("User indicated there is a contact page, but no page id matched with user input in contact_page_id ACF");
                wp_nav_menu (
                  array (
                    'menu' => 'sunny-menu',
                    'container' => '',
                    'theme_location' => 'sunny-menu',
                    'items_wrap' => '<ul id="" class="navbar-nav ms-auto flex-nowrap text-center">%3$s</ul>',
                  )
                );
              }

            } else {
              console_log("The user indicated there was no contact page");
              wp_nav_menu (
                array (
                  'menu' => 'sunny-menu',
                  'container' => '',
                  'theme_location' => 'sunny-menu',
                  'items_wrap' => '<ul id="" class="navbar-nav ms-auto flex-nowrap text-center">%3$s</ul>',
                )
              );
            }
          ?>
        </div>  <!-- End collapsible nav div -->
      </div>
    </nav>
  </header>
</body>
</html> 

