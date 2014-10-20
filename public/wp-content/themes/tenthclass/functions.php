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
function lar1_slug_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'theme-slug' ),
		'id' => 'main-sidebar',
		'description' => __( 'This is the main sidebar.', 'theme-slug' ),
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		) );
}
add_action( 'widgets_init', 'lar1_slug_widgets_init' );



// Registering a secondary sidebar. 
function lar2_slug_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Secondary Sidebar', 'theme-slug' ),
		'id' => 'secondary-sidebar',
		'description' => __( 'This is the secondary sidebar.', 'theme-slug' ),
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		) );
}
add_action( 'widgets_init', 'lar2_slug_widgets_init' );



// Registering a tertiary sidebar. 
function lar3_slug_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Tertiary Sidebar', 'theme-slug' ),
		'id' => 'tertiary-sidebar',
		'description' => __( 'This is the tertiary sidebar.', 'theme-slug' ),
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		) );
}
add_action( 'widgets_init', 'lar3_slug_widgets_init' );



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






