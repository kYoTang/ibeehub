<?php

/**
 * Our Team Widget
 */

class Wbls_Ourteam_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'ourteam-widget', // Base ID
			__('Our Team', 'webulous-framework'), // Name
			array( 'description' => __( 'Our Team Widget', 'webulous-framework' ), ) // Args
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
			'image_url' => '',
			'title' => '',
			'designation' => '',
			'linkedin' => '',
			'google' => '',
			'twitter' => '',
			'facebook' => ''
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
			'image_url' => '',
			'title' => '',
			'designation' => '',
			'linkedin' => '',
			'google' => '',
			'twitter' => '',
			'facebook' => ''
		) );
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Name of Team Member', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($instance['title']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('designation') ?>"><?php _e('Designation of Team Member', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('designation') ?>" name="<?php echo $this->get_field_name('designation') ?>" value="<?php echo esc_attr($instance['designation']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('image_url') ?>"><?php _e('Image URL of Team Member', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('image_url') ?>" name="<?php echo $this->get_field_name('image_url') ?>" value="<?php echo esc_attr($instance['image_url']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('linkedin') ?>"><?php _e('LinkedIn URL', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('linkedin') ?>" name="<?php echo $this->get_field_name('linkedin') ?>" value="<?php echo esc_attr($instance['linkedin']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('google') ?>"><?php _e('Google Plus URL', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('google') ?>" name="<?php echo $this->get_field_name('google') ?>" value="<?php echo esc_attr($instance['google']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('twitter') ?>"><?php _e('Twitter URL', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('twitter') ?>" name="<?php echo $this->get_field_name('twitter') ?>" value="<?php echo esc_attr($instance['twitter']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('facebook') ?>"><?php _e('Facebook URL', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('facebook') ?>" name="<?php echo $this->get_field_name('facebook') ?>" value="<?php echo esc_attr($instance['facebook']) ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label> 
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>"><?php echo esc_html( $instance['content'] ); ?></textarea>
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
		$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? $new_instance['content'] : '';
		$instance['image_url'] = $new_instance['image_url'];
		$instance['title'] = $new_instance['title'];
		$instance['designation'] = $new_instance['designation'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['google'] = $new_instance['google'];
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];

		return $instance;
	}

} // class Wbls_Ourteam_Widget
