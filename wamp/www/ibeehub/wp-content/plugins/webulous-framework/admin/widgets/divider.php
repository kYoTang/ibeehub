<?php

/**
 * Divider Widget
 */

class Wbls_Divider_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'divider-widget', // Base ID
			__('Divider', 'webulous-framework'), // Name
			array( 'description' => __( 'Divider Widget to divider floats', 'webulous-framework' ), ) // Args
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
		$instance = wp_parse_args( $instance, array(
			'style' => 'default',
		) );
		echo $args['before_widget'];

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
			'style' => 'default',
		) );
	?>
		<p>
		<label for="<?php echo $this->get_field_id( 'style' ); ?>"><?php _e( 'Divider Style:','webulous-framework' ); ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id('style') ?>" name="<?php echo $this->get_field_name('style') ?>" value="<?php echo esc_attr($instance['style']) ?>">
				<option value="default" <?php selected($instance['style'], 'default') ?>><?php _e( 'Default','webulous-framework' ); ?></option>
				<option value="solid" <?php selected($instance['style'], 'solid') ?>><?php _e( 'Solid','webulous-framework' ); ?></option>
				<option value="dotted" <?php selected($instance['style'], 'dotted') ?>><?php _e( 'Dotted','webulous-framework' ); ?></option>
				<option value="dashed" <?php selected($instance['style'], 'dashed') ?>><?php _e( 'Dashed','webulous-framework' ); ?></option>
				<option value="shadow" <?php selected($instance['style'], 'shadow') ?>><?php _e( 'Shadow','webulous-framework' ); ?></option>
				<option value="fancy" <?php selected($instance['style'], 'fancy') ?>><?php _e( 'Fancy','webulous-framework' ); ?></option>
				<option value="fancy2" <?php selected($instance['style'], 'fancy2') ?>><?php _e( 'Fancy2','webulous-framework' ); ?></option>
			</select>
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

} // class Foo_Widget