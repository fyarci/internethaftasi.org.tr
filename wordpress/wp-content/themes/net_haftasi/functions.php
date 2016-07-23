<?php
/**
 * Shape functions and definitions
 *
 * @package net-haftasi
 * @since net_haftasi 1.0
 */

include_once 'admin/db.php';

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

    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
    add_theme_support( 'post-thumbnails');

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
      'header-menu-left' => __( 'Header Menu Left' ),
      'header-menu-rigth' => __( 'Header Menu Left' ),
      'main-menu' => __( 'Main Menu' ),
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

    wp_enqueue_style( 'style', get_template_directory_uri() . '/static/css/style.css', array(), '12' );


    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/static/js/bootstrap.min.js', array(), '11', true );



 // css libraries for maps integration
    wp_enqueue_style( 'map-default', get_template_directory_uri() . '/static/map/css/default.css', array(), '11' );

    wp_enqueue_style( 'map-normalize', get_template_directory_uri() . '/static/map/css/normalize.css', array(), '11' );

    wp_enqueue_style( 'map-qtip', get_template_directory_uri() . '/static/map/css/qtip.css', array(), '11' );

 // js libraries for maps integration

    wp_enqueue_script( 'jquery-aa', get_template_directory_uri() . '/static/js/jquery-1.8.2.min.js', array(), '11', true );
    wp_enqueue_script( 'map-raphael', get_template_directory_uri() . '/static/map/js/raphael.js', array(), '11', true );

    wp_enqueue_script( 'map-path', get_template_directory_uri() . '/static/map/js/paths.js', array(), '11', true );

    wp_enqueue_script( 'map-init', get_template_directory_uri() . '/static/map/js/init.js', array(), '11', true );

    wp_enqueue_script( 'map-qtip', get_template_directory_uri() . '/static/map/js/qtip.js', array(), '11', true );

    wp_enqueue_script( 'map-tipsy', get_template_directory_uri() . '/static/map/js/jquery.tipsy.js', array(), '11', true );


}
add_action( 'wp_enqueue_scripts', 'shape_scripts', 1 );


/** Step 2 (from text above). */
add_action( 'admin_menu', 'net_haftasi_admin_menu' );

/** Step 1. */
function net_haftasi_admin_menu() {
	add_menu_page( 'ETKİNLİKLER', 'Etkinlikler', 'read', 'etkinlikler-admin', 'admin_etkinlik' );
    add_submenu_page('etkinlikler-admin', 'Etkinlik Ekle', 'Etkinlik Ekle', 'read', '?page=etkinlikler-admin-ekle', 'admin_etkinlik_ekle');
    add_submenu_page('etkinlikler-admin', 'Etkinlik Sil', 'Etkinlik Sil', 'read', '?page=etkinlikler-admin-sil', 'admin_etkinlik_sil');

	add_menu_page( 'İller', 'İller', 'read', 'iller-admin', 'admin_iller' );

	add_menu_page( 'Birimler', 'Birimler', 'read', 'birimler-admin', 'admin_birimler' );
    add_submenu_page('birimler-admin', 'Birim Ekle', 'Birim Ekle', 'read', '?page=birimler-admin-ekle', 'admin_birim_ekle');
}

/** Step 3. */
function admin_etkinlik() {
	if ( !current_user_can( 'read' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'admin_etkinlikler.php';
}
function admin_etkinlik_ekle() {
    	if ( !current_user_can( 'read' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'admin_etkinlik_ekle.php';
}

function admin_iller(){
    if ( !current_user_can( 'read' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include 'admin_iller.php';
}

function admin_birimler(){
    if ( !current_user_can( 'read' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include 'admin_birimler.php';
}

function admin_birim_ekle(){
    if ( !current_user_can( 'read' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include 'admin_birim_ekle.php';
}



// Formlar
function birim_ekle_form() {
    $birim =  $_POST['birim'];
    $eposta =  $_POST['eposta'];
    $adres =  $_POST['adres'];
    $telefon =  $_POST['telefon'];
    $hakkinda =  $_POST['hakkinda'];

    $l = array(
        "ISIM" => $birim,
        "EPOSTA" => $eposta,
        "ADRES" => $adres,
        "TELEFON" => $telefon,
        "HAKKINDA" => $hakkinda
    );

    $f = array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%s'
    );

    insertTable("birimler", $l, $f);

    die(wp_redirect(admin_url('admin.php?page=%3Fpage%3Dbirimler-admin-ekle')));

}
add_action( 'admin_post_birim_ekle_form', 'birim_ekle_form' );

function etkinlik_ekle_form() {
    $birim =  $_POST['birim'];
    $il =  $_POST['il'];
    $ad =  $_POST['ad'];
    $adres =  $_POST['adres'];
    $tarih =  $_POST['tarih'];
    $baslangic =  $_POST['baslangic'];
    $bitis =  $_POST['bitis'];
    $aciklama =  $_POST['aciklama'];


    $l = array(
        "BIRIM" => $birim,
        "IL" => $il,
        "AD" => $ad,
        "ADRES" => $adres,
        "TARIH" => $tarih,
        "BASLANGIC" => $baslangic,
        "BITIS" => $bitis,
        "ACIKLAMA" => $aciklama,
    );

    $f = array(
        '%d',
        '%d',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s'
    );

    insertTable("etkinlikler", $l, $f);

    die(wp_redirect(admin_url('admin.php?page=%3Fpage%3Detkinlikler-admin-ekle')));

}
add_action( 'admin_post_etkinlik_ekle_form', 'etkinlik_ekle_form' );
