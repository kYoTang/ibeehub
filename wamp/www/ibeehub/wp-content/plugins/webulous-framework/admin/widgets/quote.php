<?php
/**
 * Quote Widget.
 *
 * @package Wbls
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_Quote_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'quote-widget', // Base ID
			__('Quote', 'webulous-framework'), // Name
			array( 'description' => __( 'Quote Widget', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {    
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'align' => 'none',
			'quote' => '',
			'content' => '',
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
			'align' => 'none',
			'quote' => '',
			'content' => '',
		) );

		?>
		<p>
			<label for="<?php echo $this->get_field_id('align') ?>"><?php _e('Alignment of Pull Quote', 'webulous-framework') ?></label>
			<select id="<?php echo $this->get_field_id('align') ?>" name="<?php echo $this->get_field_name('align') ?>">
				<option value="none" <?php selected('none', $instance['align']) ?>><?php esc_html_e('None', 'webulous-framework') ?></option>
				<option value="left" <?php selected('left', $instance['align']) ?>><?php esc_html_e('Left', 'webulous-framework') ?></option>
				<option value="right" <?php selected('right', $instance['align']) ?>><?php esc_html_e('Right', 'webulous-framework') ?></option>

			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('quote') ?>"><?php _e('Quote Content', 'webulous-framework') ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('quote') ?>" name="<?php echo $this->get_field_name('quote') ?>"><?php echo esc_html($instance['quote']) ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('content') ?>"><?php _e('Content', 'webulous-framework') ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('content') ?>" name="<?php echo $this->get_field_name('content') ?>"><?php echo esc_html($instance['content']) ?></textarea>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}
