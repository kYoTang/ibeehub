<?php
	if(!empty($instance['slider'])) :
		echo do_shortcode('[flexslider name="' . $instance['slider'] . '" type="' . $instance['type'] . '"]');
	endif;