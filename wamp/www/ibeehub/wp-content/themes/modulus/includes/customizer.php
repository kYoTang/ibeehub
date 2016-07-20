<?php
/**
 * modulus Theme Customizer
 *
 * @package modulus     
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function modulus_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'modulus_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function modulus_customize_preview_js() {
	wp_enqueue_script( 'modulus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'modulus_customize_preview_js' );

/* Flex caption option function */
if(! get_theme_mod('flexcaption_bg',true) ) {

	add_action( 'wp_head','wbls_flexcaption_background_style' );
	
	function wbls_flexcaption_background_style() {  ?>
			<style type="text/css">
		       .flexslider .flex-caption {
		         	background: none;
		       }
			</style>
<?php }
}

if( get_theme_mod('enable_primary_color',false) ) {

	add_action( 'wp_head','wbls_customizer_primary_custom_css' );

	function wbls_customizer_primary_custom_css() {
			$primary_color = get_theme_mod( 'primary_color','#03a9f4'); ?>

	<style type="text/css">

.nav-wrap,.main-navigation .sub-menu li a:hover, .main-navigation .children li a:hover,.light-blue,.light-blue-text,.nav-links .nav-previous:hover a,
.more-link .nav-previous:hover a, .comment-navigation .nav-previous:hover a, .nav-links .nav-next:hover a,
.more-link .nav-next:hover a, .comment-navigation .nav-next:hover a ,.nav-links .nav-next:hover a .meta-nav,
.more-link .nav-next:hover a .meta-nav, .comment-navigation .nav-next:hover a .meta-nav,  a.more-link:hover,a.more-link:hover .meta-nav,ol.webulous_page_navi li ,
ol.webulous_page_navi .bpn-next-link, ol.webulous_page_navi .bpn-prev-link,.top-right ul li:hover a ,.share-box ul li a:hover,.hentry.sticky ,
.page-links ,.main-navigation button.menu-toggle:hover,.widget_tag_cloud a ,.site-footer .footer-widgets .widget_calendar table caption,.flexslider .flex-caption a,blockquote,.title-divider:after,.services-wrapper .service .demo-thumb,.flexslider .flex-direction-nav a:hover,
.woocommerce #content nav.woocommerce-pagination ul li a:focus,.woocommerce a.remove,.woocommerce #content table.cart a.remove, .woocommerce table.cart a.remove,.woocommerce-page #content table.cart a.remove, .woocommerce-page table.cart a.remove,.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,.woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li span.current
				{
					background-color: <?php  echo esc_html($primary_color); ?>;
				}

	.flexslider .flex-direction-nav a:hover,.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover {
		background-color: <?php  echo esc_html($primary_color); ?>!important;
	}			

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,.flexslider .flex-caption a,.widget_tag_cloud a ,
textarea:focus,.title-divider:before,.services-wrapper .service:hover,.services-wrapper .service:hover .service-content
				{
					border-color: <?php  echo esc_html($primary_color); ?>;
				}


				
input[type=text],
input[type=password],
input[type=email],
input[type=url],
input[type=time],
input[type=date],
input[type=datetime-local],
input[type=tel],
input[type=number],
input[type=search],
textarea.materialize-textarea, input[type=text]:focus:not([readonly]),
input[type=password]:focus:not([readonly]),
input[type=email]:focus:not([readonly]),
input[type=url]:focus:not([readonly]),
input[type=time]:focus:not([readonly]),
input[type=date]:focus:not([readonly]),
input[type=datetime-local]:focus:not([readonly]),
input[type=tel]:focus:not([readonly]),
input[type=number]:focus:not([readonly]),
input[type=search]:focus:not([readonly]),
textarea.materialize-textarea:focus:not([readonly]),.widget-area h4.widget-title
  {
border-bottom-color: <?php  echo esc_html($primary_color); ?>;
}




				
.cart-subtotal .amount,.woocommerce .woocommerce-breadcrumb a:hover, .woocommerce-page .woocommerce-breadcrumb a:hover,.free-home .post-wrapper .btn-readmore,.free-home .post-wrapper .entry-meta span:hover i, .free-home .post-wrapper .entry-meta span:hover a ,.free-home .post-wrapper .entry-meta span:hover,.free-home .post-wrapper h3 a:hover,.free-home .title-divider:before,.free-home .services-wrapper .service:hover h4,
.site-info .widget_nav_menu a:hover,.site-info p a ,.site-footer .footer-widgets a:hover,.site-footer .footer-widgets #calendar_wrap a,.widget-area .widget_rss a ,.widget_calendar table th a, .widget_calendar table td a,#secondary #recentcomments a,.widget-area ul li a:hover,.flexslider .flex-caption h1:before, .flexslider .flex-caption h2:before, .flexslider .flex-caption h3:before, .flexslider .flex-caption h4:before, .flexslider .flex-caption h5:before, .flexslider .flex-caption h6:before,.breadcrumb a,.post-wrapper .btn-readmore,.post-wrapper .entry-meta span:hover i, .post-wrapper .entry-meta span:hover a,.post-wrapper .entry-meta span:hover,.post-wrapper h3 a:hover,.services-wrapper .service:hover h4,.title-divider:before,.hentry.post h1 a:hover,.top-nav ul li:hover a,.branding .site-branding .site-title a:hover:first-letter,a,input[type=text]:focus:not([readonly]) + label,
input[type=password]:focus:not([readonly]) + label,
input[type=email]:focus:not([readonly]) + label,
input[type=url]:focus:not([readonly]) + label,
input[type=time]:focus:not([readonly]) + label,
input[type=date]:focus:not([readonly]) + label,.site-branding .site-title a,
input[type=datetime-local]:focus:not([readonly]) + label,
input[type=tel]:focus:not([readonly]) + label,
input[type=number]:focus:not([readonly]) + label,
input[type=search]:focus:not([readonly]) + label,
textarea.materialize-textarea:focus:not([readonly]) + label ,	ol.comment-list .reply:before, .comment-author .fn a:hover,ol.comment-list article .fn:hover,.comment-metadata a:hover
               {
					color: <?php echo esc_html($primary_color); ?>;

				}

				
			</style>
<?php
	}
}

