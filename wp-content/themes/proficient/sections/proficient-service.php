<?php 
	$proficient_hs_service		= get_theme_mod('hide_show_service','on'); 
	$proficient_service_title	= get_theme_mod('service_title'); 
	$proficient_service_desc	= get_theme_mod('service_description');
	if($proficient_hs_service == 'on') :
?>
	<section id="unique-service" class="service-proficient">
		<div class="container">
			<div class="row text-center padding-top-60 padding-bottom-30">
				<div class="col-sm-12">
				<?php if ($proficient_service_title) : ?>
					<h2 class="section-heading wow fadeInDown animated"><?php echo wp_filter_post_kses($proficient_service_title); ?></h2>
				<?php endif; ?>
				
				<?php if ($proficient_service_desc) : ?>
					<p class="section-description"><?php echo esc_html($proficient_service_desc); ?></p>
				<?php endif; ?>
				</div>
			</div>
			<div class="row padding-bottom-60">
				<?php 
					for($service =1; $service<4; $service++) 
					{
						if( get_theme_mod('service-page'.$service)) 
						{
							$service_query = new WP_query('page_id='.get_theme_mod('service-page'.$service,true));
							while( $service_query->have_posts() ) 
							{ 
								$service_query->the_post();
								$id_arr[] = $post->ID;
							}    
						}
					}
				?>
				<?php if(!empty($id_arr))
				{ ?>
				<?php 
					$i=1;
					foreach($id_arr as $id)
					{ 
						$title	= get_the_title( $id ); 
						$post	= get_post($id); 
						
						$content = $post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
				?> 
				<div class="col-md-4 col-sm-6">
					<div class="service-box wow fadeInUp">
						<div class="service-icon-box">
							<div class="service-icon">
								<?php 
								$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
								$thumbnail_id = get_post_thumbnail_id( $post->ID );
								$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
								if( !empty($image) ) { ?>
									<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr($alt); ?>" >
								<?php } else { ?>
									<?php if( get_post_meta(get_the_ID(),'icons', true ) ): ?>
									<i class="fa <?php echo esc_attr(get_post_meta( get_the_ID(),'icons', true)); ?>"></i>
								<?php endif; } ?>
							</div>
						</div>
						<div class="service-content">
							<div class="service-title"><a href="<?php echo esc_url(get_permalink()); ?>"> <?php echo esc_html($title); ?></a></div>
							<div class="service-description"><p><?php echo $content; ?></p></div>
						</div>
						<div class="service-linked">
							<div class="service-rating"><a href="<?php echo esc_url( get_post_meta( get_the_ID(),'service_links', true) ); ?>" class="more-link"><i class="fa fa-long-arrow-right"></i></a></div>
						</div>
					</div>
				</div>	
				<?php $i++; 
				}  ?>
				<?php } wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<div class="clearfix"></div>
<?php endif; ?>