<?php
/*
Plugin Name: Larissa's Books
Plugin URI: http://tenthclass.dev
Description: This is a plugin that adds a books custom post type to WordPress. 
Author: Larissa
Version: 1.0
Author URI: tenthclass.dev
*/




// Register Custom Post Type
function lar_create_books() {

	$labels = array(
		'name'                => _x( 'Books', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Book', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Books', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
		);
	$args = array(
		'label'               => __( 'books', 'text_domain' ),
		'description'         => __( 'Larissa\'s Books', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 30,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		);
	register_post_type( 'books', $args );

}

// Hook into the 'init' action
add_action( 'init', 'lar_create_books', 0 );
