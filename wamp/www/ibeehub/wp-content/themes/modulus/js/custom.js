(function($){

	$(function(){
		$('.flexslider').flexslider();   
	});

	$('.main-navigation a,.top-right a,.tagcloud a,.more-link').addClass("rippler rippler-default");

	  $(".rippler").rippler({
	    effectClass      :  'rippler-effect'
	    ,effectSize      :  0      // Default size (width & height)
	    ,addElement      :  'div'   // e.g. 'svg'(feature)
	    ,duration        :  400
	  });

})(jQuery);