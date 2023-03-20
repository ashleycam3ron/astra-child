<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My Theme Name
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_NAME_VERSION', '1.0.0' );

//!Scan functions folder
	$inc = scandir(dirname(__FILE__).'/functions');
	foreach($inc as $k=>$v){
		if($k>1 && is_file(dirname(__FILE__) . '/functions/'.$v)) include(dirname(__FILE__).'/functions/'.$v);
	}

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_deregister_script('jquery');
    wp_register_script('jquery',("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"),
   false);
    wp_enqueue_script('jquery');

// Bootstrap 5
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', array(), NULL );
	wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), NULL);


	wp_enqueue_script('font-awesome','https://yourfontawesomekiturl.js');

// Fancybox
	wp_enqueue_style('fancybox','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
	wp_enqueue_script('fancybox','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'));


/* Owl Carousel
	if ( is_home() || is_front_page(  )){
		wp_enqueue_style('owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css' );
		wp_enqueue_script('owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), NULL );
	}
*/
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );