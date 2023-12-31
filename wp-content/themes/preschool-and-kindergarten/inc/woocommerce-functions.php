<?php
/**
 * Preschool and Kindergarten woocommerce hooks and functions.
 *
 * @link https://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 *
 * @package preschool_and_kindergarten
 */

/**
 * Woocommerce related hooks
*/
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_before_main_content','woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content','woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar','woocommerce_get_sidebar',10 );

/**
 * Declare Woocommerce Support
*/
function preschool_and_kindergarten_woocommerce_support() {
    global $woocommerce;
    
    add_theme_support( 'woocommerce' );
    
    if( version_compare( $woocommerce->version, '3.0', ">=" ) ) {
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
}
add_action( 'after_setup_theme','preschool_and_kindergarten_woocommerce_support' );

/**
 * Woocommerce Sidebar
*/
function preschool_and_kindergarten_wc_widgets_init(){
    register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'preschool-and-kindergarten' ),
		'id'            => 'shop-sidebar',
		'description'   => esc_html__( 'Sidebar displaying only in woocommerce pages.', 'preschool-and-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );    
}
add_action( 'widgets_init','preschool_and_kindergarten_wc_widgets_init' );

/**
 * Before Content
 * Wraps all WooCommerce content in wrappers which match the theme markup
*/
function preschool_and_kindergarten_wc_wrapper(){ ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
    <?php
}
add_action( 'woocommerce_before_main_content','preschool_and_kindergarten_wc_wrapper',10 );

/**
 * After Content
 * Closes the wrapping divs
*/
function preschool_and_kindergarten_wc_wrapper_end(){ ?>
        </main>
    </div>
    <?php
    if( is_active_sidebar( 'shop-sidebar' ) ) do_action( 'preschool_and_kindergarten_wo_sidebar' );
}
add_action( 'woocommerce_after_main_content','preschool_and_kindergarten_wc_wrapper_end',10 );

/**
 * Callback function for Shop sidebar
*/
function preschool_and_kindergarten_wc_sidebar_cb(){
    if( is_active_sidebar( 'shop-sidebar' ) ){
        echo '<div class="sidebar"><aside id="secondary" class="widget-area" role="complementary">';
        dynamic_sidebar( 'shop-sidebar' );
        echo '</aside></div>'; 
    }
}
add_action( 'preschool_and_kindergarten_wo_sidebar','preschool_and_kindergarten_wc_sidebar_cb' );

/**
 * Removes the "shop" title on the main shop page
*/
add_filter( 'woocommerce_show_page_title', '__return_false' );