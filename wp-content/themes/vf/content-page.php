<?php
/**
 * The template used for displaying page content in page.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_title('<h2 class="page-title animate fadeIn">'); ?>
		
		<?php the_content('<p>'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'vf' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
