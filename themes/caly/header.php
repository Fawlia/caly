<!DOCTYPE html>
<html lang="en">
<head>
    <title>blog-grid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./wp-content/themes/caly/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <?php wp_head(); ?>
    
</head>
<body<?php body_class(); ?>>

<header>
	<div class="container-fluid">
		<div class="container">
			<div id="menu_top" class="row">
				<p id="logo" class="col-auto align-self-center">Classico</p>
				<div class="ml-auto col-auto align-self-center">
					<nav class="blog-nav">
						<ul>
							<li><a class="blog-nav-item active" href="#">Home</a></li>
							<li><a class="blog-nav-item" href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							<li><a class="blog-nav-item" href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							<li><a class="blog-nav-item" href="#">Portfolio <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							<li><a class="blog-nav-item" href="#">Shortcodes <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							<li><a class="blog-nav-item" href="#">Checkout</a></li>
							<li><a class="blog-nav-item" href="#">Buy theme!</a></li>
							<li><a class="blog-nav-item" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
							<li><a class="blog-nav-item" href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row">
				<h1 class="col-12 text-center">About Us</h1>
				<p id="bread_crumb" class="col-12 text-center">Home > Pages > About Us</p>
			</div>
		</div>
	</div>
</header>