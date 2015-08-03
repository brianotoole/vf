<?php
/**
 * The template for displaying 404 pages (not found).
 */
 
get_header(); ?> 
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
		<div id="primary" class="col-9-12">
			<main id="main" class="site-main" role="main">
	
				<article id="post">
	
					<div class="entry-content">
						<h2 class="page-title animate fadeIn">Page Not Found: 404</h2>
						<hp>This page does not exist or has been deleted.</hp>
						<p><a href="<?php bloginfo('url'); ?>">Click here to return to the homepage</a>.</p>
					</div><!-- .entry-content -->
				
				</article><!-- #post-## -->

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>