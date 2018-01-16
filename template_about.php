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
					<p class="grey_title"><?php var_dump(the_field('teamsub')); ?></p>
					<h2><?php the_field('team_title'); ?></h2>
					<img src="assets/img/separator.svg" alt="separator design" width="35" height="2"/>
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


             <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center">
                                            
                   <img class="img-fluid img-team" src='<?php the_field('avatar'); ?>'>
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
	
	
	
	<section id="classico_services" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-10 mr-auto ml-auto text-center">
					<p class="grey_title">Lorem ipsum dolor sit amet</p>
					<h2>Classico Services</h2>
					<img src="assets/img/separator.svg" alt="separator design" width="35" height="2"/>
					<p class="classico_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .</p>
				</div>
			</div>
			<div class="row">
				<div class="ml-auto col-3 col-sm-2 col-md-2 col-lg-1">
					<i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
				</div>
				<div class="col-8 col-sm-auto col-md-4 col-lg-3">
					<p class="branding">Branding</p>
					<p class="branding_paragraph">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				</div>
				
				<div class="ml-auto col-3 col-sm-2 col-md-2 col-lg-1">
					<i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
				</div>
				<div class="col-8 col-sm-auto col-md-4 col-lg-3">
					<p class="branding">Branding</p>
					<p class="branding_paragraph">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				</div>
				
				<div class="ml-auto col-3 col-sm-2 col-md-2 col-lg-1">
					<i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
				</div>
				<div class="col-8 col-sm-auto col-md-4 col-lg-3">
					<p class="branding">Branding</p>
					<p class="branding_paragraph">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				</div>
				
				<div class="ml-auto col-3 col-sm-2 col-md-2 col-lg-1">
					<i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
				</div>
				<div class="col-8 col-sm-auto col-md-4 col-lg-3">
					<p class="branding">Branding</p>
					<p class="branding_paragraph">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				</div>
				
				<div class="ml-auto col-3 col-sm-2 col-md-2 col-lg-1">
					<i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
				</div>
				<div class="col-8 col-sm-auto col-md-4 col-lg-3">
					<p class="branding">Branding</p>
					<p class="branding_paragraph">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				</div>
				
				<div class="ml-auto col-3 col-sm-2 col-md-2 col-lg-1">
					<i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
				</div>
				<div class="col-8 col-sm-auto col-md-4 col-lg-3">
					<p class="branding">Branding</p>
					<p class="branding_paragraph1">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				</div>
				
			</div>
		</div>
	</section>
	<section id="blanco" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p class="grey_title">Lorem ipsum dolor sit amet</p>
					<h2>Check more Blanco features</h2>
					<img src="assets/img/separator.svg" alt="separator design" width="35" height="2"/>
					<p class="blanco_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore<br/>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2 text-center align-self-center">
					<button>More Details</button>
				</div>
				
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>








