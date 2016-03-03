<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function remove_left_sidebar(){

	// Removing left sidebar of Twenty fourten 
	unregister_sidebar( 'sidebar-1' );
	
}


function my_updated_copyright($first_year, $owner){
	$copyright_notice = '&copy; ' . $first_year;
    $current_year = date('Y');
    if($first_year != $current_year) {
        $copyright_notice .= ' - ' . $current_year;
    }
    $copyright_notice .= ' ' . $owner;    
    return $copyright_notice;
}

function my_custom_credits(){
	echo '<span style="margin-right:15px">'.my_updated_copyright(2014, 'Jade Cavalcanti').'
		</span>';
}

add_action('twentyfourteen_credits','my_custom_credits');

add_action( 'widgets_init', 'remove_left_sidebar', 11 );
?>
