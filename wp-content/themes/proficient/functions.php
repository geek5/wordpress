<?php

define( 'PROFICIENT_THEME_VERSION', '6.9' );

function proficient_css() {
	$parent_style = 'specia-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'proficient-main', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('proficient-default',get_stylesheet_directory_uri() .'/css/colors/default.css');
	wp_dequeue_style('specia-default');
	
	wp_dequeue_style('specia-media-query');
	wp_enqueue_style('proficient-media-query', get_template_directory_uri() . '/css/media-query.css');
}
add_action( 'wp_enqueue_scripts', 'proficient_css',999);
   	

function proficient_setup()	{	
	load_child_theme_textdomain( 'proficient', get_stylesheet_directory() . '/languages' );
	add_editor_style( array( 'css/editor-style.css', proficient_google_font() ) );
}
add_action( 'after_setup_theme', 'proficient_setup' );

/**
 * Called premium page details
 */
require_once( get_stylesheet_directory() . '/inc/customize/proficient-premium.php');
require_once( get_stylesheet_directory() . '/inc/customize/proficient-header-section.php');
require_once( get_stylesheet_directory() . '/inc/customize/proficient-call-action.php');
	
/**
 * Register Google fonts for Proficient.
 */
function proficient_google_font() {
	
    $get_fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Open Sans:300,400,600,700,800', 'Raleway:400,700');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return esc_url($get_fonts_url);
}

function proficient_scripts_styles() {
    wp_enqueue_style( 'proficient-fonts', proficient_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'proficient_scripts_styles' );

/**
 * Customizer Enqueue for Premium Buttons
 */
function proficient_premium_css()	{
	wp_enqueue_style('proficient-style-customizer',get_stylesheet_directory_uri(). '/css/style-customizer.css');
}
add_action('customize_controls_print_styles','proficient_premium_css');


/**
 * Import Options From Specia Theme
 *
 */
function proficient_parent_theme_options() {
	$specia_mods = get_option( 'theme_mods_specia' );
	if ( ! empty( $specia_mods ) ) {
		foreach ( $specia_mods as $specia_mod_k => $specia_mod_v ) {
			set_theme_mod( $specia_mod_k, $specia_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'proficient_parent_theme_options' );