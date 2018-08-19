<?php

/*------ Add Dependancies the WP Way --------- */

function dmsWPtheme_depend_scripts() {

    // all styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/libraries/bootstrap-4.1.2/css/bootstrap.min.css', array());
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), 20141119 );
    // all scripts
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap-4.1.2/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '20120206', true );
}
add_action('wp_enqueue_scripts', 'dmsWPtheme_depend_scripts', 99);

/* --------  Register Custom Navigation Walker -------- */
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';


/* -------- Add Title tag -------- */
if ( ! function_exists ( 'dmsWPtheme_setup') ) :
    function dmsWPtheme_setup() {
        add_theme_support( 'title-tag' );
    }
endif;
add_action('after_setup_theme', 'dmsWPtheme_setup');

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

/* -------- Custom image size for blog post thumbnails on the front page ------------- */

add_image_size('dms-custom-img', 200, 250, array( 'left', 'top' ) );

/* -------- Add custom logo support to 'Appearance' ----------*/
add_theme_support( 'custom-logo' );

function dmsWPtheme_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'dmsWPtheme_custom_logo_setup' );

/* --------- Filter the except length to 12 words -----------*/
function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/* ---------  -------------- */
