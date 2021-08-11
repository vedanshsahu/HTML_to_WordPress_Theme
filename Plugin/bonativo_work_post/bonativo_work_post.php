<?php
    /*
        Plugin Name: Bonativo Theme: Work - Post Types
        Plugin URI: 
        Description: Adds a new Post Type (Work) into WordPress
        Version: 1.0
        Author: RubicoIT PVT. LTD.
        Author URI: https://www.rubicoit.com/
        Text Domain: bonativo
    */

    if(!defined('ABSPATH')) die();


// Register new Custom Post Type
function bonativo_Work_post_type() {

	$labels = array(
		'name'                  => _x( 'Work', 'Post Type General Name', 'bonativo' ),
		'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'bonativo' ),
		'menu_name'             => __( 'Work', 'bonativo' ),
		'name_admin_bar'        => __( 'Work', 'bonativo' ),
		'archives'              => __( 'Archive', 'bonativo' ),
		'attributes'            => __( 'Attributes', 'bonativo' ),
		'parent_item_colon'     => __( 'Parent Work', 'bonativo' ),
		'all_items'             => __( 'All Work', 'bonativo' ),
		'add_new_item'          => __( 'Add Work', 'bonativo' ),
		'add_new'               => __( 'Add Work', 'bonativo' ),
		'new_item'              => __( 'New Work', 'bonativo' ),
		'edit_item'             => __( 'Edit Work', 'bonativo' ),
		'update_item'           => __( 'Update Work', 'bonativo' ),
		'view_item'             => __( 'View Work', 'bonativo' ),
		'view_items'            => __( 'View Work', 'bonativo' ),
		'search_items'          => __( 'Search Work', 'bonativo' ),
		'not_found'             => __( 'Not found', 'bonativo' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'bonativo' ),
		'featured_image'        => __( 'Featured Image', 'bonativo' ),
		'set_featured_image'    => __( 'Save Featured Image', 'bonativo' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'bonativo' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'bonativo' ),
		'insert_into_item'      => __( 'Insert in Work', 'bonativo' ),
		'uploaded_to_this_item' => __( 'Add in Work', 'bonativo' ),
		'items_list'            => __( 'Work List', 'bonativo' ),
		'items_list_navigation' => __( 'Navigate to Work', 'bonativo' ),
		'filter_items_list'     => __( 'Filter Work', 'bonativo' ),
	);
	$args = array(
		'label'                 => __( 'Work', 'bonativo' ),
		'description'           => __( 'Work for bonativo Website', 'bonativo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false, // False = posts - No child posts
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-chart-line',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page'
	);
	register_post_type( 'bonativo_Work', $args );

}
add_action( 'init', 'bonativo_Work_post_type', 0 );
