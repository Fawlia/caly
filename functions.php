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
printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link('<span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>') );

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
printf( '<li class="page-item">%s</li>' . "\n", next_posts_link('<span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span>') );

echo '</ul></nav>' . "\n";

}

function shapeSpace_next_posts_link_attributes($attr) {

$attr = 'class=page-link aria-label="Next"';

return $attr;

}
add_filter('next_posts_link_attributes', 'shapeSpace_next_posts_link_attributes');

function shapeSpace_previous_posts_link_attributes($attr) {

$attr = 'class=page-link aria-label="Previous"';

return $attr;

}
add_filter('previous_posts_link_attributes', 'shapeSpace_previous_posts_link_attributes');

//Plugins à ajouter
require_once get_template_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'caly_plugins_register_required_plugins' );

function caly_plugins_register_required_plugins() {

	$plugins = array(

		// This is how to include a plugin bundled with a theme.
		array(
			'name'               => 'Advanced Custom Field', // The plugin name.
			'slug'               => 'advanced_custom_field', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/advanced-custom-fields.4.4.12.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
        
        array(
			'name'               => 'Advanced Custom Field Font Awesome', // The plugin name.
			'slug'               => 'advanced_custom_field_font_awesome', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/advanced-custom-fields-font-awesome.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
        
        array(
			'name'               => 'Custom Post Type UI', // The plugin name.
			'slug'               => 'custom_post_type_ui', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/custom-post-type-ui.1.5.6.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
        
		// recognize the plugin as being installed.
		array(
			'name'        => 'Advanced Custom Field',
			'slug'        => 'advanced_custom_field',
			'is_callable' => 'acf_init',
		),
        
        array(
			'name'        => 'Advanced Custom Field Font Awesome',
			'slug'        => 'advanced_custom_field_font_awesome',
			'is_callable' => 'acffa_init',
		),

        
        array(
			'name'        => 'Custom Post Type UI',
			'slug'        => 'custom_type_ui',
			'is_callable' => 'ctu_init',
		),


	);
    
	$config = array(
		'id'           => 'caly_plugins',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}


?>