// Check js is running
var dateTime = new Date();
console.log('loading from scripts.js from Cornwall Advocacy on: ' + dateTime);

jQuery(document).ready(function($){ // start doc ready

  /* start scripts
  ------------------------------------------------------------------------- */

	/* navigation
	------------------------------------------------------------------------- */
	// controls for main nav
	// toggle visibility
	$('.navicon').on('click', function() {
		// console.log('click fired...')
		$(this).next().toggleClass('show');
	});

	/* sliders
	------------------------------------------------------------------------- */
	$('.basic-slider').slick({
		//  setting-name: setting-value
 	}); // end basic

	$('.fade-slider').slick({
     	// dots: true,
     	// infinite: true,
     	speed: 500,
     	fade: true,
     	cssEase: 'linear'
    }); // end fade

	$('.multiple-slider').slick({
    	//infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1
    }); // end multiple

	/* accordians - faqs
	------------------------------------------------------------------------- */
	$('.faq-question').click(function() {
		$(this).next().toggleClass('show');
	});

	/* scroll in
	------------------------------------------------------------------------- */
  (function($) {
			$.fn.visible = function(partial) {

			var $t            = $(this),
			  $w            = $(window),
			  viewTop       = $w.scrollTop(),
			  viewBottom    = viewTop + $w.height(),
			  _top          = $t.offset().top,
			  _bottom       = _top + $t.height(),
			  compareTop    = partial === true ? _bottom : _top,
			  compareBottom = partial === true ? _top : _bottom;

			return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

 		};
	})(jQuery);

	$(window).scroll(function(event) {
		$(".module").each(function(i, el) {
			var el = $(el);
			if (el.visible(true)) {
			el.addClass("come-in");
			}
		});
	});

	/* end scripts
	------------------------------------------------------------------------- */

}); // close doc ready
