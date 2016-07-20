<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://www.webulousthemes.com
 * @since      1.0.0
 *
 * @package    Wbls_Fw
 * @subpackage Wbls_Fw/includes
 */

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
 * @package    Wbls_Fw
 * @subpackage Wbls_Fw/includes
 * @author     N. Venkat Raj <venkat@webulous.in>
 */
class Wbls_Fw {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Wbls_Fw_Loader    $loader    Maintains and registers all hooks for the plugin.
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
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 *
	 * @param $name string plugin name
	 * @param $version string plugin version
	 *
	 */
	public function __construct($name = 'webulous-framework', $version = '1.0.0') {

		$this->plugin_name = $name;
		$this->version = $version;

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
	 * - Wbls_Fw_Loader. Orchestrates the hooks of the plugin.
	 * - Wbls_Fw_i18n. Defines internationalization functionality.
	 * - Wbls_Fw_Admin. Defines all hooks for the admin area.
	 * - Wbls_Fw_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once WBLS_FW_DIR . 'includes/class-wbls-fw-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once WBLS_FW_DIR . 'includes/class-wbls-fw-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once WBLS_FW_DIR . 'admin/class-wbls-fw-admin.php';

		/**
		 * Other Admin related files
		 */
		require_once WBLS_FW_DIR . 'admin/post-types.php';
		require_once WBLS_FW_DIR . 'admin/widgets.php';
		require_once WBLS_FW_DIR . 'admin/class-wbls-fw-sidebar-generator.php';
		require_once WBLS_FW_DIR . 'admin/class-wbls-fw-shortcode-generator.php';
		require_once WBLS_FW_DIR . 'admin/class-wbls-fw-shortcode.php';
		require_once WBLS_FW_DIR . 'admin/class-wbls-fw-plugin-update.php';
		if ( ! class_exists( 'CMB_Meta_Box' ) ) {
		    require_once WBLS_FW_DIR . 'includes/vendor/custom-meta-boxes/custom-meta-boxes.php';
        }
		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once WBLS_FW_DIR . 'public/class-wbls-fw-public.php';
		require_once WBLS_FW_DIR . 'public/class-wbls-fw-page-template-loader.php';
		require_once WBLS_FW_DIR . 'public/template-tags.php';

		$this->loader = Wbls_Fw_Loader::getInstance();
		Wbls_Fw_Sidebar_Generator::getInstance();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Wbls_Fw_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Wbls_Fw_i18n();
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


		$plugin_admin = new Wbls_Fw_Admin( $this->get_plugin_name(), $this->get_version() );

		/**
		 * TODO: Write hooks as per WP flow
		 */
		$post_types = $plugin_admin->get_post_types();
		foreach ($post_types as $post_type => $post_type_object ) {
			$this->loader->add_action( 'init', $post_type_object, 'register' );

			if( method_exists($post_type_object, 'posts_columns')) {
					$this->loader->add_filter( "manage_{$post_type}_posts_columns", $post_type_object, 'posts_columns' );
			}
			if ( method_exists($post_type_object, 'custom_columns') ) {
				$this->loader->add_action( "manage_{$post_type}_posts_custom_column", $post_type_object, 'custom_columns', 100, 2 );
			}
		}

		$this->loader->add_filter( 'cmb_meta_boxes', $plugin_admin, 'add_meta_boxes' );
		$this->loader->add_action( 'add_meta_boxes', $plugin_admin, 'shortcode_generator' );

		$this->loader->add_action( 'widgets_init', $plugin_admin, 'register_widgets' );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		// TODO: Put packages array before enabling this
		$update = new Wbls_Fw_Plugin_Update($this->get_plugin_name(), $this->get_version());

		// Take over the update check
		$this->loader->add_filter( 'pre_set_site_transient_update_plugins', $update, 'check_for_plugin_update'  );
		// Take over the Plugin info screen
		$this->loader->add_filter( 'plugins_api', $update, 'plugin_api_call', 10, 3 );

		$shortcode = new Wbls_Fw_Shortcode();
		add_filter( 'widget_text', 'do_shortcode' );

		$page_template = new Wbls_Fw_Page_Template_Loader();
		// Add a filter to the page attributes metabox to inject our template into the page template cache.
		$this->loader->add_filter('page_attributes_dropdown_pages_args', $page_template, 'register_project_templates' );

		// Add a filter to the save post in order to inject out template into the page cache
		$this->loader->add_filter('wp_insert_post_data', $page_template, 'register_project_templates' );

		// Add a filter to the template include in order to determine if the page has our template assigned and return it's path
		$this->loader->add_filter('template_include', $page_template, 'view_project_template' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Wbls_Fw_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		//$this->loader->add_action( 'wp_head', $plugin_public, 'custom_styles', 100 );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		//$this->loader->add_action( 'wp_footer', $plugin_public, 'custom_theme_options_js', 100 );
		add_action( 'wbls_fw_portfolio_breadcrumbs', 'wbls_fw_portfolio_breadcrumbs' );


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
	 * @return    Wbls_Fw_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
