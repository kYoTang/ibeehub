<?php
/**
 * List Widget.
 *
 * @package Wbls
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_List_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'list-widget', // Base ID
			__('List', 'webulous-framework'), // Name
			array( 'description' => __( 'Displays a list of elements with bullets', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'title' => __( 'Title of List', 'webulous-framework' ),
			'list' => '',
			'icon' => 'fa-check',
			'color' => '',
		) );

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	/**
	 * Display the list widget form.
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {

		$instance = wp_parse_args( $instance, array(
			'title' => __( 'Title of List', 'webulous-framework' ),
			'list' => '',
 			'icon' => 'fa-check',
			'color' => '',
		) );

		?>
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($instance['title']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('list') ?>"><?php _e('List (start each line with *)', 'webulous-framework') ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('list') ?>" name="<?php echo $this->get_field_name('list') ?>"><?php echo esc_html($instance['list']) ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('icon') ?>"><?php _e('Icon', 'webulous-framework') ?></label>
			<input id="<?php echo $this->get_field_id('icon') ?>" name="<?php echo $this->get_field_name('icon') ?>" type="text" value="<?php echo esc_attr($instance['icon']) ?>" class="faip">
			<script type="text/javascript">
				jQuery(function($) {
					$('.faip').iconpicker({
						hideOnSelect: true
					});
				});
			</script>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('color') ?>"><?php _e('Color (in hex code, #ff0000)', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('color') ?>" name="<?php echo $this->get_field_name('color') ?>" value="<?php echo esc_attr($instance['color']) ?>" />
		</p>

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}
