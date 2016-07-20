<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 26/11/15
	 * Time: 10:25 AM
	 */
	class Wbls_Fw_Plugin_Update {

		protected $api_url;
		protected $plugin_slug;
		private $name;
		private $version;


		public function __construct($name, $version, $plugin_slug = 'webulous-framework', $api_url = 'http://www.webulousthemes.com/api/') {
			$this->name = $name;
			$this->version = $version;
			$this->api_url = $api_url;
			$this->plugin_slug = $plugin_slug;
		}
		/**
		 * TEMP: Enable update check on every request.
		 * Normally you don't need this!
		 * This is for testing only!
		 * NOTE: The
		 * if (empty($checked_data->checked))
		 * 		return $checked_data;
		 * lines will need to be commented in the check_for_plugin_update function as well.
		 */
		//public function test() {
		//set_site_transient('update_plugins', null);
		//}

		/**
		 * TEMP: Show which variables are being requested when query plugin API
		 * add_filter('plugins_api_result', 'aaa_result', 10, 3);
		 */
		public function aaa_result($res, $action, $args) {
			print_r($res);
			return $res;
		}

		public function check_for_plugin_update($checked_data) {
			global $wp_version;

			//Comment out these two lines during testing.
			if (empty($checked_data->checked))
				return $checked_data;

			$args = array(
				'slug' => $this->plugin_slug,
				'version' => isset($checked_data->checked[$this->plugin_slug .'/'. $this->plugin_slug .'.php'] ) ? $checked_data->checked[$this->plugin_slug .'/'. $this->plugin_slug .'.php'] : $this->version,
			);
			$request_string = array(
				'body' => array(
					'action' => 'basic_check',
					'request' => serialize($args),
					'api-key' => md5(get_bloginfo('url'))
				),
				'user-agent' => 'WordPress/' . $wp_version . '; ' . get_bloginfo('url')
			);

			// Start checking for an update
			$raw_response = wp_remote_post($this->api_url, $request_string);

			if (!is_wp_error($raw_response) && ($raw_response['response']['code'] == 200))
				$response = unserialize($raw_response['body']);

			if (is_object($response) && !empty($response)) // Feed the update data into WP updater
				if( isset($checked_data->response) ) {
					$checked_data->response[$this->plugin_slug .'/'. $this->plugin_slug .'.php'] = $response;
				}

			return $checked_data;
		}

		public function plugin_api_call($def, $action, $args) {
			global $wp_version;

			if (!isset($args->slug) || ($args->slug != $this->plugin_slug))
				return false;

			// Get the current version
			$plugin_info = get_site_transient('update_plugins');
			$current_version = $plugin_info->checked[$this->plugin_slug .'/'. $this->plugin_slug .'.php'];
			$args->version = $current_version;

			$request_string = array(
				'body' => array(
					'action' => $action,
					'request' => serialize($args),
					'api-key' => md5(get_bloginfo('url'))
				),
				'user-agent' => 'WordPress/' . $wp_version . '; ' . get_bloginfo('url')
			);

			$request = wp_remote_post($this->api_url, $request_string);

			if (is_wp_error($request)) {
				$res = new WP_Error('plugins_api_failed', __('An Unexpected HTTP Error occurred during the API request.</p> <p><a href="?" onclick="document.location.reload(); return false;">Try again</a>'), $request->get_error_message());
			} else {
				$res = unserialize($request['body']);

				if ($res === false)
					$res = new WP_Error('plugins_api_failed', __('An unknown error occurred'), $request['body']);
			}

			return $res;
		}

	}