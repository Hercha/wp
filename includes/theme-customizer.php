<?php

function ju_customize_register( $wp_customize ) {

    $wp_customize->get_section( 'title_tagline' )->title    =   'General';

    $wp_customize->add_panel( 'wp', array(
        'title'                 => __( 'WP', 'wp' ),
        'description'           => '<p>wp Theme Settings</p>',
        'priority'              => 160
    ) );

    ju_social_customizer_section( $wp_customize );
    ju_misc_customizer_section( $wp_customize );

    // echo '<pre>';
    // var_dump($wp_customize);
    // echo '</pre>';
}