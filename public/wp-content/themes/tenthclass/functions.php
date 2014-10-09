<?php

function lar_test() {
	if ( is_front_page() ) { ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/frontstyle.css"> 
	<?php 
} 
}

add_action( "wp_head", "lar_test" );


