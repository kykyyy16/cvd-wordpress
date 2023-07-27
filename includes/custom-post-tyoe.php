<?php

function theCVD__custom_post(){
    $latestPost_label = array(
        'name'                  => __('Latest Post', 'textdomain'),
        'singula_name'          => __('Latest Post', 'textdomain'),
        'add_new'               => __('Add Latest Post', 'textdomain'),
        'add_new_item'          => __('Add new Latest Post', 'textdomain'),
        'edit_item'             => __('Edit Latest Post', 'textdomain'),
        'all_items'             => __('Latest Post', 'textdomain'),
    );
    $latestPost_args = array(
        'labels'                => $latestPost_label,
        'public'                => true,
        'capability_type'       => 'post',
        'show_ui'               => true,
        'taxonomies'            => array('post_tag', 'category'),
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    $updatesPost_label = array(
        'name'                  => __('Updates Post', 'textdomain'),
        'singula_name'          => __('Updates Post', 'textdomain'),
        'add_new'               => __('Add Updates Post', 'textdomain'),
        'add_new_item'          => __('Add new Updates Post', 'textdomain'),
        'edit_item'             => __('Edit Updates Post', 'textdomain'),
        'all_items'             => __('Updates Post', 'textdomain'),
    );
    $updatesPost_args = array(
        'labels'                => $updatesPost_label,
        'public'                => true,
        'capability_type'       => 'post',
        'show_ui'               => true,
        'taxonomies'            => array('post_tag', 'category'),
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('latestPost', $latestPost_args);
    register_post_type('updatesPost', $updatesPost_args);
}

add_action('init', 'theCVD__custom_post');