<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 24/11/15
	 * Time: 3:18 PM
	 */
	class Wbls_Fw_Testimonial {
		
		protected $_labels = array();
		protected $_args = array();
		protected $_taxonomy_args = array();
		protected $_taxonomy_labels = array();

		/**
		 * Testimonial constructor.
		 */
		public function __construct() {
			$this->_labels = apply_filters( 'wbls_fw_testimonial_post_type_labels', array(
				'name' => __( 'Testimonials', 'webulous-framework' ),
				'singular_name' => __( 'Testimonial', 'webulous-framework' ),
				'add_new' => __( 'Add New Testimonial', 'webulous-framework' ),
				'add_new_item' => __( 'Add New Testimonial', 'webulous-framework' ),
				'edit_item' => __( 'Edit Testimonial', 'webulous-framework' ),
				'new_item' => __( 'New Testimonial', 'webulous-framework' ),
				'all_items' => __( 'All Testimonials', 'webulous-framework' ),
				'view_item' => __( 'View Testimonial', 'webulous-framework' ),
				'search_items' => __( 'Search Testimonials', 'webulous-framework' ),
				'not_found' =>  __( 'No Testimonials Found', 'webulous-framework' ),
				'not_found_in_trash' => __( 'No Testimonials Found in Trash', 'webulous-framework' ),
				'parent_item_colon' => '',
				'menu_name' => 'Testimonials',
				)
			);

			$this->_args = apply_filters( 'wbls_fw_testimonial_post_type_args', array(
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'testimonial' ),
				'has_archive' => true,
				'hierarchical' => true,
				//'taxonomies' => array( 'category' ),

				'menu_position' => 23,
				'menu_icon'           => 'dashicons-businessman',
				'supports' => array( 'title', 'thumbnail' ),
				'labels' => $this->_labels
				)
			);

		}

		/**
		 * Register Post Type
		 */
		public function register() {
			register_post_type( 'testimonial', $this->_args );
		}
	}