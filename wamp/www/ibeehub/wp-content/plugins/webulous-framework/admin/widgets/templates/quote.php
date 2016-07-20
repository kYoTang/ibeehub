<?php
	if( !empty($instance['quote']) ) {
		echo do_shortcode('[quote align="'.$instance['align'].'"]'.$instance['quote'].'[/quote]');
		echo do_shortcode($instance['content']);
	}