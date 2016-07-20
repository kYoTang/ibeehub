<?php
/**
 * Flex Slider Widget.
 *
 * @package Webulous
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_FlexSlider_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'flexslider-widget', // Base ID              
			__('Flex Slider', 'webulous-framework'), // Name
			array( 'description' => __( 'Displays Flexslider', 'webulous-framework' ), ) // Args
		);
	}        

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(         
			'slider' => '',
			'type' => 'slider',
		) );

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	/**
	 * Display the flexslider widget form.
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {

		$instance = wp_parse_args( $instance, array(
			'slider' => '',
			'type' => 'slider',
		) );
		?>

		<p>
			<label for="<?php echo $this->get_field_id('slider'); ?>"><?php _e('Slider', 'webulous-framework'); ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id('slider'); ?>" name="<?php echo $this->get_field_name('slider'); ?>" value="<?php echo esc_attr($instance['slider']); ?>">
				<?php
					$term_list = get_terms( 'flexslider_group' ); ///wp_get_post_terms(0, 'flexslider_group', array("fields" => "ids"));
					foreach($term_list as $term) : ?>
					<option value="<?php esc_attr_e($term->slug); ?>" <?php selected($instance['slider'], $term->slug) ?>><?php esc_html_e($term->name, 'webulous-framework'); ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('type') ?>"><?php _e('Type', 'webulous-framework') ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id('type') ?>" name="<?php echo $this->get_field_name('type') ?>" value="<?php echo esc_attr($instance['type']) ?>">
				<option value="<?php esc_attr_e('slider'); ?>" <?php selected($instance['type'], 'slider') ?>><?php esc_html_e('Slider', 'webulous-framework'); ?></option>
				<option value="<?php esc_attr_e('carousel'); ?>" <?php selected($instance['type'], 'carousel') ?>><?php esc_html_e('Carousel', 'webulous-framework'); ?></option>
			</select>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['slider'] = $new_instance['slider'];
		$instance['type'] = $new_instance['type'];
		return $instance;
	}
}
