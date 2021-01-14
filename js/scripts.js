// Check js is running
var dateTime = new Date();
console.log('loading from scripts.js from Cornwall Advocacy on: ' + dateTime);

jQuery(document).ready(function($){

  /* navigation
	------------------------------------------------------------------------- */
  $('.menu').on('click', function() {
		$('.primary-nav').toggleClass('nav-open');
	});

  $('.question').on('click', function() {
    //  console.log('yep..');
    $(this).next('.answer').toggleClass('faq-open');
  });
}); // close doc ready
