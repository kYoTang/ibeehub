<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 24/11/15
	 * Time: 3:18 PM
	 */
	class Wbls_Fw_Portfolio {
		
		protected $_labels = array();
		protected $_args = array();
		protected $_taxonomy_args = array();
		protected $_taxonomy_labels = array();     

		/**
		 * Wbls_Fw_Portfolio constructor.
		 */
		public function __construct() {
			$this->_labels = apply_filters( 'wbls_fw_portfolio_post_type_labels', array(
				'name' => __( 'Projects', 'webulous-framework' ),
				'singular_name' => __( 'Project', 'webulous-framework' ),
				'add_new' => __( 'Add New Project', 'webulous-framework' ),
				'add_new_item' => __( 'Add New Project', 'webulous-framework' ),
				'edit_item' => __( 'Edit Project', 'webulous-framework' ),
				'new_item' => __( 'New Project', 'webulous-framework' ),
				'all_items' => __( 'All Projects', 'webulous-framework' ),
				'view_item' => __( 'View Project', 'webulous-framework' ),
				'search_items' => __( 'Search Projects', 'webulous-framework' ),
				'not_found' =>  __( 'No Projects Found', 'webulous-framework' ),
				'not_found_in_trash' => __( 'No Projects Found in Trash', 'webulous-framework' ),
				'parent_item_colon' => '',
				'menu_name' => 'Portfolios',
				)
			);

			$this->_args = apply_filters( 'wbls_fw_portfolio_post_type_args', array(
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'portfolio' ),
				'has_archive' => true,
				'hierarchical' => true,
				'taxonomies' => array( 'category' ),
				'menu_icon' => 'dashicons-format-image',
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'labels' => $this->_labels
				)
			);

			$this->_taxonomy_labels = apply_filters( 'wbls_fw_portfolio_taxonomy_labels', array(
				'name' => _x( 'Skills', 'taxonomy general name', 'webulous-framework' ),
				'singular_name' => _x( 'Skill', 'taxonomy singular name', 'webulous-framework' ),
				'search_items' =>  __( 'Search Skills', 'webulous-framework' ),
				'all_items' => __( 'All Skills', 'webulous-framework' ),
				'parent_item' => __( 'Parent Skill', 'webulous-framework' ),
				'parent_item_colon' => __( 'Parent Skill:', 'webulous-framework' ),
				'edit_item' => __( 'Edit Skill', 'webulous-framework' ),
				'update_item' => __( 'Update Skill', 'webulous-framework' ),
				'add_new_item' => __( 'Add New Skill', 'webulous-framework' ),
				'new_item_name' => __( 'New Skill Name', 'webulous-framework' ),
				'menu_name' => __( 'Skills', 'webulous-framework' ),
				)
			);

			$this->_taxonomy_args = apply_filters( 'wbls_fw_portfolio_taxonomy_args', array(
				'public' => true,
				'show_ui' => true,
				'hierarchical' => true,
				'labels' => $this->_taxonomy_labels,
				'query_var' => 'skills'
				)
			);
		}

		/**
		 * Register Post Type
		 */
		public function register() {
			register_post_type( 'portfolio', $this->_args );
			register_taxonomy( 'skills', array('portfolio'), $this->_taxonomy_args );
			register_taxonomy_for_object_type('skills','portfolio');

		}

		/**
		 * Change the columns for the Portfolio edit screen
		 */
		public function posts_columns( $cols ) {
			$cols = apply_filters( 'wbls_fw_portfolio_columns_change', array(
				'cb' => '<input type="checkbox" />',
				'title' => __( 'Skill', 'webulous-framework' ),
				'shortcode'     => __( 'Shortcode',  'webulous-framework' ),
				'skills' => __( 'Skills', 'webulous-framework' ),
				'date' => __( 'Date', 'webulous-framework' )
				)
			);

			return $cols;
		}

		/**
		 * Add custom column content for Portfolio
		 *
		 * @param $column
		 * @param $post_id
		 */
		public function custom_columns( $column, $post_id ) {
			global $post;

			switch ( $column ) {

				// TODO: Do we need shortcode?
				case 'shortcode' :
					$term_list = wp_get_post_terms( $post_id, 'skills', array( 'fields' => 'all' ) );
					echo "[portfolio name=" .  $post->post_name . "]";
					break;

				case 'skills' :
					$terms = get_the_terms( $post_id, 'skills' );

					/* If terms were found. */
					if ( ! empty( $terms ) ) {

						$out = array();

						/* Loop through each term, linking to the 'edit posts' page for the specific term. */
						foreach ( $terms as $term ) {
							$out[] = sprintf( '<a href="%s">%s</a>',
								esc_url( add_query_arg( array(
									'post_type' => $post->post_type,
									'skills'    => $term->slug
								), 'edit.php' ) ),
								esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'skills', 'display' ) )
							);
						}

						/* Join the terms, separating them with a comma. */
						echo join( ', ', $out );
					} /* If no terms were found, output a default message. */
					else {
						_e( 'No Skills assigned to this project', 'webulous-framework' );
					}

					break;
			}
		}
		
	}   