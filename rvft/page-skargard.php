<?php 
/* 
* Template Name: skargard
*/ 
?>
<?php get_header(); ?>
<?php
$portfolio = new WP_Query(	array(
			'post_type'		=> 'fed16_cpt_portfolio',
			'posts_status'	=> 'published',
			'orderby'		=> 'title',
			'order'			=> ASC
			) );
if($portfolio->have_posts()) {
	?>
	<div class="skargard-container">
		<?php

		while($portfolio->have_posts()) {

			$portfolio->the_post();

			$bildurl = get_the_post_thumbnail_url();
			
			?>
			
				<div class="skargard-content">
					<a href="<?php echo the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
					    <img src="<?php echo $bildurl; ?>" class="skargard-img" alt="">
					    <p class="skargard-text"><?php the_excerpt(); ?></p>
					</a>
				</div>
			 
			<?php
		
		}
		?>
	</div>
	<?php
}
get_footer();
?>