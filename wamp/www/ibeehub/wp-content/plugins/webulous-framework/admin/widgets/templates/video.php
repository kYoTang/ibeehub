<?php
	if( !empty($instance['video_id']) ) {
		echo do_shortcode('[video type="'.$instance['type'].'" video_id="'.$instance['video_id'].'" height="'.$instance['height'].'" width="'.$instance['width'].'"]');
	}