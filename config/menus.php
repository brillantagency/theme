<?php

// Register menus
function register_my_menu() {
	register_nav_menus(
		array(
			'menu_primary'    => 'Menu principal',
			'copyright'       => 'Copyright',
		)
	);
}
add_action( 'init', 'register_my_menu' );