<?php

/*------ Add Dependancies the WP Way --------- */

function dmsWPtheme() {

  // with this Dashicons can now be used on public-facing templates
  // ...and pages instead of only in the WP admin
  wp_enqueue_style( 'dashicons' );
  // this loads jquery (for bootstrap, among other things)
  wp_enqueue_script('jquery', get_stylesheet_uri(), 'dashicons' );
  wp_enqueue_script( 'jquery' , get_template_directory_uri() . '/assets/libraries/jquery-3.3.1.min.js', false, '3.3.1' );
  // load boostrap
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap-4.1.0/bootstrap.min.js', array( 'jquery' ), '4.1.0' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap-4.1.0/bootstrap.min.css', '4.1.0' );
  // load custom js
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '3.3.1');

}
add_action('wp_enqueue_scripts', 'dmsWPtheme', 1);


if ( ! function_exists ( 'dmsWPtheme') ) :

    function dmsWPtheme() {
        // WP way of supporting title tag
        add_theme_support( 'title-tag' );
    }
endif;
