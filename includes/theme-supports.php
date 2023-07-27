<?php

function theCVD__support(){
    register_nav_menus(array(
        'header_menu'       =>  __('Header Menu', 'text_domain'),
        'footer_menu'       =>  __('Footer Menu', 'text_domain')
    ));
    add_theme_support('post-thumbnails');

    add_filter('wpcf7_autop_or_not', '__return_false');
    add_filter('wpcf7_form_elements', function($content) {
        $content = preg_replace('/<(span).?class="\s(?:.\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s"[^\>]>(.)<\/\1>/i', '\2', $content);

        return $content;
    });
};

add_action('after_setup_theme', 'theCVD__support');

