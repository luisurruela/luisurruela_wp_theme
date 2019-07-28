<?php 

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */

function lu_scripts() {
	
	//Styles
	wp_register_style( 'lu-boostrap' , get_theme_file_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style( 'lu-styles' , get_theme_file_uri() . '/assets/css/lu_styles.css' );
	wp_register_style( 'lu-gfonts' , 'https://fonts.googleapis.com/css?family=Noto+Sans+HK:100,300,400,500,700,900&display=swap' );
	
	wp_enqueue_style( 'lu-boostrap');
	wp_enqueue_style( 'lu-styles');	
	wp_enqueue_style( 'lu-gfonts');	

	//Scripts
	wp_register_script ( 'lu_scripts', get_theme_file_uri() .  '/assets/js/lu_scripts.js', [], false, true );
	wp_register_script ( 'lu_popper', get_theme_file_uri() . '/assets/css/popper.min.js', [], false, true);
	wp_register_script( 'lu_bootstrap', get_theme_file_uri() .  '/assets/js/bootstrap.min.js', [], false, true );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'lu_popper' );
	wp_enqueue_script( 'lu_bootstrap' );
	wp_enqueue_script( 'lu_scripts' );
}

