<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package modulus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
  
<body <?php body_class(); ?>>  
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'modulus' ); ?></a>
	<?php do_action('modulus_before_header'); ?>
<header id="masthead" class="site-header" role="banner">   
		<?php if( is_active_sidebar( 'top-left' )  || is_active_sidebar( 'top-right' ) ): ?>
		<div class="top-nav">
			<div class="container">		
					<div class="eight columns">
						<div class="cart-left">
							<?php dynamic_sidebar('top-left' ); ?>
						</div>
					</div>

					<div class="eight columns">
						<div class="cart-right">
							<?php dynamic_sidebar('top-right' ); ?>  
						</div>
					</div>

			</div>
		</div> <!-- .top-nav -->
		<?php endif;?>
		
		<div class="branding header-image">
			<div class="container">
				<div class="eight columns">
					<div class="site-branding">
						<?php 
							$logo_title = get_theme_mod( 'logo_title' );   
							$logo = get_theme_mod( 'logo', '' );
							$tagline = get_theme_mod( 'tagline',true);
							if( $logo_title && $logo != '' ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url($logo) ?>"></a></h1>
						<?php else : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php endif; ?>
						<?php if( $tagline ) : ?>
								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<?php if( is_active_sidebar('header-right' ) ) : ?>
					<div class="eight columns">
						<div class="top-right">
							<?php dynamic_sidebar( 'header-right' ); ?>
						</div>					
					</div>
				<?php endif;?>
			</div>
		</div>
		<div class="nav-wrap">
			<div class="container">
	  <?php if ( get_theme_mod ('header_search',true) ){  ?>
				<div class="twelve columns">
					<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
						<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'modulus' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="four columns">
					<?php get_search_form(); ?>
				</div>
<?php } else { ?>
<div class="sixteen columns">
		<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'modulus' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
</div>
<?php } ?>
			</div>
		</div>

</header><!-- #masthead --> 

	<?php if ( function_exists( 'is_woocommerce' ) || function_exists( 'is_cart' ) || function_exists( 'is_chechout' ) ) :
	 if ( is_woocommerce() || is_cart() || is_checkout() ) { ?>
	   <?php $breadcrumb = get_theme_mod( 'breadcrumb',true ); ?>    
		   <div class="breadcrumb">
				<div class="container">
					<div class="breadcrumb-left eight columns">
						<h4><?php woocommerce_page_title(); ?></h4>   			
					</div>
					<?php if( $breadcrumb ) : ?>
						<div class="breadcrumb-right eight columns">
							<?php woocommerce_breadcrumb(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
	<?php } 
	endif; ?>

	


