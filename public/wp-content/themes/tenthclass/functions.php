<?php


// Link to stylesheet on the frontpage.
function lar_test() {
	if ( is_front_page() ) { ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/frontstyle.css"> 
	<?php 
} 
}

add_action( "wp_head", "lar_test" );

// Registering a main sidebar. 
function lar_slug_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'theme-slug' ),
		'id' => 'main-sidebar',
		'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		) );
}
add_action( 'widgets_init', 'lar_slug_widgets_init' );

// Registering a footer sidebar. 
function lar_footer_slug_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Footer Sidebar', 'theme-slug' ),
		'id' => 'footer-sidebar',
		'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		) );
}
add_action( 'widgets_init', 'lar_footer_slug_widgets_init' );