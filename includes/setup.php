<?php

function ju_setup_theme() {
    //add_theme_support( 'menus' ); not needed in newer versions of wp
    add_theme_support( 'post-thumbnails' );

    register_nav_menu( 'primary', __('Primary Menu', 'wp') );
}