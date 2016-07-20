<?php
/**
 * Testimonial Widget.
 *
 * @package Wbls
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_Testimonial_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'testimonial-widget', // Base ID
			__('Testimonial', 'webulous-framework'), // Name
			array( 'description' => __( 'Displays Testimonials', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'title' =>  __( 'Testimonials', 'webulous-framework' ),
			'count' => 5,
		) );

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	/**
	 * Display the flexcount widget form.
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {

		$instance = wp_parse_args( $instance, array(
			'title' =>  __( 'Testimonials', 'webulous-framework' ),
			'count' => 5,
		) );

	?>

		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($instance['title']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('count') ?>"><?php _e('No. of Testimonials', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('count') ?>" name="<?php echo $this->get_field_name('count') ?>" value="<?php echo esc_attr($instance['count']) ?>" />
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
		return $instance;
	}
}
