// Check js is running
var dateTime = new Date();
console.log('loading from scripts.js from Cornwall Advocacy on: ' + dateTime);

jQuery(document).ready(function($){

  /* navigation
	------------------------------------------------------------------------- */
  // menu toggle
  $('.menu').on('click', function() {
		$('.primary-nav').toggleClass('nav-open');
	});

  // child menu mobile
  $( '.mobile-child-nav' ).parent().append( '<button class="menu-toggle" aria-label="go to sub-menu"></button>' );

  $( '.menu-toggle' ).on( 'click', function () {
	$(this).prev().toggleClass( 'show' );
  console.log('trigger show...')
  });

  // accordian
  $('.item-title-holder').on('click', function() {
    $(this).toggleClass('inherit-animation');
    $(this).next('.item-content').toggleClass('accordian-open');
  });

  // testimonial slider
  $('.testimonial-slider').slick({
		//  setting-name: setting-value
 	});
}); // close doc ready

// scroll to effect in header
const header = document.querySelector('header');
const banners = document.querySelectorAll('.banner-home, .banner');

const bannerOptions = {
  rootMargin: '-100px 0px 0px 0px'
};

const bannerObserver = new IntersectionObserver(function(entries, bannerObserver) {
  entries.forEach(entry => {
    if(!entry.isIntersecting) {
      header.classList.add('nav-scrolled');
    } else {
      header.classList.remove('nav-scrolled');
    }
  })
}, bannerOptions);

banners.forEach( banner => {
  bannerObserver.observe(banner);
});
