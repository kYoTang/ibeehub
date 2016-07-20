<?php

	/**
	 * The admin-specific functionality of the plugin.
	 *
	 * @link       http://www.webulousthemes.com/
	 * @since      1.0.0
	 *
	 * @package    Wbls_Theme
	 * @subpackage Wbls_Theme/admin
	 */

	/**
	 * The admin-specific functionality of the plugin.
	 *
	 * Defines the plugin name, version, and two examples hooks for how to
	 * enqueue the admin-specific stylesheet and JavaScript.
	 *
	 * @package    Wbls_Theme
	 * @subpackage Wbls_Theme/admin
	 * @author     N. Venkat Raj <venkat@webulous.in>
	 */
	if ( ! class_exists( 'Wbls_Theme_Admin' ) ) {
		class Wbls_Theme_Admin {

			/**
			 * The ID of this plugin.
			 *
			 * @since    1.0.0
			 * @access   private
			 * @var      string $plugin_name The ID of this plugin.
			 */
			private $plugin_name;

			/**
			 * The version of this plugin.
			 *
			 * @since    1.0.0
			 * @access   private
			 * @var      string $version The current version of this plugin.
			 */
			private $version;

			/**
			 * Initialize the class and set its properties.
			 *
			 * @since    1.0.0
			 *
			 * @param      string $plugin_name The name of this plugin.
			 * @param      string $version The version of this plugin.
			 */
			public function __construct( $plugin_name, $version ) {

				$this->plugin_name = $plugin_name;
				$this->version     = $version;
				$this->load_dependencies();

			}

			/**
			 * Load the required dependencies for admin section.
			 *
			 * Include the following files that are required for admin section:
			 *
			 * - TGM_Plugin_Activation. Notify and load required and recommended plugins
			 * - Wbls_Customizer_API_Wrapper. Wrapper class to setup customizer panels/section/settings/controls.
			 * - Wbls_Theme_Shortcode. Defines shortcodes and its functionality.
			 * - Wbls_Theme_Admin. Defines all hooks for the admin area.
			 * - Wbls_Theme_Public. Defines all hooks for the public side of the site.
			 *
			 * @since    1.0.0
			 * @access   private
			 */
			private function load_dependencies() {
				require_once WBLS_THEME_DIR . 'admin/class-tgm-plugin-activation.php';
				require_once WBLS_THEME_DIR . 'admin/class-wbls-pro-customizer.php';
				require_once WBLS_THEME_DIR . 'admin/class-wbls-theme-shortcode.php';
			}

			/**
			 * Remove theme upgrade page
			 */
			public function remove_upgrade() {
				remove_submenu_page('themes.php', 'modulus_upgrade');
			}

			 /* Register the stylesheets for the admin area.
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

				wp_enqueue_style( $this->plugin_name, WBLS_THEME_URI . 'admin/css/admin.css', array(), $this->version, 'all' );

			}

			/**
			 * Register the JavaScript for the admin area.
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

				wp_enqueue_script( $this->plugin_name, WBLS_THEME_URI . 'admin/js/admin.js', array( 'jquery' ), $this->version, false );

			}

			/**
			 * Register Required and Recommended Plugins
			 */
			public function register_plugins() {
				/**
				 * Array of plugin arrays. Required keys are name and slug.
				 * If the source is NOT from the .org repo, then source is also required.
				 */
				$plugins = array(

					array(
						'name'     => 'SiteOrigin Panels', // The plugin name.
						'slug'     => 'siteorigin-panels', // The plugin slug (typically the folder name).
						'required' => true, // If false, the plugin is only 'recommended' instead of required.
					),
					
					array(
					    'name'               => 'Contact Form 7', // The plugin name.
					    'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
					    'required'           => true, // If false, the plugin is only 'recommended' instead of required.
					),

					array(
						'name'               => 'Webulous Framework',
						'slug'               => 'webulous-framework',
						'source'             => 'http://webulousthemes.com/wp-content/uploads/source/webulous-framework.zip',
						'required'           => true,
					),
				);


				/*
				 * Array of configuration settings. Amend each line as needed.
				 *
				 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
				 * strings available, please help us make TGMPA even better by giving us access to these translations or by
				 * sending in a pull-request with .po file(s) with the translations.
				 *
				 * Only uncomment the strings in the config array if you want to customize the strings.
				 */
				$config = array(
					'id'           => 'tgmpa',
					// Unique ID for hashing notices for multiple instances of TGMPA.
					'default_path' => '',
					// Default absolute path to bundled plugins.
					'menu'         => 'tgmpa-install-plugins',
					// Menu slug.
					'parent_slug'  => 'themes.php',
					// Parent menu slug.
					'capability'   => 'edit_theme_options',
					// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
					'has_notices'  => true,
					// Show admin notices or not.
					'dismissable'  => true,
					// If false, a user cannot dismiss the nag message.
					'dismiss_msg'  => '',
					// If 'dismissable' is false, this message will be output at top of nag.
					'is_automatic' => false,
					// Automatically activate plugins after installation or not.
					'message'      => '',
					// Message to output right before the plugins table.

					/*
					'strings'      => array(
						'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
						'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
						'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ), // %s = plugin name.
						'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
						'notice_can_install_required'     => _n_noop(
							'This theme requires the following plugin: %1$s.',
							'This theme requires the following plugins: %1$s.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_can_install_recommended'  => _n_noop(
							'This theme recommends the following plugin: %1$s.',
							'This theme recommends the following plugins: %1$s.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_cannot_install'           => _n_noop(
							'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
							'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_ask_to_update'            => _n_noop(
							'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
							'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_ask_to_update_maybe'      => _n_noop(
							'There is an update available for: %1$s.',
							'There are updates available for the following plugins: %1$s.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_cannot_update'            => _n_noop(
							'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
							'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_can_activate_required'    => _n_noop(
							'The following required plugin is currently inactive: %1$s.',
							'The following required plugins are currently inactive: %1$s.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_can_activate_recommended' => _n_noop(
							'The following recommended plugin is currently inactive: %1$s.',
							'The following recommended plugins are currently inactive: %1$s.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'notice_cannot_activate'          => _n_noop(
							'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
							'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
							'theme-slug'
						), // %1$s = plugin name(s).
						'install_link'                    => _n_noop(
							'Begin installing plugin',
							'Begin installing plugins',
							'theme-slug'
						),
						'update_link' 					  => _n_noop(
							'Begin updating plugin',
							'Begin updating plugins',
							'theme-slug'
						),
						'activate_link'                   => _n_noop(
							'Begin activating plugin',
							'Begin activating plugins',
							'theme-slug'
						),
						'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
						'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
						'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme-slug' ),
						'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme-slug' ),  // %1$s = plugin name(s).
						'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme-slug' ),  // %1$s = plugin name(s).
						'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme-slug' ), // %s = dashboard link.
						'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'tgmpa' ),

						'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
					),
					*/
				);

				tgmpa( $plugins, $config );
			}

			public static function is_valid() {
				return (bool)get_option('valid_license');
			}

			public static function check_license() {
				$license_key = get_option('wbls_theme_license_key');

				$api_params = array(
						'slm_action' => 'slm_check',
						'secret_key' => WBLS_LICENSED_PLUGIN_SECRET_KEY,
						'license_key' => $license_key,
				);

				$query = esc_url_raw(add_query_arg($api_params, WBLS_LICENSE_SERVER_URL));
				$response = wp_remote_get($query, array('timeout' => 20, 'sslverify' => false));

				// Check for error in the response
				if (is_wp_error($response)){
					echo "Unexpected Error! The query returned with an error.";
				}

				$license_data = json_decode(wp_remote_retrieve_body($response));

				if( isset( $license_data->status ) && $license_data->status == 'active' ) {
					update_option('valid_license', 1);
				} else {
					update_option('valid_license', 0);
				}
			}

			/**
			 * Admin Notices
			 */
			public function notices(){
				$output = '';
				$output .= '<div class="update-nag theme-activation">';
				$output .= 'Please <a href="' . menu_page_url( $this->plugin_name . '/admin/class_wbls_theme_license.php', false ) . '"><strong>Activate Pro Theme</strong></a> to receive updates and other benefits';
				$output .= '</div>';

				echo $output;
			}

		}
	}
