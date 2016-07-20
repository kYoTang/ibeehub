<?php
	$output = '';
	$close = 1;
	if( strtolower($instance['close']) == 'yes' ) {
		$close = 0;
	}
	$output .= '[alert type="' . $instance['type'] . '" close="' . $close . '"]' . $instance['content'] . '[/alert]';
	echo do_shortcode($output );