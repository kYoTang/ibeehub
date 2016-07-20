<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.webulousthemes.com/
 * @since      1.0.0
 *
 * @package    Wbls_Theme
 * @subpackage Wbls_Theme/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wbls_Theme
 * @subpackage Wbls_Theme/public
 * @author     N. Venkat Raj <venkat@webulous.in>
 */
class Wbls_Theme_Public {   

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->load_dependencies();

	}

	/**
	 * Load the required dependencies for admin section.
	 *
	 * Include the following files that are required for admin section:
	 *
	 * - class-wbls-theme-custom-css-js.php  Outputs custom css and js based on customizer options.
	 * - templatet-tags.php Defines internationalization functionality.
	 * - Wbls_Theme_Hooks. Defines all hooks for the public side of the site.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {
		require_once WBLS_THEME_DIR . 'public/class-wbls-theme-custom-css-js.php';
		require_once WBLS_THEME_DIR . 'public/template-tags.php'; // TODO: Do we need this?
		require_once WBLS_THEME_DIR . 'public/class-wbls-theme-hooks.php';
	}


	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wbls_Theme_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wbls_Theme_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

	
		switch ( get_theme_mod('color_scheme') ) {      
			case '1':
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/default.css', array(), $this->version, 'all' );
				break;
			case '2':
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/blue.css', array(), $this->version, 'all' );
				break;
			case '3':
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/green.css', array(), $this->version, 'all' );
				break;
			case '4':
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/pink.css', array(), $this->version, 'all' );
				break;
			case '5':
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/purple.css', array(), $this->version, 'all' );
				break;
			case '6':
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/red.css', array(), $this->version, 'all' );
				break;
			case '7':
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/yellow.css', array(), $this->version, 'all' );
				break;
			default:
				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'public/css/default.css', array(), $this->version, 'all' );
				break;
		}

	wp_enqueue_style( $this->plugin_name . '-animation', WBLS_THEME_URI . 'public/css/animation.css', array(), $this->version, 'all' );
	
	}       

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wbls_Theme_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wbls_Theme_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */


		wp_enqueue_script( $this->plugin_name, WBLS_THEME_URI . 'public/js/public.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . '-animate', WBLS_THEME_URI . 'public/js/animate.js', array( 'jquery' ), $this->version, true );

	}

	/**
	 * Dequeue Scripts
	 */
	public function dequeue_scripts(){
	    // TODO: Make slug loosely coupled.
		wp_dequeue_script('modulus-custom');
	}

	/**
	 * Dequeue Styles
	 */

	public function dequeue_styles() {
		wp_dequeue_style('modulus-style');      
	}

}
