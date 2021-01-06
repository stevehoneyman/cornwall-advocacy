// Check js is running
var dateTime = new Date();
console.log('loading from scripts.js from Cornwall Advocacy on: ' + dateTime);

jQuery(document).ready(function($){

  /* navigation
	------------------------------------------------------------------------- */
  $('.menu').on('click', function() {
		// console.log('click fired...');
   $('body').toggleClass('nav-open');
	});

}); // close doc ready
