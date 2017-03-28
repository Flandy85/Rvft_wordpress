<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="header-container">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/src/img/rvftloga.png" class="logo" alt="Bild av företagets logo">
			</a>
			<nav class="navigation-menu">
				<div><?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?></div>
			</nav><!-- navigation-menu -->
		</div><!-- header-container -->
	</header>