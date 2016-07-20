<div class="image-box">
	<?php if(!empty($instance['image_url'])) : ?><img src="<?php echo esc_url($instance['image_url']) ?>" /><?php endif; ?>
	<?php if(!empty($instance['title'])) : ?><h4><?php echo esc_html($instance['title']) ?></h4><?php endif; ?>
	<?php if(!empty($instance['text'])) : ?><p class="text"><?php echo wp_kses_post($instance['text']) ?></p><?php endif; ?>
	<?php if(!empty($instance['more_url']) && !empty($instance['more'])) : ?>
		<a href="<?php echo esc_url($instance['more_url']) ?>" class="btn btn-mini">
			<?php echo esc_html( $instance['more'] ); ?>
		</a>
	<?php endif; ?>
</div>