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
            'type'     => 'email',
        )); 

        $wp_customize->add_setting('show_page', array(
            'default'    => false,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('enable_button', array(
            'label'    => 'Show Button',
            'section'  => 'top_bar_section',
            'settings' => 'show_page',
            'type'     => 'checkbox',
        ));

        // Pages
        $all_pages = get_pages();
        $getPage = array();

        foreach($all_pages as $page){
            $getPage[$page->ID] = $page->post_title;
        }

        $wp_customize->add_setting('page_show', array(
            'default'    => 'none',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('page_dropdown', array(
            'label'           => 'Button Page Redirect Link',
            'section'         => 'top_bar_section',
            'settings'        => 'page_show',
            'type'            => 'select',
            'choices' => $getPage,
            'active_callback' => function ($control){
                return $control->manager->get_setting('show_page')->value();
            },
        ));

        $wp_customize->add_setting('page_text', array(
            'default'    => 'Free Quote',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('text_dropdown', array(
            'label'           => 'Button Page Redirect Text',
            'section'         => 'top_bar_section',
            'settings'        => 'page_text',
            'type'            => 'text',
            'active_callback' => function ($control){
                return $control->manager->get_setting('show_page')->value();
            },
        ));
    }
    add_action('customize_register', 'top_customize_register');
    