<?php
function facethechilden_files() {
    wp_enqueue_style('ftc_style', get_template_directory_uri() . '/css/main.min.css', microtime(), true);
    wp_enqueue_script('ftc_script', get_template_directory_uri() . '/js/script.js', NULL,  microtime(), true);
}
add_action('wp_enqueue_scripts', 'facethechilden_files');
