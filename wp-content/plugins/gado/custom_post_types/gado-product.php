<?php

/* easily generated from https://generatewp.com/post-type */

// Register Custom Post Type
add_action( 'init', 'gado_product_custom_post_type', 0 );
function gado_product_custom_post_type()
{
	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'gado' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'gado' ),
		'menu_name'             => __( 'Product', 'gado' ),
		'name_admin_bar'        => __( 'product', 'gado' ),
		'archives'              => __( 'Item Archives', 'gado' ),
		'attributes'            => __( 'Item Attributes', 'gado' ),
		'parent_item_colon'     => __( 'Parent Item:', 'gado' ),
		'all_items'             => __( 'All Items', 'gado' ),
		'add_new_item'          => __( 'Add New Item', 'gado' ),
		'add_new'               => __( 'Add New', 'gado' ),
		'new_item'              => __( 'New Item', 'gado' ),
		'edit_item'             => __( 'Edit Item', 'gado' ),
		'update_item'           => __( 'Update Item', 'gado' ),
		'view_item'             => __( 'View Item', 'gado' ),
		'view_items'            => __( 'View Items', 'gado' ),
		'search_items'          => __( 'Search Item', 'gado' ),
		'not_found'             => __( 'Not found', 'gado' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'gado' ),
		'featured_image'        => __( 'Featured Image', 'gado' ),
		'set_featured_image'    => __( 'Set featured image', 'gado' ),
		'remove_featured_image' => __( 'Remove featured image', 'gado' ),
		'use_featured_image'    => __( 'Use as featured image', 'gado' ),
		'insert_into_item'      => __( 'Insert into item', 'gado' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'gado' ),
		'items_list'            => __( 'Items list', 'gado' ),
		'items_list_navigation' => __( 'Items list navigation', 'gado' ),
		'filter_items_list'     => __( 'Filter items list', 'gado' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'gado' ),
		'description'           => __( 'Lorem ipsum dolor sit amet', 'gado' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ), // give title (name) and editor (description)
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 2, // place the menu below 'Dashboard'
		'menu_icon'             => 'dashicons-screenoptions',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'gado-product', $args );
}
