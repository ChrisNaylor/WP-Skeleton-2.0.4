<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

//Drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );
//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter( 'widget_text', 'do_shortcode' );

//Widget support for a right sidebar
register_sidebar( array(
	'name' => 'Right Sidebar',
	'id' => 'right-sidebar',
	'description' => 'Widgets in this area will be shown on the right-hand side.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Widget support for the footer
register_sidebar( array(
	'name' => 'Footer Sidebar',
	'id' => 'footer-sidebar',
	'description' => 'Widgets in this area will be shown in the footer.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Enqueue_styles
if ( ! function_exists( 'Wps_load_styles' ) ) {
function Wps_load_styles() {

	wp_register_style( 'skeleton-normalize', get_template_directory_uri() . '/stylesheets/normalize.css');
	wp_register_style( 'skeleton-master', get_template_directory_uri() . '/stylesheets/skeleton.css');
	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/style.css');
	wp_register_style( 'github-prettify-theme', get_template_directory_uri() . '/stylesheets/github-prettify-theme.css');

	wp_enqueue_style( 'skeleton-normalize' );
	wp_enqueue_style( 'skeleton-master' );
	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'github-prettify-theme' );

}
add_action('wp_enqueue_scripts', 'Wps_load_styles');
} // endif

/*Remove Emoji Code*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function sitejs() {
  wp_register_script('sitejs', get_template_directory_uri() . '/js/site.js', array('jquery'), '1.1', true);
  wp_enqueue_script('sitejs');
}
add_action('wp_enqueue_scripts', 'sitejs');

add_action('wp_enqueue_scripts', 'prettify_js');
function prettify_js() {
  wp_enqueue_script('prettify-js', 'https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.js', array(jquery), '', false);
}
