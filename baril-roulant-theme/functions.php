<?php

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1440, 900);
add_image_size('vignette', 220, 100, true);

// menu
function creer_menu() {
	register_nav_menus(array(
        'menu_principal' => 'Menu principal',
    ));
}
add_action('init', 'creer_menu');



// Pages d'option
if ( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' => 'Options générales',
        'menu_title' => 'Options du thème',
        'menu_slug' => 'pw_theme_options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

// Sous-page d'option
    acf_add_options_sub_page(array(
        'page_title' => 'Options du pied de page',
        'menu_title' => 'Pied de page',
        'parent_slug' => 'pw_theme_options',
    ));
};

// CPT publicités
// Register Custom Post Type
function cpt_publicite() {

	$labels = array(
		'name'                  => _x( 'Publicités', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Publicité', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Publicité', 'text_domain' ),
		'name_admin_bar'        => __( 'Publicité', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Publicité', 'text_domain' ),
		'description'           => __( 'Publicité', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-align-left',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'publicite', $args );

}
add_action( 'init', 'cpt_publicite', 0 );

// Register Custom Post Type Chambre Auberge
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Chambres', 'Post Type General Name', 'pw_baril-roulant' ),
		'singular_name'         => _x( 'Chambre', 'Post Type Singular Name', 'pw_baril-roulant' ),
		'menu_name'             => __( 'Chambres', 'pw_baril-roulant' ),
		'name_admin_bar'        => __( 'Post Type', 'pw_baril-roulant' ),
		'archives'              => __( 'Item Archives', 'pw_baril-roulant' ),
		'attributes'            => __( 'Item Attributes', 'pw_baril-roulant' ),
		'parent_item_colon'     => __( 'Parent Item:', 'pw_baril-roulant' ),
		'all_items'             => __( 'All Items', 'pw_baril-roulant' ),
		'add_new_item'          => __( 'Add New Item', 'pw_baril-roulant' ),
		'add_new'               => __( 'Ajout Chambre', 'pw_baril-roulant' ),
		'new_item'              => __( 'Nouvelle Chambre', 'pw_baril-roulant' ),
		'edit_item'             => __( 'Éditer Chambre', 'pw_baril-roulant' ),
		'update_item'           => __( 'MAJ Chambre', 'pw_baril-roulant' ),
		'view_item'             => __( 'View Item', 'pw_baril-roulant' ),
		'view_items'            => __( 'View Items', 'pw_baril-roulant' ),
		'search_items'          => __( 'Search Item', 'pw_baril-roulant' ),
		'not_found'             => __( 'Not found', 'pw_baril-roulant' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'pw_baril-roulant' ),
		'featured_image'        => __( 'Featured Image', 'pw_baril-roulant' ),
		'set_featured_image'    => __( 'Set featured image', 'pw_baril-roulant' ),
		'remove_featured_image' => __( 'Remove featured image', 'pw_baril-roulant' ),
		'use_featured_image'    => __( 'Use as featured image', 'pw_baril-roulant' ),
		'insert_into_item'      => __( 'Insert into item', 'pw_baril-roulant' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'pw_baril-roulant' ),
		'items_list'            => __( 'Items list', 'pw_baril-roulant' ),
		'items_list_navigation' => __( 'Items list navigation', 'pw_baril-roulant' ),
		'filter_items_list'     => __( 'Filter items list', 'pw_baril-roulant' ),
	);
	$args = array(
		'label'                 => __( 'Chambre', 'pw_baril-roulant' ),
		'description'           => __( 'Chambres Auberge', 'pw_baril-roulant' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'pw_chambres', $args );

}
add_action( 'init', 'custom_post_type', 0 );


