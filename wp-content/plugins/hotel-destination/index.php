<?php

/*
Plugin Name: Hotel Destination
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add hotel destination in FlightNepal
*/
 
function hotelDestination() {
 
    $labels = array(
        'name' => _x( 'Hotel Destination', 'hotel-destination' ),
        'singular_name' => _x( 'Hotel Destination', 'hotel-destination' ),
        'add_new' => _x( 'Add New', 'hotel-destination' ),
        'add_new_item' => _x( 'Add New', 'hotel-destination' ),
        'edit_item' => _x( 'Edit', 'hotel-destination' ),
        'new_item' => _x( 'New', 'hotel-destination' ),
        'view_item' => _x( 'View', 'hotel-destination' ),
        'search_items' => _x( 'Search', 'hotel-destination' ),
        'not_found' => _x( 'No hotel found.', 'hotel-destination' ),
        'not_found_in_trash' => _x( 'No hotel destination found in trash.', 'hotel-destination' ),
        'parent_item_colon' => _x( 'Hotel Destination:', 'hotel-destination' ),
        'menu_name' => _x( 'Hotel Destination', 'hotel-destination' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hotel Destination.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/hotel-destination/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('hotel-destination', $args);
}
 
add_action('init', 'hotelDestination');

?>