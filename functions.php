<?php

function prefection_script_enqueue() {

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/prefection.css', array(), 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/prefection.js', array(), true);
}
add_action( 'wp_enqueue_scripts', 'prefection_script_enqueue');

function prefection_theme_setup() {

    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Secondary Navigation' );
    
}
add_action( 'init', 'prefection_theme_setup' );

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails');

add_theme_support('post-formats',array('aside','image','video'));