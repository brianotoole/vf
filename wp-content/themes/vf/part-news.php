<?php if(is_front_page() ) { ?>	
  <?php $query = new WP_Query( 'posts_per_page=3' ); //if homepage, only show 3 posts ?>
<?php } else { ?>
  <?php $query = new WP_Query( 'posts_per_page=-1' ); //else, show all ?>
<?php } ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">  
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
	  <h3 class="news-title"><?php the_title(); ?></h3>
	  <p class="date"><?php echo get_the_date( 'l / F d / Y' ); ?></p>  
	  <p><?php the_excerpt() ?></p>
	</div>
	<div class="clear"></div>
</div>
</a>

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no news articles at this time.' ); ?></p>
<?php endif; ?>
 
<?php if(is_front_page() ) { //if homepage & >= 3 posts, show "view more articles" button ?>	
  <?php 
    $count_posts = wp_count_posts();
    $published_posts = $count_posts->publish;
      if( $published_posts >= 3 ) {
        echo '<div class="col-sm-12 text-center no-padding">';
        echo '<a href="' . get_option('home') . '/news" class="button transparent">' . 'View More Articles' . '</a>';
        echo '</div>'; 
      }
  ?>
<?php } else { ?>
<?php } ?>