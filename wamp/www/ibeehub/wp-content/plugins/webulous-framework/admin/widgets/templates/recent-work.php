<?php
	$title = apply_filters( 'widget_title', $instance['title'] );
	echo $args['before_widget'];

	if ( ! empty( $title ) ) {
		echo $args['before_title'] . $title . $args['after_title'];
	}

	if ( $instance['type'] == "carousel" ) {
		if ( ! empty( $instance['count'] ) ) : ?><?php echo do_shortcode( '[recent_work count="' . $instance['count'] . '"]' ); ?><?php endif;
	} else {
		if ( ! empty( $instance['count'] ) ) : ?><?php echo do_shortcode( '[recent_work_isotope count="' . $instance['count'] . '"]' ); ?><?php endif;
	}