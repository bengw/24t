<?php
/**
 *  Site Functions
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

/**
 * Get WP Admin Section <head> incs.
 */
include_once 'admin/head/admin-head.php';

/**
 * Enqueue Styles and Scripts --front-end.
 */
function poise_enqueue_stylescripts() {

	// Parent theme scripts.
	wp_enqueue_script( 'poise-theme-scripts', get_template_directory_uri() . '/assets/js/min/app.js', '', '', true );

}
add_action( 'wp_enqueue_scripts', 'poise_enqueue_stylescripts' );

/**
 * Enqueue Styles and Scripts --back-end.
 */
function include_admin_stylescripts() {

	// WP Admin styles.
	wp_enqueue_style( 'back-end-styles', get_template_directory_uri() . '/admin/css/admin.css' );

	// WP Admin scripts.
	wp_enqueue_script( 'back-end-scripts', get_template_directory_uri() . '/admin/js/admin.js' );
}
add_action( 'admin_enqueue_scripts', 'include_admin_stylescripts' );

/**
 * Get Schema function.
 */
function get_schema() {
	get_template_part( 'schema' );
}

/**
 * Remove Schema from Yoast as we have our own in Configuration.
 */
add_filter( 'wpseo_json_ld_output', '__return_false' );

/**
 * Get Social Media Icons function.
 */
function get_social_media() {
	get_template_part( '../release-theme/custom/social-media' );
}

/**
 * Offcanvas Partial.
 */
function get_offcanvas() {
	get_template_part( '../release-theme/custom/navigation' );
}

/**
 * Replace default WordPress text with branding.
 *
 * $default represents the existing text in the left side.
 */
function poise_theme_admin_footer( $default ) {
	//return the new footer text
	return '<a href="https://tilted24.com" target="_blank">Website by T24</a>.';
}
add_filter('admin_footer_text', 'poise_theme_admin_footer');

// Appearance > Widgets
// add_action( 'widgets_init', 'boiler_theme_widgets_init' );
// 	function boiler_theme_widgets_init() {
// 		register_sidebar( array(
// 			'name'          => esc_html__( 'Sidebar Widget Area', 'poise-theme' ),
// 			'id'            => 'primary-widget-area',
// 			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
// 			'after_widget'  => '</li>',
// 			'before_title'  => '<h3 class="widget-title">',
// 			'after_title'   => '</h3>',
// 	) );
// }

/**
 * Set up the theme.
 */
function poise_theme_setup() {
	load_theme_textdomain( 'poise-theme', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form' ) );
			
	global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 1440; 
	}
}
add_action( 'after_setup_theme', 'poise_theme_setup' );

/**
 * ACF Options pages.
 */
if( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( 'Configuration', 'configuration' );
}

/**
 * Print user role classes.
 */
function print_user_classes() {
	if ( is_user_logged_in() ) {
		add_filter( 'body_class','class_to_body' );
		add_filter( 'admin_body_class', 'class_to_body_admin' );
	}
}
add_action( 'init', 'print_user_classes' );
	 
/**
 * Set up add user role as class to body on front-end.
 */
function class_to_body( $classes ) {
	global $current_user;
	$user_role = array_shift($current_user->roles);
	$classes[] = $user_role . ' ';
	return $classes;
}
	 
/**
 * Set up add the user ID and user role to body in admin.
 */
function class_to_body_admin( $classes ) {
	global $current_user;
	$user_role = array_shift($current_user->roles);
	/* Adds the user id to the admin body class array */
	$user_ID = $current_user->ID;
	$classes = $user_role . ' ' . 'user-id-' . $user_ID ;
	return $classes;
	return 'user-id-' . $user_ID;
}

/**
 * Remove WordPress generator meta tag from head.
 */
remove_action('wp_head', 'wp_generator');

/**
 * Add browser and OS classes to body.
 */
function browser_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
 
    if($is_lynx) $classes[] = 'lynx';
    elseif($is_gecko) $classes[] = 'firefox';
    elseif($is_opera) $classes[] = 'opera';
    elseif($is_NS4) $classes[] = 'ns4';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE) {
        $classes[] = 'ie';
        if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
        $classes[] = 'ie'.$browser_version[1];
 
    } else $classes[] = 'unknown';
 
    if($is_iphone) $classes[] = 'iphone';
 
    if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
         $classes[] = 'osx';
       } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
         $classes[] = 'linux';
       } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
         $classes[] = 'windows';
       }
    return $classes;
}
add_filter('body_class','browser_body_class');

/**
 * Remove 'type=*' from body scripts and styles.
 */
function poise_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
add_filter('style_loader_tag', 'poise_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'poise_remove_type_attr', 10, 2);

/**
 * Remove version numbers from files.
 */
function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);

