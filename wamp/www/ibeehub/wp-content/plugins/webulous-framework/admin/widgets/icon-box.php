<?php
/**
 * Font Awesome Icon Widget.
 *
 * @package Webulous
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_CircleIcon_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'circleicon-widget', // Base ID
			__('Circle Icon', 'webulous-framework'), // Name
			array( 'description' => __( 'An icon in a circle with some text beneath it', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$instance = wp_parse_args( $instance, array(
			'title' => '',
			'text' => '',
			'icon' => '',
			'type' => 'circle',
			'icon_size' => 'lg',
			'icon_background_color' => '',
			'more' => '',
			'more_url' => '',
			'all_linkable' => false,
			'box' => false,
		) );

		$icon_styles = array();

		if( !empty($instance['icon_background_color']) && preg_match('/^#?+[0-9a-f]{3}(?:[0-9a-f]{3})?$/i', $instance['icon_background_color'])) {
			$icon_styles[] = 'color: '.$instance['icon_background_color'];
		}

		$icon_class = '';

		if( ! empty($instance['type']) ) {
			if( 'circle' == $instance['type'] ) {
				$icon_class = 'icon-circle';
			} else {
				$icon_class = 'icon-polygon';
			}
		}

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
			'title' => '',
			'text' => '',
			'icon' => '',
			'type' => 'circle',
			'icon_size' => 'lg',
			'icon_background_color' => '',
			'more' => '',
			'more_url' => '',
			'all_linkable' => false,
			'box' => false,
		) );

		?>
		<p>
			<label for="<?php echo $this->get_field_id('type') ?>"><?php _e('Icon Type', 'webulous-framework') ?></label>
			<select id="<?php echo $this->get_field_id('type') ?>" name="<?php echo $this->get_field_name('type') ?>">
				<option value="circle" <?php selected('circle', $instance['type']) ?>><?php esc_html_e('Circle', 'webulous-framework') ?></option>
				<option value="polygon" <?php selected('polygon', $instance['type']) ?>><?php esc_html_e('Polygon', 'webulous-framework') ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($instance['title']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('text') ?>"><?php _e('Text', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('text') ?>" name="<?php echo $this->get_field_name('text') ?>" value="<?php echo esc_attr($instance['text']) ?>" />
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
			<label for="<?php echo $this->get_field_id('icon_background_color') ?>"><?php _e('Icon Background Color', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('icon_background_color') ?>" name="<?php echo $this->get_field_name('icon_background_color') ?>" value="<?php echo esc_attr($instance['icon_background_color']) ?>" />
			<span class="description"><?php _e('A hex color', 'webulous-framework'); ?></span>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('icon_size') ?>"><?php _e('Icon Size', 'webulous-framework') ?></label>
			<select id="<?php echo $this->get_field_id('icon_size') ?>" name="<?php echo $this->get_field_name('icon_size') ?>">
				<option value="lg" <?php selected('lg', $instance['icon_size']) ?>><?php esc_html_e('Normal', 'webulous-framework') ?></option>
				<option value="1x" <?php selected('1x', $instance['icon_size']) ?>><?php esc_html_e('1x', 'webulous-framework') ?></option>
				<option value="2x" <?php selected('2x', $instance['icon_size']) ?>><?php esc_html_e('2x', 'webulous-framework') ?></option>
				<option value="3x" <?php selected('3x', $instance['icon_size']) ?>><?php esc_html_e('3x', 'webulous-framework') ?></option>
				<option value="4x" <?php selected('4x', $instance['icon_size']) ?>><?php esc_html_e('4x', 'webulous-framework') ?></option>
				<option value="5x" <?php selected('5x', $instance['icon_size']) ?>><?php esc_html_e('5x', 'webulous-framework') ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('more') ?>"><?php _e('More Text', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('more') ?>" name="<?php echo $this->get_field_name('more') ?>" value="<?php echo esc_attr($instance['more']) ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('more_url') ?>"><?php _e('More URL', 'webulous-framework') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('more_url') ?>" name="<?php echo $this->get_field_name('more_url') ?>" value="<?php echo esc_attr($instance['more_url']) ?>" />
		</p>
        <p>
            <label for="<?php echo $this->get_field_id('all_linkable') ?>">
                <input type="checkbox" id="<?php echo $this->get_field_id('all_linkable') ?>" name="<?php echo $this->get_field_name('all_linkable') ?>" <?php checked( $instance['all_linkable'] ) ?> />
                <?php _e('Link title and icon to "More URL"', 'webulous-framework') ?>
            </label>
        </p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$new_instance['box'] = !empty($new_instance['box']);
		$new_instance['all_linkable'] = !empty($new_instance['all_linkable']);
		return $new_instance;
	}
}