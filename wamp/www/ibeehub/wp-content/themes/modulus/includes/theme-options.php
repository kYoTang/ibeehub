<?php
require_once get_template_directory() . '/includes/options-config.php';
	if( ! class_exists('Wbls_Customizer_API_Wrapper') ) {
			require_once get_template_directory() . '/admin/class.wbls-customizer-api-wrapper.php';
	}

add_action( 'admin_enqueue_scripts', 'modulus_common_admin_enqueue_scripts' );
	function modulus_common_admin_enqueue_scripts( ) {
		wp_enqueue_style(  
			'modulus-cutomizer-common-css', 
			get_template_directory_uri() . '/admin/css/customizer-common-css.css', 
			array(), 
			'1.0.0', 
			'all' 
		);
		wp_enqueue_script( 
			'customizer-common-js', 
			get_template_directory_uri() . '/admin/js/customizer-common-js.js',
			array('jquery'),
			'1.0.0',
			true
		);
    }

	//echo '<pre>', print_r($options), '</pre>';

Wbls_Customizer_API_Wrapper::getInstance($options);
