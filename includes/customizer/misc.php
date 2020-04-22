<?php
function seriozn_misc_customizer_section ($wp_customize) {
 //checkbox sanitization function
 function seriozn_sanitize_checkbox( $input ){
    //returns true if checkbox is checked
    return ( ( isset( $input ) && true == $input ) ? true : false );
}
/*Sanitization functions - END*/

    $wp_customize->add_setting( 'seriozn_header_show_search', array(
         'default'=>'yes',
         'sanitize_callback' => 'seriozn_sanitize_checkbox'
    )
    );

   $wp_customize->add_setting( 'seriozn_toggle_comments_list', array(
    'default'=>'no',
   'sanitize_callback' => 'seriozn_sanitize_checkbox'
)
);
   $wp_customize->add_setting( 'seriozn_footer_copyright_text', array(
    'default'=>'Theme name: SerioZN. Theme developer: Marsislav - https://marsislav.net',
    'transport'=>'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
)
);
$wp_customize->add_setting( 'seriozn_footer_tos_page', array(
    'default'=>0,
    'transport'=>'postMessage',
    'sanitize_callback' => 'absint'
)
);
$wp_customize->add_setting( 'seriozn_footer_privacy_page', array(
    'default'=>0,
    'transport'=>'postMessage',
    'sanitize_callback' => 'absint'
)
);

$wp_customize->add_setting('seriozn_show_header_popular_posts_widget', array (
    'default'=>false,
    'sanitize_callback' => 'seriozn_sanitize_checkbox'
));
$wp_customize->add_setting('seriozn_show_header_popular_posts_widget_title', array (
    'default'=>__('Breaking news','seriozn'),
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));

$wp_customize->add_section('seriozn_misc_section', array (
'title'=>__('SerioZN Misc Settings','seriozn'),
'priority'=>30,
'panel'=>'seriozn'
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'seriozn_header_show_search_input', array(
        'label'=>__('Show Search Button in Header', 'seriozn'),
        'section'=>'seriozn_misc_section',
        'settings'=>'seriozn_header_show_search',
        'type'=>'checkbox',
        'choices'=>array(
            'yes'=>__('Yes', 'seriozn')
        )
    )
        )
        );

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'seriozn_toggle_comments_list_input', array(
        'label'=>__('Show Toggle Comments Button', 'seriozn'),
        'section'=>'seriozn_misc_section',
        'settings'=>'seriozn_toggle_comments_list',
        'type'=>'checkbox',
        'choices'=>array(
            'yes'=>__('Yes', 'seriozn')
        )
    )
        )
);


$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'seriozn_footer_copyright_text_input', array(
        'label'=>__('Copyright Text', 'seriozn'),
        'section'=>'seriozn_misc_section',
        'settings'=>'seriozn_footer_copyright_text'
    )
        )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'seriozn_footer_tos_page_input', array(
        'label'=>__('Terms of Service Page', 'seriozn'),
        'section'=>'seriozn_misc_section',
        'settings'=>'seriozn_footer_tos_page',
        'type'=>'dropdown-pages',
            )
        )
);
 
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'seriozn_footer_privacy_policy_page_input', array(
        'label'=>__('Privacy Policy Page', 'seriozn'),
        'section'=>'seriozn_misc_section',
        'settings'=>'seriozn_footer_privacy_page',
        'type'=>'dropdown-pages',
            )
        )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'seriozn_show_header_popular_posts_widget_input', array(
        'label'=>__('Show Popular Posts', 'seriozn'),
        'section'=>'seriozn_misc_section',
        'settings'=>'seriozn_show_header_popular_posts_widget',
        'type'=>'checkbox',
        'choices'=>array(
            'yes'=>__('Yes', 'seriozn')
        )
            )
        )

);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'seriozn_popular_posts_widget_title_input', array(
        'label'=>__('Popular Posts Title', 'seriozn'),
        'section'=>'seriozn_misc_section',
        'settings'=>'seriozn_show_header_popular_posts_widget_title'
            )
        )
);
}

