<?php
/**
 * Service Page Widget.
 *
 * @package Webulous
 * @since 1.0
 * @license GPL 2.0
 */

class Wbls_Service_Page_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'service-page-widget', // Base ID
			__('Service Page', 'webulous-framework'), // Name
			array( 'description' => __( 'Display Page Featured Image and Content', 'webulous-framework' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];   

		$instance = wp_parse_args( $instance, array(
			'service_page_id' => '',
		) );
        		
		$service_page_id = isset( $instance[ 'service_page_id' ] ) ? $instance[ 'service_page_id' ] : '';

        $service_args = array(
        	'post_type' => 'page',
			'page_id' => $service_page_id,
        );
	    $service_page = new WP_Query($service_args);

	    if( $service_page->have_posts()) : 
	    	while($service_page->have_posts()) :
	    		$service_page->the_post();
                   include( Wbls_Fw_Admin::get_widget_template( __FILE__ ) );
	    	endwhile;
	    endif;
		$service_page = null;
		$service_args = null;
		wp_reset_postdata(); 

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
			'service_page_id' => '',
		) );

		?>
		<p>
			<label for="<?php echo $this->get_field_id('service_page_id') ?>"><?php _e(' Service Page', 'webulous-framework') ?></label>
			<?php wp_dropdown_pages( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'service_page_id' ), 'selected' =>  $instance['service_page_id'] ) ); ?>
		</p>

	
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'service_page_id' ] = $new_instance[ 'service_page_id' ];

		return $new_instance;
	}
}
