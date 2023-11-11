<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package untitled
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php 
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open(); 
	}
	?>
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<div id="masthead-wrap">
			<header id="masthead" class="site-header">
				<div id="logo">
					<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
					</a>
					<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>
				</div>
				<div class="nav-wrap">
					<nav class="site-navigation main-navigation">
						<h1 class="assistive-text"><?php _e( 'Menu', 'untitled' ); ?></h1>
						<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'untitled' ); ?>"><?php _e( 'Skip to content', 'untitled' ); ?></a></div>

						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- .site-navigation -->
				</div><!-- .nav-wrap -->
			</header><!-- #masthead -->
		</div><!-- #masthead-wrap -->
