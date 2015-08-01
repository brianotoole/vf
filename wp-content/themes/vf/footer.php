<?php
/**
 * The template for displaying the footer.
 */
?>

	</section><!-- #content --> 
   
<div class="footer-contact">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
		    <img src='<?php bloginfo('stylesheet_directory'); ?>/img/logo.png'alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a> 
			<h3>Together, We Can #ServeFL</h3>
			<a class="button green" href="#">Get Started</a>
		</div>
		
		
	</div><!-- grid -->
</div><!-- footer-contact -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
			<div class="site-info col-1-1">
				&copy; Copyright <?php echo date('Y'); ?><em> <?php bloginfo('blog_name'); ?></em> &nbsp; <br class="visible-sm visible-xs" /> <a href="<?php bloginfo('url'); ?>/about"> About</a> <a href="<?php bloginfo('url'); ?>/contact"> Contact</a> <a href="#top"> Back To Top</a>
			</div><!-- .site-info -->
        </div><!-- grid --> 
	</footer><!-- #colophon -->

</div><!-- #page --> 

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<?php wp_footer(); ?>
</body>
</html>