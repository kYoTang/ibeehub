<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 24/11/15
	 * Time: 3:18 PM
	 */
	class Wbls_Fw_Flexslider {
		
		protected $_labels = array();
		protected $_args = array();
		protected $_taxonomy_args = array();
		protected $_taxonomy_labels = array();

		/**
		 * Wbls_Fw_Flexslider constructor.
		 */
		public function __construct() {
			$this->_labels = apply_filters( 'wbls_fw_flex_slider_post_type_labels', array(
				'name' => __( 'Flex Sliders', 'webulous-framework' ),
				'singular_name' => __( 'Flex Slider', 'webulous-framework' ),
				'add_new' => __( 'Add New Slide', 'webulous-framework' ),
				'add_new_item' => __( 'Add New Slide', 'webulous-framework' ),
				'edit_item' => __( 'Edit Slide', 'webulous-framework' ),
				'new_item' => __( 'New Slide', 'webulous-framework' ),
				'all_items' => __( 'All Slides', 'webulous-framework' ),
				'view_item' => __( 'View Slide', 'webulous-framework' ),
				'search_items' => __( 'Search Slides', 'webulous-framework' ),
				'not_found' =>  __( 'No Slides Found', 'webulous-framework' ),
				'not_found_in_trash' => __( 'No Slides Found in Trash', 'webulous-framework' ),
				'parent_item_colon' => '',
				'menu_name' => 'Flex Sliders'
				)
			);

			$this->_args = apply_filters( 'wbls_fw_flex_slider_post_type_args', array(
				'public' => true,
				'show_ui' => true,
				'menu_icon' => 'dashicons-images-alt',
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'labels' => $this->_labels
				)
			);

			$this->_taxonomy_labels = apply_filters( 'wbls_fw_flex_slider_taxonomy_labels', array(
				'name' => _x( 'Slide Groups', 'taxonomy general name', 'webulous-framework' ),
				'singular_name' => _x( 'Slide Group', 'taxonomy singular name', 'webulous-framework' ),
				'search_items' =>  __( 'Search Slide Groups', 'webulous-framework' ),
				'all_items' => __( 'All Slide Groups', 'webulous-framework' ),
				'parent_item' => __( 'Parent Slide Group', 'webulous-framework' ),
				'parent_item_colon' => __( 'Parent Slide Group:', 'webulous-framework' ),
				'edit_item' => __( 'Edit Slide Group', 'webulous-framework' ),
				'update_item' => __( 'Update Slide Group', 'webulous-framework' ),
				'add_new_item' => __( 'Add New Slide Group', 'webulous-framework' ),
				'new_item_name' => __( 'New Slide Group Name', 'webulous-framework' ),
				'menu_name' => __( 'Slide Groups', 'webulous-framework' ),
				)
			);

			$this->_taxonomy_args = apply_filters( 'wbls_fw_flex_slider_taxonomy_args', array(
				'public' => true,
				'show_ui' => true,
				'hierarchical' => true,
				'labels' => $this->_taxonomy_labels,
				'query_var' => 'flexslider_group'
				)
			);
		}

		/**
		 * Register Flexslider Post Type
		 */
		public function register() {
			register_post_type( 'flexslider', $this->_args );
			register_taxonomy( 'flexslider_group', array('flexslider'), $this->_taxonomy_args );
			register_taxonomy_for_object_type('flexslider_group', 'flexslider');

		}

		/**
		 * Change the columns for the edit Flexslider screen
		 */
		public function posts_columns( $cols ) {
			$cols = apply_filters( 'wbls_fw_flex_slider_columns_change', array(
				'cb' => '<input type="checkbox" />',
				'title' => __( 'Slide Name', 'webulous-framework' ),
				'shortcode'     => __( 'Shortcode',  'webulous-framework' ),
				'flexslider_group' => __( 'Slide Groups', 'webulous-framework' ),
				'date' => __( 'Date', 'webulous-framework' )
				)
			);
			return $cols;
		}

		/**
		 * Add content for custom columns of Flexslider
		 *
		 * @param $column
		 * @param $post_id
		 */
		public function custom_columns( $column, $post_id ) {

			global $post;

			switch ( $column ) {
				case 'shortcode' :
					$term_list = wp_get_post_terms($post_id, 'flexslider_group', array( 'fields' => 'all' ) );
					if( ! empty( $term_list ) ) {
						echo "[flexslider name=" . $term_list[0]->slug . "]";
					} else {
						_e( 'Assign a Slider Group!', 'webulous-framework' );
					}

					break;

				case 'flexslider_group' :
					$terms = get_the_terms( $post_id, 'flexslider_group' );

					/* If terms were found. */
					if ( !empty( $terms ) ) {

						$out = array();

						/* Loop through each term, linking to the 'edit posts' page for the specific term. */
						foreach ( $terms as $term ) {
							$out[] = sprintf( '<a href="%s">%s</a>',
								esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'flexslider_group' => $term->slug ), 'edit.php' ) ),
								esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'flexslider_group', 'display' ) )
							);
						}

						/* Join the terms, separating them with a comma. */
						echo join( ', ', $out );
					}

					/* If no terms were found, output a default message. */
					else {
						_e( 'No Groups assigned. Please assign one!', 'webulous-framework' );
					}
					break;
			}
		}

	}