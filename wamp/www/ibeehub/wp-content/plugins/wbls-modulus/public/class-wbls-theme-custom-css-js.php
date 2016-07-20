<?php 


if( ! class_exists( 'Wbls_Theme_Custom_CSS_JS' ) ) {
	class Wbls_Theme_Custom_CSS_JS {

		/**
		 * Wbls_Theme_Custom_CSS_JS constructor.
		 */
		public function __construct() {
		}


		/**
		 * Custom Theme Options JS
		 */
		public function js() {

			$wbls_options_default = array(           

					'breadcrumb' => 1, 
					'breadcrumb_char' => 1,
					'numeric_pagination' => 1,
					'sidebar_position' => 'right',
					'custom_js' => '',
					'custom_css' => '',
					'logo_title' =>  0,
					'logo' => '',
					'tagline' => 1,
					'apple_touch' => '',
					'header_search' => 1,
					'digg' => '',
					'dribbble' => '',
					'facebook' => '',
					'twitter' => '',
					'google_plus' => '',
					'linkedin' => '',
					'instagram' => '',
					'flickr' => '',
					'youtube' => '',
					'vimeo' => '',
					'pinterest' => '',     
					'rss' => '',
					'skype' => '',
					'tumblr' => '',
					'footer_widgets' => 1,
					'copyright' => '',
					'page-builder' => 1,
					'flexslider' => '[flexslider name=home-slider]',
					'featured_image' => 1,
					'single_featured_image' => 1,
					'author_bio_box' => 0,
					'social_sharing_box' => 1,
					'related_posts' => 1,
					'comments' => 1,
					'facebook_sb' => 1,
					'twitter_sb' => 1,
					'linkedin_sb' => 1,
					'google-plus_sb' => 1,
					'email_sb' => 1,
					'animation' => 1,
					'slide_direction' => 1,
					'flexslider_slideshow_speed' => 50,
					'flexslider_animation_speed' => 50,
					'flexslider_slideshow' => 1,
					'flexslider_smooth_height' => 0,
					'flexslider_direction_nav' => 1,
					'flexslider_control_nav' => 1,
					'flexslider_keyboard_nav' => 1,
					'flexslider_mousewheel_nav' => 1,
					'flexslider_pauseplay' => 0,
					'flexslider_randomize' => 0,
					'flexslider_animation_loop' => 0,
					'flexslider_pause_on_action' => 1,
					'flexslider_pause_on_hover' => 0,
					'flexslider_prev_text' => 'Prev',
					'flexslider_next_text' => 'Next',
					'flexslider_play_text' => 'Play',
					'flexslider_pause_text' => 'Pause',
					'carousel_animation' => 2,
					'carousel_animation_loop' => 0,
					'carousel_item_width' => 270,  
					'carousel_item_margin' => 10,
					'carousel_pagination' => 0,
					'lightbox_theme' => '1',
					'lightbox_animation_speed' => 'fast',
					'lightbox_slideshow' => 50,
					'lightbox_autoplay_slideshow' => 0,
					'lightbox_opacity' => 0.5,
					'lightbox_overlay_gallery' => 1,
					'custom_typography' => 0,
					
			);
			$wbls_options = get_theme_mods();
			$wbls_options = wp_parse_args( $wbls_options, $wbls_options_default );

			//echo '<pre>', print_r($wbls_options), '</pre>';
			if( (int) $wbls_options['animation'] === 1 ) {
				$animation = 'fade';
			} else {
				$animation = 'slide';
			}


			if( (int) $wbls_options['slide_direction'] === 1 ) {
				$slide_direction = 'horizontal';
			} else {
				$slide_direction = 'vertical';
			}

			switch ($wbls_options['lightbox_theme']) {
				case '1':
					$lightbox_theme = 'pp_default';
					break;
				case '2':
					$lightbox_theme = 'light_rounded';
					break;
				case '3':
					$lightbox_theme = 'dark_rounded';
					break;
				case '4':
					$lightbox_theme = 'light_square';
					break;
				case '5':
					$lightbox_theme = 'dark_square';
					break;
				case '6':
					$lightbox_theme = 'facebook';
					break;
				default:
					$lightbox_theme = 'pp_default';
					break;
			}
			?>
			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('.flexslider').flexslider({
						//controlsContainer: ".flex-container",
						animation: '<?php echo isset( $animation ) ? $animation : 'fade';?>',
						direction: '<?php echo isset( $slide_direction ) ? $slide_direction : 'horizontal'; ?>',
						slideshowSpeed: <?php echo !empty( $wbls_options['flexslider_slideshow_speed'] ) ? $wbls_options['flexslider_slideshow_speed']*100 : '7000'; ?>,
						animationSpeed: <?php echo !empty( $wbls_options['flexslider_animation_speed'] ) ? $wbls_options['flexslider_animation_speed'] *100: '600'; ?>,
						slideshow: <?php echo !empty( $wbls_options['flexslider_slideshow'] ) ? 'true' : 'false'; ?>,
						smoothHeight: <?php echo !empty( $wbls_options['flexslider_smooth_height'] ) ? 'true' : 'false'; ?>,
						directionNav: <?php echo !empty( $wbls_options['flexslider_direction_nav'] ) ? 'true' : 'false'; ?>,
						controlNav: <?php echo !empty( $wbls_options['flexslider_control_nav'] ) ? 'true' : 'false'; ?>,
						multipleKeyboard: <?php echo !empty( $wbls_options['flexslider_keyboard_nav'] ) ? 'true' : 'false'; ?>,
						mousewheel: <?php echo !empty( $wbls_options['flexslider_mousewheel_nav'] ) ? 'true' : 'false'; ?>,
						pauseplay: <?php echo !empty( $wbls_options['flexslider_pauseplay'] ) ? 'true' : 'false'; ?>,
						randomize: <?php echo !empty( $wbls_options['flexslider_randomize'] ) ? 'true' : 'false'; ?>,
						animationLoop: <?php echo !empty( $wbls_options['flexslider_animation_loop'] ) ? 'true' : 'false'; ?>,
						pauseOnAction: <?php echo !empty( $wbls_options['flexslider_pause_on_action'] ) ? 'true': 'false'; ?>,
						pauseOnHover: <?php echo !empty( $wbls_options['flexslider_pause_on_hover'] ) ? 'true' : 'false'; ?>,
						prevText: "<?php echo isset( $wbls_options['flexslider_prev_text'] ) ? $wbls_options['flexslider_prev_text'] : 'Previous'; ?>",
						nextText: "<?php echo isset( $wbls_options['flexslider_next_text'] ) ? $wbls_options['flexslider_next_text'] : 'Next'; ?>",
						playText: "<?php echo isset( $wbls_options['flexslider_play_text'] ) ? $wbls_options['flexslider_play_text'] : 'Play'; ?>",
						pauseText: "<?php echo isset( $wbls_options['flexslider_pause_text'] ) ? $wbls_options['flexslider_pause_text'] : 'Pause';?>",
					});
			

					
					$('.flexcarousel').flexslider({
						animation: 'slide',
						animationLoop: <?php echo !empty($wbls_options['carousel_animation_loop']) ? 'true':'false'; ?>,
						controlNav: <?php echo !empty($wbls_options['carousel_pagination'] ) ? 'true' : 'false'; ?>,
						itemWidth: <?php echo !empty($wbls_options['carousel_item_width']) ? $wbls_options['carousel_item_width'] : 230; ?>,
						itemMargin: <?php echo !empty($wbls_options['carousel_item_margin']) ? $wbls_options['carousel_item_margin'] : 10;?>,
					});


					$("a[rel^='prettyPhoto']").prettyPhoto({
						animation_speed: "<?php echo isset($wbls_options['lightbox_animation_speed']) ? strtolower($wbls_options['lightbox_animation_speed']) : 'fast'; ?>",
						slideshow: <?php echo isset( $wbls_options['lightbox_slideshow'] ) ? $wbls_options['lightbox_slideshow'] * 100 : '5000'; ?>,
						autoplay_slideshow: <?php echo !empty( $wbls_options['lightbox_autoplay_slideshow'] ) ? 'true' : 'false'; ?>,
						opacity: <?php echo isset( $wbls_options['lightbox_opacity'] ) ? $wbls_options['lightbox_opacity'] : '0.50'; ?>,
						theme: "<?php echo isset( $lightbox_theme ) ? $lightbox_theme : 'pp_default'; ?>",
						overlay_gallery: <?php echo !empty( $wbls_options['lightbox_overlay_gallery'] ) ? 'true' : 'false'; ?>,
					});

				});
			</script>
			<?php
		}

		public function carousel_margin_css() {
			$itemMargin = get_theme_mod( 'carousel_item_margin', 10 );
			?>
			<style type="text/css">
				.flexcarousel li {
					margin: 0 <?php echo $itemMargin; ?>px;
				}
			</style>
			<?php
		}


		public function wbls_user_customize_js() {
			$user_custom_js = get_theme_mod ('custom_js');
			?>	
			<script type="text/javascript">
				<?php echo $user_custom_js; ?>      
			</script>
			<?php
		}

		public function analytics_place_header() {
			$analytics_place = get_theme_mod('analytics_place');
			if( ! $analytics_place ) {
				echo get_theme_mod('analytics');
			}
		}

		public function analytics_place_footer() {
			$analytics_place = get_theme_mod('analytics_place');
			if(  $analytics_place ) {
				echo get_theme_mod('analytics');
			}
		}

		public function customizer_scripts() {
			if( get_theme_mod('custom_typography',false) ) {
				$body_font = get_theme_mod('body_family');
				if($body_font) {
					$body_font_url = modulus_theme_font_url($body_font);
					wp_enqueue_style(
							$body_font,
							$body_font_url,
							array(),
							'20150707',
							'all'
					);
				}
				$h1_font = get_theme_mod('h1_family');
				if($h1_font) {
					$h1_font_url = modulus_theme_font_url($h1_font);
					wp_enqueue_style(
							$h1_font,
							$h1_font_url,
							array(),
							'20150707',
							'all'   
					);
				}
				$h2_font = get_theme_mod('h2_family');
				if($h2_font) {
					$h2_font_url = modulus_theme_font_url($h2_font);
					wp_enqueue_style(
							$h2_font,
							$h2_font_url,
							array(),
							'20150707',
							'all'
					);
				}
				$h3_font = get_theme_mod('h3_family');
				if($h3_font) {
					$h3_font_url = modulus_theme_font_url($h3_font);
					wp_enqueue_style(
							$h3_font,
							$h3_font_url,
							array(),
							'20150707',
							'all'
					);
				}
				$h4_font = get_theme_mod('h4_family');
				if($h4_font) {
					$h4_font_url = modulus_theme_font_url($h4_font);
					wp_enqueue_style(
							$h4_font,
							$h4_font_url,
							array(),
							'20150707',
							'all'
					);
				}
				$h5_font = get_theme_mod('h5_family');
				if($h5_font) {
					$h5_font_url = modulus_theme_font_url($h5_font);
					wp_enqueue_style(
							$h5_font,
							$h5_font_url,
							array(),
							'20150707',
							'all'
					);
				}
				$h6_font = get_theme_mod('h6_family');
				if($h6_font) {
					$h6_font_url = modulus_theme_font_url($h6_font);
					wp_enqueue_style(
							$h6_font,
							$h6_font_url,
							array(),
							'20150707',
							'all'
					);
				}


			}

		}

		public function css() {
			$body_font = get_theme_mod('body_family','Roboto, sans-serif');  
			$h1_font = get_theme_mod('h1_family','Roboto, sans-serif');
			$h2_font = get_theme_mod('h2_family','Roboto, sans-serif');
			$h3_font = get_theme_mod('h3_family','Roboto, sans-serif');
			$h4_font = get_theme_mod('h4_family','Roboto, sans-serif');
			$h5_font = get_theme_mod('h5_family','Roboto, sans-serif');
			$h6_font = get_theme_mod('h6_family','Roboto, sans-serif');    
   
			$body_color = get_theme_mod( 'body_color','#33363a' );
			$body_size = get_theme_mod( 'body_size','16');
			$body_weight = get_theme_mod( 'body_weight','normal');  

			$h1_color = get_theme_mod( 'h1_color','#33363a' );
			$h1_size = get_theme_mod( 'h1_size','48');
			$h1_weight = get_theme_mod( 'h1_weight','bold');

			$h2_color = get_theme_mod( 'h2_color','#33363a' );
			$h2_size = get_theme_mod( 'h2_size','36');
			$h2_weight = get_theme_mod( 'h2_weight','bold');

			$h3_color = get_theme_mod( 'h3_color','#33363a' );
			$h3_size = get_theme_mod( 'h3_size','30');
			$h3_weight = get_theme_mod( 'h3_weight','bold');

			$h4_color = get_theme_mod( 'h4_color','#33363a' );
			$h4_size = get_theme_mod( 'h4_size','24');
			$h4_weight = get_theme_mod( 'h4_weight','bold');

			$h5_color = get_theme_mod( 'h5_color','#33363a' );
			$h5_size = get_theme_mod( 'h5_size','18');
			$h5_weight = get_theme_mod( 'h5_weight','bold');

			$h6_color = get_theme_mod( 'h6_color','#33363a' );
			$h6_size = get_theme_mod( 'h6_size','16');
			$h6_weight = get_theme_mod( 'h6_weight','bold');

		
			?>
			<style type="text/css">
				body {
					font-family: '<?php echo $body_font; ?>';
					color: <?php echo $body_color; ?>;
					font-size: <?php echo $body_size; ?>px;
					font-weight: <?php echo $body_weight; ?>;

				}
				h1 {
					font-family: '<?php echo $h1_font; ?>';
					color: <?php echo $h1_color; ?>;
					font-size: <?php echo $h1_size; ?>px;
					font-weight: <?php echo $h1_weight; ?>;
				}

				h2 {
					font-family: '<?php echo $h2_font; ?>';
					color: <?php echo $h2_color; ?>;
					font-size: <?php echo $h2_size; ?>px;
					font-weight: <?php echo $h2_weight; ?>;
				}

				h3 {
					font-family: '<?php echo $h3_font; ?>';
					color: <?php echo $h3_color; ?>;
					font-size: <?php echo $h3_size; ?>px;
					font-weight: <?php echo $h3_weight; ?>;
				}

				h4 {
					font-family: '<?php echo $h4_font; ?>';
					color: <?php echo $h4_color; ?>;
					font-size: <?php echo $h4_size; ?>px;
					font-weight: <?php echo $h4_weight; ?>;
				}

				h5 {
					font-family: '<?php echo $h5_font; ?>';
					color: <?php echo $h5_color; ?>;
					font-size: <?php echo $h5_size; ?>px;
					font-weight: <?php echo $h5_weight; ?>;
				}

				h6 {
					font-family: '<?php echo $h6_font; ?>';
					color: <?php echo $h6_color; ?>;
					font-size: <?php echo $h6_size; ?>px;
					font-weight: <?php echo $h6_weight; ?>;
				}

			</style>
			<?php
		}


		public function primary_css() {
			$primary_color = get_theme_mod( 'primary_color','#1fb2e2');?>   

		<style type="text/css">

.hentry.post h2 a:hover,.site-info .widget_nav_menu a:hover,.title-divider-left .widget-title::before,.title-divider .left::before,.site-info p a,.site-footer .footer-widgets a:hover,.site-footer .footer-widgets #calendar_wrap a,#secondary .btn-white:hover,.widget-area ul li a:hover,#secondary #recentcomments a,.widget-area .widget_rss a,.widget-area .widget_rss a,
#secondary .widget_button-widget .btn.white:hover,.left-sidebar .widget_social-networks-widget ul li a:hover i,.left-sidebar .widget_recent-posts-widget .flex-recent-posts li a,#secondary .left-sidebar .widget.widget_ourteam-widget .team-content h4,.left-sidebar .widget_list-widget ul li i,.left-sidebar .icon-horizontal .icon-title,
.left-sidebar .icon-vertical .icon-title,.left-sidebar .dropcap,.site-footer .widget_testimonial-widget ul li .client,.site-footer .widget.widget_ourteam-widget:hover .team-content h4,.site-footer .widget_list-widget ul li i,.site-footer .icon-horizontal .icon-title,
.site-footer .icon-vertical .icon-title,.site-footer .footer-bottom ul.menu li a:hover,.widget_recent-posts-widget .recent-post .entry-author a:hover,.widget_list-widget ul li .fa, .widget_list-widget ol li .fa,.circle-icon-box:hover h4,.circle-icon-box:hover a.link-title,.circle-icon-box:hover a.link-title h4 ,.notice a:hover,.alert-message a:hover,.breadcrumb a,.flexslider .flex-caption h1:before, .flexslider .flex-caption h2:before, .flexslider .flex-caption h3:before, .flexslider .flex-caption h4:before, .flexslider .flex-caption h5:before, .flexslider .flex-caption h6:before,.recent-work-container .recent_work_overlay a:hover i,.page-template-portfolio-2col .entry-title:before, .page-template-portfolio-2col_text .entry-title:before, .page-template-portfolio-2col_sidebar .entry-title:before, .page-template-portfolio-3col .entry-title:before, .page-template-portfolio-3col_text .entry-title:before, .page-template-portfolio-3col_sidebar .entry-title:before, .page-template-portfolio-4col .entry-title:before, .page-template-portfolio-4col_text .entry-title:before, .page-template-portfolio .entry-title:before,ul#portfolio li h3 a:hover,.portfolioeffects .overlay_icon a:hover i,.portfolioeffects .content-details h3 a:hover,.widget_recent-work-widget .portfolioeffects .content-details h3 a:hover, .widget_recent-work-widget .work .content-details h3 a:hover,.widget_recent-work-widget .widget-title:before,.widget.widget_skill-widget .widget-title:before ,.widget.widget_ourteam-widget .team-social ul:after,.tabs.normal ul li .tabulous_active:after, .tabs ul li .tabulous_active:after,.contact-info .textwidget a:hover,.order-total .amount,.title-divider .widget-title:before,
.cart-subtotal .amount,.woocommerce .woocommerce-breadcrumb a:hover, .woocommerce-page .woocommerce-breadcrumb a:hover,.free-home .post-wrapper .btn-readmore,.free-home .post-wrapper .entry-meta span:hover i, .free-home .post-wrapper .entry-meta span:hover a ,.free-home .post-wrapper .entry-meta span:hover,.free-home .post-wrapper h3 a:hover,.free-home .title-divider:before,.free-home .services-wrapper .service:hover h4,.site-footer .footer-widgets .widget_recent_entries li .post-date
	{
		color: <?php echo $primary_color; ?>; 
	}
		
.widget.widget_ourteam-widget .our-team:hover .team-content,.portfolioeffects:hover .overlay_icon {
	background-color: <?php echo $primary_color; ?>; 
	opacity: 0.5;
}

.main-navigation .sub-menu .current_page_item > a,.main-navigation .sub-menu .current-menu-item > a, .main-navigation .sub-menu .current_page_ancestor > a, .main-navigation .children .current_page_item > a, .main-navigation .children .current-menu-item > a, .main-navigation .children .current_page_ancestor > a,.left-sidebar .dropcap-circle,.widget_tag_cloud a,.main-navigation button.menu-toggle:hover,
.left-sidebar .icon-horizontal .fa-stack,.site-footer .footer-widgets .widget_calendar table caption,
.left-sidebar .icon-vertical .fa-stack, .left-sidebar .widget.widget_recent-work-widget ul.flex-direction-nav li a.flex-prev,
.left-sidebar .widget.widget_recent-work-widget ul.flex-direction-nav li a.flex-next,
.left-sidebar .dropcap-box,#secondary .left-sidebar .callout-widget,.dropcap-circle,.widget_stat-widget .stat-container .icon-wrapper i,.dropcap-book,.pullright,.widget_recent-posts-widget .recent-post .entry-date a,
.pullleft,.site-footer .widget_social-networks-widget ul li a .fa,
.site-footer .share-box ul li a .fa,.circle-icon-box:hover a.more-button,.icon-left .fa-stack i,.icon-top .fa-stack i,.icon-right .fa-stack i,.icon-horizontal .fa-stack i,.widget_recent-posts-widget .recent-post .readmore a,.icon-vertical .fa-stack i,.widget_image-box-widget a.more-button,.title-divider-left .widget-title::after,
.pullnone,.icon-polygon a.more-button,.callout-widget a:hover,.share-box ul li a:hover,
.withtip:before,.circle-icon-box .circle-icon-wrapper .fa-stack i,.widget .ei-slider-thumbs li.ei-slider-element,
ul.ei-slider-thumbs li.ei-slider-element,.site-footer .icon-horizontal .fa-stack,
.site-footer .icon-vertical .fa-stack,.site-footer .widget.widget_recent-work-widget ul.flex-direction-nav li a.flex-prev,
.site-footer .widget.widget_recent-work-widget ul.flex-direction-nav li a.flex-next,
.dropcap-box ,.toggle .toggle-title ,.circle-icon-box a.more-button:hover,
.widget_button-widget a.btn.btn-default ,.notice,.widget_flexslider-widget .flexcarousel .flex-direction-nav a:hover,.flex-direction-nav a:hover,.page-template-portfolio-2col .entry-title:after, .page-template-portfolio-2col_text .entry-title:after, .page-template-portfolio-2col_sidebar .entry-title:after, .page-template-portfolio-3col .entry-title:after, .page-template-portfolio-3col_text .entry-title:after, .page-template-portfolio-3col_sidebar .entry-title:after, .page-template-portfolio-4col .entry-title:after, .page-template-portfolio-4col_text .entry-title:after, .page-template-portfolio .entry-title:after,.portfolio-excerpt .more-link,ul.filter-options li a:hover,
ul.filter-options li .selected,.widget_recent-work-widget .widget-title:after,.ui-accordion h3 span,.ui-accordion h3,.widget.widget_skill-widget .skill-container .skill .skill-percentage,.widget.widget_skill-widget .widget-title:after,.widget.widget_ourteam-widget .our-team:hover .team-social ul li a,.widget.widget_ourteam-widget .team-social ul,
.tabs.normal ul li .tabulous_active a,.title-divider .left::after,.tabs ul li .tabulous_active a,
.tabs.normal ul li a:hover, .tabs ul li a:hover,.contact-form,.title-divider .widget-title:after,.free-home .title-divider:after,.free-home .services-wrapper .service .demo-thumb,
.woocommerce #content nav.woocommerce-pagination ul li a:focus,.woocommerce a.remove,.woocommerce #content table.cart a.remove, .woocommerce table.cart a.remove,.woocommerce-page #content table.cart a.remove, .woocommerce-page table.cart a.remove,.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,.woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li span.current,
.btn, .widget_button-widget a.btn.btn-default

	{
		background-color: <?php echo $primary_color; ?>; 
	}

.site-footer .widget_social-networks-widget ul li a .fa:hover,.left-sidebar .widget.widget_skill-widget .skill-container .skill-percentage,
.site-footer .share-box ul li a .fa:hover,.tabs.normal ul li .tabulous_active, .tabs ul li .tabulous_active,.site-footer .widget.widget_skill-widget .skill-container .skill-percentage,.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover
    {
		 	background-color: <?php echo $primary_color; ?>!important; 
	}
		

.left-sidebar .dropcap-box,.title-divider-left .widget-title::before,.title-divider .left::before,.icon-polygon .circle-icon-wrapper h3.fa-stack,.icon-horizontal:hover .service,
.icon-vertical:hover .service,.icon-top:hover .service,.icon-right:hover .service,.icon-left:hover .service,.widget_image-box-widget .image-box img,.widget_tag_cloud a,
.icon-polygon .circle-icon-wrapper h3.fa-stack:before,
.icon-polygon .circle-icon-wrapper h3.fa-stack:after,.btn:before,.toggle .toggle-content,.circle-icon-box .circle-icon-wrapper .fa-stack i,
.widget_button-widget a.btn.btn-default:before,.btn:before,.notice a,.flexslider .flex-caption a,.page-template-portfolio-2col .entry-title:before, .page-template-portfolio-2col_text .entry-title:before,
.page-template-portfolio-2col_sidebar .entry-title:before,.page-template-portfolio-3col .entry-title:before, .page-template-portfolio-3col_text .entry-title:before, .page-template-portfolio-3col_sidebar .entry-title:before,
.page-template-portfolio-4col .entry-title:before,.page-template-portfolio-4col_text .entry-title:before, .page-template-portfolio .entry-title:before,.widget_recent-work-widget .widget-title:before,.ui-accordion .ui-accordion-content,.widget.widget_skill-widget .widget-title:before , .title-divider .widget-title:before ,.free-home .services-wrapper .service:hover .service-content,
.free-home .title-divider:before,.free-home .services-wrapper .service:hover
	{
		border-color: <?php echo $primary_color?>;
	}

.sep:after,.withtip.top:after
	 {
		border-top-color: <?php  echo $primary_color; ?>;
	}


.withtip.left:after,.icon-polygon .circle-icon-wrapper h3.fa-stack 
	{
		border-left-color: <?php  echo $primary_color; ?>;
	}

	
.withtip.right:after,.icon-polygon .circle-icon-wrapper h3.fa-stack 
	{
		border-right-color: <?php  echo $primary_color; ?>;
	}


.withtip.bottom:after,.widget-area h4.widget-title  
{
	border-bottom-color: <?php  echo $primary_color; ?>;
}

			</style>

		<?php }

		public function wbls_user_customizer_custom_css() {
			$user_custom_css = get_theme_mod('custom_css');
			?>	
			<style type="text/css">
				<?php echo $user_custom_css; ?>    
			</style>
			<?php
		}

	}
}
