(function( $ ) {

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */


	docs = $('<a class="modulus-docs doc"></a>')
			.attr('href','http://www.webulousthemes.com/modulus-pro/')
			.attr('target','_blank')
			.text('Documentation');

	support = $('<a class="modulus-docs question"></a>')
			.attr('href','http://www.webulousthemes.com/support-ticket/')
			.attr('target','_blank')
			.text('Ask a Question');

	$('.preview-notice').append(docs);
	$('.preview-notice').append(support);

		$('.modulus-docs').on('click',function(e){
			e.stopPropagation();
		})



	// customizer js  //


	wp.customize( 'body_weight', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'font-weight', to );
		} );
	} );
	wp.customize( 'body_size', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'font-size', to +'px' );
		} );
	} );
	wp.customize( 'body_color', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'color', to );
		} );
	} );

	wp.customize( 'h1_weight', function( value ) {
		value.bind( function( to ) {
			$( 'h1' ).css( 'font-weight', to );
		} );
	} );
	wp.customize( 'h1_size', function( value ) {
		value.bind( function( to ) {
			$( 'h1' ).css( 'font-size', to +'px' );
		} );
	} );
	wp.customize( 'h1_color', function( value ) {
		value.bind( function( to ) {
			$( 'h1' ).css( 'color', to );
		} );
	} );

	wp.customize( 'h2_weight', function( value ) {
		value.bind( function( to ) {
			$( 'h2' ).css( 'font-weight', to );
		} );
	} );
	wp.customize( 'h2_size', function( value ) {
		value.bind( function( to ) {
			$( 'h2' ).css( 'font-size', to +'px' );
		} );
	} );
	wp.customize( 'h2_color', function( value ) {
		value.bind( function( to ) {
			$( 'h2' ).css( 'color', to );
		} );
	} );


	wp.customize( 'h3_weight', function( value ) {
		value.bind( function( to ) {
			$( 'h3' ).css( 'font-weight', to );
		} );
	} );
	wp.customize( 'h3_size', function( value ) {
		value.bind( function( to ) {
			$( 'h3' ).css( 'font-size', to +'px' );
		} );
	} );
	wp.customize( 'h3_color', function( value ) {
		value.bind( function( to ) {
			$( 'h3' ).css( 'color', to );
		} );
	} );


	wp.customize( 'h4_weight', function( value ) {
		value.bind( function( to ) {
			$( 'h4' ).css( 'font-weight', to );
		} );
	} );
	wp.customize( 'h4_size', function( value ) {
		value.bind( function( to ) {
			$( 'h4' ).css( 'font-size', to +'px' );
		} );
	} );
	wp.customize( 'h4_color', function( value ) {
		value.bind( function( to ) {
			$( 'h4' ).css( 'color', to );
		} );
	} );


	wp.customize( 'h5_weight', function( value ) {
		value.bind( function( to ) {
			$( 'h5' ).css( 'font-weight', to );
		} );
	} );
	wp.customize( 'h5_size', function( value ) {
		value.bind( function( to ) {
			$( 'h5' ).css( 'font-size', to +'px' );
		} );
	} );
	wp.customize( 'h5_color', function( value ) {
		value.bind( function( to ) {
			$( 'h5' ).css( 'color', to );
		} );
	} );


	wp.customize( 'h6_weight', function( value ) {
		value.bind( function( to ) {
			$( 'h6' ).css( 'font-weight', to );
		} );
	} );
	wp.customize( 'h6_size', function( value ) {
		value.bind( function( to ) {
			$( 'h6' ).css( 'font-size', to +'px' );
		} );
	} );
	wp.customize( 'h6_color', function( value ) {
		value.bind( function( to ) {
			$( 'h6' ).css( 'color', to );
		} );
	} );

})( jQuery );
