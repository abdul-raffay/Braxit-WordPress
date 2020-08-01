<?php 

    // Custom Logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 190,
            'width'       => 190,
            'flex-width'  => false,
            'flex-height' => false,
        )
    );

    // Top Section
    function top_customize_register( $wp_customize ) {

        $wp_customize->add_section('top_bar_section', array(
            'title'    => 'Top Bar',
            'priority' => 1
        )); 

        $wp_customize->add_setting('phnum', array(
            'default'    => '+880 278 367 367',
            'capability' => 'edit_theme_options',
        ));

        // $wp_customize->add_setting('intro_text');
        // $wp_customize->add_setting('featured_post');

        $wp_customize->add_control('phnum_box', array(
            'label'    => 'Contact Number',
            'section'  => 'top_bar_section',
            'settings' => 'phnum',
            'type'     => 'text'
        )); 
        
        $wp_customize->add_setting('email_contact',   array(
            'default'    => 'brexitsupport@gmail.com',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('email_box', array(
            'label'    => 'Email',
            'section'  => 'top_bar_section',
            'settings' => 'email_contact',
            'type'     => 'email'
        )); 
    }
    add_action('customize_register', 'top_customize_register');
    