<?php

	/**
	 * Created by PhpStorm.
	 * User: venkat
	 * Date: 25/11/15
	 * Time: 1:18 PM
	 */
	class Wbls_Fw_Shortcode_Generator {

		public function add_meta_box(){
			add_meta_box( 'shortcode_metabox', 'Create Shortcode', array($this, 'display'), 'page', 'normal', 'high' );
			add_meta_box( 'shortcode_metabox', 'Create Shortcode', array($this, 'display'), 'post', 'normal', 'high' );
		}

		// Shortcode Options
		public function display() {

			$shortcodes = array(

				/* Accordion */
				'accordion' => array(
					'attr' => array(
						'content_repeat' => 'text',
					),
					'desc' => array(
						'content_repeat' => '',
					),
					'values' => array(
						'content_repeat' => 3,
					),
					'content' => true,
				),

				/* Alert */
				'alert' => array(
					'attr' => array(
						'type' => 'select',
						'close' => 'select',
					),
					'desc' => array(
						'type' => 'Select type of alert box',
						'close' => 'Need close option for alert box?',
					),
					'content' => true,
					'type_options' => array(
						'notice' => 'Notice',
						'warning' => 'Warning',
						'success' => 'Success',
						'error' => 'Error',
						'info' => 'Info',
					),
					'close_options' => array(
						0 => 'Yes',
						1 => 'No',
					),
				),

				/* Icon */
				'icon' => array(
					'attr' => array(
						'icon' => 'icon',
						'size' => 'select',
						'style' => 'select',
						//'align' => 'select',
					),
					'desc' => array(
						'icon' => 'Select icon',
						'size' => 'Select size of Icon',
						'style' => 'Select Icon Container Style',
						//'align' => 'Select icon alignment'
					),
					'size_options' => array(
						'' => 'normal',
						'lg' => 'lg',
						'2x' => '2x',
						'3x' => '3x',
						'4x' => '4x',
						'5x' => '5x',
					),
					'style_options' => array(
						'' => 'Normal',
						'boxy' => 'Boxy',

					),
					/*
					'align_options' => array(
						'text-left' => 'Left Align',
						'text-center' => 'Center Align',
						'text-right' => 'Right Align',
					),
					*/
					'content' => false,
				),

				/* Button */
				'button' => array(
					'attr' => array(
						'link' => 'text',
						'target' => 'select',
						'color' => 'select',
						'size' => 'select',
					),
					'desc' => array(
						'button_text' => 'Enter Link Text',
						'link' => 'Enter URL for button',
						'target' => 'Open in',
						'color' => 'Select color of button',
						'size' => 'Select size of button',
					),
					'target_options' => array(
						'_self' => '_self',
						'_blank' => '_blank',
					),
					'color_options' => array(
						'btn' => 'Normal',
						'btn-primary' => 'Blue',
						'btn-danger' => 'Red',
						'btn-warning' => 'Yellow',
						'btn-success' => 'Green',
						'btn-info' => 'Light Blue',
						'btn-inverse' => 'Black',
						'btn-white' => 'White'
					),
					'size_options' => array(
						'btn-mini' => 'Mini',
						'btn-small' => 'Small',
						'btn-normal' => 'Normal',
						'btn-large' => 'Large',
					),
					'content' => true,
					'content_text' => 'Button Text',
				),

				/* cta */
				'cta' => array(
					'attr' => array(
						'title' => 'text',
						'url' => 'text',
						'anchor_text' => 'text',
					),
					'desc' => array(
						'title' => 'Enter title for call to action',
						'url' => 'Enter URL of CTA Button',
						'anchor_text' => 'Enter Call To Action Button Text',
					),
					'content' => true,
				),

				/* clear */
				'clear' => array(
					'attr' => array(),
					'desc' => array(),
					'content' => false,
				),

				/* Divider */
				'divider' => array(
					'attr' => array(
						'style' => 'select'
					),
					'desc' => array(
						'style' => 'Select style of divider'
					),
					'style_options' => array(
						'solid' => 'solid',
						'dotted' => 'dotted',
						'dashed' => 'dashed',
						'shadow' => 'shadow',
						'fancy' => 'fancy',
						'fancy2' => 'fancy2',
					),
					'content' => false,
				),

				/* Dropcap */
				'dropcap' => array(
					'attr' => array(
						'style' => 'select'
					),
					'desc' => array(
						'style' => 'Select style of dropcap'
					),
					'style_options' => array(
						'default' => 'default',
						'circle' => 'circle',
						'box' => 'box',
						'book' => 'book',
					),
					'content' => true,
				),

				/* Gap */
				'gap' => array(
					'attr' => array(
						'height' => 'text'
					),
					'desc' => array(
						'height' => 'Enter height of Gap (number only)'
					),
					'content' => false,
				),

				/* Google Font  */
				'googlefont' => array(
					'attr' => array(
						'font_family' => 'text',
						'size' => 'text',
						'weights' => 'text',
						'weight' => 'text',
					),
					'desc' => array(
						'font_family' => 'Enter name of Google Web Font',
						'size' => 'Enter size of font (in numbers only)',
						'weights' => 'Enter weights of font (comma separated, ex. 400,800)',
						'weight' => 'Enter weight to use',
					),
					'content' => true,
				),


				/* Headline */
				'headline' => array(
					'attr' => array(
						'level' => 'select',
						'type' => 'select',
						'align' => 'select',
					),
					'desc' => array(
						'level' => 'Select Headline Level',
						'type' => 'Select Headline Type',
						'align' => 'Select alignment',
					),
					'level_options' => array(
						1 => 'Level 1',
						2 => 'Level 2',
						3 => 'Level 3',
						4 => 'Level 4',
						5 => 'Level 5',
						6 => 'Level 6',
					),
					'type_options' => array(
						'normal' => 'Normal',
						'seperator' => 'Separator',
					),

					'align_options' => array(
						'tleft' => 'Left',
						'tright' => 'Right',
						'tcenter' => 'Center'
					),
					'content' => true,
				),

				/* Highlight */
				'highlight' => array(
					'attr' => array(
						'color' => 'select',
						'bgcolor' => 'select',
					),
					'desc' => array(
						'color' => 'Select Font Color',
						'bgcolor' => 'Select Highlight Color'
					),
					'color_options' => array(
						'red' => 'red',
						'green' => 'green',
						'blue' => 'blue',
					),
					'bgcolor_options' => array(
						'cyan' => 'cyan',
						'yellow' => 'yellow',
						'magenta' => 'magenta',
						'black' => 'black',
					),
					'content' => true,
				),

				/* Our Team */
				'ourteam' => array(
					'attr' => array(
						'title' => 'text',
						'designation' => 'text',
						'image_url' => 'text',
						'linkedin' => 'text',
						'google' => 'text',
						'twitter' => 'text',
						'facebook' => 'text',
					),
					'desc' => array(
						'title' => 'Enter name of team member',
						'designation' => 'Enter designation of team member',
						'image_url' => 'Enter URL of team member image',
						'linkedin' => 'Enter LinkedIn URL',
						'google' => 'Enter Google Plus URL',
						'twitter' => 'Enter Twitter URL',
						'facebook' => 'Enter Facebook URL',
					),
					'content' => true,
				),

				/* Icon Content Box
				'icon_content_box' => array(
					'attr' => array(
						'title' => 'text',
						'icon' => 'select',
						'background' => 'select',
						'size' => 'select',
						'align' => 'select',
					),
					'desc' => array(
						'title' => 'Enter Content Title',
						'icon' => 'Select Icon',
						'background' => 'Select icon background',
						'size' => 'Select Icon size',
						'align' => 'Select icon alignment',
					),
					'icon_options' => $icons,
					'background_options' => array(
						'' => 'None',
						'icon-check-empty' => 'Empty Sqare',
						'icon-sign-blank' => 'Solid Square',
						'icon-circle-blank' => 'Empty Cirlce',
						'icon-circle' => 'Solid Circle',
					),
					'size_options' => array(
						'' => 'Normal',
						'icon-large' => 'Large',
						'icon-2x' => '2x',
						'icon-3x' => '3x',
						'icon-4x' => '4x',
					),
					'align_options' => array(
						'text-left' => 'Left Align',
						'text-center' => 'Center Align'
					),
					'content' => true,
				),
				*/

				/* Lists
				'list' => array(
					'attr' => array(
						'content_repeat' => 'text',
						'type' => 'select',
						'bullet' => 'select',
					),
					'desc' => array(
						'content_repeat' => 'How many list items?',
						'type' => 'Select style of list',
						'bullet' => 'Select bullet icon',
					),
					'type_options' => array(
						'ul' => 'Unordered List',
						'ol' => 'Ordered List',
					),
					'bullet_options' => $icons,
					'values' => array(
						'content_repeat' => 1,
					),
					'content' => true,
				),
				*/

				/* Skill
				'skill' => array(
					'attr' => array(
						'percentage' => 'text',
					),
					'desc' => array(
						'percentage' => 'Enter Percentage (numbers only)',
					),
					'content' => true,
				),
				*/

				/* Soundcloud */
				'soundcloud' => array(
					'attr' => array(
						'url' => 'text',
						'width' => 'text',
						'height' => 'text',
						'comments' => 'select',
						'auto_play' => 'select',
						'color' => 'text',
					),
					'desc' => array(
						'url' => 'Enter URL of soundcloud file',
						'width' => 'Enter Width (Numerals Only)',
						'height' => 'Enter Height (Numerals Only)',
						'comments' => 'Show Comments?',
						'auto_play' => 'Auto Play?',
						'color' => 'Enter Colour as HexCode',
					),
					'comments_options' => array(
						false => 'No',
						true => 'Yes',
					),
					'auto_play_options' => array(
						false => 'No',
						true => 'Yes',
					),
					'content' => false,
				),

				/* Quote */
				'quote' => array(
					'attr' => array(
						'align' => 'select',
					),
					'desc' => array(
						'align' => 'Select alignment of pull quote',
					),
					'align_options' => array(
						'none' => 'Normal Blockquote',
						'left' => 'Pull Left',
						'right' => 'Pull Right',
					),
					'content' => true,
				),

				/* Tabs */
				'tabs' => array(
					'attr' => array(
						'type' => 'select',
						'content_repeat' => 'text',
					),
					'desc' => array(
						'type' => 'Select tabs design type',
						'content_repeat' => '',
					),
					'type_options' => array(
						'normal' => 'Normal',
						'center' => 'Center',
					),
					'values' => array(
						'content_repeat' => 3,
					),
					'content' => true,
				),

				/* Testimonial
				'testimonial' => array(
					'attr' => array(
						'name' => 'text',
						'company' => 'text'
					),
					'desc' => array(
						'name' => 'Enter Clients Name',
						'company' => 'Enter Company Name',
					),
					'content' => true,
				),
				*/

				/* Toggle */
				'toggle' => array(
					'attr' => array(
						'title' => 'text',
						'open' => 'select',
					),
					'desc' => array(
						'title' => 'Enter Title',
						'open' => 'Default State of content'
					),
					'open_options' => array(
						0 => 'Close',
						1 => 'Open',
					),
					'content' => true,
				),

				/* Tooltip */
				'tooltip' => array(
					'attr' => array(
						'tip' => 'text',
						'pos' => 'select',
					),
					'desc' => array(
						'tip' => 'Enter Tooltip',
						'pos' => 'Select Position of Tooltip'
					),
					'pos_options' => array(
						'left' => 'Left',
						'right' => 'Right',
						'top' => 'Top',
						'bottom' => 'Bottom',
					),
					'content' => true,
				),

				/* Video */
				'video' => array(
					'attr' => array(
						'type' => 'select',
						'video_id' => 'text',
						'height' => 'text',
						'width' => 'text',

					),
					'desc' => array(
						'type' => 'Select type of video',
						'video_id' => 'Enter Video ID',
						'height' => 'Video Height in pixels (numbers only)',
						'width' => 'Video Width in pixels (numbers only)',
					),
					'type_options' => array(
						'youtube' => 'YouTube',
						'vimeo' => 'Vimeo',
					),
					'content' => false,
				),

				/* Recent Posts */
				'recent_posts' => array(
					'attr' => array(
						'count' => 'text',
					),
					'desc' => array(
						'count' => 'Enter no. of posts to be displayed',
					),
					'content' => false,
				),

			);
			?>

			<style type="text/css">
				.webulous_shortcode_widget label {
					margin-top: 10px;
					font-weight: bold;
					display: block;
				}

				.webulous_shortcode_widget .button {
					margin: 10px 0;
				}

				.webulous_shortcode_widget .sc_field_wrapper {
					display: none;
				}
			</style>

			<script>
				function nl2br (str, is_xhtml) {
					var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
					return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
				}

				jQuery(document).ready(function(){

					// Upon shortcode selection show appropriate fields
					jQuery('#webulous_shortcode_select').change(function() {
						var target = jQuery(this).val();
						jQuery('.sc_field_wrapper').hide()
						jQuery('#div_'+target).fadeIn()
					});

					// Set custom no of content fields
					jQuery('.content_repeat').blur(function() {
						var times = jQuery(this).val();
						var shortcode_name = jQuery(this).attr('name');
						jQuery('#'+shortcode_name+'_content_wrapper').empty();
						if(isNaN(times)) {
							times = 1;
						}
						for(count=1;count<=times;count++) {
							if(shortcode_name == 'accordion' || shortcode_name == 'tabs' ) {
								jQuery('#'+shortcode_name+'_content_wrapper')
									.append("<div class='group'><label for='" + shortcode_name + "_content_title_" + count +"'>Title #"+ count + ":</label><input id='" + shortcode_name + "_content_title_" + count + "' class='widefat content_title' value='' type='text'><label for='" + shortcode_name + "_content_" + count +"'>Content #"+ count + ":</label><textarea id='" + shortcode_name + "_content_" + count + "' rows='3' class='widefat content'></textarea></div>");
							} else {
								if( shortcode_name == 'list' ) {
									jQuery('#'+shortcode_name+'_content_wrapper')
										.append("<div class='group'><label for='" + shortcode_name + "_content_title_" + count +"'>Title #"+ count + ":</label><input id='" + shortcode_name + "_content_title_" + count + "' class='widefat content_title' value='' type='text'></div>");
								}
							}
							/*
							 else {
							 jQuery('#'+shortcode_name+'_content_wrapper')
							 .append("<div class='group'>");
							 jQuery('#'+shortcode_name+'_content_wrapper .group')
							 .append("<label for='" + shortcode_name + "_content_" + count +"'>Content #"+ count + ":</label>")
							 .append("<textarea id='" + shortcode_name + "_content_" + count + "' rows='3' class='widefat content'></textarea>");
							 }				 */
						}

					});

					// Create Shortcode
					jQuery('.shortcode_button').click(function() {
						var target = jQuery(this).attr('id');
						var create_shortcode = '';
						//console.log(target);

						// We use switch statement to make different type of shortcodes,
						// like accordion, layout col. options, etc
						switch(target) {
							case 'accordion' :
								create_shortcode+= '['+target+'_group]';
								jQuery('#'+target+'_content_wrapper .group').each(function() {
									create_shortcode+= '['+target+' ';
									create_shortcode+= 'title="'+jQuery('.content_title', this).val()+'"]';
									console.log(jQuery('.content_title', this));
									create_shortcode+= jQuery('.content', this).val();
									create_shortcode+= '[/'+target+']';
								});
								create_shortcode+= '[/'+target+'_group]';
								break;
							case 'tabs' :
								create_shortcode+= '['+target+'_group';
								jQuery('#'+target+'_attr_wrapper .attr').each(function() {
									if( jQuery(this).attr('name') != undefined ) {
										create_shortcode+= ' '+jQuery(this).attr('name')+'="'+jQuery(this).val()+'"]';
									}
								});
								jQuery('#'+target+'_content_wrapper .group').each(function() {
									create_shortcode+= '['+target+' ';
									create_shortcode+= 'title="'+jQuery('.content_title', this).val()+'"]';
									console.log(jQuery('.content_title', this));
									create_shortcode+= jQuery('.content', this).val();
									create_shortcode+= '[/'+target+']';
								});
								create_shortcode+= '[/'+target+'_group]';
								break;

							case 'list' :
								create_shortcode+= '['+target+' type="'+jQuery('#'+target+'_select').val()+'"]';
								jQuery('#'+target+'_content_wrapper .group').each(function() {
									create_shortcode+= '['+target+'_item bullet="' + jQuery('select[name*="bullet"]').val() + '"]';
									create_shortcode+= jQuery('.content_title', this).val();
									create_shortcode+= '[/'+target+'_item]';
								});
								create_shortcode+= '[/'+target+']';
								break;

							case 'two_column_layout' :
								create_shortcode += '[one_half]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_half]';

								create_shortcode += '[one_half_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_half_last]';
								break;

							case 'three_column_layout' :
								create_shortcode += '[one_third]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_third]';

								create_shortcode += '[one_third]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_third]';

								create_shortcode += '[one_third_last]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_third_last]';
								break;

							case 'four_column_layout' :
								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[one_fourth_last]';
								create_shortcode += jQuery('#'+target+'_content_4').val();
								create_shortcode += '[/one_fourth_last]';
								break;

							case 'five_column_layout' :
								create_shortcode += '[one_fifth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_fifth]';

								create_shortcode += '[one_fifth]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_fifth]';

								create_shortcode += '[one_fifth]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_fifth]';

								create_shortcode += '[one_fifth]';
								create_shortcode += jQuery('#'+target+'_content_4').val();
								create_shortcode += '[/one_fifth]';

								create_shortcode += '[one_fifth_last]';
								create_shortcode += jQuery('#'+target+'_content_5').val();
								create_shortcode += '[/one_fifth_last]';
								break;

							case 'six_column_layout' :
								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_4').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_5').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth_last]';
								create_shortcode += jQuery('#'+target+'_content_6').val();
								create_shortcode += '[/one_sixth_last]';
								break;

							case 'six_column_layout' :
								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_4').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_5').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth_last]';
								create_shortcode += jQuery('#'+target+'_content_6').val();
								create_shortcode += '[/one_sixth_last]';
								break;

							case 'one_third_two_third_layout' :
								create_shortcode += '[one_third]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_third]';

								create_shortcode += '[two_third_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/two_third_last]';

								break;

							case 'two_third_one_third_layout' :
								create_shortcode += '[two_third]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/two_third]';

								create_shortcode += '[one_third_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_third_last]';

								break;

							case 'one_fourth_three_fourth_layout' :
								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[three_fourth_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/three_fourth_last]';

								break;

							case 'three_fourth_one_fourth_layout' :
								create_shortcode += '[three_fourth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/three_fourth]';

								create_shortcode += '[one_fourth_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_fourth_last]';

								break;

							case 'one_fourth_one_fourth_one_half_layout' :
								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[one_half_last]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_half_last]';

								break;

							case 'one_fourth_one_half_one_fourth_layout' :
								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[one_half]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_half]';

								create_shortcode += '[one_fourth_last]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_fourth_last]';

								break;

							case 'one_half_one_fourth_one_fourth_layout' :
								create_shortcode += '[one_half]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_half]';

								create_shortcode += '[one_fourth]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_fourth]';

								create_shortcode += '[one_fourth_last]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_fourth_last]';

								break;

							case 'four_fifth_one_fifth_layout' :
								create_shortcode += '[four_fifth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/four_fifth]';

								create_shortcode += '[one_fifth_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_fifth_last]';

								break;

							case 'one_fifth_four_fifth_layout' :
								create_shortcode += '[one_fifth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_fifth]';

								create_shortcode += '[four_fifth_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/four_fifth_last]';

								break;

							case 'two_fifth_three_fifth_layout' :
								create_shortcode += '[two_fifth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/two_fifth]';

								create_shortcode += '[three_fifth_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/three_fifth_last]';

								break;

							case 'one_sixth_five_sixth_layout' :
								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[five_sixth_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/five_sixth_last]';

								break;

							case 'five_sixth_one_sixth_layout' :
								create_shortcode += '[five_sixth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/five_sixth]';

								create_shortcode += '[one_sixth_last]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_sixth_last]';

								break;

							case 'one_sixth_one_sixth_one_sixth_one_half_layout' :
								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_1').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_2').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_sixth]';
								create_shortcode += jQuery('#'+target+'_content_3').val();
								create_shortcode += '[/one_sixth]';

								create_shortcode += '[one_half_last]';
								create_shortcode += jQuery('#'+target+'_content_4').val();
								create_shortcode += '[/one_half_last]';

								break;

							//	All simple shortcodes are generated here
							//	i.e. shortcode, attributes and single content
							default :
								create_shortcode+= '['+target;

								if(jQuery('#'+target+'_attr_wrapper .attr').length > 0) {
									jQuery('#'+target+'_attr_wrapper .attr').each(function() {
										if( jQuery(this).attr('name') != undefined ) {
											create_shortcode+= ' '+jQuery(this).attr('name')+'="'+jQuery(this).val()+'"';
										}
										console.log(jQuery(this).attr('name'));

									});
								}
								create_shortcode+= ']';
								if(jQuery('#'+target+'_content').length > 0) {
									create_shortcode+= jQuery('#'+target+'_content').val()+'[/'+target+']';
									create_shortcode+= '\n';
								}
						}

						jQuery('#'+target+'_code').val(create_shortcode);
					});

					// When clicked on shortcode field, select it to copy.
					jQuery('.code_area').click(function() {
						document.getElementById(jQuery(this).attr('id')).focus();
						document.getElementById(jQuery(this).attr('id')).select();
					});

					// Insert shortcode into TinyMCE editor
					jQuery(".insert_shortcode_button").click(function() {
						var target = jQuery(this).attr('id')
						var current_code = jQuery('#'+target+'_code').val();
						tinyMCE.activeEditor.selection.setContent(nl2br(current_code));
					});

					function format(icon) {
						var originalOption = icon.element;
						return '<i class="fa ' + jQuery(originalOption).data('icon') + '"></i> &nbsp;' + icon.text;
					}
					jQuery('#icon_select').select2({
						width: "100%",
						formatResult: format
					});

				});

			</script>

			<div class="webulous_shortcode_widget">
				<?php if(!empty($shortcodes)) : ?>
					<p>Select short code from dropdown, enter option values and click "Create Shortcode".</p>
					<p>Full list of <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Icons</a></p>
					<select id="webulous_shortcode_select" class="widefat">
						<option value="">None</option>

						<?php foreach($shortcodes as $shortcode_name => $shortcode) : ?>
							<option value="<?php echo $shortcode_name; ?>"><?php echo ucwords(str_replace('_', ' ', $shortcode_name)); ?></option>
						<?php endforeach; ?>
					</select>


					<?php
					foreach($shortcodes as $shortcode_name => $shortcode) :
						?>
						<div id="div_<?php echo $shortcode_name; ?>" class="sc_field_wrapper">
							<div class="sc_fields">
								<?php
									if( isset( $shortcode['attr']['content_repeat'] ) && $shortcode['attr']['content_repeat'] ) :
										?>
										<label for="content_repeat">No. of Content Fields (should be number value)</label>
										<input type="text" class="content_repeat" name="<?php echo $shortcode_name; ?>" value="<?php echo $shortcode['values']['content_repeat']; ?>" />
										<?php
									endif;

									if(isset($shortcode['attr']) && !empty($shortcode['attr'])) : ?>
										<div id="<?php echo $shortcode_name; ?>_attr_wrapper">

											<?php
												foreach($shortcode['attr'] as $attr => $type) :
													if($attr != 'content_repeat') : ?>
														<label for="<?php echo $shortcode_name; ?>"><?php echo $shortcode['desc'][$attr]; ?>:</label>

														<?php
														switch($type) :
															case 'text':

																?>
																<input type="text" id="<?php echo $shortcode_name; ?>_text" class="attr widefat" name="<?php echo $attr; ?>"/>
																<?php
																break;
															case 'icon':

																?>
																<input type="text" id="<?php echo $shortcode_name; ?>_icon" class="attr widefat faip" name="<?php echo $attr; ?>"/>
																<?php
																break;
															case 'select':
																?>
																<select id="<?php echo $shortcode_name; ?>_select" class="attr widefat" name="<?php echo $attr; ?>">
																	<?php
																		if(isset($shortcode[$attr . '_options']) && !empty($shortcode[$attr . '_options'])) :
																			foreach($shortcode[$attr . '_options'] as $select_key => $option) :
																				?>
																				<option value="<?php echo $select_key; ?>"
																					<?php if($shortcode_name == 'icon') {
																						echo 'data-icon="' . $select_key .'"';
																					}
																					?>
																					><?php echo $option; ?></option>
																				<?php
																			endforeach;
																		endif;
																	?>

																</select>

																<?php
																break;
														endswitch;
													endif;
												endforeach;
											?>

										</div>

										<?php
									endif;
									if( isset( $shortcode['values']['content_repeat'] ) && !empty( $shortcode['values']['content_repeat'] ) ) :
										?>
										<div id="<?php echo $shortcode_name; ?>_content_wrapper">
											<?php for( $i=1; $i<=$shortcode['values']['content_repeat']; $i++ ) : ?>
												<div class="group">
													<?php if($shortcode_name == 'accordion' || $shortcode_name == 'tabs') : ?>
														<label for="<?php echo $shortcode_name; ?>_content_title_<?php echo $i; ?>">Title #<?php echo $i; ?>:</label>
														<input type="text" id="<?php echo $shortcode_name; ?>_content_title_<?php echo $i; ?>" class="content_title widefat" value="" />
													<?php endif; ?>
													<label for="<?php echo $shortcode_name; ?>_content_<?php echo $i; ?>">Content #<?php echo $i; ?>:</label>
													<textarea class="widefat content" rows="3" id="<?php echo $shortcode_name; ?>_content_<?php echo $i; ?>"></textarea>
												</div>
											<?php endfor; ?>
										</div>
									<?php else :
										if(isset($shortcode['content']) && $shortcode['content']) :
											if(isset($shortcode['content_text'])) :
												$content_text = $shortcode['content_text'];
											else :
												$content_text = 'Your Content';
											endif;
											?>

											<label for="<?php echo $shortcode_name; ?>"><?php echo $content_text; ?>:</label>
											<textarea id="<?php echo $shortcode_name; ?>_content"  rows="3" class="widefat"></textarea>
											<?php
										endif;
									endif;
								?>

								<input type="button" id="<?php echo $shortcode_name; ?>" value="Create Shortcode" class="button shortcode_button"/>


								<label for="<?php echo $shortcode_name; ?>_code">Shortcode:</label>
								<textarea id="<?php echo $shortcode_name; ?>_code" rows="3" readonly="readonly" class="code_area widefat"></textarea>

								<input type="button" id="<?php echo $shortcode_name; ?>" value="Insert into Editor" class="button insert_shortcode_button"/>

							</div>

						</div>

						<?php
					endforeach;
				endif;
				?>

			</div>
			<?php
		}
	}