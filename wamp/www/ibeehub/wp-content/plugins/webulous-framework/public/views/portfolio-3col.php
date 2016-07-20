<?php
/*
	Template Name: 3 Col Portfolio
 */
get_header(); ?>
	<style type="text/css">
		.item {
			overflow: hidden;
			width: 33.33%;
			margin: 0;
		}

		#filters, #portfolio {
			padding: 0;
		}
	</style>

<?php
	do_action( 'wbls_fw_portfolio_before_breadcrumbs' );
	do_action( 'wbls_fw_portfolio_breadcrumbs' );
	do_action( 'wbls_fw_portfolio_after_breadcrumbs' );
?>

	<div id="content" class="site-content container">

	<div id="primary" class="content-area sixteen columns">

		<main id="main" class="site-main" role="main">

			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->

			<?php
				if( get_theme_mod('portfolio_three_column_count') ) {
			     	$portfolio_count = get_theme_mod('portfolio_three_column_count');
			     }else {
			     	$portfolio_count = get_option('posts_per_page');
			     }
				$query_string = "post_type=portfolio&paged=$paged&posts_per_page=". $portfolio_count;

				query_posts( $query_string );
				$num_of_posts = $wp_query->post_count;
				$count        = 0;
			?>

			<div id="filters">
				<?php
					$terms = get_terms( 'skills' );
					$count = count( $terms );
					if ( $count > 0 ) : ?>
						<ul class="filter-options" data-option-key="filter">
							<li><a href="#filter" data-option-value="*"><?php echo apply_filters('wbls_fw_portfolio_all_text' , __('All','webulous-framework') ); ?></a></li>
							<?php foreach ( $terms as $term ) : ?>
								<li><a href="#filter"
								       data-option-value=".<?php echo str_replace( ' ', '-', $term->name ); ?>"><?php echo $term->name; ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif;
				?>
			</div><!-- #filters -->

			<ul id="portfolio">
				<?php
					if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						$terms = get_the_terms( $post->ID, 'skills' );

						if ( $terms && ! is_wp_error( $terms ) ) :
							$skills = array();
							foreach ( $terms as $term ) {
								$skills[] = str_replace( ' ', '-', $term->name );
							}
							$skills = join( ' ', $skills );
						endif;
						?>
						<li class="item <?php echo $skills; ?>">
							<div class="portfolio3col portfolioeffects">

						      <?php
									$portfolio_video_type        =  get_post_meta( $post->ID, '_wbls_portfolio_video_type', true );
									$portfolio_video_id          = trim( get_post_meta( $post->ID, '_wbls_portfolio_video_id', true ) );
									$portfolio_project_url       = trim( get_post_meta( $post->ID, '_wbls_portfolio_project_url', true ) );
									$portfolio_project_link_text = trim( get_post_meta( $post->ID, '_wbls_portfolio_project_link_text', true ) );
								?>
								<div class="portfolio_thumb">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'portfolio3col' ); ?></a>
								</div>
								<div class="portfolio_overlay">
									<div class="content-details">
										<h3><?php the_title(); ?></h3>
										<?php
											if ( ! empty( $skills ) ) {
												$skills = explode( ' ', $skills );
												$skills = implode( ', ', $skills );
											} else {
												$skills = '';
											}
										?>
									</div>
									<div class="overlay_icon portfolio_link_icons">
										<?php if ( $portfolio_video_type != 'none' && $portfolio_video_id != '' ) : ?>

											<?php if ( $portfolio_video_type == 'vimeo' ) : ?>
												<a class="icon-zoom"
												   href="http://vimeo.com/<?php echo $portfolio_video_id; ?>"
												   rel="prettyPhoto"><i class="fa fa-search"></i></a>
											<?php else : ?>
												<a class="icon-zoom"
												   href="http://www.youtube.com/watch?v=<?php echo $portfolio_video_id; ?>"
												   rel="prettyPhoto"><i class="fa fa-search"></i></a>
											<?php endif; ?>

										<?php else : ?>
											<?php
											$url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
											<a class="icon-zoom" href="<?php echo $url; ?>" rel="prettyPhoto[elasti]"><i
													class="fa fa-search"></i></a>
										<?php endif; ?>
										<a class="icon-link" href="<?php the_permalink(); ?>"
										   title="<?php the_title(); ?>"><i class="fa fa-link"></i></a>
									</div>
								</div>

							</div><!-- .portfolio3col -->

						</li>

					<?php endwhile; ?>
			</ul>

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

			<article id="post-not-found">

				<header class="article-header">
					<h1 class="article-title"><?php _e( 'Page Not Found', 'webulous-framework' ); ?></h1>
				</header>

				<section class="article-content">
					<p>
						<?php
							printf( __( 'The page you were looking for was not found!. You can return %s or search for the page you were looking for.', 'webulous-framework' ), sprintf( '<a href="%1$s" title="%2$s">%3$s</a>', esc_url( get_home_url() ), esc_attr__( 'Home', 'webulous-framework' ), esc_attr__( '&larr; Home', 'webulous-framework' ) ) );
						?>
					</p>
				</section>

				<footer class="article-footer">
					<p>
						<?php
							_e( 'This is the error message in the page.php template.', 'webulous-framework' );
						?>
					</p>
				</footer>

			</article>

		<?php endif; ?>

		</main> <!-- end #main -->
	</div> <!-- end #content -->

<?php get_footer(); ?>