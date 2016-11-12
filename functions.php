<?php

function offshore_child_enqueue_styles() {
    wp_enqueue_style( 'offshore-parent', get_template_directory_uri() . '/style.css', array('bootstrap','flexslider','owlcarousel','fontawesome') );
}
add_action( 'wp_enqueue_scripts', 'offshore_child_enqueue_styles' );

function offshore_child_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'offshore', $lang );
}
add_action( 'after_setup_theme', 'offshore_child_lang_setup' );

/**
 *  Example on how to use 'offshore_meta_tags' filter to modify meta tags
 */
// add_filter( 'offshore_meta_tags', 'offshore_modify_tags' );
// function offshore_modify_tags( $tags ){
//     $tags = array();
//     return $tags;
// }
