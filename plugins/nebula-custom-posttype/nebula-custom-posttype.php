<?php
/*
	Plugin Name: Nebula Custom Post Type - Cases
	Description: Plugin for creating 'Case' custom post type
	Version: 1.0.0
	Author: Katrine-Marie Burmeister
*/

//Custom post types
	add_action('init', 'create_post_type');
	function create_post_type(){
  	register_post_type('case', array('labels' => array(
        'name' => __('Cases'),
        'singular_name' => __('Case'),
        'add_new' => __('Tilføj ny'),
        'add_new_item' => __('Tilføj ny case')
    	),
    	'public' => true,
    	'has_archive' => true,
			'show_in_nav_menus' => true,
			'menu_icon' => 'dashicons-id-alt',
			'taxonomies' => array('category', 'post_tag'),
      'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' )
    	)
  	);
  }
