<div class="free-home">
	<div class="services-wrapper clearfix">
	     <div class="service">
	    	<?php if( has_post_thumbnail() ) : ?>
	    		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail('wbls-modulus-recent_page_img'); ?></a>
	    	<?php endif; ?>
	    	<div class="service-content">
	    	    <?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
		    	<?php the_content( __( 'Read More', 'wbls-modulus' ) ); ?>
	    	</div>
	    </div>
	</div>
</div>
