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
            'choices'         => $getPage,
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

    
    // Main Section
    function main_customize_register ( $wp_customize ) {
        $wp_customize->add_section('main_section', array(
            'title'    => 'Main Section',
            'priority' => 5,
        ));

        $wp_customize->add_setting('first_text', array(
            'default'    => 'Market leading Manufacturer',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('text_one', array(
            'label'    => 'Text One',
            'section'  => 'main_section',
            'settings' => 'first_text',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('second_text', array(
            'default'    => 'The right candidate may exist, but talented people',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('text_two', array(
            'label'    => 'Text Two',
            'section'  => 'main_section',
            'settings' => 'second_text',
            'type'     => 'text',
        ));

        // Pages
        $all_pages = get_pages();
        $getPage = array();

        foreach($all_pages as $page){
            $getPage[$page->ID] = $page->post_title;
        }

        $wp_customize->add_setting('main_banner_link', array(
            'default'    => '#',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('page_main_link', array(
            'label'           => 'Button Page Redirect Link',
            'section'         => 'main_section',
            'settings'        => 'main_banner_link',
            'type'            => 'select',
            'choices' => $getPage,
        ));

        $wp_customize->add_setting('youtube_video', array(
            'default'    => 'https://www.youtube.com/watch?v=up68UAfH0d0',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('youtube_link', array(
            'label'    => 'Youtube Video Link',
            'section'  => 'main_section',
            'settings' => 'youtube_video',
            'type'     => 'url',
        ));

        $wp_customize->add_setting('banner_image', array(
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner', array(
            'label'    => __('Upload a Banner', 'textdomain'),
            'section'  => 'main_section',
            'settings' => 'banner_image',
        )));
    }
    add_action( 'customize_register', 'main_customize_register' );


    // Gallery Section
    function gallery_customize_register( $wp_customize ) {
        // Section
        $wp_customize->add_section('gallery_section', array(
            'title'    => 'Gallery Section',
            'priority' => 6,
        ));
        
        // Enable/Disable Control
        $wp_customize->add_setting('show_gallery', array(
            'default'    => false,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('enable_gallery', array(
            'label'    => 'Show Gallery',
            'section'  => 'gallery_section',
            'settings' => 'show_gallery',
            'type'     => 'checkbox',
        ));

        // Number of Post
        $wp_customize->add_setting('gallery_post', array(
            'default'    => 3,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('num_post', array(
            'label'       => 'Number of Post to show | (min: 1, max: 6)',
            'section'     => 'gallery_section',
            'settings'    => 'gallery_post',
            'type'        => 'number',
            'input_attrs' => array(
                'min' => 1, 
                'max' => 6,
                // 'class' => 'example-class',
                // 'style' => 'color: #ff0022',
            ),
        ));

        // Order of Post
        $wp_customize->add_setting('gallery_order', array(
            'default'    => 'DESC',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('gallery_post', array(
            'label'    => 'Order of Posts Display',
            'section'  => 'gallery_section',
            'settings' => 'gallery_order',
            'type'     => 'select',
            'choices'  => array(
                'ASC'  => 'Ascending',
                'DESC' => 'Descending',
            ),
        ));
    } 
    add_action( 'customize_register', 'gallery_customize_register' );


    // Service Section
    function services_customize_register( $wp_customize ) {
        // Section
        $wp_customize->add_section('service_section', array(
            'title'    => 'Service Section',
            'priority' => 7,
        ));

        // Enable/Disable Control
        $wp_customize->add_setting('show_service', array(
            'default'    => false,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('enable_service', array(
            'label'    => 'Show Service',
            'section'  => 'service_section',
            'settings' => 'show_service',
            'type'     => 'checkbox',
        ));

        // Background Image
        $wp_customize->add_setting('gallery_bg', array(
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_bg_img', array(
            'label'    => __('Upload a Gallery Section Background Image', 'braxit'),
            'section'  => 'service_section',
            'settings' => 'gallery_bg',
        )));
    }
    add_action( 'customize_register', 'services_customize_register' );

    // Contact Form
    function contact_form_customize( $wp_customize ) {
        // Section
        $wp_customize->add_section('contact_form_section', array(
            'title'    => 'Contact Form Section',
            'priority' => 8,
        ));

        // Background Image
        $wp_customize->add_setting('contact_form_setting', array(
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_form_bg_img', array(
            'label'    => __('Upload a Contact Form Background Background Image', 'braxit'),
            'section'  => 'contact_form_section',
            'settings' => 'contact_form_setting',
        )));
    }
    if( is_active_sidebar('contact_form_area') ) {
        add_action( 'customize_register', 'contact_form_customize' );
    }
    