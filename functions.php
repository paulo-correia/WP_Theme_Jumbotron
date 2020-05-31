<?php

function jumbotron_scripts() {
  wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'jumbotron_css', get_stylesheet_directory_uri() . '/css/jumbotron.css' );
  wp_enqueue_style( 'style_css', get_stylesheet_directory_uri() . '/style.css' );
  wp_enqueue_script( 'jquery_js', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.slim.min.js', array(), '', true );
  wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'jumbotron_scripts' );

register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'jumbotron' ),
    )
);
