<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 26/11/15
	 * Time: 11:10 AM
	 */
if( ! class_exists( 'Wbls_Theme_Shortcode' ) ) {
	class Wbls_Theme_Shortcode {

		public function redefine(){     

			remove_shortcode('skill');
			remove_shortcode('stats');
			remove_shortcode('testimonial');
			remove_shortcode('cta');
		    remove_shortcode('quote');
		    remove_shortcode('recent_posts');


   			add_shortcode( 'skill', array( $this, 'skill' ) );
   			add_shortcode('stats', array( $this, 'stats' ) );
   			add_shortcode( 'testimonial', array( $this, 'testimonial' ) );
   			add_shortcode( 'cta', array( $this, 'cta' ) );
   			add_shortcode( 'quote', array( $this, 'quote' ) );
   			add_shortcode( 'recent_posts', array( $this, 'recent_posts_types' ) );


		

			/*
		
			add_shortcode('stats', array( $this, 'stats' ) );
			add_shortcode( 'accordion_group', array( $this, 'accordion_group' ) );
			add_shortcode( 'accordion', array( $this, 'accordion' ) );
			add_shortcode( 'alert', array( $this, 'alert' ) );
			add_shortcode( 'button', array( $this, 'button' ) );
			add_shortcode( 'clear', array( $this, 'clear' ) );
			add_shortcode( 'cta', array( $this, 'cta' ) );
			add_shortcode( 'divider', array( $this, 'divider' ) );
			add_shortcode( 'dropcap', array( $this, 'dropcap' ) );
			add_shortcode( 'elastic_slider', array( $this, 'elastic_slider' ) );
			add_shortcode( 'flexslider', array( $this, 'flexslider' ) );
			add_shortcode( 'gap', array( $this, 'gap' ) );
			add_shortcode( 'googlefont', array( $this, 'googlefont' ) );  
			add_shortcode( 'headline', array( $this, 'headline' ) );
			add_shortcode( 'highlight', array( $this, 'highlight' ) );
			add_shortcode( 'icon', array( $this, 'icon' ) );
			add_shortcode( 'ourteam', array( $this, 'ourteam' ) );

			add_shortcode( 'quote', array( $this, 'quote' ) );
			add_shortcode( 'skill', array( $this, 'skill' ) );
			add_shortcode( 'social_networks', array( $this, 'social_networks' ) );
			add_shortcode( 'soundcloud', array( $this, 'soundcloud' ) );
			add_shortcode( 'tabs_group', array( $this, 'tabs_group' ) );
			add_shortcode( 'testimonial', array( $this, 'testimonial' ) );
			add_shortcode( 'toggle', array( $this, 'toggle' ) );
			add_shortcode( 'tooltip', array( $this, 'tooltip' ) );
			add_shortcode( 'video', array( $this, 'video' ) );
			add_shortcode( 'recent_work', array( $this, 'recent_projects_carousel' ) );
			add_shortcode( 'recent_work_isotope', array( $this, 'recent_projects_isotope' ) );
			add_shortcode( 'recent_posts', array( $this, 'recent_posts_sc' ) );
			add_shortcode( 'recent_posts', array( $this, 'recent_posts_types' ) );
			*/
		}
		

		public function remove_wpautop( $content ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			$content = preg_replace('#^<\/p>|^<br \/>|<p>$#', '', $content);
			return $content;
		}

		/*	Accordion */
		public function accordion_group( $atts, $content = null ) {

			$output = '';
			$output .= '<div class="accordion">';
			$output .= do_shortcode( $content );
			$output .= '</div>';
			return $output;

		}

		public function accordion( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'title' => ''
			), $atts) );

			$output = '';
			$output .= '<h3>'.$title.'</h3>';
			$output .= '<div class="acc_content">';
			$output .= do_shortcode($content);
			$output .= '</div>';
			return $output;

		}

		/*	Alert   */
		public function alert( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'type' 	=> 'warning',
				'close'	=> '1'
			), $atts ) );

			if(!$close) {
				$var1 = '<a class="alert-close" href="#">x</a>';
			} else {
				$var1 = '';
			}

			$output = '';
			$output .= '<div class="alert-message ' . esc_attr( $type ) . '">' . $var1;
			$output .= do_shortcode($content);
			$output .= '</div>';

			return $output;
		}

		/*  Button  */
		public function button( $atts, $content = null ) {
			extract(shortcode_atts(array(
				'link'      => '#',
				'target'    => '_self',
				'color'     => 'btn',
				'size'    	=> 'medium',
			), $atts));

			/*
			switch ( $color ) {
				case 'green':
					$color = 'btn-success';
					break;
				case 'yellow':
					$color = 'btn-warning';
					break;
				case 'red':
					$color = 'btn-danger';
					break;
				case 'blue':
					$color = 'btn-info';
					break;
				case 'darkgrey':
					$color = 'btn-inverse';
					break;
				default:
					$color = 'btn-primary';
					break;
			}
			*/

			$output = '';
			$output .= '<a href="' . esc_url( $link ) .'"';
			$output .= 'target="' . esc_attr( $target ) . '" ';
			$output .= 'class="btn ' . esc_attr( $color ) . ' ' . esc_attr( $size ) .'">';
			$output .= do_shortcode($content);
			$output .= '</a>';
			return $output;
		}

		/* Divider */
		public function divider( $atts, $content = null) {
			extract( shortcode_atts( array(
				'style' => 'solid'
			), $atts ) );

			return '<div class="hr_' . esc_attr( $style ) . '"></div>';
		}

		/* Call to action */    
		public function cta ( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'title' => '',
				'url' => '',
				'anchor_text' => ''     
			), $atts ) );
   
		$output = '';
		$output .= '<div class="callout-widget">';
			$output .= '<div class="container">';
				$output .= '<div class="twelve columns">';
					$output .= '<h4>' . esc_html( $title ) . '</h4>';   
					$output .= '<p>';
					$output .= do_shortcode( $content );
					$output .= '</p>';
				$output .= '</div>';
				$output .= '<div class="four columns">';
					$output .= '<a href="' . esc_url( $url ) . '">' . esc_html( $anchor_text ) . '</a>';
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div>';
		return apply_filters( 'cta_shortcode_html', $output );
		}

		/* Clear */
		public function clear ( $atts, $content = null ) {
			return '<div class="clear"></div>';
		}

		/* Dropcap */
		public function dropcap( $atts, $content = null) {
			extract( shortcode_atts( array(
				'style' => 'default'
			), $atts ) );

			$first_letter = substr($content, 0, 1);
			$rest = substr($content, 1);

			return '<span class="dropcap dropcap-'. esc_attr( $style ) .'">' . do_shortcode( $first_letter ) . '</span>' . $rest;
		}

		/* Elastic Slider */
		public function elastic_slider( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'name' => ''
			), $atts ) );

			if ( $name == '' ) return;
			$args = array(
				'post_type' => 'elastic_slider',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'elastic_slider_group',
						'field' => 'slug',
						'terms' => $name
					),
				)
			);

			$output = '';

			$loop = new WP_Query( $args );

			if( $loop->have_posts() ) {
				$output .= '<div id="ei-slider" class="ei-slider">';
				$output .= '<ul class="ei-slider-large">';
			} else {
				return $output;
			}

			while ( $loop->have_posts() ) {
				$loop->the_post();
				if( has_post_thumbnail( ) ) {
					// $url = wp_get_attachment_url( get_post_thumbnail_id($loop->post->ID) );
					$output .= '<li>';
					$output .= get_the_post_thumbnail( $loop->post->ID, 'full_width' );
					$output .= '<div class="ei-title">';
					$output .= '<h2>' . get_post_meta( $loop->post->ID, '_wbls_ei_caption_title1', true ) . '</h2>';
					$output .= '<h3>' . get_post_meta( $loop->post->ID, '_wbls_ei_caption_title2', true ) . '</h3>';
					$output .= '</div>';
					$output .= '</li>';
				}
			}

			$output .= '</ul><!-- .ei-slider-large -->';
			$loop->rewind_posts();
			$output .= '<ul class="ei-slider-thumbs">';
			$output .= '<li class="ei-slider-element">' . __('Current','modulus') . '</li>';
			$count = 1;
			while( $loop->have_posts() ) {
				$loop->the_post();
				if( has_post_thumbnail() ) {
					$output .= '<li><a href="#">Slide '. $count .'</a>' . get_the_post_thumbnail( $loop->post->ID ) .'</li>';
					$count++;
				}
			}

			$loop = null;
			$output .= '</ul><!-- .ei-slider-thumbs -->';
			$output .= '</div><!-- .ei-slider -->';
			wp_reset_postdata();
			return $output;
		}

		/* Flex Slider */
		public function flexslider( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'name' => '',
				'type' => 'slider'
			), $atts ) );

			if ( $name == '' ) return;
			$args = array(
				'post_type' => 'flexslider',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'flexslider_group',
						'field' => 'slug',
						'terms' => $name
					)
				)
			);

			$output = '';

			$loop = new WP_Query( $args );

			if( $loop->have_posts() ) {
				$output .= '<div class="flex-container">';
				if( 'slider' == $type) {
					$output .= '<div class="flexslider">';
				} else {
					$output .= '<div class="flexcarousel">';
				}

				$output .= '<ul class="slides">';

				while ( $loop->have_posts() ) {
					$loop->the_post();
					if( has_post_thumbnail( ) ) {
						$output .= '<li><div class="flex-image">' . get_the_post_thumbnail( $loop->post->ID, 'full_width') . '</div>';
						if ( trim(get_the_content( ) ) != '' ) {
							$output .= '<div class="flex-caption">' . get_the_content( ) . '</div>';
						}
						$output .= '</li>';
					}
				}
			}

			$loop = null;
			$output .= '</ul>';
			$output .= '</div>';
			$output .= '</div>';
			wp_reset_postdata();
			return $output;
		}

		/* Icon */
		public function icon( $atts, $content = null) {
			extract( shortcode_atts( array(
				'icon' => 'none',
				'size' => '',
				'style' => '',
				//'align' => 'left',
			), $atts ) );
    
			$classes = '';

			if( $style != '' ) {
				$classes = $style . ' ';
			}

			$classes .= 'fa ' . $icon;

			$classes .= ($size == '') ? '' : ' fa-'.$size;


			return '<i class="' . $classes .'"></i> ';
		}

		/* Vertical Gap */
		public function gap( $atts, $content = null) {
			extract( shortcode_atts( array(
				'height' 	=> '10'
			), $atts ) );

			if($height == '') {
				$gap = '';
			} else {
				$gap = 'style="height: '.$height.'px;"';
			}

			return '<div class="gap" ' . $gap . '></div>';
		}

		/* Google Font */
		public function googlefont( $atts, $content = null) {
			extract( shortcode_atts( array(
				'font_family' => 'Lato',
				'size' => '42',
				'weights' => '',
				'weight' => '',
			), $atts ) );

			$google_font = preg_replace("/ /","+",$font_family);

			$output = '';
			$output .= '<link href="http://fonts.googleapis.com/css?family='.$google_font.':'.$weights.'" ';
			$output .= 'rel="stylesheet" type="text/css">';
			$output .= '<div class="googlefont" style="font-family:\'' .$font_family. '\', serif !important; ';
			$output .= 'font-size:' .$size. 'px !important; font-weight:'.$weight.'">';
			$output .= do_shortcode($content);
			$output .= '</div>';

			return $output;
		}

		/* Headline */
		public function headline( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'level' => 1,
				'type' => 'normal',
				'align' => 'left',
			), $atts ) );

			if($type == 'normal') {
				$type_class = ' class="' . esc_attr( $align ) . '"';
			} else {
				$type_class = ' class="sep ' . esc_attr( $align ) . '"';
			}

			$output = '';
			switch ($level) {
				case 1:
					$output .= '<h1' . esc_attr( $type_class ) . '>' . do_shortcode( $content ) . '</h1>';
					break;

				case 2:
					$output .= '<h2' . esc_attr( $type_class ) . '>' . do_shortcode( $content ) . '</h2>';
					break;

				case 3:
					$output .= '<h3' . esc_attr( $type_class ) . '>' . do_shortcode( $content ) . '</h3>';
					break;

				case 4:
					$output .= '<h4' . esc_attr( $type_class ) . '>' . do_shortcode( $content ) . '</h4>';
					break;

				case 5:
					$output .= '<h5' . esc_attr( $type_class ) . '>' . do_shortcode( $content ) . '</h5>';
					break;

				case 6:
					$output .= '<h6' . esc_attr( $type_class ) . '>' . do_shortcode( $content ) . '</h6>';
					break;
			}

			return $output;
		}

		/* Highlight */
		public function highlight( $atts, $content = null) {
			extract( shortcode_atts( array(
				'color' => 'black',
				'bgcolor' => '#F6F67A'
			), $atts ) );

			$output = '';
			$output .= '<span class="highlight" style="color:' . $color . '; background-color: ' . $bgcolor . '">';
			$output .= do_shortcode($content);
			$output .= '</span>';
			return $output;
		}

		/* Our Team */
		public function ourteam( $atts, $content = null) {
			extract( shortcode_atts( array(
				'image_url' => '',
				'title' => '',
				'designation' => '',
				'linkedin' => '',
				'google' => '',
				'twitter' => '',    
				'facebook' => ''   
			), $atts ) );

			$linkedin = isset($linkedin) ? trim($linkedin) : '';
			$google = isset($google) ? trim($google) : '';
			$twitter = isset($twitter) ? trim($twitter) : '';
			$facebook = isset($facebook) ? trim($facebook) : '';
			$title = isset($title) ? trim($title) : '';
			$designation = isset($designation) ? trim($designation) : '';
			$image_url = isset($image_url) ? trim($image_url) : '';

			$output = '';
			$output .= '<div class="our-team">';
			if($image_url) :
				$output .= '<div class="team-avatar">';
				$output .= '<img alt="" src="' . esc_url( $image_url ) .'">';
				$output .= '</div>';
			endif;
			$output .= '<div class="team-content">';
				$output .= '<h4>' . esc_html( $title ).' <span>' . esc_html( $designation ) .'</span></h4>';
				$output .= '<p>';
				$output .= do_shortcode($content);  
				$output .= '</p>';	
			if( $linkedin || $google || $twitter || $facebook ) :
				$output .= '<ul class="team-social">';
				if( $linkedin ) :
					$output .= '<li><a href="'. esc_url( $linkedin ) .'"><i class="fa fa-linkedin fa-lg"></i></a></li>';
				endif;
				if( $google ) :
					$output .= '<li><a href="'. esc_url( $google ) . '"><i class="fa fa-google-plus fa-lg"></i></a></li>';
				endif;
				if( $twitter ) :
					$output .= '<li><a href="' . esc_url( $twitter ) . '"><i class="fa fa-twitter fa-lg"></i></a></li>';
				endif;
				if( $facebook ) :
					$output .= '<li><a href="' . esc_url( $facebook ) .'"><i class="fa fa-facebook fa-lg"></i></a></li>';
				endif;
				$output .= '</ul>';
			endif;
			$output .= '</div>';     
		$output .= '</div>';

			return apply_filters( 'ourteam_shortcode_html', $output );
		}

		/* Skill */
		public function skill( $atts, $content = null) {

			$args = array(
				'post_type' => 'skill',
				'posts_per_page' => -1,  
			);

			$output = '';
   
			$loop = new WP_Query( $args );

			if( $loop->have_posts() ) {
				while ( $loop->have_posts() ) {     
				$loop->the_post(); 
					$output .= '<div class="skill-container">';
					$output .= '<span class="fa-stack fa-lg">';
					  $output .= '<i class="fa fa-circle fa-stack-2x"></i>';
					  $output .= '<i class="fa ' . get_post_meta( $loop->post->ID, '_wbls_skill_icon', true ) . ' fa-stack-1x fa-inverse"></i>';
					$output .= '</span>';
					$output .= '<div class="skill">';
					$output .= '<div class="skill-percentage percent' . get_post_meta( $loop->post->ID, '_wbls_skill_percentage', true ) .' start"></div>';
					$output .= '<div class="skill-content">'  . get_the_title() .'<div class="txt-count"> <span class="count">'. get_post_meta( $loop->post->ID, '_wbls_skill_percentage', true ) . '</span>%</div></div>';
					$output .= '</div>';
					$output .= '</div>';
				}
			}

			$loop = null;
			wp_reset_postdata();
			return $output;
		}

		

		/* Sound Cloud */
		public function soundcloud( $atts, $content = null) {
			extract( shortcode_atts( array(
				'url' => '',
				'width' => '100%',
				'height' => 80,
				'comments' => 0,
				'auto_play' => 0,
				'color' => 'ff7700',
			), $atts) );

			$comments = ($comments == 0) ? 'false' : 'true';
			$auto_play = ($auto_play == 0) ? 'false' : 'true';

			$output = '';
			$output .= '<object height="' . esc_attr( $height ) . '" width="' . esc_attr( $width ) . '">';
			$output .= '<param name="movie" value="http://player.soundcloud.com/player.swf?url=' . urlencode($url);
			$output .= '&amp;show_comments=' . $comments . '&amp;auto_play=' . $auto_play;
			$output .= '&amp;color=' . $color . '"></param>';
			$output .= '<param name="allowscriptaccess" value="always"></param>';
			$output .= '<embed allowscriptaccess="always" height="' . esc_attr( $height ) . '" ';
			$output .= 'src="http://player.soundcloud.com/player.swf?url=' . urlencode($url);
			$output .= '&amp;show_comments=' . $comments;
			$output .= '&amp;auto_play=' . $auto_play;
			$output .= '&amp;color=' . esc_attr( $color ) . '" ';
			$output .= 'type="application/x-shockwave-flash" width="' . esc_attr( $width );
			$output .= '"></embed></object>';
			return $output;
		}


		/* Quote */
		public function quote( $atts, $content = null ){
			extract(shortcode_atts(array(
				'align' => 'none',
			), $atts));

			$output = '';
			$output .= '<div class="pull'. esc_attr( $align ).'"><span>';  
			$output .= do_shortcode( $content );
			$output .= '</div><span>';

			return $output;
		}

			/*	Tabs */

		public function tabs_group( $atts, $content = null ) {

			extract(shortcode_atts(array(
				'type' => 'normal',
			), $atts));

			if (!preg_match_all('~\[tabs([^\[\]]*)]([^\[\]]+)\[/tabs]~', $content, $matches)) {

				return $this->remove_wpautop( $content );

			} else {

				$output = '';   
				$output .= '<ul>';    
				$tab_id = array();
				for($i = 0; $i < count($matches[1]); $i++) {  
					$tab_id[$i] = uniqid('tab_');
					$output .= '<li><a href="#'.$tab_id[$i].'">' . str_replace(array('title="', '"'), '', $matches[1][$i]) . '</a></li>';
				}
				$output .= '</ul>';
				$output .= '<div class="tabs_container">';
				for($i = 0; $i < count($matches[2]); $i++) {
					$output .= '<div id="'.$tab_id[$i].'">' . $this->remove_wpautop( $matches[2][$i] ) . '</div>';
				}
				$output .= '</div>';

				return '<div class="tabs ' . $type . '">' . $output . '</div>';

			}     
		}  



		public function testimonial( $atts, $content = null ){       
			extract( shortcode_atts( array(
				'count' => '5'
			), $atts ) );

			$args = array(
				'post_type' => 'testimonial',      
				'posts_per_page' => $count,
			);

			$output = '';

			$loop = new WP_Query( $args );

			if( $loop->have_posts() ) {
				$output .= '<div class="testimonial-container">';
				$output .= '<div class="testimonials">';
				$output .= '<ul class="slides">';

				while ( $loop->have_posts() ) {   
					$loop->the_post();
					$output .= '<li>';  
					if( has_post_thumbnail() ) {
						$output .= '<div class="client-pic">' . get_the_post_thumbnail($loop->post->ID, array(150,150) ) . '</div>'; 
					}	
					$output .= '<div class="testimony"><div class="t-inner">' . get_post_meta( $loop->post->ID, '_wbls_testimonial_text', true ) . '</div></div>';	
					$output .= '<p class="client"><strong>'. get_post_meta( $loop->post->ID, '_wbls_testimonial_client_name', true ) . ',</strong>' . get_post_meta( $loop->post->ID, '_wbls_testimonial_company_name', true ) . '</p>';
					$output .= '</li>';
				}
			}
			$loop = null;
			wp_reset_postdata();
			$output .= '</ul>';
			$output .= '</div>';
			$output .= '</div>';
			return $output;
		}

		/*  Toggle  */
		public function toggle( $atts, $content = null ){
			extract(shortcode_atts(array(
				'title' => '',
				'type' => 'normal',
				'open' => false,
			), $atts));


			if( $open ) {  
				$toggle_class = 'open';
				$icon_class = 'fa fa-minus';
			} else {
				$toggle_class = 'close';
				$icon_class = 'fa fa-plus';
			}

			if( 'normal' == $type ) {
				$type_class = 'toggle-normal';
			} else {
				$type_class = 'toggle-polygon';
			}
			$output = '';
			$output .= '<div class="toggle ' . esc_attr( $type_class ) .'"><div class="toggle-title"><span class="t-title">' . esc_attr( $title ) . ' </span><span class="icn"><i class="'. esc_attr( $icon_class ) . '"></i></span></div><div class="toggle-content  ' . esc_attr( $toggle_class ) . '"><p>'. do_shortcode( $content ) . '</p></div></div>';

			return apply_filters( 'toggle_shortcode_html', $output );
		}


		/* Tooltip */
		public function tooltip( $atts, $content = null ) {
			extract(shortcode_atts(array(
				'tip' => '',
				'pos' => 'top'
			), $atts));

			return '<a href="#" data-toggle="tooltip" title="' . esc_attr( $tip ) . '" class="withtip ' . esc_attr( $pos ) .'">' . do_shortcode( $content ) .'</a>';
		}

		/* Video */
		public function video( $atts, $content = null) {
			extract( shortcode_atts( array(
				'type' => 'youtube',
				'video_id' => '',
				'height' => '315',
				'width' => '560'
			), $atts ) );

			$output = '';
			if(!$video_id) {
				return $output;
			} else {
				if($type === 'youtube') {
					$output .= '<iframe width="'. esc_attr( $width ) .'" height="' . esc_attr( $height ) . '" ';
					$output .= 'src="http://www.youtube.com/embed/' . esc_attr( $video_id ) .'" frameborder="0" allowfullscreen></iframe>';
				} else {
					$output .= '<iframe src="http://player.vimeo.com/video/' . esc_attr( $video_id ) .'" ';
					$output .= 'width="' . esc_attr( $width ) . '" height="' . esc_attr( $height ) .'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
				}
				return $output;
			}
		}

		/* Recent Projects Carousel */
		public function recent_projects_carousel( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'count' => '10'
			), $atts ) );

			$args = array(
				'post_type' => 'portfolio',
				'posts_per_page' => $count,
			);

			$output = '';

			$loop = new WP_Query( $args );

			if( $loop->have_posts() ) {
				$output .= '<div class="recent-work-container">';
				$output .= '<div class="recent-work">';
				$output .= '<ul class="slides">';

				while ( $loop->have_posts() ) {
					$loop->the_post();
					$output .= '<li>';
					$output .= '<div class="work">';
					$output .= '<a href="'. get_the_permalink() . '">' . get_the_post_thumbnail($loop->post->ID, 'recent-work' ) . '</a>';
					$cats = wp_get_post_categories($loop->post->ID);
					$output .= '<div class="recent_work_overlay">';
					$output .= '<a rel="prettyPhoto" href="'. get_the_permalink() . '"><i class="fa fa-link"></i></a>';
					$output .= '</div>';
					$output .= '</div>';
					$output .= '<div class="work-title">';
					$output .= '<h4><a href="'. get_the_permalink() . '">' . get_the_title() . '</a></h4>';
					if( ! empty( $cats ) ) {
						$cat = get_category($cats[0]);
						$output .= '<div class="cat-name">' . $cat->name . '</div>';
					}
					$output .= '</div>';
					$output .= '</li>';
				}
			}
			$loop = null;
			$output .= '</ul>';
			$output .= '</div>';
			$output .= '</div>';
			wp_reset_postdata();
			return $output;
		}

		/* Project isotopie */
		public function recent_projects_isotope( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'count' => '12',
				'type'	=> 'isotope'   
			), $atts ) );

			$args = array(
				'post_type' => 'portfolio',
				'posts_per_page' => $count,  
			);

			$output = '';

			$loop = new WP_Query( apply_filters( 'recent_work_query_args', $args ) );
			if( 'carousel' == $type ) {
				if( $loop->have_posts() ) {
					$output .= '<div class="recent-work-container">';
					$output .= '<div class="recent-work">';
					$output .= '<ul class="slides">';

					while ( $loop->have_posts() ) {
						$loop->the_post();
						$output .= '<li>';
						$output .= '<div class="work">';
						$output .= '<a href="'. get_the_permalink() . '">' . get_the_post_thumbnail($loop->post->ID, 'recent-work' ) . '</a>';
						$image_url = wp_get_attachment_url( get_post_thumbnail_id($loop->post->ID) );
						$cats = wp_get_post_categories($loop->post->ID);
						if( ! empty( $cats ) ) {
							$cat = get_category($cats[0]);
							$output .= '<div class="lbl-portfolio"><div class="lbl"><strong class="lbl-content">' . $cat->name . '</strong></div></div>';
						}
						$output .= '<div style="display: none;" class="recent_work_overlay">';
						$output .= '<div style="left: -42%;" class="overlay_icon">';
						$output .= '<a class="icon-zoom" rel="prettyPhoto" href="'. $image_url . '"><i class="fa fa-link"></i></a>';
						$output .= '<a class="icon-link" href="'. get_the_permalink() . '"><i class="fa fa-search"></i></a>';
						$output .= '</div>';
						$output .= '</div>';
						$output .= '<h4><a href="'. get_the_permalink() . '">' . get_the_title() . '</a></h4>';
						$output .= '</div>';
						$output .= '</li>';
					}
				}
				$loop = null;
				wp_reset_postdata();
				$output .= '</ul>';
				$output .= '</div>';
				$output .= '</div>';
				return apply_filters( 'recent_work_shortcode_html', $output );

			} else {
				$output = '';
				$output .= '<style type="text/css">.item { overflow: hidden; width: 31.3%; margin: 1%; }';
		        $output .= '#filters, #portfolio { padding: 0; } </style>';
				$output .= '<div id="isolate">';
				$output .= '<div id="filters">';
				$terms = get_terms("skills");
				$count = count($terms);
				if ( $count > 0 ) {
					$output .= '<ul class="filter-options" data-option-key="filter">';
					$output .= '<li><a href="#filter" data-option-value="*">All</a></li>';
					foreach ( $terms as $term ) {
						$output .= '<li><a href="#filter" data-option-value=".' . str_replace(' ' , '-', $term->name) . '">' . $term->name . '</a></li>';
					}
					$output .= '</ul>';
				}
				$output .= '<div class="clearfix"></div>';
				$output .= '</div>';

				$output .= '<ul id="portfolio">';
				if ($loop->have_posts()) : while ($loop->have_posts()) :
					$loop->the_post();
					$terms = get_the_terms( $loop->post->ID, 'skills' );

					if ( $terms && ! is_wp_error( $terms ) ) {
						$skills = array();
						foreach ( $terms as $term ) {
							$skills[] = str_replace(' ' , '-', $term->name);
						}
					}
					if( empty( $skills ) ) {
						$skills = '';
					}
					else {
						$skills = join( " ", $skills );
					}
					$output .= '<li class="item ' . $skills .'">';

					$output .= '<div class="portfolio3col">';
					$wbls_portfolio_video_type =  get_post_meta( $loop->post->ID, '_wbls_portfolio_video_type', true);
					$portfolio_video_id =  trim(get_post_meta( $loop->post->ID, '_wbls_portfolio_video_id', true));
					$portfolio_project_url =  trim(get_post_meta( $loop->post->ID, '_wbls_portfolio_project_url', true));
					$portfolio_project_link_text =  trim(get_post_meta( $loop->post->ID, '_wbls_portfolio_project_link_text', true));
					$output .= '<div class="img-wrap">';
					$output .= '<a href="' . get_the_permalink() . '">'. get_the_post_thumbnail( $loop->post->ID, 'portfolio3col' ) . '</a>';
					$output .= '<div class="overlay_icon" >';

					if( $wbls_portfolio_video_type != 'none' && $portfolio_video_id != '' ) {
						if( $wbls_portfolio_video_type == 'vimeo' ) {
							$output .= '<a class="icon-zoom" href="http://vimeo.com/' . $portfolio_video_id .'" rel="prettyPhoto"><i class="fa fa-search"></i></a>';
						} else {
							$output .= '<a class="icon-zoom" href="http://www.youtube.com/watch?v=' . $portfolio_video_id . '" rel="prettyPhoto"><i class="fa fa-search"></i></a>';
						}
					} else {
						$url = wp_get_attachment_url( get_post_thumbnail_id($loop->post->ID) );
						$output .= '<a class="icon-zoom" title="' . get_the_title() . '"  href="' . esc_url( $url ) .'" rel="prettyPhoto"><i class="fa fa-search"></i></a>';
					}
					$output .= '<a class="icon-link" href="' . get_the_permalink() . '" title="' . get_the_title() . '"><i class="fa fa-link"></i></a>';
					$output .= '</div>';
					$output .= '</div><!-- portfolio_thumb -->';
					$output .= '<h4>' .$portfolio_project_link_text . '</h4>';
					$output .= '</div><!-- .portfolio3col -->';

					$output .= '</li>';
				endwhile; endif;
				$output .= '</ul></div>';
				$loop = null;
				wp_reset_postdata();
				return $output;
			}

			return $output;
		}

		// Recent Posts with featured Images
		public function recent_posts_sc( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'count' => get_option('posts_per_page')
			), $atts ) );

			$output = '';
			$output .= '<div class="flex-recent-posts">';
			$output .= '<ul class="slides">';
			// WP_Query arguments
			$args = array (
				'post_type'              => 'post',
				'post_status'            => 'publish',
				'posts_per_page'         => $count,
				'ignore_sticky_posts'    => true,
				'order'                  => 'DESC',
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$output .= '<li>';
					$output .= '<div class="recent-post">';  
					$output .= '<a class="post-readmore" href="'. get_permalink() . '" title="Read '.get_the_title().'">';
					if ( has_post_thumbnail() ) {
						$output .= get_the_post_thumbnail();
					}
					else {
						$output .= '<img src="' . WBLS_THEME_URI . 'public/images/thumbnail-default.png" alt="" >';
					}
					//$output .= get_the_excerpt();
					$output .= '<div class="post-title">';
					$output .= '<h4>'. get_the_title() . '</h4>';
					$output .= '</div>';
					$output .= '</a>';
					$output .= '</div>';
					$output .= '</li>';
				}
			}

			// Restore original Post Data
			wp_reset_postdata();
			$output .= '</ul>';
			$output .= '</div>';
			return $output;
		}
		

		// Recent Posts
		public function recent_posts_types( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'count' => get_option('posts_per_page'),
				'type'	=> 'normal'
			), $atts ) ); 
 
			$output = '';
			$output .= '<div class="recent-posts-wrapper">';

			switch( $type ) {
				case 'normal':
					$output .= '<div class="recent-posts">';
					break;
				case 'slider' :
					$output .= '<div class="recent-posts-slider">';
					break;
				case 'carousel' :
					$output .= '<div class="recent-posts-carousel">';
					break;
				default:
					$output .= '<div class="recent-posts">';
					break;
			}

			$output .= '<ul class="slides">';


			// WP_Query arguments
			$args = array (
				'post_type'              => 'post',
				'post_status'            => 'publish',
				'posts_per_page'         => $count,
				'ignore_sticky_posts'    => true,
				'order'                  => 'DESC',
			);
    
			// The Query
			$query = new WP_Query( apply_filters( 'recent_posts_args', $args ) );

			// The Loop
			if ( $query->have_posts() ) {
	            if( $type == 'normal' ) {
					$output .= '<div class="latest-posts">';
				}
				while ( $query->have_posts() ) {
					$query->the_post();	
					if( $type == 'normal' ) {	
						$output .= '<div class="one-third column">';
							$output .= '<div class="latest-post">';
									$output .= '<div class="latest-post-thumb">'; 
											if ( has_post_thumbnail() ) {
												$output .= get_the_post_thumbnail($query->post->ID ,'wbls-modulus-recent_posts_img');
											}
											else {
												$output .= '<img src="' . WBLS_THEME_URI . 'public/images/no-image.png" alt="" >';
											}
									$output .= '</div><!-- .latest-post-thumb -->';
								    $output .= '<h3><a href="'. get_permalink() . '">' . get_the_title() . '</a></h3>';
									$output .='<div class="entry-meta">';
										$output .='<span class="data-structure"><span class="dd"><i class="fa fa-calendar"></i>' . get_the_time('j M Y').'</span></span>';
										$output .= wbls_modulus_get_author();
										$output .= wbls_modulus_get_comments_meta();
									$output .='</div><!-- entry-meta -->';
										
								$output .= '<div class="latest-post-content">';
									$output .= '<p>' . get_the_excerpt() . '</p>';
								$output .= '</div><!-- .latest-post-content -->';
								$output .= '<p><a href="' . get_permalink() . '" class="btn-readmore">' . __( 'Read More','wbls-modulus' ) .'</a></p>';
							$output .= '</div><!-- .latest-post -->';
						$output .= '</div>';
					}elseif( $type == 'carousel' ) {
					        $output .= '<li>';
							$output .= '<div class="latest-post">';
									$output .= '<div class="latest-post-thumb">'; 
											if ( has_post_thumbnail() ) {
												$output .= get_the_post_thumbnail($query->post->ID ,'wbls-modulus-recent_posts_img');
											}
											else {
												$output .= '<img src="' . WBLS_THEME_URI . 'public/images/no-image.png" alt="" >';
											}
									$output .= '</div><!-- .latest-post-thumb -->';
								    $output .= '<h3><a href="'. get_permalink() . '">' . get_the_title() . '</a></h3>';
									$output .='<div class="entry-meta">';
										$output .='<span class="data-structure"><span class="dd"><i class="fa fa-calendar"></i>' . get_the_time('j M Y').'</span></span>';
										$output .= wbls_modulus_get_author();
										$output .= wbls_modulus_get_comments_meta();
									$output .='</div><!-- entry-meta -->';
										
								$output .= '<div class="latest-post-content">';
									$output .= '<p>' . get_the_excerpt() . '</p>';
								$output .= '</div><!-- .latest-post-content -->';
								$output .= '<p><a href="' . get_permalink() . '" class="btn-readmore">' . __( 'Read More','wbls-modulus' ) .'</a></p>';
							$output .= '</div><!-- .latest-post -->';
							$output .= '</li>';
				    }else {
				    	$output .= '<li>';
							$output .= '<div class="recent-post">';
							$output .= '<div class="rp-thumb">';	              
								if ( has_post_thumbnail() ) {
									$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), 'wbls-modulus-recent_posts_slider_img' );
									$output .= '<img src="' . $image_url[0] . '">';
								} else {
									$output .= '<img src="' . WBLS_THEME_URI . 'public/images/no-image-blog-full-width.png" alt="" >';     
								}
							$output .= '</div><!-- .rp-thumb -->';
							$output .= '<div class="rp-content flex-caption">';
							$output .= '<h4><a href="'.get_permalink().'">'. get_the_title() . '</a></h4>';
							$output .= get_the_excerpt();
							$output .= '</div><!-- .rp-content -->';
							$output .= '</div>';
							$output .= '</li>';
				    }
				}
			}

			$query = null;

			// Restore original Post Data
			wp_reset_postdata();
			$output .= '</ul>';
			$output .= '</div></div>';

			return apply_filters( 'recent_posts_shortcode_html', $output );
		}


		/* Stats */  
		public function stats( $atts, $content = null) {   

			extract( shortcode_atts( array(
				'id' => ''
			), $atts) );

			$args = array(
				'post_type' => 'stats',
				'p' => isset($id)? $id : '',   
			);

			$output = '';
			$loop = new WP_Query( $args );

			if( $loop->have_posts() ) {
				while ( $loop->have_posts() ) {        
					$loop->the_post();
					$output .= '<div class="stat-container">';
						$output .= '<div class="icon-wrapper">';
						  $output .= '<i class="fa ' . esc_attr( get_post_meta( $loop->post->ID, '_wbls_stat_icon', true ) ) . '"></i>';
						  $output .= '<h4 class="stat">' . esc_html( get_post_meta( $loop->post->ID, '_wbls_stat_number', true ) ) . '</h4>';
							$output .= '<h5 class="stats-title">' . get_the_title() . '</h5>';		
						$output .= '</div>';
					$output .= '</div>';
				}
			}

			$loop = null;
			wp_reset_postdata();

			return $output;
		}
	}
}

