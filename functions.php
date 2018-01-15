<?php


// Appel de la feuille de style
function wordpressCaly_ressources(){
    
    wp_enqueue_style( 'font-awesome', 'assets/css/font-awesome.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'wordpressCaly_ressources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu')
));

// Class <li>
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// Class <a>
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

//This function is responsible for adding "my-parent-item" class to parent menu item's
function add_menu_parent_class( $items ) {
    $parents = array();
    foreach ( $items as $item ) {
        //Check if the item is a parent item
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }

    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            //Add "menu-parent-item" class to parents
            $item->classes[] = 'dropdown';
        }
    }

    return $items;
}

add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );

function change_submenu_class($menu) {  
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" /',$menu);  
    return $menu;
    
}  
add_filter('wp_nav_menu','change_submenu_class'); 




    
?>