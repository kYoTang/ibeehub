<div class="image-widget">
	<?php
		if ( ! empty( $instance['href'] ) ) {
			echo '<a href="' . esc_url( $instance['href'] ) . '" rel="prettyPhoto">';
		}
	?>
	<img src="<?php echo esc_url($instance['src']); ?>"/>

	<div class="image-widget-overlay">
		<i class="fa fa-link fa-1x"></i>
		<div class="image-widget-overlay-icon">
		</div><!-- .image-widget-overlay-icon -->

	</div><!-- .image-widget-overlay -->
	<?php
		if ( ! empty( $instance['href'] ) ) {
			echo '</a>';
		}
	?>
</div><!-- .image-widget -->