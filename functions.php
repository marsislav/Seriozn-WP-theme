<?php
//Includes
include (get_template_directory().'/includes/front/enqueue.php');
include (get_template_directory().'/includes/front/custom-functions.php');
include (get_template_directory().'/includes/front/setup.php');
include (get_template_directory().'/includes/front/widgets.php');
include (get_template_directory().'/includes/front/theme-customizer.php');
include (get_template_directory().'/includes/customizer/social.php');
include (get_template_directory().'/includes/customizer/misc.php');
include (get_template_directory().'/includes/customizer/enqueue.php');
//Hooks
add_action( 'wp_enqueue_scripts', 'seriozn_enqueue' );
add_action( 'after_setup_theme', 'seriozn_setup_theme' );
add_action('wp_print_scripts', 'comments_js');
add_action( 'widgets_init', 'seriozn_widgets' );
add_action ('customize_register', 'seriozn_customize_register');
add_action ('customize_preview_init', 'seriozn_customize_preview_init');

