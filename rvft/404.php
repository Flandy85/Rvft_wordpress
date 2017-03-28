<?php get_header(); ?>
<div class="error-field">
	<div class="error-container">
		<h2>Hittade inte det du sökte efter!</h2>
		<p><a href="<?php echo home_url(); ?>">Tillbaka till startsidan</a></p>
	</div>
	<div class="404-pic">
		<img src="<?php echo get_template_directory_uri(); ?>/src/img/bannerrvft.png" alt="Bild från ett felmeddelande" class="error-img">
	</div>
</div>


<?php get_footer(); ?>
