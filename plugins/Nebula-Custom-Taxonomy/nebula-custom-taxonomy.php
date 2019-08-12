<?php
/*
Plugin Name: Nebula Custom Taxonomy
Description: Plugin for creating a custom taxonomy (Priority)
Version: 2.0.0
Author: Katrine-Marie Burmeister
Author URI: https://jordstudio.dk
*/

namespace nebula\priorities;

if(!defined('ABSPATH')){
	exit('Go away!');
}

class CustomTaxonomy {
	private $labels;

	function __construct($labels){
		$this->labels = $labels;
		add_action('init', array($this,'create_taxonomy'));
	}

	function create_taxonomy() {

		register_taxonomy('importance',array('case'), array(
			'hierarchical' => false,
			'labels' => $this->labels,
			'show_ui' => true,
			'public' => false,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'pri' ),
		));

	}

}

$labels = array(
	'name' => _x( 'Priorities', 'taxonomy general name' ),
	'singular_name' => _x( 'Priority', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Priorities' ),
	'all_items' => __( 'All Priorities' ),
	'edit_item' => __( 'Edit Priority' ),
	'update_item' => __( 'Update Priority' ),
	'add_new_item' => __( 'Add New Priority' ),
	'new_item_name' => __( 'New Priority Name' ),
	'menu_name' => __( 'Priority' ),
);

$taxonomy = new CustomTaxonomy($labels);
