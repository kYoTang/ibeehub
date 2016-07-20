<?php

/**
 * Dropcap Widget
 */

class Wbls_Dropcap_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'dropcap-widget', // Base ID
			__('Dropcap', 'webulous-framework'), // Name
			array( 'description' => __( 'Dropcap Widget', 'webulous-framework' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 * @return void
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'style' => 'default',
			'content' => ''
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
			'style' => 'default',
			'content' => ''
		) );
		?>
		<p>
			<label for="<?php echo $this->get_field_id('style') ?>"><?php _e('Dropcap style', 'webulous-framework') ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id('style') ?>" name="<?php echo $this->get_field_name('style') ?>" value="<?php echo esc_attr($instance['style']) ?>">
				<option value="default" <?php selected($instance['style'], 'default') ?>><?php _e( 'Default','webulous-framework' ); ?></option>
				<option value="circle" <?php selected($instance['style'], 'circle') ?>><?php _e( 'Circle','webulous-framework' ); ?></option>
				<option value="box" <?php selected($instance['style'], 'box') ?>><?php _e( 'Box','webulous-framework' ); ?></option>
				<option value="book" <?php selected($instance['style'], 'book') ?>><?php _e( 'Book','webulous-framework' ); ?></option>				
			</select>
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

} // class Foo_Widget