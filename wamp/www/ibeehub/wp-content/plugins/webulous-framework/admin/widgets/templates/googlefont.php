<?php
	$output = '';
	$output .= '[googlefont font_family="'.$instance['font_family'].'" size="'.$instance['size'].'" weights="'.$instance['weights'].'" weight="'.$instance['weight'].'"]'.$instance['content'].'[/googlefont]';
	echo do_shortcode($output );