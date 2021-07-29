<?php

/*
Plugin Name: Tours
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add tour in FlightNepal
*/
 
function tours() {
 
    $labels = array(
        'name' => _x( 'Tours', 'tours' ),
        'singular_name' => _x( 'Tours', 'tours' ),
        'add_new' => _x( 'Add New', 'tours' ),
        'add_new_item' => _x( 'Add New', 'tours' ),
        'edit_item' => _x( 'Edit', 'tours' ),
        'new_item' => _x( 'New', 'tours' ),
        'view_item' => _x( 'View', 'tours' ),
        'search_items' => _x( 'Search', 'tours' ),
        'not_found' => _x( 'No tours found.', 'tours' ),
        'not_found_in_trash' => _x( 'No tour found in trash.', 'tours' ),
        'parent_item_colon' => _x( 'Tours:', 'tours' ),
        'menu_name' => _x( 'Tours', 'tours' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Tours.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/tours/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('tours', $args);
}
 
add_action('init', 'tours');

?>