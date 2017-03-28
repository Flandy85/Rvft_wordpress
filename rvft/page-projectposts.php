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
		<div><?php echo do_shortcode("[post_grid id='36']"); ?></div>
		<?php
		
	}
}
get_footer();
?>