<?php 

    // Exit if Access through URL
    if(!defined('ABSPATH')){
        die();
        exit();
    }

    // Customizer
    require( get_template_directory() . '/inc/customizer.php' );


    // CSS, JS, and Fonts Files
    function braxit_files(){
        // CSS Files
        wp_enqueue_style('main-style', get_theme_file_uri('css/stylesheet.css'));
        wp_enqueue_style('bootstrap-style', get_theme_file_uri('css/bootstrap.min.css'));
        wp_enqueue_style('owl-style', get_theme_file_uri('css/owl.carousel.min.css'));
        wp_enqueue_style('slicknav-style', get_theme_file_uri('css/slicknav.css'));
        wp_enqueue_style('flaticon-style', get_theme_file_uri('css/flaticon.css'));
        wp_enqueue_style('progressbar-style', get_theme_file_uri('css/progressbar_barfiller.css'));
        wp_enqueue_style('gijgo-style', get_theme_file_uri('css/gijgo.css'));
        wp_enqueue_style('animate-style', get_theme_file_uri('css/animate.min.css'));
        wp_enqueue_style('animated-style', get_theme_file_uri('css/animated-headline.css'));
        wp_enqueue_style('magnific-style', get_theme_file_uri('css/magnific-popup.css'));
        wp_enqueue_style('fontawesome-style', get_theme_file_uri('css/fontawesome-all.min.css'));
        wp_enqueue_style('themify-style', get_theme_file_uri('css/themify-icons.css'));
        wp_enqueue_style('slick-style', get_theme_file_uri('css/slick.css'));
        wp_enqueue_style('nice-style', get_theme_file_uri('css/nice-select.css'));
        wp_enqueue_style('style-style', get_theme_file_uri('css/style.css'));
        // wp_enqueue_style('style-map', get_theme_file_uri('css/style.map'));

        // JS Files
        wp_enqueue_script('script-script', get_theme_file_uri('js/script.js'), '', '1.0', true);
        wp_enqueue_script('vendor-modernizr-script', get_theme_file_uri('js/vendor/modernizr-3.5.0.min.js'), '', '1.0', true);
            // Jquery, Popper, Bootstrap
        wp_enqueue_script('vendor-jquery-script', get_theme_file_uri('js/vendor/jquery-1.12.4.min.js'), '', '1.0', true);
        wp_enqueue_script('popper-script', get_theme_file_uri('js/popper.min.js'), '', '1.0', true);
        wp_enqueue_script('bootstrap-script', get_theme_file_uri('js/bootstrap.min.js'), '', '1.0', true);
            // Jquery Mobile Menu
        wp_enqueue_script('jquery-slicknav-script', get_theme_file_uri('js/jquery.slicknav.min.js'), '', '1.0', true);
            // Jquery Slick , Owl-Carousel Plugins
        wp_enqueue_script('owl-script', get_theme_file_uri('js/owl.carousel.min.js'), '', '1.0', true);
        wp_enqueue_script('slick-script', get_theme_file_uri('js/slick.min.js'), '', '1.0', true);
            // One Page, Animated-HeadLine
        wp_enqueue_script('wow-script', get_theme_file_uri('js/wow.min.js'), '', '1.0', true);
        wp_enqueue_script('headline-script', get_theme_file_uri('js/animated.headline.js'), '', '1.0', true);
        wp_enqueue_script('magnific-script', get_theme_file_uri('js/jquery.magnific-popup.js'), '', '1.0', true);
            // Date Picker
        wp_enqueue_script('gijgo-script', get_theme_file_uri('js/gijgo.min.js'), '', '1.0', true);
            // Nice-select, sticky
        wp_enqueue_script('nice-script', get_theme_file_uri('js/jquery.nice-select.min.js'), '', '1.0', true);
        wp_enqueue_script('sticky-script', get_theme_file_uri('js/jquery.sticky.js'), '', '1.0', true);
            // Progress
        wp_enqueue_script('barfiller-script', get_theme_file_uri('js/jquery.barfiller.js'), '', '1.0', true);
            // counter , waypoint,Hover Direction
        wp_enqueue_script('counterup-script', get_theme_file_uri('js/jquery.counterup.min.js'), '', '1.0', true);
        wp_enqueue_script('waypoints-script', get_theme_file_uri('js/waypoints.min.js'), '', '1.0', true);
        wp_enqueue_script('countdown-script', get_theme_file_uri('js/jquery.countdown.min.js'), '', '1.0', true);
        wp_enqueue_script('hover-direction-script', get_theme_file_uri('js/hover-direction-snake.min.js'), '', '1.0', true);
            // contact js
        wp_enqueue_script('contact-script', get_theme_file_uri('js/contact.js'), '', '1.0', true);
        wp_enqueue_script('form-script', get_theme_file_uri('js/jquery.form.js'), '', '1.0', true);
        wp_enqueue_script('validate-script', get_theme_file_uri('js/jquery.validate.min.js'), '', '1.0', true);
        wp_enqueue_script('mail-script', get_theme_file_uri('js/mail-script.js'), '', '1.0', true);
        wp_enqueue_script('ajaxchimp-script', get_theme_file_uri('js/jquery.ajaxchimp.min.js'), '', '1.0', true);
            // Jquery Plugins, main Jquery
        wp_enqueue_script('plugins-script', get_theme_file_uri('js/plugins.js'), '', '1.0', true);
        wp_enqueue_script('main-script', get_theme_file_uri('js/main.js'), '', '1.0', true);
        
    }
    add_action('wp_enqueue_scripts', 'braxit_files');


    // Navigation Menu
    function custom_main_menu() {
        register_nav_menu('custom_menu', __('Main Menu'));
        register_nav_menu('footer_one_menu', __('Footer 1 Menu'));
        register_nav_menu('footer_two_menu', __('Footer 2 Menu'));
    }
    add_action('init', 'custom_main_menu');


    // Widget
    function register_theme_widget() {
        require_once('inc/classes/class-newsletter.php');
        require_once('inc/classes/class-contactus.php');
        require_once('inc/classes/class-contactform.php');
        register_sidebar(array(
            'name' => 'My Widget Area',
            'id' => 'widget_area',
        ));
        register_sidebar(array(
            'name' => 'My Contact Form Area',
            'id' => 'contact_form_area',
        ));
        register_widget('Newsletter_Widget');
        register_widget('Contact_Us_Widget');
        register_widget('Contact_Form_Widget');
    }
    add_action('widgets_init', 'register_theme_widget');

    
    // Theme Support
    function braxit_theme_support() {
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'braxit_theme_support' );

?>