<?php
/*
* Plugin Name: Recipe
* Description: A Simple WordPress plugin that allow users to create recipes and rate those recipes
* Version: 1.0
* Author: WP
* Author URI: http://com.com
* Text Domain: recipe
*/

if( !function_exists( 'add_action' ) ) {
    die( "Hi there I'm just a plugon, not much I can do when called directly. ");
}

// Setup


// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );

// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action( 'init', 'recipe_init' );

// Shortcodes