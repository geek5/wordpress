<?php
/**
Template Name: Blog Left Sidebar
**/
get_header();
?>

<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			
			<!--Blog Detail-->
			<?php get_sidebar(); ?>
			
			<div class="<?php esc_attr(specia_post_column()); ?>" >
					
					<?php 
					$proficient_paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$proficient_args = array( 'post_type' => 'post','paged'=>$proficient_paged );	
					$proficient_loop = new WP_Query( $proficient_args );
					?>
					
					<?php if( $proficient_loop->have_posts() ): ?>
					
						<?php while( $proficient_loop->have_posts() ): $proficient_loop->the_post(); ?>
						
							<?php get_template_part('template-parts/content','page'); ?>
					
						<?php endwhile; ?>
						
						<div class="paginations">
							<?php			
							$GLOBALS['wp_query']->max_num_pages = $proficient_loop->max_num_pages;						
							// Previous/next page navigation.
							the_posts_pagination( array(
							'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
							'next_text'          => '<i class="fa fa-angle-double-right"></i>',
							) ); ?>
							</div>
					<?php 
						wp_reset_postdata(); 
						endif; 
					?>
					
			
			</div>
			<!--/End of Blog Detail-->
		
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>
