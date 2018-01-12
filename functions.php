<?php


// Appel de la feuille de style
function wordpressCaly_ressources(){
    
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'wordpressCaly_ressources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
));

?>