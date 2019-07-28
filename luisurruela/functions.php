<?php 

//Includes
require ( get_theme_file_path() . '/includes/enqueues.php' );
require ( get_theme_file_path() . '/includes/theme_support.php' );
require ( get_theme_file_path() . '/includes/navbar.php' );
require ( get_template_directory() . '/WP_Bootstrap_Navwalker.php' );
require ( get_template_directory() . '/includes/portfolio.php' );
require ( get_template_directory() . '/includes/services.php' );


//Setup
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
// Add support for custom flexible header
add_theme_support( 'custom-header', array(
	'flex-width'    => true,
	'width'           => 260,
	'flex-height'    => true,
	'height'          => 100,
	'header-selector' => '.site-title a',
	'header-text'     => false
 
) );

//Hooks
add_action( 'wp_enqueue_scripts', 'lu_scripts' );
add_action( 'wp_enqueue_scripts', 'lu_scripts' );
add_action( 'after_setup_theme', 'logo' );
add_action( 'init', 'register_my_menu' );
add_action( 'init', 'lu_portfolio' );
add_action( 'init', 'lu_services' );