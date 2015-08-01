<?php
/**
 * The main template file.
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
get_header(); ?>

		<div class="sec1">
			<div class="intro" id="contain">
			<h3 class="h-title"><span><?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Events by:%s', 'vf' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Events on:%s', 'vf' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Events in:%s', 'vf' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'vf' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Events in:%s', 'vf' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'vf' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'vf' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'vf' );

						else :
							_e( 'Archives', 'vf' );

						endif;
					?>
				</span></h3> 
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
				<p class="intro-no-p"></p>
			</div><!--/.intro-->
		</div><!--/.sec1-->
     


    
	  <div class="sec3">
   		 <div class="grid grid-pad no-top">
			<div id="primary" class="content-area col-12 event-archive">
				<main id="main" class="site-main" role="main">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
				     get_template_part( 'content', '' ); ?>


					<?php endwhile; ?>

						<?php vf_paging_nav(); ?> 

				<?php else : ?>

				

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
	    </div><!-- grid -->
    </div><!--.sec3-->
	<?php get_footer(); ?>
