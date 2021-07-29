<?php

/*
Plugin Name: FAQ
Plugin URI: https://flightnepal.com
Version: 1.0
Author: FlightNepal.com
Author URI: https://flightnepal.com
Description: Plugin to add FAQ in FlightNepal
*/
 
function faq() {
 
    $labels = array(
        'name' => _x( 'FAQ', 'faq' ),
        'singular_name' => _x( 'FAQ', 'faq' ),
        'add_new' => _x( 'Add New', 'faq' ),
        'add_new_item' => _x( 'Add New', 'faq' ),
        'edit_item' => _x( 'Edit', 'faq' ),
        'new_item' => _x( 'New', 'faq' ),
        'view_item' => _x( 'View', 'faq' ),
        'search_items' => _x( 'Search', 'faq' ),
        'not_found' => _x( 'No faq found.', 'faq' ),
        'not_found_in_trash' => _x( 'No faq found in trash.', 'faq' ),
        'parent_item_colon' => _x( 'FAQ:', 'faq' ),
        'menu_name' => _x( 'FAQ', 'faq' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'FAQ.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/faq/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('faq', $args);
}
 
add_action('init', 'faq');

?>