<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 24/11/15
	 * Time: 3:18 PM
	 */
	class Wbls_Fw_Faq {
		
		protected $_labels = array();
		protected $_args = array();
		protected $_taxonomy_args = array();
		protected $_taxonomy_labels = array();

		/**
		 * Wbls_Fw_Faq constructor.
		 */
		public function __construct() {
			$this->_labels = apply_filters( 'wbls_fw_faq_post_type_labels', array(
				'name' => __( 'FAQs', 'webulous-framework' ),
				'singular_name' => __( 'FAQ', 'webulous-framework' ),
				'add_new' => __( 'Add New FAQ', 'webulous-framework' ),
				'add_new_item' => __( 'Add New FAQ', 'webulous-framework' ),
				'edit_item' => __( 'Edit FAQ', 'webulous-framework' ),
				'new_item' => __( 'New FAQ', 'webulous-framework' ),
				'all_items' => __( 'All FAQs', 'webulous-framework' ),
				'view_item' => __( 'View FAQ', 'webulous-framework' ),
				'search_items' => __( 'Search FAQs', 'webulous-framework' ),
				'not_found' =>  __( 'No FAQs Found', 'webulous-framework' ),
				'not_found_in_trash' => __( 'No FAQs Found in Trash', 'webulous-framework' ),
				'parent_item_colon' => '',
				'menu_name' => 'FAQs',
				)
			);

			$this->_args = apply_filters( 'wbls_fw_faq_post_type_args', array(
				'public' => true,
				'show_ui' => true,
				'hierarchical' => true,
				'menu_icon'    => 'dashicons-microphone',
				'supports' => array( 'title' ),
				'labels' => $this->_labels
				)
			);

		}

		/**
		 * Register Post Type
		 */
		public function register() {
			register_post_type( 'faq', $this->_args );
		}


	}