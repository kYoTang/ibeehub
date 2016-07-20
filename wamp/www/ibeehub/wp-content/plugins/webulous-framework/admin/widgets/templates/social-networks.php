<?php
	$title = apply_filters( 'widget_title', $instance['title'] );

	if ( ! empty( $title ) ) {
		echo $args['before_title'] . $title . $args['after_title'];
	}

	echo do_shortcode('[social_networks]');
