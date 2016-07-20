<?php
/**
 * Recent Posts Widget.
 *
 * @package Abaris Pro
 * @since 1.3
 * @license GPL 2.0
 */

class Wbls_Recent_Posts_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'recent-posts-widget', // Base ID
			__('Recent Posts', 'webulous-framework'), // Name
			array( 'description' => __( 'Displays Recent Posts as Slider, Carousel, etc', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {           
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];

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
			'title' => __( 'Recent Posts', 'webulous-framework' ),
			'count' => get_option('posts_per_page'),
			'type'	=> 'normal',
		) );

	?>
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'wbls-widgets-bundle') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($instance['title']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('count') ?>"><?php _e('No. of Recent Posts', 'wbls-widgets-bundle') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('count') ?>" name="<?php echo $this->get_field_name('count') ?>" value="<?php echo esc_attr($instance['count']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('type') ?>"><?php _e('Display Type', 'wbls-widgets-bundle') ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id('type') ?>" name="<?php echo $this->get_field_name('type') ?>">
				<option value="normal" <?php selected( $instance['type'], 'normal'); ?>>Normal</option>
				<option value="carousel" <?php selected( $instance['type'], 'carousel'); ?>>Carousel</option>
				<option value="slider" <?php selected( $instance['type'], 'slider') ?>>Slider</option>
			</select>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
		$instance['type'] = ( ! empty( $new_instance['type'] ) ) ? strip_tags( $new_instance['type'] ) : '';
		
		return $instance;
	}
}
