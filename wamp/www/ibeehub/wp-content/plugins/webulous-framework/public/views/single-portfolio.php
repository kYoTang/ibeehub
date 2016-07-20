<?php
/**
 * The Template for displaying all single Portfolio.
 *
 * @package Webulous
 */

get_header(); ?>

	<?php 
		do_action( 'wbls_fw_portfolio_before_breadcrumbs');
		do_action( 'wbls_fw_portfolio_breadcrumbs' );
		do_action( 'wbls_fw_portfolio_after_breadcrumbs' );
	?>

<div id="content" class="site-content container">

	<div id="primary" class="content-area sixteen columns"> 
		
		<main id="main" class="site-main" role="main">

				<?php if( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>  

		
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
							<?php
								$project_url = get_post_meta( $post->ID, '_wbls_portfolio_project_url', true );
								$project_link_text = get_post_meta( $post->ID, '_wbls_portfolio_project_link_text', true );
								$project_video_type = get_post_meta( $post->ID, '_wbls_portfolio_video_type', true );
							    $project_video_id = get_post_meta( $post->ID, '_wbls_portfolio_video_id', true );
								$content_width = get_post_meta( $post->ID, '_wbls_portfolio_content_width', true );
								if ( $content_width == "full_width") :      
							?>
			
							<section class="article-content">
								<div class="row">
									<div class="two-thirds column alpha">
										<h3><?php _e( 'Project Description','webulous-framework' ); ?></h3>
										<?php the_content(); ?>
									</div>
									<div class="thumbnail one-third column omega offset-by-one">
										<dl>
											<dt><?php _e( 'Skill needed','webulous-framework' ); ?></dt>
											<dd><?php echo the_terms( $post->ID, 'skills', '', ', ', '' ); ?></dd>
											<dt><?php _e( 'Category','webulous-framework' ); ?></dt>
											<dd><?php echo get_the_category_list( ', ', '', $post->ID ); ?></dd>
											<?php if(!empty( $project_url )) { ?>
											<dt><?php _e( 'Project Website','webulous-framework' ); ?></dt>
											<dd><a href="<?php echo esc_url($project_url); ?>"><?php echo $project_link_text; ?></a></dd>
											<?php } ?>
											<?php if(!$project_video_id) {
												echo '';   
											} else { ?>
												<dt>Video </dt>
									            <dd>
													<?php    if($project_video_type === 'youtube') {
																echo '<iframe width="300" height="200" ';
																echo 'src="http://www.youtube.com/embed/' . esc_attr( $project_video_id ) .'" frameborder="0" allowfullscreen></iframe>';
															} else {
																echo '<iframe src="http://player.vimeo.com/video/' . esc_attr( $project_video_id ) .'" ';
																echo 'width="300" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
															}?>
												</dd>
										
										    <?php } ?>


										</dl>
									</div>
								</div>
								<div class="thumbnail">
									<?php the_post_thumbnail( 'full_width' ); ?>
								</div>								
							</section> <!-- end article section -->
							<?php else : ?>
							<section class="row entry-content">
								<div class="one-third column omega">
									<h3><?php _e( 'Project Details','webulous-framework' ); ?></h3>
									<dl>
										<dt><?php _e( 'Project Date','webulous-framework' ); ?></dt>
										<dd><?php echo get_the_date(); ?></dd>
										<dt><?php esc_html_e( 'Skill needed','webulous-framework' ); ?></dt>
										<dd><?php echo the_terms( $post->ID, 'skills', '', ', ', '' ); ?></dd>
										<dt><?php esc_html_e( 'Category','webulous-framework'); ?></dt>
										<dd><?php echo get_the_category_list( ', ', '', $post->ID ); ?></dd>
										<?php if(!empty( $project_url )) { ?>
										<dt><?php esc_html_e( 'Project Website','webulous-framework' ); ?></dt>
										<dd><a href="<?php echo esc_url($project_url); ?>"><?php echo $project_link_text; ?></a></dd>
									   <?php } ?>
									   	<?php if(!$project_video_id) {
												echo '';   
											} else { ?>
												<dt>Video </dt>
									            <dd>
													<?php    if($project_video_type === 'youtube') {
																echo '<iframe width="300" height="200" ';
																echo 'src="http://www.youtube.com/embed/' . esc_attr( $project_video_id ) .'" frameborder="0" allowfullscreen></iframe>';
															} else {
																echo '<iframe src="http://player.vimeo.com/video/' . esc_attr( $project_video_id ) .'" ';
																echo 'width="300" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
															}?>
												</dd>
										
										<?php } ?>
									</dl>
									<h4><?php _e( 'Project Description','webulous-framework' ); ?></h4>
									<?php the_content(); ?>
								</div>
								<div class="thumbnail two-thirds column alpha offset-by-one">
									<?php the_post_thumbnail( 'blog_large' ); ?>
								</div>								
							</section> <!-- end article section -->
							<?php endif; ?>
							

							<section class="related-posts clearfix">
								<?php
									if( get_theme_mod('related_posts') && function_exists( 'wbls_fw_related_posts' ) ) {
										wbls_fw_related_posts(); 
									}
								?>
			
						</article> <!-- end article -->
					<?php endwhile; ?>
				
				<?php
					if( get_theme_mod ('numeric_pagination',true) && function_exists( 'wbls_fw_pagination' ) ) :
						wbls_fw_pagination();
					else :
						if( function_exists('wbls_fw_paging_nav') ) {
							wbls_fw_paging_nav();
						}
					endif;
				?>

				<?php else : ?>
						
						<article id="post-not-found">
							
							<header class ="article-header">
								<h1 class="article-title"><?php _e('Page Not Found', 'webulous-framework'); ?></h1>
							</header>
							
							<section class="article-content">
								<p>
									<?php 
										printf( __('The page you were looking for was not found!. You can return %s or search for the page you were looking for.', 'webulous-framework'), sprintf( '<a href="%1$s" title="%2$s">%3$s</a>', esc_url( get_home_url() ), esc_attr__('Home', 'webulous-framework'), esc_attr__('&larr; Home', 'webulous-framework') )); 
									?>
								</p>
							</section>

							<footer class="article-footer">
								<p>
									<?php 
										_e('This is the error message in the page.php template.', 'webulous-framework');
									?>
								</p>
							</footer>

						</article>
						
				<?php endif; ?>						

			</main><!-- #main -->
		</div><!-- #primary -->

		</div><!-- .row -->
	</div><!-- .container -->
		
	<?php get_footer(); ?>