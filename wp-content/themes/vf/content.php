<?php
/**
 * The template used for displaying news/blog content
 */
?>
<?php $query = new WP_Query( 'posts_per_page=-1' ); //show all ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


<div class="col-sm-12 descrip">
<h2 class="page-title animate fadeIn"><?php the_title(); ?></h2>
<p class="date"><?php echo get_the_date( 'l / F d / Y' ); ?></p>  
<p><?php the_excerpt() ?></p>
</div>

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no news articles at this time.' ); ?></p>
<?php endif; ?>
