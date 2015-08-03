<?php
/**
 * The template for displaying search results pages.
 *
 */

get_header(); ?>

   <header class="entry-header">
   </header><!-- .entry-header -->
    
	<div class="grid">
		<div id="primary" class="col-1-1">
			<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' );?>

			<?php endwhile; ?>

			<?php vf_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->

<?php get_footer(); ?>