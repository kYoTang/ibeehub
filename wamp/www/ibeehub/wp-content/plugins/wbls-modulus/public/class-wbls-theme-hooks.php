<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 26/11/15
	 * Time: 4:55 PM
	 */
if( ! class_exists( 'Wbls_Theme_Hooks' )) {
	class Wbls_Theme_Hooks {

		public function full_width_slider(){
			global $post;
			$slider_shortcode = get_post_meta( $post->ID, '_wbls_slider_shortcode', true );
			if( $slider_shortcode != '' ) {
				echo '<div class="page-slider">';
				echo do_shortcode( $slider_shortcode );
				echo '</div>';
			}
		}
		
		public function single_portfolio($single_template){
		    global $post;
			if( $post->post_type == 'portfolio') {
				$single_template = WBLS_THEME_DIR . 'public/views/single-portfolio.php';
				if( file_exists($single_template) && is_file($single_template) ) {
					 $single_template;
				} else {
					if( defined( 'WBLS_FW_DIR' ) ) {
						$single_template = WBLS_FW_DIR . 'public/views/single-portfolio.php';	
						if( is_file($single_template) && file_exists( $single_template ) ) {
                            $single_template;
						}
					}
					
				}
			}
			return $single_template;
		}
		
		public function single_post($single_template){    
		    global $post;
		    $post_fullwidth = get_post_meta( $post->ID, '_wbls_full_width_post', true );
			if( $post->post_type == 'post') {
				if ( $post_fullwidth ){
					$single_template = WBLS_THEME_DIR . 'public/views/single-post-fullwidth.php';
				    if( file_exists($single_template) && is_file($single_template) ) {
					    $single_template;
				    } 
				}
			}
			return $single_template;
		}

		public function portfolio_views($file){        
			global $post;
		    $file = WBLS_THEME_DIR . 'public/views/' . get_post_meta( $post->ID, '_wp_page_template', true );
			return $file;
		}

		public function customizer_options($free_options) {   
			$pro_options = array(
	            // typography start //
	            'typography' => array(   
	                'priority'       => 10,
	                'title'          => __('Typography', 'wbls-modulus'),
	                'description'    => __('Typography and Link Color Settings', 'wbls-modulus'),
	                'sections' => array(
	                    'typography_section' => array(
	                        'title' => __('General Settings', 'wbls-modulus'),
	                        'description' => __('','wbls-modulus'),
	                        'fields' => array(
	                            'custom_typography' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Custom Typography', 'wbls-modulus'),
	                                'description' => __('Turn on to customize typography and turn off for default typography.', 'wbls-modulus'),
	                                'default' => 0,
	                            ),

	                        ),    
	                    ),

	                    'body_font' => array(
	                        'title' => __('Body Font','wbls-modulus'),
	                        'description' => __('Specify the body font properties.','wbls-modulus'),
	                        'fields' => array (
	                            'body' => array(
	                                'type' => 'typography',
	                                'label' => __('', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                            ),
	                            'body_color' => array(
	                                'type' => 'color',
	                                'label' => __('Body Color', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_hex_color',
	                                'transport' => 'postMessage',
	                                'default' => '#282827'
	                            ),
	                        ),
	                    ),
	                    'h1_property' => array(
	                        'title' => __('H1 Font Properties','wbls-modulus'),
	                        'description' => __('Specify the h1 font properties.','wbls-modulus'),
	                        'fields' => array (
	                            'h1' => array(
	                                'type' => 'typography',
	                                'label' => __('', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                            ),
	                            'h1_color' => array(
	                                'type' => 'color',
	                                'label' => __('H1 Color', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_hex_color',
	                                'transport' => 'postMessage',
	                                'default' => '#282827'
	                            ),
	                        ),
	                    ),
	                    'h2_property' => array(
	                        'title' => __('H2 Font Properties','wbls-modulus'),
	                        'description' => __('Specify the h2 font properties.','wbls-modulus'),
	                        'fields' => array (
	                                'h2' => array(
	                                    'type' => 'typography',
	                                    'label' => __('', 'wbls-modulus'),
	                                    'description' => __('', 'wbls-modulus'),
	                                ),
	                                'h2_color' => array(
	                                    'type' => 'color',
	                                    'label' => __('H2 Color', 'wbls-modulus'),
	                                    'description' => __('', 'wbls-modulus'),
	                                    'sanitize_callback' => 'sanitize_hex_color',
	                                    'transport' => 'postMessage',
	                                    'default' => '#282827'
	                                )
	                        ),
	                    ),
	                    'h3_property' => array(
	                        'title' => __('H3 Font Properties','wbls-modulus'),
	                        'description' => __('Specify the h3 font properties.','wbls-modulus'),
	                        'fields' => array (
	                                'h3' => array(
	                                    'type' => 'typography',
	                                    'label' => __('', 'wbls-modulus'),
	                                    'description' => __('', 'wbls-modulus'),
	                                ),
	                                'h3_color' => array(
	                                    'type' => 'color',
	                                    'label' => __('H3 Color', 'wbls-modulus'),
	                                    'description' => __('', 'wbls-modulus'),
	                                    'sanitize_callback' => 'sanitize_hex_color',
	                                    'transport' => 'postMessage',
	                                    'default' => '#282827'     
	                                )
	                        ),
	                    ),
	                    'h4_property' => array(
	                        'title' => __('H4 Font Properties','wbls-modulus'),
	                        'description' => __('Specify the h4 font properties.','wbls-modulus'),
	                        'fields' => array (
	                            'h4' => array(
	                                'type' => 'typography',
	                                'label' => __('', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                            ),
	                            'h4_color' => array(
	                                'type' => 'color',
	                                'label' => __('H4 Color', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_hex_color',
	                                'transport' => 'postMessage',
	                                'default' => '#282827'
	                            )
	                        ),
	                    ),
	                    'h5_property' => array(
	                        'title' => __('H5 Font Properties','wbls-modulus'),
	                        'description' => __('Specify the h5 font properties.','wbls-modulus'),
	                        'fields' => array (
	                            'h5' => array(
	                                'type' => 'typography',
	                                'label' => __('', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                            ),
	                            'h5_color' => array(
	                                'type' => 'color',
	                                'label' => __('H5 Color', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_hex_color',
	                                'transport' => 'postMessage',
	                                'default' => '#282827'
	                            )
	                        ),
	                    ),
	                    'h6_property' => array(
	                        'title' => __('H6 Font Properties','wbls-modulus'),
	                        'description' => __('Specify the h6 font properties.','wbls-modulus'),
	                        'fields' => array (
	                            'h6' => array(
	                                'type' => 'typography',
	                                'label' => __('', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                            ),
	                            'h6_color' => array(
	                                'type' => 'color',
	                                'label' => __('H6 Color', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_hex_color',
	                                'transport' => 'postMessage',
	                                'default' => '#282827'
	                            )
	                        ),
	                    ),
	                ),
	            ), // typography panel end //

				'pro_panel' => array(
	                'priority'       => 9,
	                'title'          => __('Pro Options', 'wbls-modulus'),
	                'description'    => __('Pro Options', 'wbls-modulus'),
	                'sections' => array(
	                    'multiple_color_section' => array(
	                        'title' => __('Color Scheme ', 'wbls-modulus'),
	                        'description' => __('Select your color scheme','wbls-modulus'),
	                        'fields' => array(
	                            'color_scheme' => array(        
	                                'type' => 'select',
	                                'label' => __('Select your color scheme.', 'wbls-modulus'),
	                                'description' => __(' ', 'wbls-modulus'),
	                                'choices' => array(
	                                    '1' => __('Default', 'wbls-modulus'),       
	                                    '2' => __('Blue', 'wbls-modulus'),
	                                    '3' => __('Green', 'wbls-modulus'),    
	                                    '4' => __('Pink', 'wbls-modulus'),
	                                    '5' => __('Purple', 'wbls-modulus'),
	                                    '6' => __('Red', 'wbls-modulus'),
	                                    '7' => __('Yellow', 'wbls-modulus'),	                                 
	                                ),
	                                'default' => 1,  
                            	),                     
	                        ),
	                    ),
                       'social_network' => array(
                        'title' => __('Social Networks', 'wbls-modulus'),
                        'description' => __(' Enter the link below and Use Social Network widget to display these links in your page.', 'wbls-modulus'),
                        'fields' => array(
                            'digg' => array(
                                'type' => 'text',
                                'label' => __('Digg', 'wbls-modulus'), 
                                'description' => __('Your Digg link ', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'dribbble' => array(
                                'type' => 'text',
                                'label' => __('Dribbble', 'wbls-modulus'),
                                'description' => __('Your Dribbble link ', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'facebook' => array(
                                'type' => 'text',
                                'label' => __('Facebook', 'wbls-modulus'),
                                'description' => __('Your Facebook link', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'twitter' => array(
                                'type' => 'text',
                                'label' => __('Twitter', 'wbls-modulus'),
                                'description' => __('Your Twitter link', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'google_plus' => array(
                                'type' => 'text',
                                'label' => __('Google +', 'wbls-modulus'),
                                'description' => __('Your Google Plus', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',

                            ),
                            'linkedin' => array(
                                'type' => 'text',
                                'label' => __('LinkedIn', 'wbls-modulus'),
                                'description' => __('Your LinkedIn link', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'instagram' => array(
                                'type' => 'text',
                                'label' => __('Instagram', 'wbls-modulus'),
                                'description' => __('Your Instagram link ', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'flickr' => array(
                                'type' => 'text',
                                'label' => __('Flickr', 'wbls-modulus'),
                                'description' => __('Your Flickr link', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'youtube' => array(
                                'type' => 'text',
                                'label' => __('YouTube', 'wbls-modulus'),
                                'description' => __('Your YouTube link', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'vimeo' => array(
                                'type' => 'text',
                                'label' => __('Vimeo', 'wbls-modulus'),
                                'description' => __('Your Vimeo link', 'wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'pinterest' => array(
                                'type' => 'text',
                                'label' => __('Pinterest', 'wbls-modulus'),
                                'description' => __('Your Pinterest link','wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'rss' => array(
                                'type' => 'text',
                                'label' => __('RSS', 'wbls-modulus'),
                                'description' => __('Your RSS link','wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'skype' => array(
                                'type' => 'text',
                                'label' => __('Skype', 'wbls-modulus'),
                                'description' => __('Your Skype link','wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                            'tumblr' => array(
                                'type' => 'text',
                                'label' => __('Tumblr', 'wbls-modulus'),
                                'description' => __('Your Tumblr link','wbls-modulus'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
                        ),
                    ),

						'flex_slider_section' => array(
	                        'title' => __('Flex Slider', 'wbls-modulus'),
	                        'description' => __('Flex Slider Settings','wbls-modulus'),
	                        'fields' => array(
	                            'animation' => array(
	                                'type' => 'select',
	                                'label' => __('Select slider animation effect', 'wbls-modulus'),
	                                'description' => __('Select slider animation effect.', 'wbls-modulus'),
	                                'choices' => array(
	                                    '1' => __('Fade', 'wbls-modulus'),
	                                    '2' => __('Slide', 'wbls-modulus'),
	                                ),
	                                'default' => 2,
	                            ),
	                            'slide_direction' => array(
	                                'type' => 'select',
	                                'label' => __('Select direction to slide ', 'wbls-modulus'),
	                                'description' => __('Select direction to slide (if you are using the "Slide" animation)', 'wbls-modulus'),
	                                'choices' => array(
	                                    '1' => __('Horizontal', 'wbls-modulus'),
	                                    '2' => __('Vertical', 'wbls-modulus'),
	                                ),
	                                'default' => 1,
	                            ),
	                            'flexslider_slideshow_speed' => array(
	                                'type' => 'range',
	                                'label' => __('Slideshow Speed', 'wbls-modulus'),
	                                'description' => __('Set the delay between each slide animation (in milliseconds)', 'wbls-modulus'),
	                                'input_attrs' => array(
	                                    'min' => 0,
	                                    'max' => 100,
	                                    'step' => 1,
	                                ),
	                                'default' => 50
	                            ),
	                            'flexslider_animation_speed' => array(
	                                'type' => 'range',
	                                'label' => __('Animation Speed', 'wbls-modulus'),
	                                'description' => __('Set the duration of each slide animation (in milliseconds)', 'wbls-modulus'),
	                                'input_attrs' => array(
	                                    'min' => 0,
	                                    'max' => 100,
	                                    'step' => 1,
	                                ),
	                                'default' => 50
	                            ),
	                            'flexslider_slideshow' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Animate the slideshows automatically', 'wbls-modulus'),
	                                'description' => __('Enable Animate the slideshows automatically', 'wbls-modulus'),
	                                'default' => 1,
	                            ),
	                            'flexslider_smooth_height' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable to Adjust the height of the slideshow to the height of the current slide', 'wbls-modulus'),
	                                'description' => __('Enable Adjust the height of the slideshow to the height of the current slide', 'wbls-modulus'),
	                                'default' => 0,
	                            ),
	                            'flexslider_direction_nav' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable  Display the "Previous/Next" Buttons', 'wbls-modulus'),
	                                'description' => __('Enable  Display the "Previous/Next" Buttons', 'wbls-modulus'),
	                                'default' => 1,
	                            ),
	                            'flexslider_control_nav' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Display the slideshow pagination', 'wbls-modulus'),
	                                'description' => __('Enable Display the slideshow pagination', 'wbls-modulus'),
	                                'default' => 1,
	                            ),
	                            'flexslider_keyboard_nav' => array(
	                                'type' => 'checkbox',
	                                'label' => __(' Enable Keyboard Navigation', 'wbls-modulus'),
	                                'description' => __('Enable keyboard navigation', 'wbls-modulus'),
	                                'default' => 1,
	                            ),
	                            'flexslider_mousewheel_nav' => array(
	                                'type' => 'checkbox',
	                                'label' => __(' Enable Mouse Wheel Navigation', 'wbls-modulus'),
	                                'description' => __('Enable the mousewheel navigation', 'wbls-modulus'),
	                                'default' => 1,
	                            ),
	                            'flexslider_pauseplay' => array(
	                                'type' => 'checkbox',
	                                'label' => __(' Enable Pause / Play event', 'wbls-modulus'),
	                                'description' => __('Enable the "Pause/Play" event', 'wbls-modulus'),
	                                'default' => 0,
	                            ),
	                            'flexslider_randomize' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Random Slides', 'wbls-modulus'),
	                                'description' => __('Enable to Randomize the order of slides in slideshows', 'wbls-modulus'),
	                                'default' => 0,
	                            ),
	                            'flexslider_animation_loop' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Loop Slideshow animations', 'wbls-modulus'),
	                                'description' => __('Enable Loop the slideshow animations', 'wbls-modulus'),
	                                'default' => 0,
	                            ),
	                            'flexslider_pause_on_action' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Pause On Action while navigation', 'wbls-modulus'),
	                                'description' => __('Enable Pause the slideshow autoplay when using the pagination or "Previous/Next" navigation', 'wbls-modulus'),
	                                'default' => 1,
	                            ),
	                            'flexslider_pause_on_hover' => array(
	                                'type' => 'checkbox',
	                                'label' => __(' Enable Pause On Action while hovering the slides', 'wbls-modulus'),
	                                'description' => __('Enable to Pause the slideshow autoplay when hovering over a slide', 'wbls-modulus'),
	                                'default' => 0,
	                            ),
	                            'flexslider_prev_text' => array(
	                                'type' => 'text',
	                                'label' => __(' The text to display on the "Previous" button', 'wbls-modulus'),
	                                'description' => __(' The text to display on the "Previous" button.', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_text_field',
	                                'default' => 'Prev'
	                            ),
	                            'flexslider_next_text' => array(
	                                'type' => 'text',
	                                'label' => __(' The text to display on the "Next" button', 'wbls-modulus'),
	                                'description' => __(' The text to display on the "Next" button.', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_text_field',
	                                'default' => 'Next'
	                            ),
	                            'flexslider_play_text' => array(
	                                'type' => 'text',
	                                'label' => __(' The text to display on the "Play" button', 'wbls-modulus'),
	                                'description' => __(' The text to display on the "Play" button.', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_text_field',
	                                'default' => 'Play'
	                            ),
	                            'flexslider_pause_text' => array(
	                                'type' => 'text',
	                                'label' => __('The text to display on the "Pause" button', 'wbls-modulus'),
	                                'description' => __(' The text to display on the "Pause" button.', 'wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_text_field',
	                                'default' => 'Pause'
	                            ),

	                        ),
	                    ),
						'flex_carousel' => array(
	                        'title' => __('Flex Carousel Slider', 'wbls-modulus'),
	                        'description' => __('Flex Carousel Settings','wbls-modulus'),
	                        'fields' => array(
	                            'carousel_animation_loop' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Loop through carousel items?', 'wbls-modulus'),
	                                'default' => 0,
	                            ),
	                            'carousel_item_width' => array(
	                                'type' => 'text',
	                                'label' => __('Carousel item width', 'wbls-modulus'),
	                                'default' => 230,
	                                'sanitize_callback' => 'absint'
	                            ),
	                            'carousel_item_margin' => array(
	                                'type' => 'text',
	                                'label' => __('Carousel item margin', 'wbls-modulus'),
	                                'default' => 5,
	                                'sanitize_callback' => 'absint'
	                            ),
	                            'carousel_pagination' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Carousel Pagination', 'wbls-modulus'),
	                                'default' => 1,

	                            ),
	                        ),
                		),
						'light_box' => array(    
	                        'title' => __('Light Box', 'wbls-modulus'),
	                        'description' => __('Light Box Settings ','wbls-modulus'),
	                        'fields' => array(
	                            'lightbox_theme' => array(
	                                'type' => 'select',
	                                'label' => __('Lightbox Theme', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                                'choices' => array(
	                                    '1' => __('pp_default', 'wbls-modulus'),
	                                    '2' => __('light-rounded', 'wbls-modulus'),
	                                    '3' => __('dark-rounded', 'wbls-modulus'),
	                                    '4' => __('light-square', 'wbls-modulus'),
	                                    '5' => __('dark-square', 'wbls-modulus'),
	                                    '6' => __('facebook', 'wbls-modulus'),
	                                ),
	                                'default' => '1',
	                            ),
	                            'lightbox_animation_speed' => array(
	                                'type' => 'select',
	                                'label' => __('Animation Speed', 'wbls-modulus'),
	                                'description' => __('', 'wbls-modulus'),
	                                'choices' => array(
	                                    'fast' => __('Fast', 'wbls-modulus'),
	                                    'slow' => __('Slow', 'wbls-modulus'),
	                                    'normal' => __('Normal', 'wbls-modulus'),
	                                ),
	                                'default' => 'fast',
	                            ),
	                            'lightbox_slideshow' => array( 
	                                'type' => 'range',
	                                'label' => __('Autoplay Gallery Speed', 'wbls-modulus'),
	                                'description' => __('If autoplay is set to true, select the slideshow speed in ms. (Default: 5000, 1000 ms = 1 second)', 'wbls-modulus'),
	                                'input_attrs' => array(
	                                    'min' => 0,
	                                    'max' => 100,
	                                    'step' => 10,
	                                ),
	                                'default' => 50,
	                            ),
	                            'lightbox_autoplay_slideshow' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable Autoplay Gallery', 'wbls-modulus'),
	                                'description' => __('Check to autoplay the lightbox gallery', 'wbls-modulus'),
	                                'default' => 0,
	                            ),
	                            'lightbox_opacity' => array(
	                                'type' => 'range',
	                                'label' => __('Select Background Opacity', 'wbls-modulus'),
	                                'description' => __('Enter 0.1 to 1.0', 'wbls-modulus'),
	                                'input_attrs' => array(
	                                    'min' => 0,
	                                    'max' => 1,
	                                    'step' => 0.1
	                                ),
	                                'default' => 0.5
	                            ),
	                           /* 'lightbox_show_title' => array( 
	                                'type' => 'checkbox',
	                                'label' => __('Check to show  visibility of the title', 'wbls-modulus'),
	                                'description' => __('Select visibility of the title', 'wbls-modulus'),
	                                'default' => 1,
	                            ),*/
	                            'lightbox_overlay_gallery' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Show Gallery Thumbnails', 'wbls-modulus'),
	                                'description' => __('Check to show gallery thumbnails', 'wbls-modulus'),
	                                'default' => 1,
	                            ),
	                          /*  'lightbox_social_tools' => array(
	                                'type' => 'checkbox',
	                                'label' => __(' Show social sharing icons', 'wbls-modulus'),
	                                'description' => __('Check to show social sharing icons', 'wbls-modulus'),
	                                'default' => 1,
	                            ),*/

	                        ),
                		),
						'analytics_section' => array(
	                        'title' => __('Tracking Code', 'wbls-modulus'),
	                        'description' => __('Tracking Code','wbls-modulus'),
	                        'fields' => array(
		                        'analytics' => array(
	                                'type' => 'textarea',
	                                'label' => __('Tracking Code :Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme. Validate that it\'s javascript!', 'wbls-modulus'),
	                                'description' => __('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme. <b>Validate that it\'s javascript!</b>','wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_text_field',
	                            ),
	                            'analytics_place' => array(
	                                'type' => 'checkbox',
	                                'label' => __('Enable to Load Tracking Code in Footer', 'wbls-modulus'),
	                                'description' => __('Check to load analytics in footer. Uncheck to load in header.', 'wbls-modulus'),
	                                'default' => 0,  
	                            ),                   
	                        ),
	                    ),
                       'custom_js_section' => array(
	                        'title' => __(' Custom Js', 'wbls-modulus'),
	                        'description' => __('Custom Js','wbls-modulus'),
	                        'fields' => array(
		                        'custom_js' => array(
	                                'type' => 'textarea',
	                                'label' => __('Custom Javascript: Quickly add some Javascript to your theme by adding it to this block.  Validate that it\'s javascript!', 'wbls-modulus'),
	                                'description' => __('','wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_text_field',  
                            	),                   
	                        ),
	                    ),
	                    'custom_css_section' => array(
	                        'title' => __(' Custom CSS', 'wbls-modulus'),
	                        'description' => __('Custom CSS','wbls-modulus'),
	                        'fields' => array(
		                        'custom_css' => array(
	                                'type' => 'textarea',
	                                'label' => __('Custom CSS: Quickly add some CSS to your theme by adding it to this block.', 'wbls-modulus'),
	                                'description' => __('','wbls-modulus'),
	                                'sanitize_callback' => 'sanitize_text_field',
                                ),                   
	                        ),
	                    ),

					),
				),


    		); // pro theme option end //

			$options = array_merge($free_options, $pro_options);
			return $options;

		}
	}
}