<?php
/**
 * The template used for displaying news/blog content
 */
?>


<div class="col-sm-12 descrip">
  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">  
	<h3 class="news-title animate fadeIn"><?php the_title(); ?></h3>
  </a>
	<p class="date">
	  <?php echo get_the_date( 'l / F d / Y' ); ?>
	  <?php the_excerpt() ?>
	</p>  
</div>

