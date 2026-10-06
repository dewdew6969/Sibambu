<?php
/**
 * SiBambu Custom Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function sibambu_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'sibambu' ),
        'footer'  => __( 'Footer Menu', 'sibambu' ),
    ) );
}
add_action( 'after_setup_theme', 'sibambu_theme_setup' );

function sibambu_enqueue_scripts() {
    // Google Fonts: Plus Jakarta Sans (Headings) & Inter (Body)
    wp_enqueue_style( 'google-fonts-sibambu', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap', array(), null );
    
    // Theme Main Stylesheet
    wp_enqueue_style( 'sibambu-style', get_stylesheet_uri(), array( 'google-fonts-sibambu' ), '1.1.0' );
}
add_action( 'wp_enqueue_scripts', 'sibambu_enqueue_scripts' );
