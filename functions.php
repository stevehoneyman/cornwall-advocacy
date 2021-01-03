<?php
// add stylesheet(s)
function set_theme_styles() {
	wp_enqueue_style( 'main_stylesheet' , get_template_directory_uri() . '/css/app.css?v=' .time() );
}
add_action('wp_enqueue_scripts', 'set_theme_styles');

// add scripts
function set_theme_scripts() {
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/scripts.js', array('jquery') , '' , true);
}
add_action('wp_enqueue_scripts' , 'set_theme_scripts');

// add menus
// add_theme_support('menus');


function register_theme_menus() {
	register_nav_menus(
		array(
			'primary_nav_pages' => __('Primary Nav Pages'),
      'primary_nav_cta' => __('Primary Nav CTA'),
			'primary_nav_sub' => __('Primaty Nav Sub'),
	    )
		);
	}

add_action('init', 'register_theme_menus');


// enable featured images
add_theme_support('post-thumbnails');

// enable excerpts
add_post_type_support( 'page', 'excerpt' );

// show toolbar
// show_admin_bar( true );

/* TIMBER $context
----------------------------------------------------------------------------- */

function add_to_context( $context ) {
  // So here you are adding data to Timber's context object, i.e...
  // $context['foo'] = 'I am some other typical value set in your functions.php file, unrelated to the menu';

  $context['primary_nav_pages']  = new Timber\Menu('Primary');
  $context['primary_nav_cta'] = new Timber\Menu('CTA');
  $context['primary_nav_sub'] = new Timber\Menu('Sub');

  return $context;
}

add_filter( 'timber/context', 'add_to_context' );
