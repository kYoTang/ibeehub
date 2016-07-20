<?php
	$title = apply_filters( 'widget_title', $instance['title'] );

	if ( ! empty( $title ) ) {
		echo $args['before_title'] . $title . $args['after_title'];
	}

	if(!empty($instance['count'])) : ?><?php echo do_shortcode('[testimonial count="' . $instance['count'] . '"]'); ?><?php endif;