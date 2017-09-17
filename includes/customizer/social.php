<?php

function ju_social_customizer_section( $wp_customize ) {
    $wp_customize->add_setting( 'ju_facebook_handle', array(
        'default'                   => ''
    ));
    $wp_customize->add_setting( 'ju_twitter_handle', array(
        'default'                   => ''
    ));
    $wp_customize->add_setting( 'ju_instagram_handle', array(
        'default'                   => ''
    ));
    $wp_customize->add_setting( 'ju_email', array(
        'default'                   => ''
    ));
    $wp_customize->add_setting( 'ju_phone_number', array(
        'default'                   => ''
    ));

    $wp_customize->add_section( 'ju_social_section', array(
        'title'                     => __( 'WP Social Settings', 'wp' ),
        'priority'                  => 30,
        'panel'                     => 'wp'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_facebook_input',
            array(
                'label'         => __( 'Facebook Handle', 'wp' ),
                'section'       => 'ju_social_section',
                'settings'      => 'ju_facebook_handle',
                'type'          => 'text'
            )
        )
      );
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_twitter_input',
            array(
                'label'         => __( 'Twitter Handle', 'wp' ),
                'section'       => 'ju_social_section',
                'settings'      => 'ju_twitter_handle',
                'type'          => 'text'
            )
        )
      );
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_instagram_input',
            array(
                'label'         => __( 'Instagram Handle', 'wp' ),
                'section'       => 'ju_social_section',
                'settings'      => 'ju_instagram_handle',
                'type'          => 'text'
            )
        )
      );
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_email_input',
            array(
                'label'         => __( 'Email', 'wp' ),
                'section'       => 'ju_social_section',
                'settings'      => 'ju_email',
                'type'          => 'text'
            )
        )
      );
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_phone_number_input',
            array(
                'label'         => __( 'Phone Number', 'wp' ),
                'section'       => 'ju_social_section',
                'settings'      => 'ju_phone_number',
                'type'          => 'text'
            )
        )
      );
}