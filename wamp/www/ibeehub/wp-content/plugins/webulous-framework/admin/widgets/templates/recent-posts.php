<?php
	if ( ! empty( $title ) ) {
		echo $args['before_title'] . $title . $args['after_title'];
	}

	if ( ! empty( $instance['count'] ) ) {
		echo do_shortcode( '[recent_posts count="' . $instance['count'] . '" type="' . $instance['type'] . '"]' );
	}