<?php
	$output = '';
	$output .= '[ourteam title="' . $instance['title'] .'" designation="';
	$output .= $instance['designation'] . '" image_url="' . $instance['image_url'];
	$output .= '" linkedin="' . $instance['linkedin'] . '" google="';
	$output .= $instance['google'] . '" twitter="' . $instance['twitter'];
	$output .= '" facebook="' . $instance['facebook'] . '"]';
	$output .= $instance['content'];
	$output .= '[/ourteam]';
	echo do_shortcode($output);