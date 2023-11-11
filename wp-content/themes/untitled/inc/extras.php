<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package untitled
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @since untitled 1.0
 */
function untitled_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'untitled_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since untitled 1.0
 */
function untitled_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'widget-area';
	}

	return $classes;
}
add_filter( 'body_class', 'untitled_body_classes' );
