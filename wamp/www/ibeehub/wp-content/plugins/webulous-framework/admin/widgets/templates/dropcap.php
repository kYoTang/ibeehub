<?php
	$output = '';
	$output .= '[dropcap style="'.$instance['style'].'"]'.$instance['content'].'[/dropcap]';
	echo do_shortcode($output );