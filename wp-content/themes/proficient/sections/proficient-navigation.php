<!-- Header Widget Info -->
	<div class="header-widget-info d-lg-block d-none">
	    <div class="container">
	        <div class="header-wrapper">                
	            <div class="flex-fill">
	                <div class="header-info">
	                    <div class="header-item widget-left">
						<?php 
							$proficient_hs_nav_social			= get_theme_mod('hs_nav_social','1'); 
							$proficient_nav_facebook_link		= get_theme_mod('nav_facebook_link',''); 
							$proficient_nav_linkedin_link		= get_theme_mod('nav_linkedin_link',''); 
							$proficient_nav_twitter_link		= get_theme_mod('nav_twitter_link',''); 
							$proficient_nav_googleplus_link		= get_theme_mod('nav_googleplus_link',''); 
							$proficient_nav_instagram_link		= get_theme_mod('nav_instagram_link',''); 
							$proficient_nav_dribble_link		= get_theme_mod('nav_dribble_link',''); 
							$proficient_nav_github_link			= get_theme_mod('nav_github_link',''); 
							$proficient_nav_bitbucket_link		= get_theme_mod('nav_bitbucket_link',''); 
							$proficient_nav_email_link			= get_theme_mod('nav_email_link',''); 
							$proficient_nav_skype_link			= get_theme_mod('nav_skype_link',''); 
							$proficient_nav_skype_action_link	= get_theme_mod('nav_skype_action_link',''); 
							$proficient_nav_vk_link				= get_theme_mod('nav_vk_link','');
							$proficient_nav_pinterest_link		= get_theme_mod('nav_pinterest_link','');					
						?>
	                    	<?php if($proficient_hs_nav_social == '1') { ?>
								<aside id="social_widget" class="widget widget_social_widget">
									<ul>
										<?php if($proficient_nav_facebook_link) { ?> 
											<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_facebook_link); ?>" aria-label="fa-facebook"><i class="fa fa-facebook"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_linkedin_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_linkedin_link); ?>" aria-label="fa-linkedin"><i class="fa fa-linkedin"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_twitter_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_twitter_link); ?>" aria-label="fa-twitter"><i class="fa fa-twitter"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_googleplus_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_googleplus_link); ?>" aria-label="fa-google-plus"><i class="fa fa-google-plus"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_instagram_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_instagram_link); ?>" aria-label="fa-instagram"><i class="fa fa-instagram"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_dribble_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_dribble_link); ?>" aria-label="fa-dribbble"><i class="fa fa-dribbble"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_github_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_github_link); ?>" aria-label="fa-github-alt"><i class="fa fa-github-alt"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_bitbucket_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_bitbucket_link); ?>" aria-label="fa-bitbucket"><i class="fa fa-bitbucket"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_email_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="mailto:<?php echo esc_attr($proficient_nav_email_link); ?>" aria-label="fa-envelope-o"><i class="fa fa-envelope-o"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_skype_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_attr($proficient_nav_skype_link); ?>?<?php echo esc_attr($proficient_nav_skype_action_link); ?>" aria-label="fa-skype"><i class="fa fa-skype"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_vk_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_vk_link); ?>" aria-label="fa-vk"><i class="fa fa-vk"></i></a></li>
										<?php } ?>
										
										<?php if($proficient_nav_pinterest_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($proficient_nav_pinterest_link); ?>" aria-label="fa-pinterest-square"><i class="fa fa-pinterest-square"></i></a></li>
										<?php } ?>
									</ul>
								</aside>
							<?php } ?>
	                    </div>
	                </div>
	            </div>
	            <div class="flex-fill">
	                <div class="logo text-center">
	                    <?php
                        if(has_custom_logo()) {   
                            the_custom_logo();
                        }
                        else { ?>
                        	<a href="<?php echo esc_url(home_url( '/' )); ?>" class="navbar-brand">
                        		<?php echo esc_html(get_bloginfo('name')); ?>
                        	</a>
                        <?php }
                        $proficient_description = get_bloginfo( 'description');
                        if ($proficient_description) : ?>
                            <p class="site-description"><?php echo esc_html($proficient_description); ?></p>
                        <?php endif; ?>
	                </div>
	            </div>
	            <div class="flex-fill">
	                <div class="header-info">
	                    <div class="header-item widget-right">
	                        <div class="menu-right">
	                        	<ul class="wrap-right">
	                                <li class="search-button">
	                                    <a href="#" id="view-search-btn" class="header-search-toggle"><i class="fa fa-search"></i></a>
	                                    <!-- Quik search -->
	                                    <div class="view-search-btn header-search-popup">
	                                        <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'proficient' ); ?>">
	                                            <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'proficient' ); ?></span>
	                                            <input type="search" class="search-field header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'proficient' ); ?>" name="s" id="popfocus" value="" autofocus>
	                                            <a href="#" class="close-style header-search-close"></a>
	                                        </form>
	                                    </div>
	                                    <!-- / -->
	                                </li>
	                                <?php
	                                $proficient_header_cart	= get_theme_mod('header_cart','1');
	                                if($proficient_header_cart == '1'){ ?>
										<li class="cart-wrapper">
											<div class="cart-icon-wrap">
												<a href="javascript:void(0)" id="cart"><i class="fa fa-shopping-bag"></i>
												<?php 
												if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
													$count = WC()->cart->cart_contents_count;
													$cart_url = wc_get_cart_url();
													
													if ( $count > 0 ) {
													?>
														 <span><?php echo esc_html( $count ); ?></span>
													<?php 
													}
													else {
														?>
														<span><?php echo esc_html_e('0','proficient'); ?></span>
														<?php 
													}
												}
												?>
												</a>
											</div>
											
											<!-- Shopping Cart -->
											<?php if ( class_exists( 'WooCommerce' ) ) { ?>
											<div id="header-cart" class="shopping-cart">
												<div class="cart-body">                                            
													<?php get_template_part('woocommerce/cart/mini','cart');     ?>
												</div>
											</div>
											<?php } ?>
											<!--end shopping-cart -->
										</li>
									<?php } ?>
	                                <?php
										$proficient_btn_label	= get_theme_mod('button_label');
	                                    $proficient_btn_url		= get_theme_mod('button_url');
	                                    $proficient_btn_target	= get_theme_mod('button_target');
	                                    $proficient_hdr_btn_hs	= get_theme_mod('header_book_hide_show','1');
                                        if(($proficient_btn_target)== 1){ 
                                            $proficient_btn_target= "target='_blank'"; 
                                        }   
                                        if($proficient_hdr_btn_hs == '1'  && !empty($proficient_btn_label)) { 
                                    ?>                            
	                                <li class="menu-item header_btn">
	                                    <a href="<?php echo esc_url($proficient_btn_url); ?>" <?php echo $proficient_btn_target; ?> class="bt-primary bt-effect-2"><?php echo esc_html($proficient_btn_label); ?></a>
	                                </li>
	                                <?php } ?>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- / -->
	<div class="navigator-wrapper">
	    <!-- Mobile Toggle -->
	    <div class="theme-mobile-nav d-lg-none d-block <?php echo esc_attr(specia_sticky_menu()); ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="theme-mobile-menu">
	                        <div class="headtop-mobi">
	                            <div class="headtop-shift">
	                                <a href="javascript:void(0);" class="header-sidebar-toggle open-toggle"><span></span></a>
	                                <a href="javascript:void(0);" class="header-sidebar-toggle close-button"><span></span></a>
	                                <div id="mob-h-top" class="mobi-head-top animated"></div>
	                            </div>
	                        </div>
	                        <div class="mobile-logo">
	                            <?php
		                        if(has_custom_logo()) {   
		                            the_custom_logo();
		                        }
		                        else { ?>
		                        	<a href="<?php echo esc_url(home_url( '/' )); ?>" class="navbar-brand">
		                        		<?php echo esc_html(get_bloginfo('name')); ?>
		                        	</a>
		                        <?php }
		                        $proficient_description = get_bloginfo( 'description');
		                        if ($proficient_description) : ?>
		                            <p class="site-description"><?php echo esc_html($proficient_description); ?></p>
		                        <?php endif; ?>
	                        </div>
	                        <div class="menu-toggle-wrap">
	                            <div class="hamburger-menu">
	                                <a href="javascript:void(0);" class="menu-toggle">
	                                    <div class="top-bun"></div>
	                                    <div class="meat"></div>
	                                    <div class="bottom-bun"></div>
	                                </a>
	                            </div>
	                        </div>
	                        <div id="mobile-m" class="mobile-menu">
	                            <div class="mobile-menu-shift">
	                                <a href="javascript:void(0);" class="close-style close-menu"></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- / -->

	    <!-- Top Menu -->
	    <div class="xl-nav-area d-none d-lg-block">
	        <div class="navigation d-none d-lg-block <?php echo specia_sticky_menu(); ?>">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="theme-menu">
	                            <nav class="menubar">
	                                <?php
	                                    wp_nav_menu( 
											array(  
												'theme_location' => 'primary_menu',
												'container'  => '',
												'menu_class' => 'menu-wrap',
												'fallback_cb' => 'specia_fallback_page_menu::fallback',
												'walker' => new specia_nav_walker()
												 ) 
											);
	                                ?>                               
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- / -->
	</div>
</header>
<div class="clearfix"></div>
<?php 
if ( !is_page_template( 'templates/template-homepage-one.php' )) {
		specia_breadcrumbs_style(); 
	}
?>