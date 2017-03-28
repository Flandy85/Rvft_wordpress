<?php get_header();
if(have_posts()) {
	?>
	<div class="single-container">
		<?php
		while(have_posts()){

			the_post();
			?>
			
			<?php
			
				if( has_post_thumbnail()) {
					?>

					<h2 class="single-title"><?php the_title(); ?></h2>
					<div class="single-content-container">
						
			<?php
				}
			?>
						<div class="single-content-img"><?php the_post_thumbnail('large'); ?></div>
						<div class="single-content"><?php the_content(); ?></div>
					</div>
			<?php
		}
		?>
	</div>
	<?php
}
get_footer();
?>