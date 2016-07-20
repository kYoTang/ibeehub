<?php
	$output = '';
	$output .= '[button link="'.$instance['url'].'" target="'.$instance['target'].'" color="'.$instance['color'].'" size="'.$instance['size'].'"]'.$instance['btntext'].'[/button]';
	echo do_shortcode($output );