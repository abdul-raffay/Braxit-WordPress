<?php 

// Register Post Type
function service_post_type() {
    register_post_type('service', array(
        'supports'      => array(
            'title',
            'editor',
            'excerpt',
        ),
        'show_ui'       => true,
        'public'        => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-hammer',
        'menu_position' => 51,
        'label'         => __('Services', 'braxit'),
        'rewrite'       => array(
            'slug' => 'service'
        ),
        'labels'        => array(
            'all_items'    => __('All Services', 'braxit'),
            'edit_item'    => __('Edit Service', 'braxit'),
            'view_item'    => __('View Service', 'braxit'),
            'new_item'     => __('New Service', 'braxit'),
            'add_new'      => __( 'Add New', 'braxit' ),
            'add_new_item' => __( 'Add New Service', 'braxit' ),
        ),
    ));
}
add_action( 'init', 'service_post_type' );

?>