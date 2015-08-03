<?php
/**
 * The template used for displaying page content in page.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h2 class="page-title animate fadeIn"><?php the_title(); ?></h2>
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'vf' ),
				'after'  => '</div>',
			) );
		?>
		<?php if (is_page('news')) { ?>
			<?php get_template_part( 'content', 'news' ); ?>
		<?php } else { ?>
		<?php } ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
