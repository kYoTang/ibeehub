<?php
	if( !empty($instance['content']) ) {
		echo do_shortcode('[headline level="'.$instance['level'].'" type="'.$instance['type'].'"]'.$instance['content'].'[/headline]');
	}