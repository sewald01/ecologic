<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title>
		<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
	</title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<header>
			<a href="<?php echo get_option('home'); ?>/" class="logo">
				<img src="<?php bloginfo('template_directory'); ?>/images/temp-logo.jpg" alt="Temporary Logo">
			</a>
		</header>
		<nav id="main-nav">
			<?php wp_nav_menu( array(
				'theme_location' => 'main_menu' ,
				'menu' => 'Main Menu' ,
				'container' => 'ul'
			) ); ?>
		</nav>
	<div id="main">