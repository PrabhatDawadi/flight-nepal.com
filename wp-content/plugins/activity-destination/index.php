<?php

/*
Plugin Name: Activity Destination
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add activity destination in FlightNepal
*/
 
function activityDestination() {
 
    $labels = array(
        'name' => _x( 'Activity Destination', 'activity-destination' ),
        'singular_name' => _x( 'Activity Destination', 'activity-destination' ),
        'add_new' => _x( 'Add New', 'activity-destination' ),
        'add_new_item' => _x( 'Add New', 'activity-destination' ),
        'edit_item' => _x( 'Edit', 'activity-destination' ),
        'new_item' => _x( 'New', 'activity-destination' ),
        'view_item' => _x( 'View', 'activity-destination' ),
        'search_items' => _x( 'Search', 'activity-destination' ),
        'not_found' => _x( 'No activity found.', 'activity-destination' ),
        'not_found_in_trash' => _x( 'No activity destination found in trash.', 'activity-destination' ),
        'parent_item_colon' => _x( 'Activity Destination:', 'activity-destination' ),
        'menu_name' => _x( 'Activity Destination', 'activity-destination' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Activity Destination.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/activity-destination/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('activity-destination', $args);
}
 
add_action('init', 'activityDestination');

?>