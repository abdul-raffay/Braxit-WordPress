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


    // Footer Section
    function footer_customize_register( $wp_customize ) {
        $wp_customize->add_section('footer_section', array(
            'title'    => 'Footer Section',
            'priority' => 100,
        ));

        $wp_customize->add_setting('footer_copyright', array(
            'default'    => 'Copyright ©2020 All rights reserved | This template is made with  by',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('footer_text', array(
            'label'    => 'Footer Text',
            'section'  => 'footer_section',
            'settings' => 'footer_copyright',
            'type'     => 'text'
        )); 

        $wp_customize->add_setting('made_by', array(
            'default'    => 'Colorlib',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('author', array(
            'label'    => 'Made by',
            'section'  => 'footer_section',
            'settings' => 'made_by',
            'type'     => 'text'
        )); 

        $wp_customize->add_setting('font_icon', array(
            'default'    => 'fa fa-heart',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('font_awesome_icon', array(
            'label'    => 'Font Awesome Icon Class',
            'section'  => 'footer_section',
            'settings' => 'font_icon',
            'type'     => 'text'
        )); 

        $wp_customize->add_setting('made_by_link', array(
            'default'    => 'https://colorlib.com/',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('author_link', array(
            'label'    => 'Author Link',
            'section'  => 'footer_section',
            'settings' => 'made_by_link',
            'type'     => 'url'
        )); 

        $wp_customize->add_setting('show_social_accounts', array(
            'default'    => false,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('enable_social', array(
            'label'    => 'Show Social Media Icons',
            'section'  => 'footer_section',
            'settings' => 'show_social_accounts',
            'type'     => 'checkbox',
        ));

        $wp_customize->add_setting('twitter_footer_url', array(
            'default' => '#',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('twitter_url', array(
            'label'    => "Twitter URL (leave it blank to don't show)",
            'section'  => 'footer_section',
            'settings' => 'twitter_footer_url',
            'type'     => 'url',
            'active_callback' => function ($control){
                return $control->manager->get_setting('show_social_accounts')->value();
            },
        ));

        $wp_customize->add_setting('facebook_footer_url', array(
            'default' => '#',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('facebook_url', array(
            'label'    => "Facebook URL (leave it blank to don't show)",
            'section'  => 'footer_section',
            'settings' => 'facebook_footer_url',
            'type'     => 'url',
            'active_callback' => function ($control){
                return $control->manager->get_setting('show_social_accounts')->value();
            },
        ));

        $wp_customize->add_setting('globe_footer_url', array(
            'default' => '#',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('globe_url', array(
            'label'    => "Page URL (leave it blank to don't show)",
            'section'  => 'footer_section',
            'settings' => 'globe_footer_url',
            'type'     => 'url',
            'active_callback' => function ($control){
                return $control->manager->get_setting('show_social_accounts')->value();
            },
        ));

        $wp_customize->add_setting('insta_footer_url', array(
            'default' => '#',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('insta_url', array(
            'label'    => "Instagram URL (leave it blank to don't show)",
            'section'  => 'footer_section',
            'settings' => 'insta_footer_url',
            'type'     => 'url',
            'active_callback' => function ($control){
                return $control->manager->get_setting('show_social_accounts')->value();
            },
        ));

    }
    add_action('customize_register', 'footer_customize_register');
    