<?php

function ju_misc_customizer_section( $wp_customize ) {
    $wp_customize->add_setting( 'ju_header_show_search', array(
        'default'                   => 'yes',
        'transport'                 => 'postMessage'
    ));

    $wp_customize->add_setting( 'ju_header_show_cart', array(
        'default'                   => 'yes',
        'transport'                 => 'postMessage'
    ));

    $wp_customize->add_setting( 'ju_footer_copyright_text', array(
        'default'                   => 'Copyright &copy; 2017 All Rights Reserved by NoSleepCode Inc',
    ));

    $wp_customize->add_setting( 'ju_footer_tos_page', array(
        'default'                   => 0,
    ));

    $wp_customize->add_setting( 'ju_footer_privacy_page', array(
        'default'                   => 0,
    ));

    $wp_customize->add_section( 'ju_misc_section', array(
        'title'                     => __( 'WP Misc Settings', 'wp' ),
        'priority'                  => 30,
        'panel'                     => 'wp'
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_search_input',
        array(
            'label'             => __( 'Show Search Button in Header', 'wp' ),
            'section'           => 'ju_misc_section',
            'settings'          => 'ju_header_show_search',
            'type'              => 'checkbox',
            'choices'           => array(
                'yes'           => __( 'Yes', 'wp' )
            )
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_cart_input',
        array(
            'label'             => __( 'Show Cart Button in Header', 'wp' ),
            'section'           => 'ju_misc_section',
            'settings'          => 'ju_header_show_cart',
            'type'              => 'checkbox',
            'choices'           => array(
                'yes'           => __( 'Yes', 'wp' )
            )
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_copyright_text_input',
        array(
            'label'             => __( 'Copyright Text', 'wp' ),
            'section'           => 'ju_misc_section',
            'settings'          => 'ju_footer_copyright_text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_tos_page_input',
        array(
            'label'             => __( 'TOS Page', 'wp' ),
            'section'           => 'ju_misc_section',
            'settings'          => 'ju_footer_tos_page',
            'type'              => 'dropdown-pages'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_policy_page',
        array(
            'label'             => __( 'Privacy Policy Page', 'wp' ),
            'section'           => 'ju_misc_section',
            'settings'          => 'ju_footer_privacy_page',
            'type'              => 'dropdown-pages'
        )
    ));
}