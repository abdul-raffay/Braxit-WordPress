<?php 

    // CSS, JS, and Fonts Files
    function braxit_files(){
        // CSS Files
        wp_enqueue_style('main-style', get_theme_file_uri('css/stylesheet.css'));

        // JS Files
        wp_enqueue_script('main-script', get_theme_file_uri('js/script.js'));
    }
    add_action('wp_enqueue_scripts', 'braxit_files');

?>