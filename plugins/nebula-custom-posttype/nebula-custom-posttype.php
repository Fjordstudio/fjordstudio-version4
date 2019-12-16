<?php
/*
	Plugin Name: Nebula Custom Post Type - Cases
	Description: Plugin for creating 'Case' custom post type
	Version: 2.0.0
	Author: Katrine-Marie Burmeister
*/

	//Custom post types
	add_action('init', 'create_post_type1');
	function create_post_type1(){
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

	add_action('init', 'create_post_type2');
	function create_post_type2(){
  	register_post_type('opensource', array('labels' => array(
        'name' => __('Open Source'),
        'singular_name' => __('Open Source Projekt'),
        'add_new' => __('Tilføj nyt'),
        'add_new_item' => __('Tilføj nyt projekt')
    	),
    	'public' => true,
    	'has_archive' => true,
			'show_in_nav_menus' => true,
			'menu_icon' => 'dashicons-media-text',
			'taxonomies' => array('category', 'post_tag'),
      'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' )
    	)
  	);
  }

	add_action('init', 'create_post_type3');
	function create_post_type3(){
  	register_post_type('demo', array('labels' => array(
        'name' => __('Demoer'),
        'singular_name' => __('Demo'),
        'add_new' => __('Tilføj ny'),
        'add_new_item' => __('Tilføj ny demo')
    	),
    	'public' => true,
    	'has_archive' => true,
			'show_in_nav_menus' => true,
			'menu_icon' => 'dashicons-media-interactive',
			'taxonomies' => array('category', 'post_tag'),
      'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' )
    	)
  	);
  }
