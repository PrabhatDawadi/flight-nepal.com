<?php

/*
Plugin Name: Promotions
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add promotions in FlightNepal
*/
 
function promotions() {
 
    $labels = array(
        'name' => _x( 'Promotions', 'promotions' ),
        'singular_name' => _x( 'Promotions', 'promotions' ),
        'add_new' => _x( 'Add New', 'promotions' ),
        'add_new_item' => _x( 'Add New', 'promotions' ),
        'edit_item' => _x( 'Edit', 'promotions' ),
        'new_item' => _x( 'New', 'promotions' ),
        'view_item' => _x( 'View', 'promotions' ),
        'search_items' => _x( 'Search', 'promotions' ),
        'not_found' => _x( 'No promotion found.', 'promotions' ),
        'not_found_in_trash' => _x( 'No promotion found in trash.', 'promotions' ),
        'parent_item_colon' => _x( 'Promotions:', 'promotions' ),
        'menu_name' => _x( 'Promotions', 'promotions' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Promotions',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/promotions/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('promotions', $args);
}
 
add_action('init', 'promotions');

?>