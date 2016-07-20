<?php

if( ! class_exists( 'Wbls_Font_Manager' ) ) {
	class Wbls_Font_Manager {
		protected $standard_fonts;

		protected $google_fonts;

		public function __construct() {
			# code...
		}

		public function get_fonts() {
			$this->get_standard_fonts();
			$this->get_google_fonts();
		}

		public function get_standard_fonts() {
			$this->standard_fonts = apply_filters('wbls_customizer_std_fonts', array(
				'Serif' => 'Georgia,Times,"Times New Roman",serif',
				'Sans serif' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
				'Monospace' => 'Monaco,"Lucida Sans Typewriter","Lucida Typewriter","Courier New",Courier,monospace',
			));

			return $this->standard_fonts;
		}

		public function get_google_fonts() {
			$fonts = json_decode( file_get_contents( plugin_dir_path( dirname( __FILE__ ) ) .  '/includes/fonts/webfonts.json'), true);
			$google_fonts = array();

			foreach ($fonts['items'] as $font) {
				$google_fonts[$font['family']] = $font['family'];
			}
			$this->google_fonts = $google_fonts;
			return $this->google_fonts;
		}
	}
}		