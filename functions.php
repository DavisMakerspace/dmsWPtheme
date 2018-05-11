<?php

/*------ Add Dependancies the WP Way --------- */

function dmsWPtheme_depend_scripts() {

    // all styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/libraries/bootstrap-4.1.0/dist/css/bootstrap.min.css', array());
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), 20141119 );
    // all scripts
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap-4.1.0/dist/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '20120206', true );
}
add_action('wp_enqueue_scripts', 'dmsWPtheme_depend_scripts', 99);


if ( ! function_exists ( 'dmsWPtheme_setup') ) :

    function dmsWPtheme_setup() {
        // WP way of supporting title tag
        add_theme_support( 'title-tag' );
    }
endif;
add_action('after_setup_theme', 'dmsWPtheme_setup');

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

/*------ Register Menus --------- */

function register_dmsWPtheme() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        )

    );

}
add_action('init', 'register_dmsWPtheme');

/* -------- Enabling Support for Post Thumbnails ----------*/
add_theme_support( 'post-thumbnails' );
