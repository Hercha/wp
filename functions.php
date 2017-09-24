<?php
 
// Setup

// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/social.php' );
include( get_template_directory() . '/includes/customizer/misc.php' );
include( get_template_directory() . '/includes/customizer/enqueue.php' );
include( get_template_directory() . '/includes/buddypress/cover-image.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'ju_enqueue' );
add_action( 'after_setup_theme', 'ju_setup_theme' );
add_action( 'widgets_init', 'ju_widgets' );
add_action( 'customize_register', 'ju_customize_register' );
add_action( 'customize_preview_init', 'ju_customize_preview_init'  );
add_filter( 'bp_before_xprofile_cover_image_settings_parse_args', 'ju_xprofile_cover_image' );
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );// Temorary fix of ob_end_flush(): failed to send buffer of zlib output compression (1) problem

// Shortcodes