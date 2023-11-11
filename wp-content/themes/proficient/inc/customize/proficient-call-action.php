<?php
function proficient_call_action_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Call Action Section Panel
	=========================================*/
	
	// Button Icon // 
	$wp_customize->add_setting(
    	'call_action_button2_icon',
    	array(
	        'default'			=> 'fa-bell',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button2_icon',
		array(
		    'label'   => __('Icon','proficient'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 9
		)  
	);
}
add_action( 'customize_register', 'proficient_call_action_setting' );