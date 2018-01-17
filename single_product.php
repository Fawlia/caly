
<?php
/*
Template Name: Modele Produit
*/

if ( !function_exists('get_field')) return;

?>

	<?php get_header(); ?>


<main>
	<section id="single_pro" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 img">
					<a href="<?php the_permalink()?>" style="background-image:url(<?php the_field('image'); ?>); background-size:cover;background-position:center; background-repeat:no-repeat"></a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ml-auto des">
					<h2 class="title_product"><?php the_field('marque'); ?></h2>
					<p class="subtitle"><?php the_field('vetments'); ?></p>
					<p class="descri"><?php the_field('description'); ?></p>
					<p class="price"><?php the_field('prix'); ?>$</p>
					
					
					
				</div>
			</div>
			<hr>
		</div>	
	</section>
	
	<section id="" class="container-fluid">
		<div class="container">
			<div class="row ">
				
			</div>
		</div>
	</section>
	<section id="" class="container-fluid">
		<div class="container">		
			<div class="row ">
			
			</div>
		</div>
	</section>
</main>


<?php get_footer(); ?>

