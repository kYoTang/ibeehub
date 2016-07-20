<?php
	$class = '';
	$class .= 'class="fa '. $instance['icon'] .'"';

	$custom_style = '';
	$custom_style .= ' style="color: ' . $instance['color'] . ';"';

	// Add the list items
	$text = preg_replace( "/\*+(.*)?/i", '<ul><li><i ' . $class . $custom_style . '></i> $1</li></ul>', $instance['list'] );
	$text = preg_replace( "/(\<\/ul\>\n(.*)\<ul\>*)+/", "", $text );
	$text = wpautop( $text );

	echo '<h3>' . $instance['title'] . '</h3>';
	// sanitized version of the list
	echo wp_kses_post($text);