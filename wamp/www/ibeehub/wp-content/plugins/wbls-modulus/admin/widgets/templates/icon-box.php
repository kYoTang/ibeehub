<?php  if( ('circle' == $instance['type']  || 'square' == $instance['type']  ) ) {
	$icon_class = 'icon-circle';
}?>

		<div class="circle-icon-box <?php echo empty($instance['box']) ? 'circle-icon-hide-box' : 'circle-icon-show-box' ?> <?php echo $icon_class ?>">
			<div class="circle-icon-wrapper">
                <?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?><a href="<?php echo esc_url($instance['more_url']) ?>" class="link-icon"><?php endif; ?>
				<h3 class="fa-stack fa-<?php echo $instance['icon_size'] ?>">
					<?php if(!empty($instance['icon'])) : ?><i class="fa <?php echo esc_attr($instance['icon']) ?> fa-stack-1x"></i><?php endif; ?>
				</h3>
                <?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?></a><?php endif; ?>
			</div>
			<div class="circle-icon-content">
            <?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?><a href="<?php echo esc_url($instance['more_url']) ?>" class="link-title"><?php endif; ?>
			<?php if(!empty($instance['title'])) : ?><h4><?php echo esc_html($instance['title']) ?></h4><?php endif; ?>
            <?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?></a><?php endif; ?>

			<?php if(!empty($instance['text'])) : ?><p class="text"><?php echo wp_kses_post($instance['text']) ?></p><?php endif; ?>
			<?php if(!empty($instance['more_url']) && $instance['all_linkable']) : ?>
				<p class="more-button"><a href="<?php echo esc_url($instance['more_url']) ?>" class="more-button"><?php echo !empty($instance['more']) ? esc_html($instance['more']) : __('More Info', 'wbls-widgets-bundle') ?> <i></i></a></p>
			<?php endif; ?>
			</div>
		</div>