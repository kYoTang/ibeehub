<?php

/**
 * This plugin allows you to include templates with your plugin so that they can
 * be added with any theme.
 *
 * @package Page Template
 * @version 1.0.0
 * @since 	0.1.0
 */
if( ! class_exists( 'Wbls_Page_Fw_Template_Loader') ) {
	class Wbls_Fw_Page_Template_Loader {

	    /**
	     * Plugin version, used for cache-busting of style and script file references.
	     *
	     * @since   1.0.0
	     *
	     * @var     string
	     */
	    const VERSION = '1.0.0';

	    /**
	     * Unique identifier for the plugin.
	     *
	     * The variable name is used as the text domain when internationalizing strings
	     * of text.
	     *
	     * @since    1.0.0
	     *
	     * @var      string
	     */
	    protected $plugin_slug;

		/**
		 * The array of templates that this plugin tracks.
		 *
		 * @var      array
		 */
		protected $templates;


		/**
		 * Returns an instance of this class. An implementation of the singleton design pattern.
		 *
		 * @return   Page_Templae_Example    A reference to an instance of this class.
		 * @since    1.0.0
		 */

		/**
		 * Initializes the plugin by setting localization, filters, and administration functions.
		 *
		 * @version		1.0.0
	     * @since 		1.0.0
		 */
		public function __construct() {

			$this->templates = array();

			// Add your templates to this array.
			$this->templates = array(
				'portfolio.php'     => __( 'Portfolio', $this->plugin_slug ),
				'portfolio-2col.php'     => __( '2 Col Portfolio', $this->plugin_slug ),
				'portfolio-2col_sidebar.php' => __( '2 Col Portfolio Sidebar', $this->plugin_slug ),
				'portfolio-2col_text.php' => __( '2 Col Portfolio Text', $this->plugin_slug ),
				'portfolio-3col.php'     => __( '3 Col Portfolio', $this->plugin_slug ),
				'portfolio-3col_sidebar.php' => __( '3 Col Portfolio Sidebar', $this->plugin_slug ),
				'portfolio-3col_text.php' => __( '3 Col Portfolio Text', $this->plugin_slug ),
				'portfolio-4col.php'     => __( '4 Col Portfolio', $this->plugin_slug ),
				'portfolio-4col_text.php' => __( '4 Col Portfolio Text', $this->plugin_slug ),
				'blog-fullwidth.php' => __( 'Blog Fullwidth', $this->plugin_slug ),		
				'blog-large.php' => __( 'Blog Large', $this->plugin_slug ),

			);

			// adding support for theme templates to be merged and shown in dropdown
			$templates = wp_get_theme()->get_page_templates();
			$templates = array_merge( $templates, $this->templates );

		} // end constructor

		/**
		 * Adds our template to the pages cache in order to trick WordPress
		 * into thinking the template file exists where it doens't really exist.
		 *
		 * @param   array    $atts    The attributes for the page attributes dropdown
		 * @return  array    $atts    The attributes for the page attributes dropdown
		 * @verison	1.0.0
		 * @since	1.0.0
		 */
		public function register_project_templates( $atts ) {

			// Create the key used for the themes cache
			$cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

			// Retrieve the cache list. If it doesn't exist, or it's empty prepare an array
			$templates = wp_cache_get( $cache_key, 'themes' );
			if ( empty( $templates ) ) {
				$templates = array();
			} // end if

			// Since we've updated the cache, we need to delete the old cache
			wp_cache_delete( $cache_key , 'themes');

			// Now add our template to the list of templates by merging our templates
			// with the existing templates array from the cache.
			$templates = array_merge( $templates, $this->templates );

			// Add the modified cache to allow WordPress to pick it up for listing
			// available templates
			wp_cache_add( $cache_key, $templates, 'themes', 1800 );

			return $atts;

		} // end register_project_templates

		/**
		 * Checks if the template is assigned to the page
		 *
		 * @version	1.0.0
		 * @since	1.0.0
		 */
		public function view_project_template( $template ) {

			global $post;

			// If no posts found, return to
			// avoid "Trying to get property of non-object" error
			if ( !isset( $post ) ) return $template;

			if ( ! isset( $this->templates[ get_post_meta( $post->ID, '_wp_page_template', true ) ] ) ) {
				return $template;
			} // end if

			$file = apply_filters( 'wbls_custom_portfolio_views', get_template_directory() . '/portfolio/' . get_post_meta( $post->ID, '_wp_page_template', true ) );

			// Just to be safe, we check if the file exist first
			if( file_exists( $file ) ) {
				return $file;
			} // end if

			$file = WBLS_FW_DIR . 'public/views/' . get_post_meta( $post->ID, '_wp_page_template', true );

			// Just to be safe, we check if the file exist first
			if( file_exists( $file ) ) {
				return $file;
			} // end if

			return $template;

		} // end view_project_template

		/*--------------------------------------------*
		 * Delete Templates from Theme
		*---------------------------------------------*/
		public function delete_template( $filename ){				
			$theme_path = get_template_directory();
			$template_path = $theme_path . '/' . $filename;  
			if( file_exists( $template_path ) ) {
				unlink( $template_path );
			}

			// we should probably delete the old cache
			wp_cache_delete( $cache_key , 'themes');
		}

	} // end class
}

