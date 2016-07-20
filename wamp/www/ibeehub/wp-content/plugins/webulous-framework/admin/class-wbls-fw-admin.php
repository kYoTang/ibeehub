<?php

	/**
	 * The admin-specific functionality of the plugin.
	 *
	 * @link       http://www.webulousthemes.com
	 * @since      1.0.0
	 *
	 * @package    Wbls_Fw
	 * @subpackage Wbls_Fw/admin
	 */

	/**
	 * The admin-specific functionality of the plugin.
	 *
	 * Defines the plugin name, version, and two examples hooks for how to
	 * enqueue the admin-specific stylesheet and JavaScript.
	 *
	 * @package    Wbls_Fw
	 * @subpackage Wbls_Fw/admin
	 * @author     N. Venkat Raj <venkat@webulous.in>
	 */
	class Wbls_Fw_Admin {

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
		 * Widgets used in this plugin
		 *
		 * @since 1.0.0
		 *
		 * @var array $widgets
		 */
		private $widgets = array();

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
		}

		/**
		 * Register post types
		 */
		public function get_post_types() {
			$post_types = array(
				'flexslider'     => new Wbls_Fw_Flexslider(),
				'elastic_slider' => new Wbls_Fw_Elastic_Slider(),
				'faq'            => new Wbls_Fw_Faq(),
				'portfolio'      => new Wbls_Fw_Portfolio(),
				'skill'          => new Wbls_Fw_Skill(),
				'stats'          => new Wbls_Fw_Stats(),
				'testimonial'    => new Wbls_Fw_Testimonial(),
			);

			return $post_types;
		}

		/**
		 * Register Widgets
		 */
		public function register_widgets() {
			// TODO: Make an array of widgets with a filter and do this with looping
			register_widget( 'Wbls_Alert_Widget' );
			register_widget( 'Wbls_Button_Widget' );
			register_widget( 'Wbls_CircleIcon_Widget' );
			register_widget( 'Wbls_Icon_Widget' );
			register_widget( 'Wbls_Cta_Widget' );
			register_widget( 'Wbls_Divider_Widget' );
			register_widget( 'Wbls_Dropcap_Widget' );
			register_widget( 'Wbls_Gap_Widget' );
			register_widget( 'Wbls_Googlefont_Widget' );
			register_widget( 'Wbls_Heading_Widget' );
			register_widget( 'Wbls_FlexSlider_Widget' );
			register_widget( 'Wbls_Ourteam_Widget' );
			register_widget( 'Wbls_Testimonial_Widget' );
			register_widget( 'Wbls_Recent_Work_Widget' );
			register_widget( 'Wbls_Recent_Posts_Widget' );
			register_widget( 'Wbls_Skill_Widget' );
			register_widget( 'Wbls_Social_Networks_Widget' );
			register_widget( 'Wbls_SoundCloud_Widget' );
			register_widget( 'Wbls_List_Widget' );
			register_widget( 'Wbls_Image_Widget' );
			register_widget( 'Wbls_Image_Box_Widget' );
			register_widget( 'Wbls_Quote_Widget' );
			register_widget( 'Wbls_Video_Widget' );
			register_widget( 'Wbls_Stats_Widget' );
			register_widget( 'Wbls_Service_Page_Widget' );
		}

		/**
		 * Register the stylesheets for the admin area.
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
			wp_enqueue_style( 'fontawesome-iconpicker', WBLS_FW_URI . 'includes/vendor/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css' );
			wp_enqueue_style( 'select2', WBLS_FW_URI . 'includes/vendor/select2/select2.css' );

			// Uncomment this when needed
			//wp_enqueue_style( $this->plugin_name, WBLS_FW_URI . 'admin/css/admin.css', array(), $this->version, 'all' );

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
			 * defined in Wbls_Fw_Loader as all of the hooks are defined
			 * in that particular class.
			 *
			 * The Wbls_Fw_Loader will then create the relationship
			 * between the defined hooks and the functions defined in this
			 * class.
			 */

			wp_enqueue_script( 'select2', WBLS_FW_URI . 'includes/vendor/select2/select2.min.js' );
			wp_enqueue_script( 'fontawesome-iconpicker', WBLS_FW_URI . 'includes/vendor/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js', array( 'jquery' ), '1.0.0', true );

			wp_enqueue_script( $this->plugin_name, WBLS_FW_URI . 'admin/js/admin.js', array( 'jquery' ), $this->version, true );
		}

		/**
		 * Add meta boxes
		 */
		public function add_meta_boxes() {
			// TODO: May be a separate class and put code in constructor?
			$portfolio_fields = array(
				array(
					'id'         => '_wbls_portfolio_content_width',
					'name'       => 'Content',
					'type'       => 'select',
					'options'    => array(
						'full_width' => 'Full Width',
						'half_width' => 'Half Width'
					),
					'allow_none' => false
				),
				array(
					'id'         => '_wbls_portfolio_video_type',
					'name'       => 'Video Type',
					'type'       => 'select',
					'options'    => array(
						'youtube' => 'YouTube',
						'vimeo'   => 'Vimeo'
					),
					'allow_none' => true,
					'cols'       => 6,
				),
				array( 'id' => '_wbls_portfolio_video_id', 'name' => 'Video ID', 'type' => 'text', 'cols' => 6 ),
				array( 'id' => '_wbls_portfolio_project_url', 'name' => 'Project URL', 'type' => 'text', 'cols' => 6 ),
				array(
					'id'   => '_wbls_portfolio_project_link_text',
					'name' => 'Project Link Text',
					'type' => 'text',
					'cols' => 6
				),
			);

			$meta_boxes[] = array(
				'title'  => 'Project',
				'pages'  => 'portfolio',
				'fields' => $portfolio_fields
			);

			$elastic_slider_fields = array(
				array( 'id' => '_wbls_ei_caption_title1', 'name' => 'Title #1', 'type' => 'text' ),
				array( 'id' => '_wbls_ei_caption_title2', 'name' => 'Title #2', 'type' => 'text' ),
			);

			$meta_boxes[] = array(
				'title'  => 'Caption',
				'pages'  => 'elastic_slider',
				'fields' => $elastic_slider_fields
			);

			$testimonial_fields = array(
				array( 'id' => '_wbls_testimonial_client_name', 'name' => 'Client Name', 'type' => 'text' ),
				array( 'id' => '_wbls_testimonial_text', 'name' => 'Testimonial', 'type' => 'textarea' ),
				array( 'id' => '_wbls_testimonial_company_name', 'name' => 'Company Name', 'type' => 'text' ),
			);

			$meta_boxes[] = array(
				'title'  => 'Company Name',
				'pages'  => 'testimonial',
				'fields' => $testimonial_fields,
			);

			$skill_fields = array(
				array(
					'id'      => '_wbls_skill_percentage',
					'name'    => 'Percentage',
					'type'    => 'select',
					'options' => array(
						''    => 'None',
						'0'   => '0%',
						'5'   => '5%',
						'10'  => '10%',
						'15'  => '15%',
						'20'  => '20%',
						'25'  => '25%',
						'30'  => '30%',
						'35'  => '35%',
						'40'  => '40%',
						'45'  => '45%',
						'50'  => '50%',
						'55'  => '55%',
						'60'  => '60%',
						'65'  => '65%',
						'70'  => '70%',
						'75'  => '75%',
						'80'  => '80%',
						'85'  => '85%',
						'90'  => '90%',
						'95'  => '95%',
						'100' => '100%',
					),
				),
				array( 'id' => '_wbls_skill_icon', 'class' => 'faip', 'name' => 'Icon', 'type' => 'text' ),
			);

			$meta_boxes[] = array(
				'title'  => 'Skill Details',
				'pages'  => 'skill',
				'fields' => $skill_fields,
			);


			$stat_fields = array(
				array( 'id' => '_wbls_stat_number', 'name' => 'Stat', 'type' => 'text' ),
				array( 'id' => '_wbls_stat_icon', 'class' => 'faip', 'name' => 'Icon', 'type' => 'text' ),
			);

			$meta_boxes[] = array(
				'title'  => 'Stat Details',
				'pages'  => 'stats',
				'fields' => $stat_fields,
			);

			// Adding Full Width option to single posts
			$meta_boxes[] = array(
				'title'   => 'Layout Option',
				'pages'   => 'post',
				'context' => 'side',
				'fields'  => array(
					array(
						'id'   => '_wbls_full_width_post',
						'name' => 'Full Width Layout',
						'type' => 'checkbox'
					)
				),
			);

			// Adding Slider Option for Pages
			$meta_boxes[] = array(
				'title'   => 'Slider',
				'pages'   => 'page',
				'context' => 'side',
				'fields'  => array(
					array(
						'id'   => '_wbls_slider_shortcode',
						'name' => 'Slider Shortcode',
						'type' => 'text'
					)
				),
			);

			$faq_fields = array(
				array( 'id' => '_wbls_faq_icon', 'class' => 'faip', 'name' => 'Icon', 'type' => 'text', ),
				array( 'id' => '_wbls_faq_answer', 'name' => 'Answer', 'type' => 'textarea' ),
			);

			$meta_boxes[] = array(
				'title'  => 'FAQ Details',
				'pages'  => 'faq',
				'fields' => $faq_fields,
			);


			return $meta_boxes;
		}

		/**
		 * Shortcode Generator
		 */
		public function shortcode_generator() {
			$sg = new Wbls_Fw_Shortcode_Generator();
			$sg->add_meta_box();
		}

		/**
		 * TODO: May be add hook to execute full slider in full width page.
		 * TODO: Should I add javascript in fw?
		 */

		/**
		 * Checks a widget is overridden by specific theme or not
		 * @param $widget
		 *
		 * @return string
		 */
		public static function get_widget_template( $widget ) {
			$widget = basename($widget, '.php');
			if( defined( 'WBLS_THEME_DIR' ) ) {
				$widget_template = WBLS_THEME_DIR . 'admin/widgets/templates/' . $widget . '.php';
				if ( file_exists( $widget_template ) && is_file( $widget_template ) ) {
					return $widget_template;
				} else {
					$widget_template = WBLS_FW_DIR . 'admin/widgets/templates/' . $widget . '.php';
					return $widget_template;
				}
			}
		}
	}
