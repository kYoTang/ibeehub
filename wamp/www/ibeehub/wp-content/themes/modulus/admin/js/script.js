( function( $ ) {
	// Add Make Plus message
		upgrade = $('<a class="modulus-buy-pro"></a>')
			.attr('href', 'http://www.webulousthemes.com/theme/modulus-pro/')
			.attr('target', '_blank')
			.text(modulus_upgrade.message)
		;
		demo = $('<a class="modulus-docs"></a>')
			.attr('href','http://modulus.webulous.in/')
			.attr('target','_blank')
			.text(modulus_upgrade.demo);
		docs = $('<a class="modulus-docs"></a>')
			.attr('href','http://www.webulousthemes.com/modulus-free/')
			.attr('target','_blank')
			.text(modulus_upgrade.docs);
		support = $('<a class="modulus-docs"></a>')
			.attr('href','http://www.webulousthemes.com/support-ticket/')
			.attr('target','_blank')
			.text(modulus_upgrade.support);

		$('.preview-notice').append(upgrade);
		$('.preview-notice').append(demo);    
		$('.preview-notice').append(docs);
		$('.preview-notice').append(support);
		// Remove accordion click event
		$('.modulus-buy-pro').on('click', function(e) {
			e.stopPropagation();
		});
		$('.modulus-docs').on('click',function(e){
			e.stopPropagation();
		})
} )( jQuery );