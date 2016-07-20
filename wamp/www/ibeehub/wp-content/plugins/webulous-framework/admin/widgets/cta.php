<?php

/**
 * Cta Widget
 */

class Wbls_Cta_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'cta-widget', // Base ID
			__('Cta', 'webulous-framework'), // Name
			array( 'description' => __( 'Cta Widget', 'webulous-framework' ), ) // Args
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
			'content' => '',
			'title' => '',
			'url' => '',
			'anchor_text' => ''
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
			'content' => '',
			'title' => '',
			'url' => '',
			'anchor_text' => ''
		) );
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($instance['title']) ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label> 
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>"><?php echo esc_html( $instance['content'] ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('anchor_text') ?>"><?php _e('Button Text', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('anchor_text') ?>" name="<?php echo $this->get_field_name('anchor_text') ?>" value="<?php echo esc_attr($instance['anchor_text']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('url') ?>"><?php _e('CTA URL', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" value="<?php echo esc_attr($instance['url']) ?>" />
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
		$instance = array();
		$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
		$instance['title'] = $new_instance['title'];
		$instance['url'] = $new_instance['url'];
		$instance['anchor_text'] = $new_instance['anchor_text'];

		return $instance;
	}

} // class Foo_Widget