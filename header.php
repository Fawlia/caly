<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?></title>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php wp_head(); ?>
</head>
<body<?php body_class(); ?>>

<header>

<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">
<a class="navbar-brand" id="logo" href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<i class="fa fa-bars" aria-hidden="true"></i>
</button>
<?php 

$args = array(
'container'=> 'div',
'container_class' => 'collapse navbar-collapse justify-content-end',
'container_id' => 'navbarNavDropdown',
'items_wrap'=>'<ul class="navbar-nav">%3$s</ul>',
);
wp_nav_menu( $args);

?>

</div>
</nav>	

</header>