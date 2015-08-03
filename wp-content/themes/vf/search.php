<?php
/**
 * The template for displaying search results pages.
 *
 */

get_header(); ?>

	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
		<div id="primary" class="col-9-12">
		  <main id="main" class="site-main" role="main">
		
	        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			  <div class="entry-content">
			    <h2 class="page-title animate fadeIn"><?php _e( 'Search Results', 'vf' ); ?></h2>
			    <?php if ( have_posts() ) : ?>
			    <?php /* Start the Loop */ ?>
			    <?php while ( have_posts() ) : the_post(); ?>

				  <?php get_template_part( 'content', 'search' );?>
		
					<?php endwhile; ?>
		
					<?php vf_paging_nav(); ?>
		
				<?php else : ?>
		
				  <?php get_template_part( 'content', 'none' ); ?>
		
				<?php endif; ?>
			  </div><!--/.entry-content-->
	       </article>

		</main><!-- #main -->
	  </div><!-- #primary -->

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>