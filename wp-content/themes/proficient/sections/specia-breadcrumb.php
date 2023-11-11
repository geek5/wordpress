<section class="breadcrumb shadow-two">
    <div class="background-overlay">
        <div class="container">
            <div class="row padding-top-30 padding-bottom-30">
                <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                    <h2>
						<?php 
							if ( is_day() ) : 
							
								printf( __( 'Daily Archives: %s', 'proficient' ), get_the_date() );
							
							elseif ( is_month() ) :
							
								printf( __( 'Monthly Archives: %s', 'proficient' ), (get_the_date( 'F Y' ) ));
								
							elseif ( is_year() ) :
							
								printf( __( 'Yearly Archives: %s', 'proficient' ), (get_the_date( 'Y' ) ) );
								
							elseif ( is_category() ) :
							
								printf( __( 'Category Archives: %s', 'proficient' ), (single_cat_title( '', false ) ));

							elseif ( is_tag() ) :
							
								printf( __( 'Tag Archives: %s', 'proficient' ), (single_tag_title( '', false ) ));
								
							elseif ( is_404() ) :
						
								printf( __( 'Error 404', 'proficient' ));
								
							elseif ( is_search() ) :
						
								printf( __( 'Search Results for: %s', 'proficient' ), (get_search_query() ));		
								
							elseif ( is_author() ) :
							
								printf( __( 'Author: %s', 'proficient' ), (get_the_author( '', false ) ));		
							
							elseif ( is_tax( 'portfolio_categories' ) ) :
						
								printf( __( 'Portfolio Categories: %s', 'proficient' ), (single_term_title( '', false ) ));	
								
							elseif ( is_tax( 'pricing_categories' ) ) :
					
								printf( __( 'Pricing Categories: %s', 'proficient' ), (single_term_title( '', false ) ));	
								
							elseif ( class_exists( 'WooCommerce' ) ) : 
								
								if ( is_shop() ) {
									woocommerce_page_title();
								}
								
								elseif ( is_cart() ) {
									the_title();
								}
								
								elseif ( is_checkout() ) {
									the_title();
								}
								
								elseif ( is_product_category() ) {
									single_cat_title();
								}
								
								else {
									the_title();
								}
							else :
									the_title();
									
							endif;
							
						?>
					</h2>
                </div>
		
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>