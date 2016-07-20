<?php

function modulus_custom_styles($custom) {
$custom = '';	

   /* Heder background image */

    if( get_theme_mod('header_image')  ) {    		

        $bg_size = get_theme_mod('header_bg_size','auto');
        $bg_repeat = get_theme_mod('header_bg_repeat','repeat'); 
        $bg_attachment =  get_theme_mod('header_bg_attachment','scroll'); 
        $bg_position =   get_theme_mod('header_bg_position','left top'); 
        $bg_height = get_theme_mod('header_bg_height','150');  

        $custom .= ".header-image {  background-position: ". $bg_position. ";
				    background-repeat: ". $bg_repeat . ";  
				    background-size: ". $bg_size ." ;
				    min-height: ". $bg_height ."px;  
				    background-attachment : ". $bg_attachment .";
				    position: relative; }"."\n";
   }


   if( get_theme_mod('header_bg_color')  ) {   
     $bg_color =  get_theme_mod('header_bg_color','#ffffff');
     $custom .= ".header-image { background-color: ". $bg_color ."\n";
   }


	//Output all the styles
	wp_add_inline_style( 'modulus-style', $custom ); 	

}


add_action( 'wp_enqueue_scripts', 'modulus_custom_styles' );
