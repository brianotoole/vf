<?php
/**
 * The template part for displaying a message that posts cannot be found.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h2 class="page-title animate fadeIn"><?php _e( 'No Matched Search Results', 'vf' ); ?></h2>
		
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	
				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'vf' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	
			<?php elseif ( is_search() ) : ?>
	
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vf' ); ?></p>
				<?php get_search_form(); ?>
	
			<?php else : ?>
	
				<p><?php _e( 'Nothing was found for your search terms. Please try your search again with some different keywords.', 'vf' ); ?></p>
				<?php get_search_form(); ?>
	
			<?php endif; ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
