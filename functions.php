<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'offshore-parent', get_template_directory_uri() . '/style.css', array('bootstrap','flexslider','owlcarousel','fontawesome') );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function offshore_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'offshore', $lang );
}
add_action( 'after_setup_theme', 'offshore_lang_setup' );
