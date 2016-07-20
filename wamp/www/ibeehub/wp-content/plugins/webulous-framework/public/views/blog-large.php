<?php 
/*
	Template Name: Blog Large Image
 */
 	get_header();
 	
        do_action( 'wbls_fw_portfolio_before_breadcrumbs');
		do_action( 'wbls_fw_portfolio_breadcrumbs' );
		do_action( 'wbls_fw_portfolio_after_breadcrumbs' );
	?>

<div id="content" class="site-content container">

        <?php do_action('wbls_fw_two_sidebar_left'); ?>

		<div id="primary" class="content-area <?php wbls_fw_layout_class(); ?> columns">
			<main id="main" class="site-main" role="main">

			   <header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
			   </header><!-- .entry-header -->	   
		   
				<?php
					$query_string ="post_type=post&paged=$paged";
					query_posts($query_string);
					$num_of_posts = $wp_query->post_count;
				?>		
					
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content' ); ?>    

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
		<?php do_action('wbls_fw_two_sidebar_right'); ?>

		<?php get_footer(); ?>