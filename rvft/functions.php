<?php
/*******************************************************************
					Admin dashboard setup
*******************************************************************/
add_action('wp_dashboard_setup', 'rvft_remove_dashboard_boxes');
function rvft_remove_dashboard_boxes() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_primary']);

	wp_add_dashboard_widget('rvftdashboard', 'Support', 'rvft_dashwidget');
}
/*************************************************************
				WP Function widget for admin
**************************************************************/
function rvft_dashwidget () {
	?>
	Do you have problem?<br> Contact Anders Gustavsson. 

	<p><a href="http://localhost/wordpress_rvft/wp-admin/edit.php?post_type=rvft_cpt_portfolio">Publish a new case</a></p>
	<?php
}
/**************************************************************
				Theme settings
**************************************************************/
require "theme_setting.php";

/**************************************************************
				Hooks Setup
**************************************************************/
add_action( 'after_setup_theme', 'rvft_blog_setup' );

function rvft_blog_setup() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' );
	// Make sure to not write http in googlefont link, secerutiy protocall for SSL
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Roboto');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
	register_nav_menu( 'mainmenu', 'Website main navigation' );
	register_nav_menu( 'footer', 'Website footer navigation' );
	add_theme_support( 'post-thumbnails', array( 'post', 'fed16_cpt_portfolio' ) );
	add_image_size('blooper', 500, 500 );
	//the_post_thumbnail('blooper')
	// Custom Logo
	add_theme_support('custom-logo', array(
		'width'		=> 600,
		'height'	=> 85,
		'flex-width'	=> true,
		'flex-height'	=> true
		) );
	// Register sidebar
	register_sidebar(array(
		'name'			=> __("Footer", "rvft"),
		'id'			=> 'footer1',
		'description'	=> __("Column 1 in footern.", "rvft"),
		'before_widget'	=> '<div class ="footer footer-col-1">',
		'after_widget'	=> '</div>'
		));
}