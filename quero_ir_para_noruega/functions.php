<?php
	function register_my_menu() {
 		register_nav_menu('ID_DO_MENU',__( 'Descrição do menu' ));
	}
	add_action( 'init', 'register_my_menu' );
?>