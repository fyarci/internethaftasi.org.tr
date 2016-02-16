<?php
/**
 * Shape functions and definitions
 *
 * @package net-haftasi
 * @since net_haftasi 1.0
 */

if ( ! function_exists( 'shape_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Shape 1.0
 */
function shape_setup() {

    add_theme_support( 'automatic-feed-links' );

         	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

// if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
//}

    register_nav_menus( array(
        'side' => __( 'Side Menu', 'shape' ),
    ) );

    $sidebar_args = array(
    'name'          => sprintf( __( 'Sidebar Left' ), "left" ),
    'id'            => "sidebar-left",
    'description'   => '',
    );

    register_sidebar( $sidebar_args );

    function register_nv_menus() {
  register_nav_menus(
    array(
      'years-menu' => __( 'Years' ),
      'footer-menu' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'init', 'register_nv_menus' );

}
endif; // shape_setup
add_action( 'after_setup_theme', 'shape_setup' );




/**
 * Enqueue scripts and styles
 */
function shape_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/static/css/bootstrap.min.css', array(), '11' );

    wp_enqueue_style( 'bootstrap-flat', get_template_directory_uri() . '/static/css/bootstrap-flat.min.css', array(), '12' );

    wp_enqueue_style( 'style', get_template_directory_uri() . '/static/css/style.css', array(), '11' );


    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/static/js/bootstrap.min.js', array(), '11', true );

}
add_action( 'wp_enqueue_scripts', 'shape_scripts' );
