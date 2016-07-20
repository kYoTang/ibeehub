<?php


	add_image_size( 'wbls-modulus-recent_posts_img', 370, 300, true );
    add_image_size( 'wbls-modulus-recent_posts_slider_img', 1125, 430, true );
    add_image_size( 'wbls-modulus-blog-full-width', 1200,350, true );
	add_image_size( 'wbls-modulus-small-featured-image-width', 450,300, true );
	add_image_size( 'wbls-modulus-blog-large-width', 800,300, true ); 
	add_image_size( 'wbls-modulus-recent_page_img', 150, 150, true ); 


// portfolio paging nav //

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
				<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'wbls-modulus' ); ?></h1>  
				<div class="nav-links">

					<?php if ( get_next_posts_link() ) : ?>
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav"><span>&larr;</span></span> Older posts', 'wbls-modulus' ) ); ?></div>
					<?php endif; ?>

					<?php if ( get_previous_posts_link() ) : ?>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav"><span>&rarr;</span></span>', 'wbls-modulus' ) ); ?></div>
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
		echo $before.'<nav class="page-navigation"><ol class="webulous_page_navi pagination">'."";
		if ($start_page >= 2 && $pages_to_show < $max_page) {
			$first_page_text = __( "First", 'wbls-modulus' );
			echo '<li class="bpn-first-page-link rippler rippler-default"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
		}
		echo '<li class="bpn-prev-link rippler rippler-default">';
		previous_posts_link('&nbsp;');
		echo '</li>';
		for($i = $start_page; $i  <= $end_page; $i++) {
			if($i == $paged) {
				echo '<li class="bpn-current">'.$i.'</li>';
			} else {
				echo '<li class="rippler rippler-default"><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
			}
		}
		echo '<li class="bpn-next-link rippler rippler-default">';
		next_posts_link('&nbsp;');
		echo '</li>';
		if ($end_page < $max_page) {
			$last_page_text = __( "Last", 'wbls-modulus' );
			echo '<li class="bpn-last-page-link rippler rippler-default"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
		}
		echo '</ol></nav>'.$after."";
	}
	} /* wbls_pagination */

	
//  Readmore button html wrapper //

function wbls_modulus_add_more_link_class_wrapper( $link, $text  ) {

	$html = '';

		$html .= '<p class="portfolio-readmore"><a class="more-link rippler rippler-default"' . $link . '</a></p>';

	return $html;
}


add_filter( 'the_content_more_link', 'wbls_modulus_add_more_link_class_wrapper', 10, 2 );
 

add_action( 'wbls_fw_portfolio_before_breadcrumbs', 'wbls_modulus_portfolio_before_breadcrumbs' );

if( ! function_exists('wbls_modulus_portfolio_before_breadcrumbs') ) {
	function wbls_modulus_portfolio_before_breadcrumbs() {
		$output = '';
		$output .= '<div class="breadcrumb"><div class="container"><div class="breadcrumb-left eight columns"><h4>';
	    $output .=  get_the_title(); 
	    $output .= '</h4></div>';
	    $breadcrumb = get_theme_mod( 'breadcrumb',true ); 
	    if( $breadcrumb ) :	
			$output .='<div class="breadcrumb-right eight columns">'; 
		endif;	
		echo $output;    
	}
}


add_action( 'wbls_fw_portfolio_after_breadcrumbs', 'wbls_modulus_portfolio_after_breadcrumbs' );

if( ! function_exists('wbls_modulus_portfolio_after_breadcrumbs') ) {
	function wbls_modulus_portfolio_after_breadcrumbs() {
		$output = '';
		$breadcrumb = get_theme_mod( 'breadcrumb',true ); 
	    if( $breadcrumb ) :	
	       $output .= '</div>';
	    endif;					
	    $output .= '</div></div>';
		echo $output;
		do_action('modulus_before_content');	
         
	}
}


add_action( 'wbls_fw_portfolio_breadcrumbs', 'wbls_modulus_portfolio_breadcrumbs' );

if( ! function_exists('wbls_modulus_portfolio_breadcrumbs') ) {
	function wbls_modulus_portfolio_breadcrumbs() {
		$breadcrumb = get_theme_mod( 'breadcrumb',true ); 
	    if( $breadcrumb ) :
          modulus_breadcrumbs();
        endif;
	}
}


add_filter('siteorigin_panels_css_row_margin_bottom','wbls_modulus_panels_css_row_margin_bottom');

function wbls_modulus_panels_css_row_margin_bottom( $panels_margin_bottom ) {
	if ( $panels_margin_bottom == '30px' ) {
		 $panels_margin_bottom = '100px!important';
	}else {
		$panels_margin_bottom = $panels_margin_bottom.'!important';
	}
	return $panels_margin_bottom;
} 




// Related Posts Function (call using wbls_modulus_related_posts(); ) /NecessarY/ May be write a shortcode?
	function wbls_modulus_related_posts() {
		echo '<ul id="webulous-related-posts">';
		global $post;
		$tags = wp_get_post_tags($post->ID);
		$tag_arr = '';
		if($tags) {
			foreach($tags as $tag) { $tag_arr .= $tag->slug . ','; }
	        $args = array(
	        	'tag' => $tag_arr,
	        	'numberposts' => 5, /* you can change this to show more */
	        	'post__not_in' => array($post->ID)
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
	            echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'wbls-modulus' ) . '</li>'; 
			 }
		}else{
			echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'wbls-modulus' ) . '</li>';
		}
		wp_reset_query();
		
		echo '</ul>';
	}

function wbls_modulus_author() {
	$byline = sprintf(
		_x( '%s', 'post author', 'wbls-modulus' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><i class="fa fa-user"></i> ' . esc_html( get_the_author() ) . '</a></span>'
	);	

	echo $byline;
}

function wbls_modulus_comments_meta() {
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo ' <span class="comments-link"><i class="fa fa-comments"></i>';
		comments_popup_link( __( 'Leave a comment', 'modulus' ), __( '1 Comment', 'wbls-modulus' ), __( '% Comments', 'wbls-modulus' ) );
		echo '</span>';

	}	
}  

function wbls_modulus_get_author() {
	$byline = sprintf(
		_x( '%s', 'post author', 'wbls-modulus' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><i class="fa fa-user"></i> ' . esc_html( get_the_author() ) . '</a></span>'
	);	

	return $byline;
}


function wbls_modulus_get_comments_meta() {
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		$comments_meta = '<span class="comments-link"><i class="fa fa-comments"></i>';
		$comments_meta .= get_comments_popup_link( __( 'Leave a comment', 'wbls-modulus' ), __( '1 Comment', 'modulus' ), __( '% Comments', 'wbls-modulus' ) );
		$comments_meta .=  '</span>';
		return $comments_meta;

	}	
}

/*  Site Layout Option  */

function wbls_modulus_layout_class() {
     $sidebar_position = get_theme_mod( 'sidebar_position', 'right' ); 
	     if( 'fullwidth' == $sidebar_position ) {
	     	echo 'sixteen';
	     }else{
	     	echo 'eleven';
	     }
	     if ( 'no-sidebar' == $sidebar_position ) {
	     	echo ' no-sidebar';
	     }
}