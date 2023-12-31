<?php
function owlpress_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'owlpress_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'owlpress' ),
		)
	);
	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'owlpress' ),
			'priority' => 1,
			'panel' => 'owlpress_general',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','owlpress'),
			'section' => 'breadcrumb_setting',
			'priority' => 1,
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'owlpress_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'owlpress' ),
			'section'     => 'breadcrumb_setting',
			'settings'    => 'hs_breadcrumb',
			'type'        => 'checkbox',
			'priority' => 2
		) 
	);

	// Background // 
	$wp_customize->add_setting(
		'breadcrumb_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'breadcrumb_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','owlpress'),
			'section' => 'breadcrumb_setting',
			'priority' => 9,
		)
	);
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'breadcrumb_bg_img' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/breadcrumbg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_url',	
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'owlpress'),
			'section'        => 'breadcrumb_setting',
			'priority' => 10,
		) 
	));
	
	// Background Attachment // 
	$wp_customize->add_setting( 
		'breadcrumb_back_attach' , 
			array(
			'default' => 'scroll',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'breadcrumb_back_attach' , 
		array(
			'label'          => __( 'Background Attachment', 'owlpress' ),
			'section'        => 'breadcrumb_setting',
			'type'           => 'select',
			'priority' => 10,
			'choices'        => 
			array(
				'inherit' => __( 'Inherit', 'owlpress' ),
				'scroll' => __( 'Scroll', 'owlpress' ),
				'fixed'   => __( 'Fixed', 'owlpress' )
			) 
		) 
	);
	
}
add_action( 'customize_register', 'owlpress_general_setting' );