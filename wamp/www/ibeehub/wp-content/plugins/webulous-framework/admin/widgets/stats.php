<?php
/**
 * Stats Widget.
 *
 * @package webulous
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_Stats_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'stat-widget', // Base ID
			__('Stats', 'webulous-framework'), // Name
			array( 'description' => __( 'Displays stats details', 'webulous-framework' ), ) // Args
		);
	}
		
     
	public function widget( $args, $instance ) {    

		$instance = wp_parse_args( $instance, array(
			'title' => __('Stats', 'webulous-framework'),
		
		) );

		echo $args['before_widget'];

		include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );

		echo $args['after_widget'];
	}

	/**
	 * Display the stat widget form.
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( $instance, array(
			'title' => __('Stats', 'webulous-framework'),
			'stat_post' => ''
		) );
		
	?>
		<p>     
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Stat Post', 'webulous-framework') ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>">
				<option value="">Select A Stat</option>
				<?php
					$args = array(
						'post_type' => 'stats',    
						'posts_per_page' => -1,
					);
					$stats = new WP_Query($args);
					//echo '<pre>',print_r($stats),'</pre>';
					if($stats->have_posts()) : 
						while( $stats->have_posts() ) :
							$stats->the_post(); ?>
						<option value="<?php esc_attr_e($stats->post->ID); ?>" <?php selected($instance['title'], $stats->post->ID) ?>><?php esc_html_e($stats->post->post_title, 'webulous-framework') ?></option>
				<?php 
						endwhile; 
					endif; 
					wp_reset_postdata(); 
					$stats = null; 
				?>
			</select>
		</p>		
		<p><?php _e( 'Enter stat details using Stats custom post type','webulous-framework' ); ?></p>

	<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}
