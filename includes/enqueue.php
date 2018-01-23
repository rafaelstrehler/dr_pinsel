<?php
// Start enqueue styles
function add_css() {
    // css
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.min.css');
};
add_action('wp_enqueue_scripts', 'add_css');

function add_custom_scripts(){
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/js.min.js');
};
add_action('wp_footer', 'add_custom_scripts');
// End enqueue scripts
