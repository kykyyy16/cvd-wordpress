<?php

function theCVD__assets() {
    wp_enqueue_style('theCVD-Style', get_template_directory_uri() . '/css/style.css', microtime() );

    wp_enqueue_script('theCVD-Script', get_template_directory_uri() . '/js/script.js', NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'theCVD__assets');