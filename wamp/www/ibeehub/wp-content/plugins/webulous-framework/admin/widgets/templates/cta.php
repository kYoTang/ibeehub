<?php
	$output = '';
	$output .= '[cta title="' . $instance['title'] . '" url="' . $instance['url'] . '" anchor_text="' . $instance['anchor_text'] .'"]' . $instance['content'] . '[/cta]';
	echo do_shortcode($output );