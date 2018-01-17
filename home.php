<!--/* Template Name: Modele home */-->


<?php get_header(); ?>


<?php if ( !function_exists('get_field')) return; ?>
<main>
   <section>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-10 mr-auto ml-auto text-center">
						<p class="grey_title"><?php the_field('descri_blanco_product'); ?></p>
						<h2><?php the_field('blanco_product'); ?></h2>
						<img src="wp-content/themes/caly/assets/img/about/separator.svg" alt="separator design" width="35" height="2"/>


					<nav class="navbar nav_middle">
						<div class="container justify-content-center">
							<a class="nav-item active" href="#"><?php the_field('featured_products'); ?></a>
							<a class="nav-item" href="#"><?php the_field('populaire_products'); ?></a>
							<a class="nav-item" href="#"><?php the_field('new_arrivals'); ?></a>
							<a class="nav-item" href="#"><?php the_field('last_minute'); ?></a>

						</div>
					</nav>
					</div>
				</div>
			</div>
		</div>              
		<div class="container">
			<div class="row justify-content-between">

<?php 

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(

						'posts_per_page' => 8,
						'post_type' => 'ajout_produit',
						'paged' => $paged );

		query_posts($args); 

/*query_posts('post_type=post'); */ 

					if(have_posts()) :

					while(have_posts()) : the_post(); ?>


 


				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
					<div class="border1 prod">
						<a href="<?php the_permalink()?>"><img src="<?php the_field('image'); ?>" class="img-fluid" alt="cadre de l'image"></a>
						<div class="card-body ">
							<h5 class="text-center card-title"><?php the_field('vetments'); ?></h5>
							<p class="text-center card-text"><?php the_field('marque'); ?></p>
							<p class="text-center prix"><?php the_field('prix'); ?>$</p>
						</div>
					</div>
				</div>


<?php 

				endwhile;  

 					the_posts_pagination( array(

							'mid_size' => 2,
							'prev_text' => __( 'Précedent', 'textdomain' ),
							'next_text' => __( 'Suivant', 'textdomain' ),
							) ); 

 				else :

					echo'<p>Pas de contenu trouvé</p>';

				endif;   ?>

				<?php wp_reset_query(); ?>



			</div>
	   </div>
  	</section>
               
	<section id="blanco" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p class="grey_title"><?php the_field('intro_check_more'); ?></p>
					<h2><?php the_field('check_more'); ?></h2>
					<img src="wp-content/themes/caly/assets/img/about/separator.svg" alt="separator design" width="35" height="2"/>
					<p class="blanco_paragraph"><?php the_field('details'); ?></p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2 text-center align-self-center">
					<button>More Details</button>
				</div>				
			</div>
		</div>
	</section>
     
     <section class="container-fluid">
        <div class="container">
            <div class="row">
            	<div class="col-10 mr-auto ml-auto text-center">
					<p class="grey_title">Lorem ipsum dolor sit amet</p>
					<h2>Latest from the blog</h2>
					<img src="./wp-content/themes/caly/assets/img/about/separator.svg" alt="separator design" width="35" height="2"/>
          			<p class="latest_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
           		</div>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 card">
					<div class="border1">
						<img src="./wp-content/themes/caly/assets/img/blog_grid/img.svg" class="img-fluid" alt="Emplacement image" width="550" height="auto"/>
						<div class="card_inner_nop">
							<h3 class="title_card">Check brand new office in Seattle, USA</h3>
							<p class="date">4 OCTOBER 2013 / INDESIGN / BY ADMIN</p>
							<img src="./wp-content/themes/caly/assets/img/about/separator.svg" alt="design de séparation" width="35" height="2"/>
							<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 card">
					<div class="border1">
						<img src="./wp-content/themes/caly/assets/img/blog_grid/img.svg" class="img-fluid" alt="Emplacement image" width="550" height="auto"/>
						<div class="card_inner_nop">
							<h3 class="title_card">Check brand new office in Seattle, USA</h3>
							<p class="date">4 OCTOBER 2013 / INDESIGN / BY ADMIN</p>
							<img src="./wp-content/themes/caly/assets/img/about/separator.svg" alt="design de séparation" width="35" height="2"/>
							<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 card">
					<div class="border1">
						<img src="./wp-content/themes/caly/assets/img/blog_grid/img.svg" class="img-fluid" alt="Emplacement image" width="550" height="auto"/>
						<div class="card_inner_nop">
							<h3 class="title_card">Check brand new office in Seattle, USA</h3>
							<p class="date">4 OCTOBER 2013 / INDESIGN / BY ADMIN</p>
							<img src="./wp-content/themes/caly/assets/img/about/separator.svg" alt="design de séparation" width="35" height="2"/>
							<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 card">
					<div class="border1">
						<img src="./wp-content/themes/caly/assets/img/blog_grid/img.svg" class="img-fluid" alt="Emplacement image" width="550" height="auto"/>
						<div class="card_inner_nop">
							<h3 class="title_card">Check brand new office in Seattle, USA</h3>
							<p class="date">4 OCTOBER 2013 / INDESIGN / BY ADMIN</p>
							<img src="./wp-content/themes/caly/assets/img/about/separator.svg" alt="design de séparation" width="35" height="2"/>
							<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				
			</div>
        <hr>
         </div>
	</section>
      
<?php get_footer(); ?>