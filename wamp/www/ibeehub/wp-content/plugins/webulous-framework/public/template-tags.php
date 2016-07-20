<?php
	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 27/11/15
	 * Time: 10:23 AM
	 */
	if ( ! function_exists( 'wbls_fw_paging_nav' ) ) :
		/**
		 * Display navigation to next/previous set of posts when applicable.
		 */
		function wbls_fw_paging_nav() {
			// Don't print empty markup if there's only one page.
			if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
				return;
			}
			?>
			<nav class="navigation paging-navigation clearfix" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'webulous-framework' ); ?></h1>
				<div class="nav-links">

					<?php if ( get_next_posts_link() ) : ?>
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'webulous-framework' ) ); ?></div>
					<?php endif; ?>

					<?php if ( get_previous_posts_link() ) : ?>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'webulous-framework' ) ); ?></div>
					<?php endif; ?>

				</div><!-- .nav-links -->
			</nav><!-- .navigation -->
			<?php
		}
	endif;

	if( ! function_exists( 'wbls_fw_pagination' )) {
		/**
		 * Generates Pagination without WP-PageNavi Plugin
		 */

		function wbls_fw_pagination($before = '', $after = '') {
			global $wpdb, $wp_query;
			$request = $wp_query->request;
			$posts_per_page = intval(get_query_var('posts_per_page'));
			$paged = intval(get_query_var('paged'));
			$numposts = $wp_query->found_posts;
			$max_page = $wp_query->max_num_pages;
			if ( $numposts <= $posts_per_page ) { return; }
			if(empty($paged) || $paged == 0) {
				$paged = 1;
			}
			$pages_to_show = 7;
			$pages_to_show_minus_1 = $pages_to_show-1;
			$half_page_start = floor($pages_to_show_minus_1/2);
			$half_page_end = ceil($pages_to_show_minus_1/2);
			$start_page = $paged - $half_page_start;
			if($start_page <= 0) {
				$start_page = 1;
			}
			$end_page = $paged + $half_page_end;
			if(($end_page - $start_page) != $pages_to_show_minus_1) {
				$end_page = $start_page + $pages_to_show_minus_1;
			}
			if($end_page > $max_page) {
				$start_page = $max_page - $pages_to_show_minus_1;
				$end_page = $max_page;
			}
			if($start_page <= 0) {
				$start_page = 1;
			}
			echo $before.'<nav class="page-navigation"><ol class="webulous_page_navi clearfix">'."";
			if ($start_page >= 2 && $pages_to_show < $max_page) {
				$first_page_text = __( "First", 'webulous-framework' );
				echo '<li class="bpn-first-page-link"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
			}
			echo '<li class="bpn-prev-link">';
			previous_posts_link('<<');
			echo '</li>';
			for($i = $start_page; $i  <= $end_page; $i++) {
				if($i == $paged) {
					echo '<li class="bpn-current">'.$i.'</li>';
				} else {
					echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
				}
			}
			echo '<li class="bpn-next-link">';
			next_posts_link('>>');
			echo '</li>';
			if ($end_page < $max_page) {
				$last_page_text = __( "Last", 'webulous-framework' );
				echo '<li class="bpn-last-page-link"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
			}
			echo '</ol></nav>'.$after."";
		}
	} /* wbls_pagination */


// Related Posts Function by category (call using wbls_related_posts(); ) /NecessarY/ May be write a shortcode?
if( ! function_exists( 'wbls_fw_related_posts' )) {

	function wbls_fw_related_posts() {
		echo '<ul id="webulous-related-posts">';
		global $post;
		$categories = get_the_category($post->ID);     
		if ($categories) {
			$category_ids = array();
			foreach($categories as $category) {
			     $category_ids = $category->term_id; 
			}  
			$args = array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'posts_per_page'=> 5,  
				'post_type' => 'portfolio', // Number of related posts that will be displayed.	
	        );
	        $related_posts = get_posts($args);
	        if($related_posts) { 
	        	foreach ($related_posts as $post) : setup_postdata($post); ?>
		           	<li class="related_post">
		           		<a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('recent-work'); ?></a>
		           		<a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		           	</li>
		        <?php endforeach; }
		    else {
	            echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'webulous-framework' ) . '</li>'; 
			 }
		}else{
			echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'webulous-framework' ) . '</li>';
		}
		wp_reset_query();
		
		echo '</ul>';
	}
}



	function wbls_fw_portfolio_breadcrumbs() {
		if ( get_theme_mod ('breadcrumb',true) && function_exists( 'wbls_fw_breadcrumbs' ) ) {
			wbls_fw_breadcrumbs();
		}
	}


	/*  Site Layout Option  */

	function wbls_fw_layout_class() {
	     $sidebar_position = get_theme_mod( 'sidebar_position', 'right' ); 
			 if( 'fullwidth' == $sidebar_position ) {
		     	echo 'sixteen';
		     }elseif('two-sidebar' == $sidebar_position || 'two-sidebar-left' == $sidebar_position || 'two-sidebar-right' == $sidebar_position ) {
		     	echo 'eight';
		     }
		     else{
		     	echo 'eleven';
		     }
		     if ( 'no-sidebar' == $sidebar_position ) {
		     	echo ' no-sidebar';
		     }
	}
/* Two Sidebar Left action */

add_action('wbls_fw_two_sidebar_left','wbls_fw_double_sidebar_left'); 
 function wbls_fw_double_sidebar_left() {
   $sidebar_position = get_theme_mod( 'sidebar_position', 'right' ); 
		if( 'two-sidebar' == $sidebar_position || 'two-sidebar-left' == $sidebar_position ) :
			 get_sidebar('left'); 
		endif; 
		if('two-sidebar-left' == $sidebar_position || 'left' == $sidebar_position ):
			get_sidebar(); 
		endif; 
 }	 

/* Two Sidebar Right action */

 add_action('wbls_fw_two_sidebar_right','wbls_fw_double_sidebar_right'); 	
  function wbls_fw_double_sidebar_right() {
  	$sidebar_position = get_theme_mod( 'sidebar_position', 'right' ); 
		 if( 'two-sidebar' == $sidebar_position || 'two-sidebar-right' == $sidebar_position || 'right' == $sidebar_position) :
			 get_sidebar(); 
		endif; 	
		if('two-sidebar-right' == $sidebar_position ):
			get_sidebar('left'); 
		endif;	
 }
	
	/*
	 * Add Additional image sizes
	 *
	 */

	add_image_size( 'webulous-framework_recent_posts_img', 380, 300, true );
	add_image_size( 'webulous-framework_blog-full-width', 1200,350, true );
	add_image_size( 'webulous-framework-recent_page_img', 150, 150, true ); 

