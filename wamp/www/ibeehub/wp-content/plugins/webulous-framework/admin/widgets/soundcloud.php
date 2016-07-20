<?php
/**
 * Sound Cloud Widget.
 *
 * @package Wbls
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_SoundCloud_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'soundcloud-widget', // Base ID
			__('Sound Cloud', 'webulous-framework'), // Name
			array( 'description' => __( 'Sound Cloud Widget', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'url' => '',
			'width' => '870',
			'height' => '150',
			'comments' => 0,
			'auto_play' => 0,
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
			'url' => '',
			'width' => '870',
			'height' => '150',
			'comments' => 0,
			'auto_play' => 0,
		) );

		?>
		<p>
			<label for="<?php echo $this->get_field_id('url') ?>"><?php _e('Sound Cloud URL', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" value="<?php echo esc_attr($instance['url']) ?>" />
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
			<label for="<?php echo $this->get_field_id('comments') ?>"><?php _e('Show Comments', 'webulous-framework') ?></label>
			<select id="<?php echo $this->get_field_id('comments') ?>" name="<?php echo $this->get_field_name('comments') ?>">
				<option value="1" <?php selected('1', $instance['comments']) ?>><?php esc_html_e('Yes', 'webulous-framework') ?></option>
				<option value="0" <?php selected('0', $instance['comments']) ?>><?php esc_html_e('No', 'webulous-framework') ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('auto_play') ?>"><?php _e('Auto Play', 'webulous-framework') ?></label>
			<select id="<?php echo $this->get_field_id('auto_play') ?>" name="<?php echo $this->get_field_name('auto_play') ?>">
				<option value="1" <?php selected('1', $instance['auto_play']) ?>><?php esc_html_e('Yes', 'webulous-framework') ?></option>
				<option value="0" <?php selected('0', $instance['auto_play']) ?>><?php esc_html_e('No', 'webulous-framework') ?></option>
			</select>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}
