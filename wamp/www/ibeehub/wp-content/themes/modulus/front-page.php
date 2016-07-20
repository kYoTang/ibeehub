<?php
/**
 * The front page template file.
 *
 *
 * @package modulus
 */
 
if ( 'posts' == get_option( 'show_on_front' ) ) { 
	   get_template_part('home');
	} else {

	
get_header(); 
	if ( get_theme_mod('page-builder' ) ) {  
		if( get_theme_mod('flexslider') ) {   
			echo do_shortcode( get_theme_mod('flexslider') );
		} ?>

		<div id="content" class="site-content container">
			<div id="primary" class="content-area sixteen columns">
				<main id="main" class="site-main" role="main">
					<?php
						while ( have_posts() ) : the_post();       
							the_content();
						endwhile;
					?>
					
			     </main><!-- #main -->
		     </div><!-- #primary -->
<?php	} else {
		$slider_cat = get_theme_mod( 'slider_cat', '' );
		$slider_count = get_theme_mod( 'slider_count', 5 );   
		$slider_posts = array(   
			'cat' => $slider_cat,
			'posts_per_page' => $slider_count              
		);
		$home_slider = get_theme_mod('slider_field',true); 
		if ($slider_cat) {
			if( $home_slider) {
				$query = new WP_Query($slider_posts);        
				if( $query->have_posts()) : ?>
					<div class="flexslider">  
						<ul class="slides">
							<?php while($query->have_posts()) :
									$query->the_post();
									if( has_post_thumbnail() ) : ?>
									    <li>
									    	<div class="flex-image">
									    		<?php the_post_thumbnail('full'); ?>
									    	</div>
									    	<div class="flex-caption">
									    		<?php the_content( __('Read More','modulus') ); ?>
									    	</div>
									    </li>
								    <?php endif;?>			   
							<?php endwhile; ?>
						</ul>
					</div>
			
				<?php endif; ?>
			   <?php  
				$query = null;
				wp_reset_postdata();
			}
		}else{	?>	
		 <div class="flexslider">  
				<ul class="slides">	          
					<li>   	
						<div class="flex-image">
							<?php echo '<img src="' . get_stylesheet_directory_uri() . '/images/slider.png" alt="" >';?>	
						</div>
						<?php	$slide_description = sprintf( __('<h1> Slider Setting </h1><p>You haven\'t created any slider yet. Create a post, set your slider image as Post\'s featured image ( Recommended image size 1280*450 ) ). Go to Customizer and click Modulus Options => Home and select Slider Post Category and No.of Sliders.<p><a class="rippler rippler-default" href="%1$s"target="_blank"> Customizer </a></p>', 'modulus'),  admin_url('customize.php') );?>
						<div class="flex-caption"> <?php echo $slide_description;?></div>
					</li>
				</ul>
			</div><!-- flex-slider end -->	
<?php		
	}
	?>

	</div>

	<div id="content" class="site-content free-home">	
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<?php if( get_theme_mod('enable_service',true ) ) {  ?>
			<div class="container">	
	
		<?php
			   do_action('service_content_before');
      
			$service_page1 = get_theme_mod('service_1');
			$service_page2 = get_theme_mod('service_2');
			$service_page3 = get_theme_mod('service_3');

			if( $service_page1 || $service_page2 || $service_page3 ) {
				$service_pages = array($service_page1,$service_page2,$service_page3);
				$args = array(
					'post_type' => 'page',
					'post__in' => $service_pages,
					'posts_per_page' => -1,
					'orderby' => 'post__in'
				);
				$query = new WP_Query($args);
				if( $query->have_posts()) : ?>
					<div class="services-wrapper row">
						<h1 class="title-divider"><?php echo apply_filters('modulus_service_title', __('Our Services','modulus') ); ?></h1>
						<?php while($query->have_posts()) :
								$query->the_post(); ?>
								    <div class="one-third service column">
								    	<?php if( has_post_thumbnail() ) : ?>
								    		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail('modulus-recent_page_img'); ?></a>
								    	<?php endif; ?>
								    	<div class="service-content">
								    	    <?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
									    	<?php the_content( __( 'Read More', 'modulus' ) ); ?>
								    	</div>
								    </div>
						<?php endwhile; ?>
					</div>
				</div>

				<?php endif; ?>   
				<?php  
					$query = null;
					$args = null;
					wp_reset_postdata(); 
			} 	else {?>
				<div class="services-wrapper row">
					<h1 class="title-divider"><?php _e('Our Services','modulus');?></h1>
					 <div class="one-third service column">
					     <?php echo '<img width="150" height="150" src="' . get_stylesheet_directory_uri() . '/images/image-page.png" alt="" >';?>	
						  <div class="service-content">
							  <h4><?php _e('Service Section #1','modulus');?></h4>
					 	      <p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Modulus Options => Home => Service Section #1 and select page from  dropdown page list.','modulus');?></p>
						  </div>
					</div>
					<div class="one-third service column">
					<?php echo '<img width="150" height="150" src="' . get_stylesheet_directory_uri() . '/images/image-page.png" alt="" >';?>	
						  <div class="service-content">
							  <h4><?php _e('Service Section #2','modulus');?></h4>
					 	      <p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Modulus Options => Home => Service Section #2 and select page from  dropdown page list.','modulus');?></p>
						  </div>
					</div>
					<div class="one-third service column">
					<?php echo '<img width="150" height="150" src="' . get_stylesheet_directory_uri() . '/images/image-page.png" alt="" >';?>	
						  <div class="service-content">
							  <h4><?php _e('Service Section #3','modulus');?></h4>
					 	      <p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Modulus Options => Home => Service Section #3 and select page from  dropdown page list.','modulus');?></p>
						  </div>
					</div>
				</div>
				</div>
				</div>
	<?php	}
        }  
		do_action('service_content_after');
	
		modulus_recent_posts(); 
	       do_action('recent_post_after');

	    if( get_theme_mod('enable_home_default_content',false ) ) {  ?>
			<div class="container default-home-page">
			<?php
				while ( have_posts() ) : the_post();       
					the_content();
				endwhile;
			?>
	         </div>
        <?php } ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php 
}
get_footer(); 
}
?>