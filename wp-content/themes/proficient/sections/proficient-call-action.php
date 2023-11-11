<?php 
	$proficient_hs_call_actions		= get_theme_mod('hide_show_call_actions','on'); 
	$proficient_cta_btn_lbl			= get_theme_mod('call_action_button_label');
	$proficient_cta_btn_link		= get_theme_mod('call_action_button_link');
	$proficient_cta_btn_target		= get_theme_mod('call_action_button_target');
	$proficient_cta_btn_middle_text	= get_theme_mod('call_action_btn_middle_text');
	$proficient_cta_button2_icon	= get_theme_mod('call_action_button2_icon','fa-bell');
	$proficient_cta_button_label2	= get_theme_mod('call_action_button_label2');
	$proficient_cta_button_link2	= get_theme_mod('call_action_button_link2');
	$proficient_cta_bg_setting		= get_theme_mod('call_action_background_setting',esc_url(get_template_directory_uri() .'/images/cta.jpg'));
	if($proficient_hs_call_actions == 'on') :
?>
<section id="cta-unique" class="call-to-action-two wow fadeInDown">
	<div class="background-overlay" style="background-image:url('<?php echo esc_url($proficient_cta_bg_setting); ?>'); background-attachment: fixed;">
        <div class="container">
            <div class="row padding-top-50 padding-bottom-50">                
                <div class="col-md-6">
					<?php 
						$specia_aboutusquery1 = new wp_query('page_id='.get_theme_mod('call_action_page',true)); 
						if( $specia_aboutusquery1->have_posts() ) 
						{   while( $specia_aboutusquery1->have_posts() ) { $specia_aboutusquery1->the_post(); 
					?>
                    <h2 class="demo1"> <?php the_title(); ?> <?php the_content(); ?></span> </h2>
					
					<?php } } wp_reset_postdata(); ?>
                </div>				
				
                <div class="col-md-6 text-right flexing flexing-end">
					<?php if(!empty($proficient_cta_button_label2) || !empty($proficient_cta_button2_icon)): ?>
						<div class="call-wrapper">
							<?php if(!empty($proficient_cta_button2_icon)): ?>
								<div class="call-icon-box">
									<i class="fa <?php echo esc_attr($proficient_cta_button2_icon); ?>"></i>
								</div>
							<?php endif; ?>
							
							<?php if(!empty($proficient_cta_button_label2)): ?>
								<div class="cta-info">
									<div class="call-phone"><a href="<?php echo esc_url($proficient_cta_button_link2); ?>"><?php echo wp_kses_post($proficient_cta_button_label2); ?></a></div>
								</div>
							<?php endif; ?>	
						</div>
					<?php endif; ?>					
					
					<?php if(!empty($proficient_cta_btn_middle_text)): ?>
						<span class="cta-or"><?php echo wp_kses_post($proficient_cta_btn_middle_text); ?></span>
					<?php endif; ?>
					
					<?php if($proficient_cta_btn_lbl) :?>
						<a href="<?php echo esc_url($proficient_cta_btn_link); ?>" <?php if(($proficient_cta_btn_target)== 1){ echo "target='_blank'"; } ?> class="bt-primary bt-effect-2 call-btn-2"><?php echo esc_html($proficient_cta_btn_lbl); ?></a>
					<?php endif; ?>
					
                </div>
				
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php endif; ?>
