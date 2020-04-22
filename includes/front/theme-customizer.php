<?php
function seriozn_customize_register($wp_customize){
   $wp_customize->add_panel('seriozn', array(
      'title'=> __('Settings for SerioZN Theme', 'seriozn'), 
      'description'=> '<p>SetioZN Theme Settings </p>',
      'priority' =>160
   ));

   seriozn_social_customizer_section ($wp_customize );
   seriozn_misc_customizer_section ($wp_customize );
}