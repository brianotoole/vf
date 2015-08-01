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
			<p>Americorps members dedicate a year of their life to service in Florida. We make it happen.</p>
		</div><hr class="visible-xs">
		<div class="col-sm-4">
			<img src="http://placeimg.com/150/150/any">
			<h3>Florida<br />Volunteers</h3>
			<p>Americorps members dedicate a year of their life to service in Florida. We make it happen.</p>
		</div><hr class="visible-xs">
		<div class="col-sm-4">
			<img src="http://placeimg.com/150/150/any">
			<h3>Emergency<br />Management</h3>
			<p>Americorps members dedicate a year of their life to service in Florida. We make it happen.</p>
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
			<p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
			<p>
			  <strong>Quote Name</strong> / 
			  <span>Quote Position</span> / 
			  <span>Quote Company</span>
			</p><hr>
			
			<p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
			<p>
			  <strong>Quote Name</strong> / 
			  <span>Quote Position</span> / 
			  <span>Quote Company</span>
			</p><hr>
			
			<p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
			<p>
			  <strong>Quote Name</strong> / 
			  <span>Quote Position</span> / 
			  <span>Quote Company</span>
			</p>
		</div>
	</div><!--/.intro-->
</section><!--/.quotes-->

<section class="help-you">
	<div class="intro row" id="contain">
	  <h2 class="section-title">How Can We Help You?</h2> 
		<div class="col-sm-8">
		  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-sm-4">
			<a class="button blue full" href="#">I Want to Volunteer</a>
			<a class="button lightgreen full" href="#">I Need a Grant</a>
			<a class="button green full" href="#">I Want to Donate</a>
		</div>
	</div><!--/.intro-->
</section><!--/.what-we-do-->



<?php get_footer(); ?>