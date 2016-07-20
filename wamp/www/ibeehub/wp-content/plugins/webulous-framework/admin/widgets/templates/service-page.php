<div class="service-page-wrapper clearfix">
     <div class="service">
        <div class="service-image">
	    	<?php if( has_post_thumbnail() ) : ?>
	    		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail('webulous-framework-recent_page_img'); ?></a>
	    	<?php endif; ?>
    	</div>
    	<div class="service-content">
    	    <?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
	    	<?php the_content( __( 'Read More', 'webulous-framework' ) ); ?>
    	</div>
    </div>
</div>

