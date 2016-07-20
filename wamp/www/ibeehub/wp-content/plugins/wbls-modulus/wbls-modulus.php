<?php
/*
Plugin Name: Webulous Modulus Pro
Plugin URI: https://www.webulousthemes.com/
Description: This plugin converts Modulus free theme into Pro and adds lots of Pro features.
Version: 1.1.2
Author: N. Venkat Raj
Author URI: https://www.webulousthemes.com
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl.html
Text Domain: wbls-modulus
*/

// If this file is called directly, abort.
	if ( ! defined( 'WPINC' ) ) {
		die;
	}

	if ( ! defined( 'WBLS_THEME_DIR' ) ) {
		define( 'WBLS_THEME_DIR', plugin_dir_path( __FILE__ ) );
	}

	if ( ! defined( 'WBLS_THEME_URI' ) ) {
		define( 'WBLS_THEME_URI', plugin_dir_url( __FILE__ ) );
	}

	/**
	 * The code that runs during plugin activation.
	 * This action is documented in includes/class-wbls-theme-activator.php
	 */
	function activate_wbls_theme() {
		require_once WBLS_THEME_DIR . 'includes/class-wbls-theme-activator.php';
		Wbls_Theme_Activator::activate();
	}

	/**
	 * The code that runs during plugin deactivation.
	 * This action is documented in includes/class-wbls-theme-deactivator.php
	 */
	function deactivate_wbls_theme() {
		require_once WBLS_THEME_DIR . 'includes/class-wbls-theme-deactivator.php';
		Wbls_Theme_Deactivator::deactivate();
	}

	register_activation_hook( __FILE__, 'activate_wbls_theme' );
	register_deactivation_hook( __FILE__, 'deactivate_wbls_theme' );

	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	require WBLS_THEME_DIR . 'includes/class-wbls-theme.php';

	/**
	 * Begins execution of the plugin.
	 *
	 * Since everything within the plugin is registered via hooks,
	 * then kicking off the plugin from this point in the file does
	 * not affect the page life cycle.
	 *
	 * @since    1.0.0
	 */
	function run_wbls_modulus() {

		$plugin = new Wbls_Theme( 'wbls-modulus', '1.1.2' );
		$plugin->run();

	}

	run_wbls_modulus();

	// this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define( 'WBLS_THEME_SHOP_URL', 'http://webulousthemes.com/' ); // you should use your own CONSTANT name, and be sure to replace it throughout this file

// the name of your product. This should match the download name in EDD exactly
define( 'WBLS_ITEM_NAME', 'Modulus Pro' ); // you should use your own CONSTANT name, and be sure to replace it throughout this file

function wbls_modulus_plugin_updater() {

	// retrieve our license key from the DB
	$license_key = trim( get_option( 'wbls_modulus_license_key' ) );

	// setup the updater
	$edd_updater = new EDD_SL_Plugin_Updater( WBLS_THEME_SHOP_URL, __FILE__, array(
			'version' 	=> '1.1.2', 				// current version number
			'license' 	=> $license_key, 		// license key (used get_option above to retrieve from DB)
			'item_name' => WBLS_ITEM_NAME, 	// name of this plugin
			'author' 	=> 'N. Venkat Raj'  // author of this plugin
		)
	);

}
add_action( 'admin_init', 'wbls_modulus_plugin_updater', 0 );


/************************************
* the code below is just a standard
* options page. Substitute with
* your own.
*************************************/

function wbls_modulus_license_menu() {
	add_plugins_page( 'Plugin License', 'Plugin License', 'manage_options', 'pluginname-license', 'wbls_modulus_license_page' );
}
add_action('admin_menu', 'wbls_modulus_license_menu');

