<?php  /* Template Name: About */ ?>

<?php get_header();?>

<?php if ( !function_exists('get_field')) return; ?>

<main>
	<section id="individual_t" class="container-fluid">
		<div class="container">
			<div class="row">
                           
                           <?php query_posts( 'showposts=2' );
                            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 
                            <div class="post col-xs-12 col-sm-12 col-md-6">
                                <p class="red_title"></p>
					            <h3><?php the_title(); ?></h3> 
					            <p class="paragraph"><?php echo get_the_excerpt(); ?></p>
                            </div>
                            
                            <?php
                
                            endwhile;
                            endif; ?>
        
                <?php wp_reset_query(); ?>

            </div>         
        </div>
    </section>
    
	<section id="team" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-8 mr-auto ml-auto text-center">
					<p class="grey_title"><?php the_field('teamsub'); ?></p>
					<h2><?php the_field('team_title'); ?></h2>
					<img src="<?php bloginfo('home'); ?>/wp-content/themes/caly/assets/img/about/separator.svg" alt="separator design" width="35" height="2"/>
					<p class="team_paragraph"><?php the_field('team_content'); ?></p>
				</div>
			</div>
			<div class="row">

						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
						'posts_per_page' => 4,
						'post_type' => 'team_member',
						'paged' => $paged );
						query_posts($args); 

						/*query_posts('post_type=post'); */ 
						if(have_posts()) :
						while(have_posts()) : the_post(); ?>


             <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center text-center">
                                            
                   
                   
                   <div id="team-avatar" style="background-image:url(<?php the_field('avatar'); ?>); background-size:cover;background-position:center; background-repeat:no-repeat"></div>
                   
                   
                    <p class="job"><?php the_field('job'); ?></p>
                    <p class="name"><?php the_title(); ?></p>
                    <p class="description"><?php echo get_the_excerpt(); ?></p>

            </div>


        

                          <?php 

endwhile; 

else :
echo'<p>Pas de contenu trouvé</p>';

endif; ?>
			
	<?php wp_reset_query(); ?>
        		
			</div>
		</div>
	</section>
	
	
	<!-------------------------SECTION CLASSICO SERVICE------------------------------------->
	
	<section id="classico_services" class="container-fluid">
		<div class="container">
			<div class="row">
			
				<div class="col-10 mr-auto ml-auto text-center">
					<p class="grey_title"><?php the_field('classico_sub'); ?></p>
					<h2><?php the_field('classico_title'); ?></h2>
					
					<img src="<?php bloginfo('home'); ?>/wp-content/themes/caly/assets/img/about/separator.svg" alt="separator design" width="35" height="2"/>
					
					<p class="classico_paragraph"><?php the_field('classico_paragraph'); ?></p>
				</div>
				
			</div>
			
			
			<!--BOUCLE BRANDING-->
			
			<div class="row">
			
			
			<?php $paged = (get_query_var('branding')) ? get_query_var('branding') : 1;
            $args = array(
            'posts_per_page' => 6,
            'post_type' => 'branding',
            'paged' => $paged );
            query_posts($args); 

            /*query_posts('post_type=post'); */ 
            if(have_posts()) :
            while(have_posts()) : the_post(); ?>

			
				<div class="ml-auto col-3 col-sm-2 col-md-2 col-lg-1">
                    <i class="fa fa-2x <?php the_field('icone_branding'); ?>"></i>
				</div>
				
				<div class="col-8 col-sm-auto col-md-4 col-lg-3">
					<p class="branding"><?php the_field('titre_branding'); ?></p>
					<p class="branding_paragraph"><?php the_field('paragraph_branding'); ?></p>
				</div>
				
			
                    <?php 

                                    endwhile; 

                                    else :
                                        echo'<p>Pas de contenu trouvé</p>';

                                    endif; ?>

                    <?php wp_reset_query(); ?>	
				
                
			</div>
		</div>
	</section>
	
	<!------------------------------BLANCO FEATURES------------------------------------------->
	
	<section id="blanco" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10">
				
					<p class="grey_title"><?php the_field('ss_titre'); ?></p>
					<h2><?php the_field('titre_blanco'); ?></h2>
					<img src="<?php bloginfo('home'); ?>/wp-content/themes/caly/assets/img/about/separator.svg" alt="separator design" width="35" height="2"/>
					<p class="blanco_paragraph"><?php the_field('blanco_paragraph'); ?></p>
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-2 text-center align-self-center">
					<a href="<?php the_field('home_link'); ?>"><button type="button"  >DETAILS</button></a>
				</div>
				
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
