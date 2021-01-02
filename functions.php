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
add_theme_support('menus');

/* -----------------------------------------------------------------------------

function register_theme_menus() {
	register_nav_menus(
		array(
			'header' => __('Header primary menu'),
			'header_sub' => __('Header sub menu'),
			'footer' => __('Footer menu'),
			)
		);
	}

add_action('init', 'register_theme_menus');

 register_nav_menus([
        'header' => __('Header', 'sage'),
        'footer' => __('Footer', 'sage'),
        'child_nav' => __('Child Nav 1', 'sage'),
        'child_nav_two' => __('Child Nav 2', 'sage'),
        'terms' => __('Terms and Conditions', 'sage')
    ]);

----------------------------------------------------------------------------- */


// enable featured images
add_theme_support('post-thumbnails');

// enable excerpts
add_post_type_support( 'page', 'excerpt' );

// show toolbar
show_admin_bar( true );
