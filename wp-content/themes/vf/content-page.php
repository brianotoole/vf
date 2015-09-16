<?php
/**
 * The template used for displaying page content in page.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="nav-breadcrumb">
			<?php //show child pages under current page
			$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
			  if ($children) { ?>
			  <ul>
			  	<?php echo $children; ?>
			  </ul>
			<?php } ?>
		</div>
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
