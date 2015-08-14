<?php
 /**
 * The main template file.
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */get_header(); ?>
	<header class="entry-header">
	</header><!-- .entry-header -->
	<div class="grid">
		<div id="primary" class="col-9-12">
		  <main id="main" class="site-main" role="main">
			<div class="entry-content">
			<h2 class="page-title animate fadeIn">
				<?php
	
	if ( is_category() ) :
	printf( __( ' Category %s', 'vf' ), '<span>' . single_cat_title() . '</span>' );
	elseif ( is_tag() ) :
	single_tag_title();
	elseif ( is_author() ) :
	printf( __( 'Archives: %s', 'vf' ), '<span class="vcard">' . get_the_author() . '</span>' );
	elseif ( is_day() ) :
	printf( __( 'Archives: %s', 'vf' ), '<span>' . get_the_date() . '</span>' );
	elseif ( is_month() ) :
	printf( __( 'Archives: %s', 'vf' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'vf' ) ) . '</span>' );
	elseif ( is_year() ) :
	printf( __( 'Archives: %s', 'vf' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'vf' ) ) . '</span>' );
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
	_e( 'Chats', 'vf' ); else :
	_e( 'Archives', 'vf' );
	endif;
	?>
			</h2>
			<?php 
	while ( have_posts() ) :
	the_post();
	?>
				<?php  get_template_part( 'content', '' ); ?>
			<?php  endwhile;// end of the loop.  ?>
		    </div><!--/.entry-content-->
		  </main><!-- #main -->
		</div><!-- #primary -->
	<?php  get_sidebar(); ?>
	</div><!-- grid -->
	<?php  get_footer(); ?>