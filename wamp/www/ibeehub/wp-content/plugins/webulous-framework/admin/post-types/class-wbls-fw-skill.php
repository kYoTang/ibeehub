<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 24/11/15
	 * Time: 3:18 PM
	 */
	class Wbls_Fw_Skill {
		
		protected $_labels = array();
		protected $_args = array();
		protected $_taxonomy_args = array();
		protected $_taxonomy_labels = array();

		/**
		 * Wbls_Fw_Skill constructor.
		 */
		public function __construct() {
			$this->_labels = apply_filters( 'wbls_fw_skill_post_type_labels', array(
				'name' => __( 'Skills', 'webulous-framework' ),
				'singular_name' => __( 'Skill', 'webulous-framework' ),
				'add_new' => __( 'Add New Skill', 'webulous-framework' ),   
				'add_new_item' => __( 'Add New Skill', 'webulous-framework' ),
				'edit_item' => __( 'Edit Skill', 'webulous-framework' ),
				'new_item' => __( 'New Skill', 'webulous-framework' ),
				'all_items' => __( 'All Skills', 'webulous-framework' ),
				'view_item' => __( 'View Skill', 'webulous-framework' ),
				'search_items' => __( 'Search Skills', 'webulous-framework' ),
				'not_found' =>  __( 'No Skills Found', 'webulous-framework' ),
				'not_found_in_trash' => __( 'No Skills Found in Trash', 'webulous-framework' ),
				'parent_item_colon' => '',
				'menu_name' => 'Skills',
				)
			);

			$this->_args = apply_filters( 'wbls_fw_skill_post_type_args', array(
				'public' => true,
				'show_ui' => true,
				'menu_icon' => 'dashicons-admin-tools',
				'supports' => array( 'title' ),
				'labels' => $this->_labels
				)
			);

		}

		/**
		 * Register Post Type
		 */
		public function register() {
			register_post_type( 'skill', $this->_args );
		}
	}