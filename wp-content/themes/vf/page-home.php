<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php the_field('home_hero_img'); ?>') 50% center no-repeat;background-size:cover;"></div> 
    <div class="intro row" id="contain">
     	  <div class="col-sm-12 animate fadeIn">                   
            <h2><?php the_field('home_hero_title'); ?></h2>
            <p><?php the_field('home_hero_text'); ?></p>
              <a class="button blue" href="<?php the_field('home_hero_button_left_link'); ?>">
        	    <?php the_field('home_hero_button_left_title'); ?>
        	  </a>
              <a class="button green" href="<?php the_field('home_hero_button_right_link'); ?>">
	            <?php the_field('home_hero_button_right_title'); ?>
              </a>
          </div><!--/.col-->
     </div><!--/.row-->
</section><!--/section.hero-->

<section class="what-we-do">
	<div class="intro row" id="contain">
	  <h2 class="section-title">What We Do</h2> 
		<div class="col-sm-4">
			<img src="http://placeimg.com/150/150/any">
			<h3>Americorps</h3>
			<p><?php the_field('home_wwd_left'); ?></p>
		</div><hr class="visible-xs">
		<div class="col-sm-4">
			<img src="http://placeimg.com/150/150/any">
			<h3>Florida<br />Volunteers</h3>
			<p><?php the_field('home_wwd_middle'); ?></p>
		</div><hr class="visible-xs">
		<div class="col-sm-4">
			<img src="http://placeimg.com/150/150/any">
			<h3>Emergency<br />Management</h3>
			<p><?php the_field('home_wwd_right'); ?></p>
		</div>
	</div><!--/.intro-->
</section><!--/.what-we-do-->

<section class="news">
	<div class="intro row" id="contain">
	  <h2 class="section-title">Latest News</h2> 
		<div class="col-sm-12">
			<?php get_template_part( 'part', 'news' ); ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.news-->

<section class="quotes">
	<div class="intro row" id="contain">
		<div class="col-sm-4 no-padding">
			<img src="http://placeimg.com/475/500/any">
		</div>
		<div class="col-sm-8">
			<p>"<?php the_field('home_quote_text1'); ?>"</p>
			<p>
			  <strong><?php the_field('home_quote_attr1'); ?></strong>
			</p><hr>
			
			<p>"<?php the_field('home_quote_text2'); ?>"</p>
			<p>
			  <strong><?php the_field('home_quote_attr2'); ?></strong>
			</p><hr>
			
			<p>"<?php the_field('home_quote_text3'); ?>"</p>
			<p>
			  <strong><?php the_field('home_quote_attr3'); ?></strong>
			</p>
		</div>
	</div><!--/.intro-->
</section><!--/.quotes-->

<section class="help-you">
	<div class="intro row" id="contain">
	  <h2 class="section-title">How Can We Help You?</h2> 
		<div class="col-sm-8">
		  <p><?php the_field('home_help_text'); ?></p>
		</div>
		<div class="col-sm-4">
			<a class="button blue full" href="#">I Want to Volunteer</a>
			<a class="button lightgreen full" href="#">I Need a Grant</a>
			<a class="button green full" href="#">I Want to Donate</a>
		</div>
	</div><!--/.intro-->
</section><!--/.what-we-do-->


   
<div class="footer-contact">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
		    <img src='<?php bloginfo('stylesheet_directory'); ?>/img/logo.png'alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a> 
			<h3>Together, We Can #ServeFL</h3>
			<a class="button green" href="#">Get Started</a>
		</div>
		
		
	</div><!-- grid -->
</div><!-- footer-contact -->



<?php get_footer(); ?>