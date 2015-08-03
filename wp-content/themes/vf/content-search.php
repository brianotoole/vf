<?php
/**
 * The template part for displaying results in search pages.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h2 class="page-title animate fadeIn"><?php _e( 'Search Results', 'vf' ); ?></h2>
		
		<div class="col-sm-12 descrip">
		  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">  
			<h3 class="news-title animate fadeIn"><?php the_title(); ?></h3>
		  </a>
			<p class="date">
			  <?php echo get_the_date( 'l / F d / Y' ); ?>
			  <?php the_excerpt() ?>
			</p>  
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

