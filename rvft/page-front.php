<?php
/*
Template Name: Front page
*/
 get_header(); ?>

<main>	

	<?php

		if(have_posts()) {

			while(have_posts()) {
				
				the_post();
				?>
				<div class="slider-container">
					<div><?php echo do_shortcode("[metaslider id=22]"); 
					?></div>
				</div>
				<div class="main-container">
					<div class="about-container">
						<h2><?php  echo get_field('company_title'); ?></h2>
						<p><?php echo get_field('company_text'); ?></p>
						<div class="img-container">
							<img src="<?php the_field('bild1'); ?>" class="about-img-size" alt="Bild av en värmepump.">
							<!-- <img src="<?php //the_field('bild2'); ?>" class="img-size" alt="Bild av en värmepump."> -->
						</div>
					</div>
					<div class="enviroment-container">
						<h2><?php  echo get_field('license_title'); ?></h2>
						<p><?php echo get_field('license_text'); ?></p>

						<a href="http://www.incert.se/">
						<img src="<?php the_field('bild3'); ?>" class="img-size" alt="Bild av en värmepump.">
						</a>
						<p><?php echo get_field('license_text2'); ?></p>
					</div><!-- enviroment-container -->
				</div>				
				<?php
			}
		}
	?>
</main>

<?php get_footer(); ?>