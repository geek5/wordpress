<?php
function feauty_upsale_setting( $wp_customize ) {
	
	$wp_customize->add_section(
        'aromatic_upsale',
        array(
            'title' 		=> __('Get More Features in Feauty Pro','feauty'),
			'priority'      => 1,
		)
    );
	
	/*=========================================
	 Buttons
	=========================================*/
	
	class Feauty_Button_Customize_Control extends WP_Customize_Control {
	public $type = 'aromatic_upsale';

	   function render_content() {
		?>
			<div class="upsale_info">
				<ul>
					<li><a href="https://preview.sellerthemes.com/pro/feauty/" class="btn-secondary" target="_blank"><i class="dashicons dashicons-desktop"></i><?php _e( 'Pro Demo','feauty' ); ?> </a></li>
					
					<li><a href="https://sellerthemes.com/feauty-premium/" class="btn-primary" target="_blank"><i class="dashicons dashicons-cart"></i><?php _e( 'Purchase Now','feauty' ); ?> </a></li>
					
					<li><a href="https://sellerthemes.ticksy.com/" class="btn-secondary" target="_blank"><i class="dashicons dashicons-sos"></i><?php _e( 'Ask for Support','feauty' ); ?> </a></li>
					
					<li><a href="https://wordpress.org/support/theme/feauty/reviews/#new-post" class="btn-green" target="_blank"><i class="dashicons dashicons-heart"></i><?php _e( 'Give us Rating','feauty' ); ?> </a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
	$wp_customize->add_setting(
		'aromatic_upsale_btns',
		array(
		   'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
		)	
	);
	
	$wp_customize->add_control( new Feauty_Button_Customize_Control( $wp_customize, 'aromatic_upsale_btns', array(
		'section' => 'aromatic_upsale',
    ))
);
}
add_action( 'customize_register', 'feauty_upsale_setting',999 );