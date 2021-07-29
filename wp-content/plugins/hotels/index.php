<?php

/*
Plugin Name: Hotels
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add hotel in FlightNepal
*/
 
function hotels() {
 
    $labels = array(
        'name' => _x( 'Hotels', 'hotels' ),
        'singular_name' => _x( 'Hotels', 'hotels' ),
        'add_new' => _x( 'Add New', 'hotels' ),
        'add_new_item' => _x( 'Add New', 'hotels' ),
        'edit_item' => _x( 'Edit', 'hotels' ),
        'new_item' => _x( 'New', 'hotels' ),
        'view_item' => _x( 'View', 'hotels' ),
        'search_items' => _x( 'Search', 'hotels' ),
        'not_found' => _x( 'No tour found.', 'hotels' ),
        'not_found_in_trash' => _x( 'No hotels found in trash.', 'hotels' ),
        'parent_item_colon' => _x( 'Hotels:', 'hotels' ),
        'menu_name' => _x( 'Hotels', 'hotels' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hotels.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/hotels/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('hotels', $args);
}
 
add_action('init', 'hotels');

?>