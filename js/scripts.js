// Check js is running
var dateTime = new Date();
console.log('loading from scripts.js from Cornwall Advocacy on: ' + dateTime);

jQuery(document).ready(function($){

  /* navigation
	------------------------------------------------------------------------- */
  $('.menu').on('click', function() {
		$('.primary-nav').toggleClass('nav-open');
	});

  $('.item-title').on('click', function() {
    console.log('question fired..');
    $(this).next('.item-content').toggleClass('accordian-open');
  });
}); // close doc ready
