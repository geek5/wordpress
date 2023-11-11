<?php
function proficient_header_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Navigation
	=========================================*/
	$wp_customize->add_section(
        'header_navigation',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header Navigation','proficient'),
			'panel'  		=> 'header_section',
		)
    );
	
	
	// Social Head
	$wp_customize->add_setting(
		'nav_social_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'nav_social_head',
		array(
			'type' => 'hidden',
			'label' => __('Social Icon','proficient'),
			'section' => 'header_navigation',
			'priority'  => 1
		)
	);	
	
	// Social Icons Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hs_nav_social' , 
			array(
			'default' => '1',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hs_nav_social' , 
		array(
			'label'          => __( 'Hide / Show Section', 'proficient' ),
			'section'        => 'header_navigation',
			'type'           => 'radio',
			'choices'        => 
			array(
				'1' => __( 'Show', 'proficient' ),
				'0' => __( 'Hide', 'proficient' )
			)
		) 
	);
	
	// Social Icon Link One // 
	$wp_customize->add_setting(
    	'nav_facebook_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_facebook_link',
		array(
		    'label'   		=> __('Facebook','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);


	// Social Icon Link Two // 
	$wp_customize->add_setting(
    	'nav_linkedin_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_linkedin_link',
		array(
		    'label'   		=> __('LinkedIn','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);


	// Social Icon Link Three // 
	$wp_customize->add_setting(
    	'nav_twitter_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_twitter_link',
		array(
		    'label'   		=> __('Twitter','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Four // 
	$wp_customize->add_setting(
    	'nav_googleplus_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_googleplus_link',
		array(
		    'label'   		=> __('GooglePlus','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Five // 
	$wp_customize->add_setting(
    	'nav_instagram_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_instagram_link',
		array(
		    'label'   		=> __('Instagram','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Six // 
	$wp_customize->add_setting(
    	'nav_dribble_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_dribble_link',
		array(
		    'label'   		=> __('Dribble','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Seven // 
	$wp_customize->add_setting(
    	'nav_github_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_github_link',
		array(
		    'label'   		=> __('Github','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Eight // 
	$wp_customize->add_setting(
    	'nav_bitbucket_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_bitbucket_link',
		array(
		    'label'   		=> __('Bitbucket','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Nine // 
	$wp_customize->add_setting(
    	'nav_skype_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_text',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_skype_link',
		array(
		    'label'   		=> __('Skype','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Ten // 
	$wp_customize->add_setting(
    	'nav_skype_action_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_text',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_skype_action_link',
		array(
		    'label'   		=> __('Skype Action','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);

	// Social Icon Link Eleven // 
	$wp_customize->add_setting(
    	'nav_email_link',
    	array(
			'sanitize_callback' => 'sanitize_email',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_email_link',
		array(
		    'label'   		=> __('Email','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);
	
	// Social Icon Link Twlve // 
	$wp_customize->add_setting(
    	'nav_vk_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_vk_link',
		array(
		    'label'   		=> __('Vkontakte','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);
	
	// Social Icon Link Thirteen // 
	$wp_customize->add_setting(
    	'nav_pinterest_link',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'nav_pinterest_link',
		array(
		    'label'   		=> __('Pinterest','proficient'),
		    'section' 		=> 'header_navigation',
		)  
	);
}

add_action( 'customize_register', 'proficient_header_setting' );