if( get_theme_mod('enable_nav_bg_color',false) ) {

	add_action( 'wp_head','wbls_customizer_navbg_custom_css' );

		function wbls_customizer_navbg_custom_css() {
			$nav_bg_color = get_theme_mod( 'nav_bg_color','#03a9f4'); ?>

				<style type="text/css">

@media screen and (max-width: 600px) {
	.main-navigation .sub-menu .sub-menu, .main-navigation .sub-menu .children, .main-navigation .children .sub-menu, .main-navigation .children .children,.main-navigation .sub-menu li a, .main-navigation .children li a,
	.main-navigation .sub-menu,.main-navigation .children
	{
			background-color:<?php echo esc_html($nav_bg_color); ?>!important;
	}
}

.nav-wrap
		{
			background-color: <?php echo esc_html($nav_bg_color); ?>;
		}
				</style>
<?php }
}




if( get_theme_mod('enable_nav_hover_color',false) ) {

	add_action( 'wp_head','wbls_customizer_hover_custom_css' );

		function wbls_customizer_hover_custom_css() {
			$nav_hover_color = get_theme_mod( 'nav_hover_color','#33363a'); ?>

				<style type="text/css">

.main-navigation li:hover::before,.main-navigation li:hover,.main-navigation .current_page_item::before, .main-navigation .current-menu-item::before, .main-navigation .current_page_ancestor::before, .main-navigation .current-menu-parent::before,
.main-navigation .current_page_item, .main-navigation .current-menu-item, .main-navigation .current_page_ancestor, .main-navigation .current-menu-parent > a,.main-navigation .sub-menu, .main-navigation .children,.main-navigation .sub-menu li a, .main-navigation .children li a

							{
								background-color: <?php echo esc_html($nav_hover_color);?>;
							}
	.main-navigation li:hover::after,.main-navigation .current_page_item::after, .main-navigation .current-menu-item::after, .main-navigation .current_page_ancestor::after, .main-navigation .current-menu-parent::after
	{
		 color: <?php echo esc_html($nav_hover_color); ?>;
	}


				</style>
<?php }
}


if( get_theme_mod('enable_dd_hover_color',false) ) {

	add_action( 'wp_head','wbls_customizer_dd_hover_custom_css' );

		function wbls_customizer_dd_hover_custom_css() {
			$nav_dd_hover_color = get_theme_mod( 'dd_hover_color','#33363a'); ?>

				<style type="text/css">
				
@media screen and (max-width: 600px) {
	.main-navigation .sub-menu .current_page_item > a,.main-navigation .children .current_page_item >a
	{
			color:<?php echo esc_html($nav_dd_hover_color ); ?>;
	}
}

	.main-navigation .sub-menu .current_page_item > a, .main-navigation .sub-menu .current-menu-item > a, .main-navigation .sub-menu .current_page_ancestor > a, .main-navigation .children .current_page_item > a, .main-navigation .children .current-menu-item > a, .main-navigation .children .current_page_ancestor > a,.main-navigation .sub-menu li a:hover, .main-navigation .children li a:hover
			{
				background-color: <?php echo esc_html($nav_dd_hover_color ); ?>;
			}
				</style>
<?php }
}


if( get_theme_mod('enable_rippler_color',false) ) { 

	add_action( 'wp_head','wbls_rippler_color_custom_css' );

		function wbls_rippler_color_custom_css() {
			$rippler_color = get_theme_mod( 'rippler_color','#fff'); ?>

				<style type="text/css">

					.rippler-default .rippler-div 
							{
								background-color: <?php echo esc_html($rippler_color); ?>;
							}
				</style>
<?php }
}

