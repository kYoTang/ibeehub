( function( $ ) {

	reviewstar = $('<a id="modulus-review-rate-link"></a>')
		.attr('href', 'https://wordpress.org/support/view/theme-reviews/modulus')
		.attr('target', '_blank')
		.html("<div>If you like Modulus, <br>please leave us a <span class='modulus-star'>★★★★★</span> rating.</div>");

	$('#customize-footer-actions').append(reviewstar);


} )( jQuery );