function wbls_modulus_license_page() {
	$license 	= get_option( 'wbls_modulus_license_key' );
	$status 	= get_option( 'wbls_modulus_license_status' );
	?>
	<div class="wrap">
		<h2><?php _e('Plugin License Options'); ?></h2>
		<form method="post" action="options.php">

			<?php settings_fields('wbls_modulus_license'); ?>

			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row" valign="top">
							<?php _e('License Key'); ?>
						</th>
						<td>
							<input id="wbls_modulus_license_key" name="wbls_modulus_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $license ); ?>" />
							<label class="description" for="wbls_modulus_license_key"><?php _e('Enter your license key'); ?></label>
						</td>
					</tr>
					<?php if( false !== $license ) { ?>
						<tr valign="top">
							<th scope="row" valign="top">
								<?php _e('Activate License'); ?>
							</th>
							<td>
								<?php if( $status !== false && $status == 'valid' ) { ?>
									<span style="color:green;"><?php _e('active'); ?></span>
									<?php wp_nonce_field( 'wbls_modulus_nonce', 'wbls_modulus_nonce' ); ?>
									<input type="submit" class="button-secondary" name="edd_license_deactivate" value="<?php _e('Deactivate License'); ?>"/>
								<?php } else {
									wp_nonce_field( 'wbls_modulus_nonce', 'wbls_modulus_nonce' ); ?>
									<input type="submit" class="button-secondary" name="edd_license_activate" value="<?php _e('Activate License'); ?>"/>
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php submit_button(); ?>

		</form>
	<?php
}

function wbls_modulus_register_option() {
	// creates our settings in the options table
	register_setting('wbls_modulus_license', 'wbls_modulus_license_key', 'edd_sanitize_license' );
}
add_action('admin_init', 'wbls_modulus_register_option');

function edd_sanitize_license( $new ) {
	$old = get_option( 'wbls_modulus_license_key' );
	if( $old && $old != $new ) {
		delete_option( 'wbls_modulus_license_status' ); // new license has been entered, so must reactivate
	}
	return $new;
}



/************************************
* this illustrates how to activate
* a license key
*************************************/

function wbls_modulus_activate_license() {

	// listen for our activate button to be clicked
	if( isset( $_POST['edd_license_activate'] ) ) {

		// run a quick security check
	 	if( ! check_admin_referer( 'wbls_modulus_nonce', 'wbls_modulus_nonce' ) )
			return; // get out if we didn't click the Activate button

		// retrieve the license from the database
		$license = trim( get_option( 'wbls_modulus_license_key' ) );


		// data to send in our API request
		$api_params = array(
			'edd_action'=> 'activate_license',
			'license' 	=> $license,
			'item_name' => urlencode( WBLS_ITEM_NAME ), // the name of our product in EDD
			'url'       => home_url()
		);

		// Call the custom API.
		$response = wp_remote_post( WBLS_THEME_SHOP_URL, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

		// make sure the response came back okay
		if ( is_wp_error( $response ) )
			return false;

		// decode the license data
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		// $license_data->license will be either "valid" or "invalid"

		update_option( 'wbls_modulus_license_status', $license_data->license );

	}
}
add_action('admin_init', 'wbls_modulus_activate_license');


/***********************************************
* Illustrates how to deactivate a license key.
* This will descrease the site count
***********************************************/

function wbls_modulus_deactivate_license() {

	// listen for our activate button to be clicked
	if( isset( $_POST['edd_license_deactivate'] ) ) {

		// run a quick security check
	 	if( ! check_admin_referer( 'wbls_modulus_nonce', 'wbls_modulus_nonce' ) )
			return; // get out if we didn't click the Activate button

		// retrieve the license from the database
		$license = trim( get_option( 'wbls_modulus_license_key' ) );


		// data to send in our API request
		$api_params = array(
			'edd_action'=> 'deactivate_license',
			'license' 	=> $license,
			'item_name' => urlencode( WBLS_ITEM_NAME ), // the name of our product in EDD
			'url'       => home_url()
		);

		// Call the custom API.
		$response = wp_remote_post( WBLS_THEME_SHOP_URL, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

		// make sure the response came back okay
		if ( is_wp_error( $response ) )
			return false;

		// decode the license data
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		// $license_data->license will be either "deactivated" or "failed"
		if( $license_data->license == 'deactivated' )
			delete_option( 'wbls_modulus_license_status' );

	}
}
add_action('admin_init', 'wbls_modulus_deactivate_license');


/************************************
* this illustrates how to check if
* a license key is still valid
* the updater does this for you,
* so this is only needed if you
* want to do something custom
*************************************/

function wbls_modulus_check_license() {

	global $wp_version;

	$license = trim( get_option( 'wbls_modulus_license_key' ) );

	$api_params = array(
		'edd_action' => 'check_license',
		'license' => $license,
		'item_name' => urlencode( WBLS_ITEM_NAME ),
		'url'       => home_url()
	);

	// Call the custom API.
	$response = wp_remote_post( WBLS_THEME_SHOP_URL, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

	if ( is_wp_error( $response ) )
		return false;

	$license_data = json_decode( wp_remote_retrieve_body( $response ) );

	if( $license_data->license == 'valid' ) {
		echo 'valid'; exit;
		// this license is still valid
	} else {
		echo 'invalid'; exit;
		// this license is no longer valid
	}
}