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
		'name'                  => _x( 'Publicités', 'Post Type General Name', 'BarilRoulant' ),
		'singular_name'         => _x( 'Publicité', 'Post Type Singular Name', 'BarilRoulant' ),
		'menu_name'             => __( 'Publicité', 'BarilRoulant' ),
		'name_admin_bar'        => __( 'Publicité', 'BarilRoulant' ),
		'archives'              => __( 'Item Archives', 'BarilRoulant' ),
		'attributes'            => __( 'Item Attributes', 'BarilRoulant' ),
		'parent_item_colon'     => __( 'Parent Item:', 'BarilRoulant' ),
		'all_items'             => __( 'All Items', 'BarilRoulant' ),
		'add_new_item'          => __( 'Add New Item', 'BarilRoulant' ),
		'add_new'               => __( 'Add New', 'BarilRoulant' ),
		'new_item'              => __( 'New Item', 'BarilRoulant' ),
		'edit_item'             => __( 'Edit Item', 'BarilRoulant' ),
		'update_item'           => __( 'Update Item', 'BarilRoulant' ),
		'view_item'             => __( 'View Item', 'BarilRoulant' ),
		'view_items'            => __( 'View Items', 'BarilRoulant' ),
		'search_items'          => __( 'Search Item', 'BarilRoulant' ),
		'not_found'             => __( 'Not found', 'BarilRoulant' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'BarilRoulant' ),
		'featured_image'        => __( 'Featured Image', 'BarilRoulant' ),
		'set_featured_image'    => __( 'Set featured image', 'BarilRoulant' ),
		'remove_featured_image' => __( 'Remove featured image', 'BarilRoulant' ),
		'use_featured_image'    => __( 'Use as featured image', 'BarilRoulant' ),
		'insert_into_item'      => __( 'Insert into item', 'BarilRoulant' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'BarilRoulant' ),
		'items_list'            => __( 'Items list', 'BarilRoulant' ),
		'items_list_navigation' => __( 'Items list navigation', 'BarilRoulant' ),
		'filter_items_list'     => __( 'Filter items list', 'BarilRoulant' ),
	);
	$args = array(
		'label'                 => __( 'Publicité', 'BarilRoulant' ),
		'description'           => __( 'Publicité', 'BarilRoulant' ),
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
		'name'                  => _x( 'Chambres', 'Post Type General Name', 'BarilRoulant' ),
		'singular_name'         => _x( 'Chambre', 'Post Type Singular Name', 'BarilRoulant' ),
		'menu_name'             => __( 'Chambres', 'BarilRoulant' ),
		'name_admin_bar'        => __( 'Post Type', 'BarilRoulant' ),
		'archives'              => __( 'Item Archives', 'BarilRoulant' ),
		'attributes'            => __( 'Item Attributes', 'BarilRoulant' ),
		'parent_item_colon'     => __( 'Parent Item:', 'BarilRoulant' ),
		'all_items'             => __( 'All Items', 'BarilRoulant' ),
		'add_new_item'          => __( 'Add New Item', 'BarilRoulant' ),
		'add_new'               => __( 'Ajout Chambre', 'BarilRoulant' ),
		'new_item'              => __( 'Nouvelle Chambre', 'BarilRoulant' ),
		'edit_item'             => __( 'Éditer Chambre', 'BarilRoulant' ),
		'update_item'           => __( 'MAJ Chambre', 'BarilRoulant' ),
		'view_item'             => __( 'View Item', 'BarilRoulant' ),
		'view_items'            => __( 'View Items', 'BarilRoulant' ),
		'search_items'          => __( 'Search Item', 'BarilRoulant' ),
		'not_found'             => __( 'Not found', 'BarilRoulant' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'BarilRoulant' ),
		'featured_image'        => __( 'Featured Image', 'BarilRoulant' ),
		'set_featured_image'    => __( 'Set featured image', 'BarilRoulant' ),
		'remove_featured_image' => __( 'Remove featured image', 'BarilRoulant' ),
		'use_featured_image'    => __( 'Use as featured image', 'BarilRoulant' ),
		'insert_into_item'      => __( 'Insert into item', 'BarilRoulant' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'BarilRoulant' ),
		'items_list'            => __( 'Items list', 'BarilRoulant' ),
		'items_list_navigation' => __( 'Items list navigation', 'BarilRoulant' ),
		'filter_items_list'     => __( 'Filter items list', 'BarilRoulant' ),
	);
	$args = array(
		'label'                 => __( 'Chambre', 'BarilRoulant' ),
		'description'           => __( 'Chambres Auberge', 'BarilRoulant' ),
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

// Custom message de la légende du formulaire
add_filter( 'gform_required_legend', function( $legend, $form ) {
    return '"Requis" indique les champs obligatoires';
}, 10, 2 );

/**
 * Add textdomain support to the theme
 */
add_action('after_setup_theme', 'load_textdomain_func');
function load_textdomain_func()
{
    load_theme_textdomain('BarilRoulant', get_template_directory() . '/languages');
}
