<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.webulousthemes.com
 * @since      1.0.0
 *
 * @package    Wbls_Fw
 * @subpackage Wbls_Fw/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wbls_Fw
 * @subpackage Wbls_Fw/public
 * @author     N. Venkat Raj <venkat@webulous.in>
 */
class Wbls_Fw_Public {

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
		 * defined in Wbls_Fw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wbls_Fw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'font-awesome', WBLS_FW_URI . 'includes/vendor/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_style( 'eislide', WBLS_FW_URI . 'includes/vendor/elastic-slider/css/eislide.css' );
		wp_enqueue_style( 'flexslider', WBLS_FW_URI . 'includes/vendor/flexslider/css/flexslider.css' );
		wp_enqueue_style( 'slicknav', WBLS_FW_URI . 'includes/vendor/slicknav/css/slicknav.min.css' );
		wp_enqueue_style( 'prettyPhoto', WBLS_FW_URI . 'includes/vendor/prettyPhoto/css/prettyPhoto.css' );
		wp_enqueue_style( 'tabulous', WBLS_FW_URI . 'includes/vendor/tabulous/css/tabulous.css' );

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/webulous-framework-public.css', array(), $this->version, 'all' );

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
		 * defined in Wbls_Fw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wbls_Fw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( 'flexslider', WBLS_FW_URI . 'includes/vendor/flexslider/js/jquery.flexslider-min.js', array('jquery'), '2.5.0', true );
		// Easing need for Elastic slider
		wp_enqueue_script( 'easing', WBLS_FW_URI . 'includes/vendor/elastic-slider/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
		wp_enqueue_script( 'eislideshow', WBLS_FW_URI . 'includes/vendor/elastic-slider/js/jquery.eislideshow.js', array('jquery'), '1.0', true );
		// TODO: Do we need raphael?
		//wp_enqueue_script( 'raphael', WBLS_FW_URI . '/js/raphael.min.js', array('jquery'), '2.1.0', true );
		wp_enqueue_script( 'imagesloaded', WBLS_FW_URI . 'public/js/imagesloaded.pkgd.min.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'isotope', WBLS_FW_URI . 'public/js/isotope.pkgd.min.js', array('jquery'), '2.0.0', true );
		wp_enqueue_script( 'slicknav', WBLS_FW_URI . 'includes/vendor/slicknav/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'prettyPhoto', WBLS_FW_URI . 'includes/vendor/prettyPhoto/js/jquery.prettyPhoto.js', array('jquery'), '3.1.5', true );
		// TODO: Do we need modernizr?
		wp_enqueue_script( 'modernizr', WBLS_FW_URI . 'public/js/modernizr.custom.js', array(), '1.0.0', false );
		// TODO: Grid is needed for isotope when window resized? Depends on Modernizer. What about new version?
		wp_enqueue_script( 'grid', WBLS_FW_URI . 'public/js/grid.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'jquery-ui-accordion', false, array('jquery'));
		// TODO: Replace jqueryui tabs with Tabulous or something else.
		// So that customizer will work when tabs are in page.
		wp_enqueue_script( 'tabulous', WBLS_FW_URI . 'includes/vendor/tabulous/js/tabulous.js', array('jquery'), '1.0.0', true );

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/webulous-framework-public.js', array( 'jquery' ), $this->version, true );   

	}


 } 
 ?>
