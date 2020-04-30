<?php
/**
 *  Child Theme Functions
 *
 *  @package release-theme
 *  @author benwelsby
 *  @version 1.0.0
 */

/**
 * Include core functions from parent theme.
 */
if ( file_exists(TEMPLATEPATH . '/core-functions.php') ) {
	require_once TEMPLATEPATH . '/core-functions.php';
}

/**
 * Remove admin bar from front-end.
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Enqueue Styles and Scripts --front-end.
 */
function poise_enqueue() {
	// Get child theme styles.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );

	// Get child theme scripts.
	wp_enqueue_script( 'child-app', get_stylesheet_directory_uri() . '/assets/js/min/child-app.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'poise_enqueue' );

/**
 * Register nav menus.
 */
register_nav_menus( [
	'header-nav' 	=> esc_html__( 'Header Nav', 'release-theme' ),
	'footer-nav' => esc_html__( 'Footer Nav', 'release-theme' )
] );