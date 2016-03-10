<?php

function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

$cstmbg = array(
	'default-image' => '/images/ecologicbg.jpg',
);

add_theme_support( 'custom-background', $cstmbg );

function my_cpt_support_author() {
add_post_type_support( 'my_cpt', 'author' );
}
add_action('init', 'my_cpt_support_author');

function register_my_menus() {
  register_nav_menus(
    array( 
		  'main-menu' => __( 'Main Menu' ), 
		  'footer-menu' => __( 'Footer Menu' ),
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}
  
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',
		  'footer-menu' => 'Footer Menu',
			 )
	);
}    

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	register_sidebar (
		array(
			'id' => 'sub',
			'name' => __( 'Sub-Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);

	register_sidebar (
		array(
			'id' => 'page',
			'name' => __( 'Page Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
	
	register_sidebar (
		array(
			'id' => 'post',
			'name' => __( 'Post Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
	
	register_sidebar (
		array(
			'id' => 'episodes',
			'name' => __( 'Episodes Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);

}

add_theme_support( 'post-thumbnails' ); 

function the_post_thumbnail_title() {

	global $post;

	$thumbnail_id    = get_post_thumbnail_id($post->ID);
	$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

	if ($thumbnail_image && isset($thumbnail_image[0])) {
		echo '<span>'.$thumbnail_image[0]->post_title.'</span>';
	}
}

function the_post_thumbnail_description() {

	global $post;

	$thumbnail_id    = get_post_thumbnail_id($post->ID);
	$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

	if ($thumbnail_image && isset($thumbnail_image[0])) {
		echo '<span>'.$thumbnail_image[0]->post_content.'</span>';
	}
}

