<?php

/** 
 * @package Braxit-Custom-Post
*/

/** 
 * Plugin Name: Braxit Custom Post Type
 * Description: For Custom Post Type of Testimonial, Gallery, Feature Categories, Services
 * Version: 1.0.0
 * Author: Abdul Raffay Rizwan (Nytrotech)
 * Author URI: https://github.com/zaimeali
 * Text Domain: braxit
 * License: GPLv2 or later
*/

// If call directly
if ( ! function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

// Activation and Deactivation
register_activation_hook( __FILE__, array(
    'Braxit-Custom',
    'plugin_activation',
) );
register_deactivation_hook( __FILE__, array(
    'Braxit-Custom',
    'plugin_deactivation',
) );

// Custom Post Type
require_once( plugin_dir_path( __FILE__ ) . '/inc/custom-post.php' );