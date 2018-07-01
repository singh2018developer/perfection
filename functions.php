<?php
/* 
    ===========
    Include script
    ===========

*/


function prefection_script_enqueue() {
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/prefection.css', array(), '1.0.0','all');

    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/prefection.js', array(),'1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'prefection_script_enqueue');

/* 
    ====================
        Actviate menus
    ====================

*/


function prefection_theme_setup() {

    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Secondary Navigation' );
    
}
add_action( 'init', 'prefection_theme_setup' );


/* 
    ===========================
        Theme support function
    ===========================


*/



add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails');

add_theme_support('post-formats',array('aside','image','video'));