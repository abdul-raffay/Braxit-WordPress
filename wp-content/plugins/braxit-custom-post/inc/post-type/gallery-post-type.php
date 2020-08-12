<?php

// Register Post Type
function gallery_post_type() {
    register_post_type( 'gallery', array(
        'public'        => true,
        'label'         => __('Gallery', 'braxit'),
        'show_ui'       => true,   // to show in Admin Menu Bar
        'menu_icon'     => 'dashicons-format-gallery',
        'menu_position' => 50,
        'capabilities'  => array(
            'edit_post'     => 'edit_gallery',
            'read_post'     => 'read_gallery',
            'delete_post'   => 'delete_gallery',
        ),
        'supports'      => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'show_in_rest'  => true,   // to show in REST API
    ));
}
add_action( 'init', 'gallery_post_type' );


// Link to the page customizer
function gallery_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'gallery_section', array(
        'title'    => 'Gallery Section',
        'priority' => 11,
    ) );

    // Number of Post
    $wp_customize->add_setting('gallery_post', array(
        'default'    => 3,
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('num_post', array(
        'label'    => 'Number of Post to show',
        'section'  => 'gallery_section',
        'settings' => 'gallery_post',
        'type'     => 'number',
    ));
}
add_action( 'customize_register', 'gallery_customize_register' );