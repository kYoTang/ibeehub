<?php
/**
 * Social Networks Widget.
 *
 * @package Wbls
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_Social_Networks_Widget extends WP_Widget {     

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'social-networks-widget', // Base ID
			__('Social Networks', 'webulous-framework'), // Name
			array( 'description' => __( 'Displays social networks', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		
		$instance = wp_parse_args( $instance, array(
			'title' => __('Social Networks', 'webulous-framework'),
		) );

		echo $args['before_widget'];

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	/**
	 * Display the skill widget form.
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( $instance, array(
			'title' => __('Social Networks', 'webulous-framework'),
		) );
		?>

		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($instance['title']) ?>" />
		</p>
		<p><?php _e( 'Enter your social network URLs using Theme Options Panel','webulous-framework' ); ?></p>

	<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}
