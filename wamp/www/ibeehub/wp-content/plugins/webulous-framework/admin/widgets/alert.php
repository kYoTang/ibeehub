<?php

	/**
	 * Alert Widget
	 */
	class Wbls_Alert_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		function __construct() {
			parent::__construct(
				'alert-widget', // Base ID
				__( 'Alert', 'webulous-framework' ), // Name
				array( 'description' => __( 'Alert Widget', 'webulous-framework' ), ) // Args
			);
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {
			echo $args['before_widget'];
			$instance = wp_parse_args( $instance, array(
				'content' => '',
				'type'    => 'notice',
				'close'   => 'yes'
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
		 *
		 * @return void
		 */
		public function form( $instance ) {
			$instance = wp_parse_args( $instance, array(
				'content' => '',
				'type'    => 'notice',
				'close'   => 'yes'
			) );
			?>
			<p>
				<label
					for="<?php echo $this->get_field_id( 'type' ) ?>"><?php _e( 'Type of Alert', 'webulous-framework' ) ?></label>
				<select class="widefat" id="<?php echo $this->get_field_id( 'type' ) ?>"
				        name="<?php echo $this->get_field_name( 'type' ) ?>">
					<option
						value="notice" <?php selected( $instance['type'], 'notice' ) ?>><?php _e( 'Notice', 'webulous-framework' ); ?></option>
					<option
						value="warning" <?php selected( $instance['type'], 'warning' ) ?>><?php _e( 'Warning', 'webulous-framework' ); ?></option>
					<option
						value="success" <?php selected( $instance['type'], 'success' ) ?>><?php _e( 'Success', 'webulous-framework' ); ?></option>
					<option
						value="error" <?php selected( $instance['type'], 'Error' ) ?>><?php _e( 'Error', 'webulous-framework' ); ?></option>
					<option
						value="info" <?php selected( $instance['type'], 'info' ) ?>><?php _e( 'Info', 'webulous-framework' ); ?></option>
				</select>
			</p>
			<p>
				<label
					for="<?php echo $this->get_field_id( 'close' ) ?>"><?php _e( 'Need close option?', 'webulous-framework' ) ?></label>
				<select class="widefat" id="<?php echo $this->get_field_id( 'close' ) ?>"
				        name="<?php echo $this->get_field_name( 'close' ) ?>">
					<option
						value="yes" <?php selected( $instance['close'], 'yes' ) ?>><?php _e( 'Yes', 'webulous-framework' ); ?></option>
					<option
						value="no" <?php selected( $instance['close'], 'no' ) ?>><?php _e( 'No', 'webulous-framework' ); ?></option>
				</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
				<textarea class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>"
				          name="<?php echo $this->get_field_name( 'content' ); ?>"><?php echo esc_html( $instance['content'] ); ?></textarea>
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
			$instance            = array();
			$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
			$instance['type']    = $new_instance['type'];
			$instance['close']   = $new_instance['close'];

			return $instance;
		}

	} // class Wbls_Alert_Widget