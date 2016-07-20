(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
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

    // navigation waves -class//
    	
	$('.main-navigation a,.top-right a,#filters .filter-options a,.flex-caption a,.tagcloud a').addClass("rippler rippler-default");
    $('.overlay_icon a').addClass("rippler rippler-bs-success");
    $('.recent-post .flex-caption a').removeClass("rippler rippler-default");

	  $(".rippler").rippler({
	    effectClass      :  'rippler-effect'
	    ,effectSize      :  0      // Default size (width & height)
	    ,addElement      :  'div'   // e.g. 'svg'(feature)
	    ,duration        :  400
	  }); 
    	

	$('.team-avatar').click(function() {
		$('.team-content').hide();
		$(this).next().slideToggle();   
	});

	$('.team-content .close').click(function() {
		$(this).parent().slideToggle();
	});

	Grid.init();

	if( $.fn.flexslider ) {
		$('.recent-posts-carousel').flexslider({
			animation: "slide",
			animationLoop: false,
			itemWidth: 350,
			controlNav: false,
			itemMargin: 0
		});

		$('.recent-posts-slider').flexslider();
	}

	$('.testimonials').flexslider({  
		animation: "slide",        
		animationLoop: true,
		controlNav: true,
		directionNav: true
	}); 



	$('.recent-work').flexslider({
		animation: "slide",
		animationLoop: true,
		controlNav: false,
		itemWidth: 300,
		itemMargin: 5
	});

	var icons = {
		header: "fa fa-plus",
		activeHeader: "fa fa-minus"
	};

	//Accordion
	$( ".accordion" ).accordion({
		heightStyle: "content",
		icons: icons
	});

	$('.alert-close').click(function(evt){
		evt.preventDefault();
		$(this).parent().fadeOut('slow', function(){ $(this).remove();});
	});

	$('.toggle-title').click(function() {

		$(this).next().toggle('slow');    
		var icn = $('.icn i',this).attr('class');
		if( icn == 'fa fa-minus' ) {
			$('.icn i',this).attr('class','fa fa-plus');
		} else {
			$('.icn i',this).attr('class','fa fa-minus');
		}
		//$('.icn',this).html(icn);

	});

	if( $.fn.tabulous ) {
		$('.tabs').tabulous();   
    }
  

	var sideBarPos = $('#primary').next().attr('id');
	if( sideBarPos == 'secondary') {
		$('#secondary').addClass('right');
	} else {
		$('#secondary').addClass('left');
	}


	$('.ei-slider').eislideshow({
		easing    : 'easeOutExpo',
		titleeasing : 'easeOutExpo',
		titlespeed  : 1200
	});

	$("a[rel^='prettyPhoto']").prettyPhoto();

	$('#site-navigation ul.menu').slicknav();

	var imgSizer = {
		Config : {
			imgCache : []
			,spacer : "/path/to/your/spacer.gif"
		}

		,collate : function(aScope) {
			var isOldIE = (document.all && !window.opera && !window.XDomainRequest) ? 1 : 0;
			if (isOldIE && document.getElementsByTagName) {
				var c = imgSizer;
				var imgCache = c.Config.imgCache;

				var images = (aScope && aScope.length) ? aScope : document.getElementsByTagName("img");
				for (var i = 0; i < images.length; i++) {
					images[i].origWidth = images[i].offsetWidth;
					images[i].origHeight = images[i].offsetHeight;

					imgCache.push(images[i]);
					c.ieAlpha(images[i]);
					images[i].style.width = "100%";
				}

				if (imgCache.length) {
					c.resize(function() {
						for (var i = 0; i < imgCache.length; i++) {
							var ratio = (imgCache[i].offsetWidth / imgCache[i].origWidth);
							imgCache[i].style.height = (imgCache[i].origHeight * ratio) + "px";
						}
					});
				}
			}
		}

		,ieAlpha : function(img) {
			var c = imgSizer;
			if (img.oldSrc) {
				img.src = img.oldSrc;
			}
			var src = img.src;
			img.style.width = img.offsetWidth + "px";
			img.style.height = img.offsetHeight + "px";
			img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "', sizingMethod='scale')"
			img.oldSrc = src;
			img.src = c.Config.spacer;
		}

		// Ghettomodified version of Simon Willison's addLoadEvent() -- http://simonwillison.net/2004/May/26/addLoadEvent/
		,resize : function(func) {
			var oldonresize = window.onresize;
			if (typeof window.onresize != 'function') {
				window.onresize = func;
			} else {
				window.onresize = function() {
					if (oldonresize) {
						oldonresize();
					}
					func();
				}
			}
		}
	}

	addLoadEvent(function() {
		imgSizer.collate();
	});

	function addLoadEvent(func) {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				if (oldonload) {
					oldonload();
				}
				func();
			}
		}
	}


	/* Isotope Implementation */

	var $container = $('#portfolio');

	$container.imagesLoaded(function() {
		$container.isotope({
			// options
			itemSelector : '.item',
			layoutMode : 'fitRows'
		});
	});

	var $optionSets = $('#filters .filter-options'),
		$optionLinks = $optionSets.find('a');
	console.log($optionSets);
	$optionLinks.click(function(){
		var $this = $(this);
		// don't proceed if already selected
		if ( $this.hasClass('selected') ) {
			return false;
		}
		var $optionSet = $this.parents('.filter-options');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');

		// make option object dynamically, i.e. { filter: '.my-filter-class' }
		var options = {},
			key = $optionSet.attr('data-option-key'),
			value = $this.attr('data-option-value');
		// parse 'false' as false boolean
		value = value === 'false' ? false : value;
		options[ key ] = value;
		if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
			// changes in layout modes need extra logic
			changeLayoutMode( $this, options )
		} else {
			// otherwise, apply new options
			$container.isotope( options );
		}

		return false;
	});

	/*$('.recent-work .work').hover(function() {
	 $(this).addClass('hover');
	 $('.recent_work_overlay', this).stop(true, false, true).fadeIn();
	 $('.recent_work_overlay .overlay_icon', this).stop(true, false, true).animate({ left: '42%' }, 300);

	 },function(){
	 $(this).removeClass('hover');
	 $('.recent_work_overlay', this).stop(true, false, true).fadeOut();
	 $(this).find('.recent_work_overlay .overlay_icon').stop(true, false, true).animate({ left: '142%' }, 100, function() {
	 $(this).css('left', '-42%');
	 });
	 });  */




})( jQuery );
