<?php

function seriozn_social_customizer_section( $wp_customize ){
	$wp_customize->add_setting( 'seriozn_facebook_handle', array(
		'default'                   =>  '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	));

	$wp_customize->add_setting( 'seriozn_twitter_handle', array(
		'default'                   =>  '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	));

	$wp_customize->add_setting( 'seriozn_instagram_handle', array(
		'default'                   =>  '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	));

	$wp_customize->add_setting( 'seriozn_email', array(
		'default'                   =>  '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	));

	$wp_customize->add_setting( 'seriozn_phone_number', array(
		'default'                   =>  '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	));

	$wp_customize->add_section( 'seriozn_social_section', array(
		'title'                     =>  __( 'SerioZN Social Settings', 'seriozn' ),
		'priority'                  =>  30,
		'panel'=>'seriozn'
	
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'seriozn_social_facebook_input',
		array(
			'label'                 =>  __( 'Facebook Handle', 'seriozn' ),
			'section'               => 'seriozn_social_section',
			'settings'              => 'seriozn_facebook_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'seriozn_social_twitter_input',
		array(
			'label'                 =>  __( 'Twitter Handle', 'seriozn' ),
			'section'               => 'seriozn_social_section',
			'settings'              => 'seriozn_twitter_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'seriozn_social_instagram_input',
		array(
			'label'                 =>  __( 'Instagram Handle', 'seriozn' ),
			'section'               => 'seriozn_social_section',
			'settings'              => 'seriozn_instagram_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'seriozn_social_email_input',
		array(
			'label'                 =>  __( 'Email', 'seriozn' ),
			'section'               => 'seriozn_social_section',
			'settings'              => 'seriozn_email',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'seriozn_social_phone_number_input',
		array(
			'label'                 =>  __( 'Phone Number', 'seriozn' ),
			'section'               => 'seriozn_social_section',
			'settings'              => 'seriozn_phone_number',
			'type'                  =>  'text'
		)
	));
}