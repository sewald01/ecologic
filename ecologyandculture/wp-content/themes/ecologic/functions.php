<?php

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

}

add_theme_support( 'post-thumbnails' ); 
