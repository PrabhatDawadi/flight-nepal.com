<?php

/*
Plugin Name: Tour Destination
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add tour destination in FlightNepal
*/
 
function tourDestination() {
 
    $labels = array(
        'name' => _x( 'Tour Destination', 'tour-destination' ),
        'singular_name' => _x( 'Tour Destination', 'tour-destination' ),
        'add_new' => _x( 'Add New', 'tour-destination' ),
        'add_new_item' => _x( 'Add New', 'tour-destination' ),
        'edit_item' => _x( 'Edit', 'tour-destination' ),
        'new_item' => _x( 'New', 'tour-destination' ),
        'view_item' => _x( 'View', 'tour-destination' ),
        'search_items' => _x( 'Search', 'tour-destination' ),
        'not_found' => _x( 'No tour found.', 'tour-destination' ),
        'not_found_in_trash' => _x( 'No tour destination found in trash.', 'tour-destination' ),
        'parent_item_colon' => _x( 'Tour Destination:', 'tour-destination' ),
        'menu_name' => _x( 'Tour Destination', 'tour-destination' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Tour Destination.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/tour-destination/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('tour-destination', $args);
}
 
add_action('init', 'tourDestination');

?>