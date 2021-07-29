<?php

/*
Plugin Name: Our Activites
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add activity in FlightNepal
*/
 
function activities() {
 
    $labels = array(
        'name' => _x( 'Activities', 'activities' ),
        'singular_name' => _x( 'Activities', 'activities' ),
        'add_new' => _x( 'Add New', 'activities' ),
        'add_new_item' => _x( 'Add New', 'activities' ),
        'edit_item' => _x( 'Edit', 'activities' ),
        'new_item' => _x( 'New', 'activities' ),
        'view_item' => _x( 'View', 'activities' ),
        'search_items' => _x( 'Search', 'activities' ),
        'not_found' => _x( 'No activity found.', 'activities' ),
        'not_found_in_trash' => _x( 'No activities found in trash.', 'activities' ),
        'parent_item_colon' => _x( 'Activities:', 'activities' ),
        'menu_name' => _x( 'Activities', 'activities' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Activities.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/fn-activities/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('activities', $args);
}
 
add_action('init', 'activities');

?>