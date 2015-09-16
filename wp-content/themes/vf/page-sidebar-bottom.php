<?php
/**
Template Name: Page - Sidebar Bottom
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
		<div id="primary" class="col-1-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	    <div id="secondary" class="sidebar bottom col-1-1" role="complementary">
		    <?php dynamic_sidebar( 'sidebar-1' ); ?>
	    </div><!-- #secondary --> 
	
	</div><!-- grid -->
	<?php get_footer(); ?>