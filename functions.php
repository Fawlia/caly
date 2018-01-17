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

function wpbeginner_numeric_posts_nav() {


if( is_singular() )
return;

global $wp_query;

/** Stop execution if there's only 1 page */
if( $wp_query->max_num_pages <= 1 )
return;

$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$max = intval( $wp_query->max_num_pages );

/** Add current page to the array */
if ( $paged >= 1 )
$links[] = $paged;

/** Add the pages around the current page to the array */
if ( $paged >= 3 ) {
$links[] = $paged - 1;
$links[] = $paged - 2;
}

if ( ( $paged + 2 ) <= $max ) {
$links[] = $paged + 2;
$links[] = $paged + 1;
}

echo '<nav><ul class="pagination">' . "\n";

/** Previous Post Link */
if ( get_previous_posts_link() )
printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link() );

/** Link to first page, plus ellipses if necessary */
if ( ! in_array( 1, $links ) ) {
$class = 1 == $paged ? ' class="active"' : '';

printf( '<li class="page-item" %s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

if ( ! in_array( 2, $links ) )
echo '<li class="page-item">…</li>';
}

/** Link to current page, plus 2 pages in either direction if necessary */
sort( $links );
foreach ( (array) $links as $link ) {
$class = $paged == $link ? ' class="active"' : '';
printf( '<li class="page-item" %s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
}

/** Link to last page, plus ellipses if necessary */
if ( ! in_array( $max, $links ) ) {
if ( ! in_array( $max - 1, $links ) )
echo '<li class="page-item">…</li>' . "\n";

$class = $paged == $max ? ' class="active"' : '';
printf( '<li class="page-item" %s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
}

/** Next Post Link */
if ( get_next_posts_link() )
printf( '<li class="page-item">%s</li>' . "\n", next_posts_link() );

echo '</ul></nav>' . "\n";

}

    
?>