<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title>
		<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
	</title>
	
	<meta name="description" content="Ecologic Radio: Where Science & Society Come Together. A Science, Ecology & Culture Radio Show and Podcast." />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/2d7fbada-a0c6-4777-a61e-646a95a5f409.js"></script>

	<!-- Begin Scripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
	<!-- End Scripts -->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<a href="<?php echo get_option('home'); ?>/" class="logo">
			<img src="<?php bloginfo('template_directory'); ?>/images/ecologic-radio-logo.png" alt="Temporary Logo">
		</a>
		<span id="menu-main-title"><a href="#">MENU<span class="icon"><img src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" /></span></a></span>
		
			<?php wp_nav_menu( array(
				'theme_location' => 'main_menu' ,
				'menu' => 'Main Menu' ,
				'container' => 'ul'
			) ); ?>
		
	</header>

	<div id="main">
		<div id="sub-container">