<?php

// load front end css

add_action( 'wp_enqueue_scripts', 'wooe_theme_styles' );
function wooe_theme_styles() {
	if( is_single() ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style( 'wooe_bootstrap-css', get_template_directory_uri() . '/assets/libs/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'wooe_fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.min.css' );
	wp_enqueue_style( 'wooe_mburger-css', get_template_directory_uri() . '/assets/libs/mburger/mburger.css' );
	wp_enqueue_style( 'wooe_slick-css', get_template_directory_uri() . '/assets/libs/slick/slick.css' );
	wp_enqueue_style( 'wooe_slick_theme-css', get_template_directory_uri() . '/assets/libs/slick/slick-theme.css' );
	wp_enqueue_style( 'wooe_mmenu-css', get_template_directory_uri() . '/assets/libs/mmenu/mmenu.css' );
	wp_enqueue_style( 'wooe_woocommerce-css', get_template_directory_uri() . '/assets/css/woocommerce.css' );
	wp_enqueue_style( 'wooe_theme-css', get_template_directory_uri() . '/style.css' );
}

// load front end js

add_action( 'wp_enqueue_scripts', 'wooe_theme_js' );
function wooe_theme_js() {
	wp_enqueue_script( 'wooe_mmenu-js', get_template_directory_uri() . '/assets/libs/mmenu/mmenu.js' , array('jquery'), '8.5', true );
	wp_enqueue_script( 'wooe_popper-js', get_template_directory_uri() . '/assets/libs/bootstrap/popper.min.js' , array('jquery'), '2.10.1', true );
	wp_enqueue_script( 'wooe_bootstrap-js', get_template_directory_uri() . '/assets/libs/bootstrap/bootstrap.min.js' , false, '5.1.1', true );
	wp_enqueue_script( 'wooe_slick-js', get_template_directory_uri() . '/assets/libs/slick/slick.min.js' , array('jquery'), '1.8.1', true );
	wp_enqueue_script( 'wooe_masonry-js', get_template_directory_uri() . '/assets/libs/masonry/masonry.pkgd.min.js' ,  array('jquery'), '4.2.2', true );
	wp_enqueue_script( 'wooe_theme-js', get_template_directory_uri() . '/assets/js/main.js' ,  array('jquery'), '1.0.0', true );
} 

// load admin css

add_action( 'admin_enqueue_scripts', 'wooe_admin_css' );
function wooe_admin_css() {
	wp_enqueue_style( 'wooe-admin-css', get_template_directory_uri() . '/inc/admin/assets/css/admin.css' );
} 

// load admin js

add_action( 'admin_enqueue_scripts', 'wooe_admin_js' );
function wooe_admin_js() {
	wp_enqueue_script( 'wooe-admin-js', get_template_directory_uri() . '/inc/admin/assets/js/admin.js' , 'jQuery', '1.0.0', true );
} 