<?php if(is_front_page() ) { ?>	
  <?php $query = new WP_Query( 'posts_per_page=3' ); //if homepage, only show 3 posts ?>
<?php } else { ?>
  <?php $query = new WP_Query( 'posts_per_page=-1' ); //else, show all ?>
<?php } ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<div class="article col-sm-12 no-padding">
	<div class="col-sm-2 no-padding img">
	  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
	  <img class="thumbnail" src="<?php echo $image; ?>">
	  <?php else: //if no featured image is uploaded, show default icon img ?>
	  <div class="thumbnail default"></div>
	  <?php endif; ?>
	</div>
	<div class="col-sm-10 descrip">
	  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">  <h3 class="news-title"><?php the_title(); ?></h3></a>
	  <p class="date"><?php echo get_the_date( 'l / F d / Y' ); ?></p>  
	  <?php vf_excerpt('vf_excerpt_length','vf_view_more_news'); ?>
	</div>
	<div class="clear"></div>
</div>

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no news articles at this time.' ); ?></p>
<?php endif; ?>