<?php
function seriozn_enqueue () {
    wp_register_style( 'seriozn_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic'); 
    wp_register_style( 'seriozn_bootstrap', get_template_directory_uri().'/assets/css/bootstrap-min.css'); 
    wp_register_style( 'seriozn_style', get_template_directory_uri().'/assets/style-min.css'); 
    wp_register_style( 'seriozn_dark', get_template_directory_uri().'/assets/css/dark-min.css'); 
    wp_register_style( 'seriozn_font_icons', get_template_directory_uri().'/assets/css/font-icons-min.css'); 
    wp_register_style( 'seriozn_animate', get_template_directory_uri().'/assets/css/animate-min.css'); 
    wp_register_style( 'seriozn_magnific_popup', get_template_directory_uri().'/assets/css/magnific-popup-min.css'); 
    wp_register_style( 'seriozn_responsive', get_template_directory_uri().'/assets/css/responsive-min.css'); 
    wp_register_style( 'seriozn_custom', get_template_directory_uri().'/assets/css/custom.css'); 
    wp_enqueue_style( 'seriozn_google_fonts' );
    wp_enqueue_style( 'seriozn_bootstrap' );
    wp_enqueue_style( 'seriozn_style' );
    wp_enqueue_style( 'seriozn_dark' );
    wp_enqueue_style( 'seriozn_font_icons' );
    wp_enqueue_style( 'seriozn_animate' );
    wp_enqueue_style( 'seriozn_magnific_popup' );
    wp_enqueue_style( 'seriozn_responsive' );
    wp_enqueue_style( 'seriozn_custom' );
    wp_register_script( 'seriozn_plugins',get_template_directory_uri().'/assets/js/plugins.js', array(), false, true );
    wp_register_script( 'seriozn_functions',get_template_directory_uri().'/assets/js/functions.js', array(), false, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'seriozn_plugins' );
    wp_enqueue_script( 'seriozn_functions' );
}
