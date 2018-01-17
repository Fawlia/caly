<?php


// Appel de la feuille de style
function wordpressCaly_ressources(){
	
	/*wp_enqueue_style( 'bootstrap.min', './wp-content/themes/caly/assets/css/bootstrap.min.css');*/
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js' );	
	wp_enqueue_script( 'Bootstrap.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );	
	wp_enqueue_script( 'Popper', get_template_directory_uri() . '/assets/js/popper.js' );
	
    
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

add_theme_support('post-thumbnails');

    
?>