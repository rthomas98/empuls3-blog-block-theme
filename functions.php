<?php
/**
 * Theme functions and definitions
 */

// Set up the content width value based on the theme's design
if ( ! isset( $content_width ) ) {
    $content_width = 600;
}

// Theme setup function
function my_blog_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain( 'my-blog-theme', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );

    // Register menu locations
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'my-blog-theme' ),
    ) );

    // Add support for core custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles
    add_editor_style( 'style-editor.css' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'my_blog_theme_setup' );

// Enqueue scripts and styles
function my_blog_theme_scripts() {
    wp_enqueue_style( 'my-blog-theme-style', get_stylesheet_uri() );

    wp_enqueue_script( 'my-blog-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'my_blog_theme_scripts' );

