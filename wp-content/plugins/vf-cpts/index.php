<?
/*
Plugin Name: VF CPTS
Plugin URI: #
Description: Custom post type & taxonomies for VF site
Version: 1.0.0
Author: VF
*/
// Register Custom Post Type: "volunteer_centers"
function volunteer_centers() {

	$labels = array(
		'name'                => _x( 'Volunteer Centers', 'Post Type General Name', 'volunteer_centers' ),
		'singular_name'       => _x( 'Volunteer Center', 'Post Type Singular Name', 'volunteer_centers' ),
		'menu_name'           => __( 'Volunteer Centers', 'volunteer_centers' ),
		'name_admin_bar'      => __( 'Volunteer Centers', 'volunteer_centers' ),
		'parent_item_colon'   => __( 'Parent Item:', 'volunteer_centers' ),
		'all_items'           => __( 'All Volunteer Centers', 'volunteer_centers' ),
		'add_new_item'        => __( 'Add New Volunteer Center', 'volunteer_centers' ),
		'add_new'             => __( 'Add New', 'volunteer_centers' ),
		'new_item'            => __( 'New Volunteer Center', 'volunteer_centers' ),
		'edit_item'           => __( 'Edit Volunteer Center', 'volunteer_centers' ),
		'update_item'         => __( 'Update Volunteer Center', 'volunteer_centers' ),
		'view_item'           => __( 'View Item', 'volunteer_centers' ),
		'search_items'        => __( 'Search Item', 'volunteer_centers' ),
		'not_found'           => __( 'Not found', 'volunteer_centers' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'volunteer_centers' ),
	);
	$args = array(
		'label'               => __( 'Volunteer Center', 'volunteer_centers' ),
		'description'         => __( 'Volunteer Centers', 'volunteer_centers' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions' ),
		'taxonomies'          => array( 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-location-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'volunteer_centers', $args );

}
add_action( 'init', 'volunteer_centers', 0 );

?>