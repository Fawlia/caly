
<?php
/*
Template Name: Modele Produit
*/

if ( !function_exists('get_field')) return;

?>

	<?php get_header(); ?>


<main>
	<section id="" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 img">
					<img class="img-fluid" src="<?php the_field('image'); ?>" alt="Photo du produit" width="540" height="711" />
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ml-auto des">
					<h2 class="title_product"><?php the_field('vetments'); ?></h2>
					<p class="subtitle"><?php the_field('marque'); ?></p>
					<p class="descri"><?php the_field('description'); ?></p>
					<p class="price"><?php the_field('prix'); ?>$</p>
					<p class="tags"><span id="gro">TAGS</span>: bootstrap / collections / color / responsive</p>
					
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

