<div class="icon-<?php echo $instance['icon_placement']; ?> icon-box <?php echo empty($instance['box']) ? 'icon-hide-box' : 'icon-show-box' ?>">
			<div class="icon-wrapper">
				<?php if( ! empty( $instance['icon_placement'] ) && 'left' == $instance['icon_placement'] ) : ?>
	<?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?><a href="<?php echo esc_url($instance['more_url']) ?>" class="link-title"><?php endif; ?>
	<?php if(!empty($instance['title'])) : ?>
		<p>
		<span class="fa-stack fa-<?php echo $instance['icon_size'] ?>">
							<?php if(!empty($instance['icon'])) : ?><i class="fa <?php echo esc_attr($instance['icon']) ?> fa-stack-1x"></i><?php endif; ?>
						</span>

		</p><?php endif; ?>
	<?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?></a><?php endif; ?>
<?php endif; ?>
<?php if( ! empty( $instance['icon_placement'] ) && 'top' == $instance['icon_placement'] ) : ?>
	<?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?><a href="<?php echo esc_url($instance['more_url']) ?>" class="link-title"><?php endif; ?>
	<?php if(!empty($instance['title'])) : ?>
		<p>
		<span class="fa-stack fa-<?php echo $instance['icon_size'] ?>">
							<?php if(!empty($instance['icon'])) : ?><i class="fa <?php echo esc_attr($instance['icon']) ?> fa-stack-1x"></i><?php endif; ?>
						</span>
		</p><?php endif; ?>
	<?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?></a><?php endif; ?>
<?php endif; ?>
<?php if( ! empty( $instance['icon_placement'] ) && 'right' == $instance['icon_placement'] ) : ?>
			<?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?><a href="<?php echo esc_url($instance['more_url']) ?>" class="link-title"><?php endif; ?>
			<?php if(!empty($instance['title'])) : ?>
				<p>
				<span class="fa-stack fa-<?php echo $instance['icon_size'] ?>">
							<?php if(!empty($instance['icon'])) : ?><i class="fa <?php echo esc_attr($instance['icon']) ?> fa-stack-1x"></i><?php endif; ?>
						</span>
				</p><?php endif; ?>
			<?php if(!empty($instance['more_url']) && !empty($instance['all_linkable'])) : ?></a><?php endif; ?>
		<?php endif; ?>   
</div>

<div class="service">
	<?php echo '<span class="icon-title">' . esc_html($instance['title']) . '</span>' ?>
	<?php if(!empty($instance['text'])) : ?><p class="text"><?php echo wp_kses_post($instance['text']) ?></p><?php endif; ?>
	<?php if(!empty($instance['more_url']) && $instance['all_linkable']) : ?>
		<p class="more-button"><a href="<?php echo esc_url($instance['more_url']) ?>" class="btn btn-mini"><?php echo !empty($instance['more']) ? esc_html($instance['more']) : __('More Info', 'webulous-framework') ?></a></p>
	<?php endif; ?>
</div>     
</div>