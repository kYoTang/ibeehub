<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://www.webulousthemes.com/
 * @since      1.0.0
 *
 * @package    Wbls_Theme
 * @subpackage Wbls_Theme/includes
 */
	//TODO: Update code comments 

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Wbls_Theme
 * @subpackage Wbls_Theme/includes
 * @author     N. Venkat Raj <venkat@webulous.in>
 */
class Wbls_Theme {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Wbls_Theme_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   public static
	 * @var      string    $version    The current version of the plugin.
	 */
	public static $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 * @var string $plugin_name
	 * @var string $version
	 */
	public function __construct($plugin_name, $version) {

		$this->plugin_name = $plugin_name;
		self::$version = $version;

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Wbls_Theme_Loader. Orchestrates the hooks of the plugin.
	 * - Wbls_Theme_i18n. Defines internationalization functionality.
	 * - Wbls_Theme_Admin. Defines all hooks for the admin area.
	 * - Wbls_Theme_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 *Prebuilt Layout 
		 * 
		 */
		require_once WBLS_THEME_DIR . 'includes/panels.php';

		/**
		 * Demo content 
		 * 
		 */
		require_once WBLS_THEME_DIR . 'demo/init.php';


		/**
		 * The class responsible for handling updates.
		 */
		if( ! class_exists( 'EDD_SL_Plugin_Updater' ) ) {
			// load our custom updater
			include( dirname( __FILE__ ) . '/EDD_SL_Plugin_Updater.php' );
		}

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once WBLS_THEME_DIR . 'includes/class-wbls-theme-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once WBLS_THEME_DIR . 'includes/class-wbls-theme-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once WBLS_THEME_DIR . 'admin/class-wbls-theme-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once WBLS_THEME_DIR . 'public/class-wbls-theme-public.php';


		$this->loader = new Wbls_Theme_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Wbls_Theme_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */ 
	private function set_locale() {

		$plugin_i18n = new Wbls_Theme_i18n();
		$plugin_i18n->set_domain( $this->get_plugin_name() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Wbls_Theme_Admin( $this->get_plugin_name(), self::$version );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_action( 'admin_menu', $plugin_admin, 'remove_upgrade',11 );

		$this->loader->add_action( 'tgmpa_register', $plugin_admin, 'register_plugins' );

		$shortcodes = new Wbls_Theme_Shortcode();
		$this->loader->add_action( 'widgets_init', $shortcodes, 'redefine' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */   
	private function define_public_hooks() {

		$plugin_public = new Wbls_Theme_Public( $this->get_plugin_name(), self::$version );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles',11 );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts', 11 );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'dequeue_scripts', 12 );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'dequeue_styles', 12 );

		$wbls_hooks = new Wbls_Theme_Hooks();
		$this->loader->add_action( 'modulus_before_content', $wbls_hooks, 'full_width_slider', 100 );
		$this->loader->add_filter( 'wbls_custom_portfolio_views', $wbls_hooks, 'portfolio_views' );
		$this->loader->add_filter( 'modulus_customizer_options', $wbls_hooks, 'customizer_options' );
		$this->loader->add_filter( 'single_template', $wbls_hooks, 'single_portfolio' );
		$this->loader->add_filter( 'single_template', $wbls_hooks, 'single_post' );

		$custom = new Wbls_Theme_Custom_CSS_JS();
		$this->loader->add_action( 'wp_footer', $custom, 'js', 100);
		$this->loader->add_action( 'wp_footer', $custom, 'wbls_user_customize_js' );
		$this->loader->add_action( 'wp_head', $custom, 'carousel_margin_css' );
		$this->loader->add_action( 'wp_head', $custom, 'wbls_user_customizer_custom_css' );
		$this->loader->add_action( 'wp_enqueue_scripts', $custom, 'customizer_scripts' );
		if( get_theme_mod('custom_typography',false) ) {
			$this->loader->add_action( 'wp_head', $custom, 'css' );
		}
		if( get_theme_mod('enable_primary_color',false) ) {
			$this->loader->add_action( 'wp_head', $custom, 'primary_css' );
		}

		if( get_theme_mod('analytics_place') ) { 
			$this->loader->add_action( 'wp_footer', $custom, 'analytics_place_footer' );
		}else {
			$this->loader->add_action( 'wp_head', $custom, 'analytics_place_header' );
		}


	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Wbls_Theme_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

}
