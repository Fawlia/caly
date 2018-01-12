<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./wp-content/themes/caly/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./wp-content/themes/caly/assets/css/font-awesome.min.css">  
     <?php wp_head(); ?>
</head>
<body<?php body_class(); ?>>

<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" id="logo" href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
					<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Shop
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Blog
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Portfolio
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Shortcodes
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./wp-content/themes/caly/assets/about.html">Checkout</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./wp-content/themes/caly/assets/blog_grid.html">Buy theme!</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./wp-content/themes/caly/assets/product.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
			
	<div class="container-fluid">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xs-12 cadre_blanc">
                    <img class="img-fluid" src="./wp-content/themes/caly/assets/img/home/clasco_logo.svg" alt="logo Clasco" width="605" height="530"/>
                </div>
            </div>
        </div>
    </div>
				
			
		
</header>