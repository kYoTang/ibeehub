<?php
/**
 * Video Widget.
 *
 * @package Wbls
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_Video_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'video-widget', // Base ID
			__('Video', 'webulous-framework'), // Name
			array( 'description' => __( 'Video Widget', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'type' => 'youtube',
			'video_id' => '',
			'width' => '',
			'height' => '',
		) );

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	/**
	 * Display the circle icon widget form.
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {

		$instance = wp_parse_args( $instance, array(
			'type' => 'youtube',
			'video_id' => '',
			'width' => '',
			'height' => '',
		) );

		?>
		<p>
			<label for="<?php echo $this->get_field_id('video_id') ?>"><?php _e('Video ID', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('video_id') ?>" name="<?php echo $this->get_field_name('video_id') ?>" value="<?php echo esc_attr($instance['video_id']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('width') ?>"><?php _e('Width (Numerals only)', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('width') ?>" name="<?php echo $this->get_field_name('width') ?>" value="<?php echo esc_attr($instance['width']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('height') ?>"><?php _e('Height (Numerals Only)', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('height') ?>" name="<?php echo $this->get_field_name('height') ?>" value="<?php echo esc_attr($instance['height']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('type') ?>"><?php _e('Show Comments', 'webulous-framework') ?></label>
			<select id="<?php echo $this->get_field_id('type') ?>" name="<?php echo $this->get_field_name('type') ?>">
				<option value="youtube" <?php selected('youtube', $instance['type']) ?>><?php esc_html_e('YouTube', 'webulous-framework') ?></option>
				<option value="Vimeo" <?php selected('Vimeo', $instance['type']) ?>><?php esc_html_e('Vimeo', 'webulous-framework') ?></option>
			</select>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}
