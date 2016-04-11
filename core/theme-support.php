<?php


function core_theme_support(){
	/*-----------------------------------------------------------------------------------*/
	/*  registros de menus en el tema
	/*-----------------------------------------------------------------------------------*/
	add_theme_support( 'nav-menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	    register_nav_menus(
	        array(

				'main'   => 'Menu Principal',
				'footer' => 'Menu Footer'
				
	        )
	    );
	}

	//custom bakground
	$defaults = array(
		'default-color'          => '',//dont #
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );

	//custom header
	$defaults = array(
		'default-image'          => get_template_directory_uri().'/images/logo.png',
		'random-default'         => false,
		'width'                  => 200,
		'height'                 => 200,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );

	//thumbnails
	add_theme_support('post-thumbnails');

	/*Agrega link automáticos rss al head*/
	add_theme_support( 'automatic-feed-links' );
	//support title
	add_theme_support( 'title-tag' );
	//support editor theme
	add_editor_style();



}//fin función




// Permitir comentarios encadenados
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
       wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');
