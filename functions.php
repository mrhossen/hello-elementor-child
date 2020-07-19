<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );



/* Hide Hello theme page title */
function dev1_disable_page_title( $return ) {
	return false;
	}
add_filter( 'hello_elementor_page_title', 'dev1_disable_page_title' );

/* Disable google font on Elementor */
// add_filter( 'elementor/frontend/print_google_fonts', '__return_false' );

/* Disable Font Awesome on Elementor */
// add_action( 'elementor/frontend/after_register_styles',function() {
// 	foreach( [ 'solid', 'regular', 'brands' ] as $style ) {
// 		wp_deregister_style( 'elementor-icons-fa-' . $style );
// 	}
// }, 20 );

/* Disable Eicons on Elementor */
// add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 20 ); 
// function remove_default_stylesheet() { 
// 	wp_deregister_style( 'elementor-icons' ); 
// }
	