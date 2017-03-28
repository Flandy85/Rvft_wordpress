<?php 
/* 
* Template Name: projects
*/ 
?>
<?php get_header(); ?>
<?php
if(have_posts()) { 
	while(have_posts()) {
		the_post();
		
		?>
		<div class="post-grid"><?php echo do_shortcode("[post_grid id='31']"); ?></div>
		<?php
	
	}
}
get_footer();
?>