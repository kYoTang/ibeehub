<?php
/**
 * Simple Widget that displays a single image
 */

class Wbls_Image_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wbls-image-widget',
			__( 'Image', 'webulous-framework' ),
			array(
				'description' => __( 'Displays a single image.', 'webulous-framework' ),    
			)
		);
	}

	function widget( $args, $instance ) {
		echo $args['before_widget'];

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	function form( $instance ) {
		$instance = wp_parse_args($instance, array(
			'src' => '',
			'href' => '',
		));

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'src' ) ?>"><?php _e( 'Image URL', 'webulous-framework' ) ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'src' ) ?>" name="<?php echo $this->get_field_name( 'src' ) ?>" value="<?php echo esc_attr($instance['src']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'href' ) ?>"><?php _e( 'Destination URL', 'webulous-framework' ) ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'href' ) ?>" name="<?php echo $this->get_field_name( 'href' ) ?>" value="<?php echo esc_attr($instance['href']) ?>" />
		</p>
	<?php
	}

	function update($new, $old){
		$new = wp_parse_args($new, array(
			'src' => '',
			'href' => '',
		));
		return $new;
	}
}
