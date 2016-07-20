<?php
/*
Plugin Name:       Webulous Framework
Plugin URI:        http://www.webulousthemes.com
Description:       A Theme Development framework which turns wp.org free themes into premium themes.
Version:           1.0.6
Author:            N. Venkat Raj
Author URI:        http://www.webulousthemes.com
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain:       webulous-framework
Domain Path:       /languages 
*/

// If this file is called directly, abort.
	if ( ! defined( 'WPINC' ) ) {
		die("Don't be too smart!");
	}
	if ( ! defined( 'WBLS_FW_DIR' ) ) {
		define( 'WBLS_FW_DIR', plugin_dir_path( __FILE__ ) );
	}
	if ( ! defined( 'WBLS_FW_URI' ) ) {
		define( 'WBLS_FW_URI', plugin_dir_url( __FILE__ ) );
	}

	/**
	 * The code that runs during plugin activation.
	 * This action is documented in includes/class-wbls-fw-activator.php
	 */
	if( !function_exists('activate_webulous_framework') ) {
		function activate_webulous_framework() {
			require_once WBLS_FW_DIR . 'includes/class-wbls-fw-activator.php';
			Wbls_Fw_Activator::activate();
		}
    }

	/**
	 * The code that runs during plugin deactivation. 
	 * This action is documented in includes/class-wbls-fw-deactivator.php
	 */
	if( !function_exists('activate_webulous_framework') ) {
		function deactivate_webulous_framework() {
			require_once WBLS_FW_DIR . 'includes/class-wbls-fw-deactivator.php';
			Wbls_Fw_Deactivator::deactivate();
		}
    }

	register_activation_hook( __FILE__, 'activate_webulous_framework' );
	register_deactivation_hook( __FILE__, 'deactivate_webulous_framework' );

	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	require WBLS_FW_DIR . 'includes/class-wbls-fw.php';

	/**
	 * Begins execution of the plugin.
	 *
	 * Since everything within the plugin is registered via hooks,
	 * then kicking off the plugin from this point in the file does
	 * not affect the page life cycle.
	 *
	 * @since    1.0.0
	 */
	function run_webulous_framework() {

		$plugin = new Wbls_Fw('webulous-framework','1.0.6');
		$plugin->run();

	}

	run_webulous_framework();
