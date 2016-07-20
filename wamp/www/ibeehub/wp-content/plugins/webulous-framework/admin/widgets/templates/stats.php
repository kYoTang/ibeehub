<?php
	$title = apply_filters( 'widget_title', $instance['title'] );

	echo do_shortcode('[stats id="' . $instance['title'] . '"]');