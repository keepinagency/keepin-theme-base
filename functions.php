<?php
/*** Carga de Archivos CSS y Js para el site ***/

            /*** Archivos CCS Bootstrap ***/
function keepin_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'keepin-style', get_stylesheet_uri(), $dependencies ); 
}
            /*** Archivos JS ***/
function keepin_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}
            /*** Titulos WP ***/
function keepin_wp_setup() {
    add_theme_support( 'title-tag' );
}
            /*** Menú WP ***/
function keepin_register_menu() {
  register_nav_menu( 'header-menu', __('Header Menu'));
  register_nav_menu( 'footer-menu', __('Footer Menu'));
}

add_action( 'wp_enqueue_scripts', 'keepin_enqueue_styles' ); //CCS
add_action( 'wp_enqueue_scripts', 'keepin_enqueue_scripts' );//Script
add_action( 'after_setup_theme', 'keepin_wp_setup' ); //titulos
add_action( 'after_setup_theme', 'keepin_register_menu' ); //menus
?>