<?php
/*
Template Name: blog_grid
*/
?>


<?php get_header(); ?>

<main>
	<section id="bread_crumb" class="container-fluid">
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="#">Home</a></li>
				  <li class="breadcrumb-item"><a href="#">Blog</a></li>
				  <li class="breadcrumb-item active">Timeline</li>
				</ol>
			</div>
		</div>	
					
	</section>
	
	<section id="" class="container-fluid">
		<div class="container">
		
			<div class="row justify-content-between">
			<?php
                
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 9,
                'paged' => $paged );
            query_posts($args);    
                
            /*query_posts('post_type=post'); */           
            if(have_posts()) :
                    while(have_posts()) : the_post(); ?>
                    
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 card">
					<div class="border">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Image d'un article" class="img-responsive" width="550" height="auto"></a>
                        <div class="card_inner">
							<h3 class="title_card"><?php the_title(); ?></h3>
							<p class="date"><?php the_date();?></p>
							<p class="desc"><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Lire la suite...</a>
						</div>    				
					</div>
				</div>
            <?php 
            endwhile; ?>			
			</div>
		</div>
	</section>
	<section class="container-fluid">
		<div class="container">
		<hr class="hre">
			<div class="row justify-content-end pad">
				<nav>
				
					<ul class="pagination">
					<?php the_posts_pagination( array(
                        'mid_size' => 2,
                        'prev_text' => __( 'Précedent', 'textdomain' ),
                        'next_text' => __( 'Suivant', 'textdomain' ),
                    ) ); ?>
						<!--<li class="page-item">
							<a class="page-link" href="" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>-->
					</ul>
				</nav>
			<?php                
            else :
                echo'<p>Pas de contenu trouvé</p>';
            endif;
                
            ?>
			</div>
			<hr class="hre">
		</div>
	</section>
</main>

<?php get_footer(); ?>