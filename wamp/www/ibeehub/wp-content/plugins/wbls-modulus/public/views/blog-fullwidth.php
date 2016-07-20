<?php 
/*
	Template Name: Blog Large Full Width
 */
 	get_header();

		do_action( 'wbls_fw_portfolio_before_breadcrumbs');
		do_action( 'wbls_fw_portfolio_breadcrumbs' );
		do_action( 'wbls_fw_portfolio_after_breadcrumbs' );
	?>
<div id="content" class="site-content container">

		<div id="primary" class="content-area sixteen columns">
			<main id="main" class="site-main" role="main">
   
		   
				<?php
					$query_string ="post_type=post&paged=$paged";
					query_posts($query_string);
					$num_of_posts = $wp_query->post_count;
				?>		
					
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
	          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

				
					<div class="entry-content"> 

	   <?php	$featured_image = get_theme_mod( 'featured_image',true );
	    $featured_image_size = get_theme_mod ('featured_image_size','1');
		if( $featured_image ) : 
		        if ( $featured_image_size == '1' ) :?>		
						<div class="thumb blog-thumb">
						  <?php	if( $featured_image && has_post_thumbnail() ) : 
								    the_post_thumbnail('wbls-modulus-blog-full-width');
			                     endif;?>
			            </div> <?php
		        else: ?>
		 	            <div class="thumb blog-thumb">
		 	                 <?php if( has_post_thumbnail() && ! post_password_required() ) :   
					               the_post_thumbnail('wbls-modulus-small-featured-image-width');
								
								endif;?>
			             </div>  <?php				
	            endif; 
		endif; ?> 

						<div class="entry-body-wrapper">	
									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
									<header class="entry-header">  
												<?php if ( 'post' == get_post_type() ) : ?>
												<div class="entry-meta">
													<span class="date-structure">				
														<span class="dd"><i class="fa fa-calendar"></i><?php the_time('j M Y'); ?></span>			
													</span>
													<?php wbls_modulus_author(); ?>
													<?php wbls_modulus_comments_meta(); ?> 
												</div><!-- .entry-meta -->
												<?php endif; ?>
								</header><!-- .entry-header -->
								<?php echo the_content( __('Readmore', 'wbls-modulus') ); ?>
							

							<?php
								wp_link_pages( array(   
									'before' => '<div class="page-links">' . __( 'Pages:', 'wbls-modulus' ),
									'after'  => '</div>',  
								) );
							?>
							<footer class="entry-footer">
									<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
									
										<?php
											/* translators: used between list items, there is a space after the comma */
											$categories_list = get_the_category_list( __( ', ', 'wbls-modulus' ) );
											if ( $categories_list ) :
										?>
										<span class="cat-links">
											<i class="fa fa-folder-open"></i>
											<?php printf( __( ' %1$s', 'wbls-modulus' ), $categories_list ); ?>
										</span>
										<?php endif; // End if categories ?>

										<?php
											/* translators: used between list items, there is a space after the comma */
											$tags_list = get_the_tag_list( '', __( ', ', 'wbls-modulus' ) );
											if ( $tags_list ) :
										?>		
										<span class="tags-links">
											<i class="fa fa-tags"></i>
											<?php printf( __( ' %1$s', 'wbls-modulus' ), $tags_list ); ?>
										</span>
										<?php endif; // End if $tags_list ?>
									<?php endif; // End if 'post' == get_post_type() ?>
									<?php edit_post_link( __( '<span class="edit-link"><i class="fa fa-pencil"></i> Edit</span>', 'wbls-modulus' ), '', '' ); ?>
								</footer><!-- .entry-footer -->								
						</div>		
						
						</div><!-- .entry-content -->
								
								
						
					</article><!-- #post-## --> 

					<?php endwhile; ?>

				<?php
					if ( get_theme_mod( 'numeric_pagination', true ) && function_exists( 'wbls_fw_pagination' ) ) :
						wbls_fw_pagination();
					else :
						if ( function_exists( 'wbls_fw_paging_nav' ) ) {
							wbls_fw_paging_nav();
						}
					endif;
		        ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		<?php get_footer(); ?>