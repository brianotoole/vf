<?php
/**
Template Name: Page - Fullwidth
 * 
 */
get_header(); ?> 

    <header class="entry-header">
    </header><!-- .entry-header -->
        
	<div class="grid">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>
				
			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>
