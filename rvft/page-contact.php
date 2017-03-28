<?php 
/* 
* Template Name: Contact us
*/ 
?>
<?php get_header(); ?>

<?php

if(have_posts()) { 

	while(have_posts()) {
		
		the_post();
		?>
		<div class="contact-us-container">
			<div class="contact-form-7-field">
				<h2>Kontakta oss</h2>
					<div class="contact-form-7"><?php echo do_shortcode("[contact-form-7 id='26' title='Kontaktformulär 1']"); 
							?></div>
			</div>
			<div class="company-contact-field">
				<h2>Roslagens Värme & Fastighetsteknik AB</h2>
				<div class="contact-person">	
					<img src="<?php the_field('person1'); ?>" alt="Profilbild" class="profile-img">
					<h3>Bruno Gustavsson</h3>
					<ul>
						<li><a href="tel:08-206145"><i class="fa fa-phone-square fa-1x" aria-hidden="true"> 08-206145</i></a></li>
						<li><a href="mailto:bruno.roslagensvarme@gmail.com"><i class="fa fa-envelope-o fa-1x" aria-hidden="true"> bruno@rvft.se</i></a></li>
					</ul>
				</div>
				<div class="contact-person">
					<img src="<?php the_field('person2'); ?>" alt="Profilbild" class="profile-img">
					<h3>Dan Gustavsson</h3>
					<ul>
						<li><a href="tel:08-206230"><i class="fa fa-phone-square fa-1x" aria-hidden="true"> 08-206230</i></a></li>
						<li><a href="mailto:dan@rvft.se"><i class="fa fa-envelope-o fa-1x" aria-hidden="true"> roslagensvarme@gmail.com</i></a></li>
					</ul>
				</div>
				<div class="company-contact">
					<img src="<?php the_field('företags_bild'); ?>" alt="Profilbild" class="profile-img">
					<h3>Besöksadress</h3>
					<p>Rallarbacken 14</p>
					<p>184 40 Åkersberga</p>
					<p><a href="tel:08-201201"><i class="fa fa-phone-square fa-1x" aria-hidden="true"> Växelnr: 08-201201</i></a></p>
				</div>
			</div>
		</div>
		<?php
		
	}
}
get_footer();
?>