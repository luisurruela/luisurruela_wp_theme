<?php 

function register_my_menu() {
  	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'LUS' ),
	) );
}