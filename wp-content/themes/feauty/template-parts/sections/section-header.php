<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif; ?>
<header id="header-section" class="header header-one wow fadeInUp">
	<!--===// Start: Header Above
   =================================-->
	<div id="above-header" class="header-above-info d-none d-lg-block">
		<div class="header-widget">
			<div class="container">
				<div class="row align-items-center justify-content-lg-between">
					<div class="col-6 col-lg-auto">
						<div class="widget widget-left text-lg-left">
							<?php
							$feauty_above_widget = 'aromatic-header-above-widget';
							if ( is_active_sidebar( $feauty_above_widget ) ){ 
									dynamic_sidebar( 'aromatic-header-above-widget' );
							}elseif ( current_user_can( 'edit_theme_options' ) ) {
								$feauty_sidebar_name = aromatic_get_sidebar_name_by_id( $feauty_above_widget );
								?>
								<div class="widget widget_none">
									<p>
										<?php if ( is_customize_preview() ) { ?>
											<a href="JavaScript:Void(0);" class="" data-sidebar-id="<?php echo esc_attr( $feauty_above_widget ); ?>">
										<?php } else { ?>
											<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>">
										<?php } ?>
											<?php esc_html_e( 'Please assign a widget here.', 'feauty' ); ?>
										</a>
									</p>
								</div>
								<?php
							} 
							
							do_action('aromatic_hdr_support');
							?>
						</div>
					</div>
					<div class="col-2 col-lg-auto">
						<div class="logo">
							<?php do_action('aromatic_logo'); ?>
						</div>
					</div>
					<div class="col-4 col-lg-auto text-right">
						<nav class="customer-area">
							<?php do_action('aromatic_hdr_login'); ?>
							<?php do_action('aromatic_hdr_account'); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--===// End: Header Top
   =================================-->
	<div class="navigation-middle d-none d-block">
		<div class="container">
			<div class="row navigation-middle-row">
				<div class="col-lg-3 col-12 text-lg-left text-center my-auto mb-lg-auto mb-2">
					<div class="logo">
						<?php do_action('aromatic_logo'); ?>
					</div>
				</div>
				<div class="col-lg-6 col-12 text-center my-auto mb-lg-auto mb-2">
				</div>
				<div class="col-lg-3 col-12 text-lg-right text-center my-auto mb-lg-auto mb-2">
				</div>
			</div>
		</div>
	</div>
	<div class="navigator-wrapper">
		<!--===// Start: Mobile Toggle
	   =================================-->
		<div class="theme-mobile-nav sticky-nav <?php echo esc_attr(aromatic_sticky_menu()); ?> d-block d-lg-none">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="theme-mobile-menu">
							<div class="menu-toggle-wrap">
								<div class="hamburger hamburger-menu">
									<button type="button" class="toggle-lines menu-toggle"
										id="mob-toggle-lines">
										<div class="top-bun"></div>
										<div class="meat"></div>
										<div class="bottom-bun"></div>
									</button>
								</div>
							</div>
							<div class="mobile-logo">
								<div class="logo">
									<?php do_action('aromatic_logo'); ?>
								</div>
							</div>
							<div id="mobile-m" class="mobile-menu">
								<button type="button" class="header-close-menu close-style"></button>
								<?php do_action('aromatic_hdr_mobile_browse_cat')?>
								<?php do_action('aromatic_main_nav'); ?>
							</div>
							<div class="mobile-menu-right">
								<ul class="header-wrap-right">
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===// End: Mobile Toggle
	   =================================-->
		<!--===// Start: Navigation
	   =================================-->
		<div class="nav-area d-lg-block d-none">
			<div class="navbar-area sticky-nav <?php echo esc_attr(aromatic_sticky_menu()); ?>">
				<div class="container overflow-unset">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-7 col-lg-auto">
							<div class="theme-menu">
								<nav class="menubar">
									<?php do_action('aromatic_main_nav'); ?>
								</nav>
							</div>
						</div>
						<div class="col-3 col-lg-auto">
							<?php do_action('aromatic_hdr_product_search'); ?>
						</div>
						<div class="col-2 col-lg-auto">
							<div class="menu-right">
								<div class="main-menu-right">
									<ul class="menu-right-list">
										<?php 
											do_action('aromatic_hdr_cart');
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===// End:  Navigation
	   =================================-->
	</div>
</header> 