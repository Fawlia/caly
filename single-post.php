<?php get_header(); ?>

<main>
    <section class="container-fluid" id="single-grid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="Image d'un article" class="img-fluid" width="550" height="auto">
                     <h1><?php the_title(); ?></h1>
                     <?php the_content(); ?>
                     <p class="small text-right"><?php echo get_the_date(); ?></p>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>