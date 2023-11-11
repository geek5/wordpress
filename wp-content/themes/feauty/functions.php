<?php
/**
 * Define Theme Version
 */
define( 'FEAUTY_THEME_VERSION', '5.5' );

function feauty_css() {
	$parent_style = 'aromatic-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'feauty-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('feauty-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('aromatic-media-query');
	
	wp_enqueue_script('feauty-custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'feauty_css',999);


require get_stylesheet_directory() . '/inc/customizer/customizer-options/feauty-pro.php';

/**
 * Import Settings From Parent Theme
 *
 */
function feauty_parent_theme_options() {
	$aromatic_mods = get_option( 'theme_mods_aromatic' );
	if ( ! empty( $aromatic_mods ) ) {
		foreach ( $aromatic_mods as $aromatic_mod_k => $aromatic_mod_v ) {
			set_theme_mod( $aromatic_mod_k, $aromatic_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'feauty_parent_theme_options' );