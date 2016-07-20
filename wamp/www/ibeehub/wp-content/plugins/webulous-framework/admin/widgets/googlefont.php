<?php

/**
 * Googlefont Widget
 * TODO: May be implement a font picker
 */

class Wbls_Googlefont_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'googlefont-widget', // Base ID
			__('Google Font', 'webulous-framework'), // Name
			array( 'description' => __( 'Google Font Widget', 'webulous-framework' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'font_family' => 'Lato',
			'size' => '1',
			'weights' => '',
			'weight' => '',
			'content' => '',
		) );

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 * @return void
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( $instance, array(
			'font_family' => 'Lato',
			'size' => '1',
			'weights' => '',
			'weight' => '',
			'content' => '',
		) );
		?>
		<p>
			<label for="<?php echo $this->get_field_id('font_family') ?>"><?php _e('Google Font Family Name', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('font_family') ?>" name="<?php echo $this->get_field_name('font_family') ?>" value="<?php echo esc_attr($instance['font_family']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('size') ?>"><?php _e('Size (Enter w/o units, pixels will be used)', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('size') ?>" name="<?php echo $this->get_field_name('size') ?>" value="<?php echo esc_attr($instance['size']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('weights') ?>"><?php _e('Font Weight (comma separate format. ex. 400,600)', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('weights') ?>" name="<?php echo $this->get_field_name('weights') ?>" value="<?php echo esc_attr($instance['weights']) ?>" />
		</p>		
		<p>
			<label for="<?php echo $this->get_field_id('weight') ?>"><?php _e('Font Weight to use', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('weight') ?>" name="<?php echo $this->get_field_name('weight') ?>" value="<?php echo esc_attr($instance['weight']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('content') ?>"><?php _e('Content', 'webulous-framework') ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('content') ?>" name="<?php echo $this->get_field_name('content') ?>"><?php echo esc_attr($instance['content']) ?></textarea>
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Wbls_Googlefont_Widget