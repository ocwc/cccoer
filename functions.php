<?php

if( ! isset( $content_width ) ) $content_width = 1024;

function cccoer_menus() {
  register_nav_menus(
    array(
      'main' => 'Main Menu',
      'footer' => 'Footer',
    )
  );

}

function cccoer_setup() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_action( 'init', 'cccoer_menus' );

    add_image_size( 'background-poster', 1440, 478, true );
}
add_action( 'after_setup_theme', 'cccoer_setup' );

function cccoer_scripts() {
    wp_dequeue_style( 'style', get_stylesheet_uri() );

    if ( !is_admin() ) {
        if ( WP_DEBUG === true ) {
            wp_enqueue_style( 'cccoer-style', get_template_directory_uri().'/css/app.css' );
            wp_enqueue_script( 'cccoer-script', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
        } else {
            wp_enqueue_style( 'cccoer-style', get_template_directory_uri().'/css/app.css' );
            wp_enqueue_script( 'cccoer-script', get_template_directory_uri() . '/js/app-min.js', array('jquery'), '', true );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'cccoer_scripts' );
add_action( 'admin_enqueue_scripts', 'cccoer_scripts' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Home Page',
        'menu_title'    => 'Home Page',
        'menu_slug'     => 'theme-homepage-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function get_homepage_posts() {
    $args = array('post_type' => 'post',
                  'posts_per_page' => 8);
    return new WP_Query($args);
}


require_once( get_template_directory() . '/inc/menu_walker.php' );

// require_once( get_template_directory() . '/inc/helpers.php' );
// require_once( get_template_directory() . '/inc/filters.php' );
// require_once( get_template_directory() . '/inc/actions.php' );
// require_once( get_template_directory() . '/inc/custom-types.php' );
require_once( get_template_directory() . '/inc/opengraph.php' );
require_once( get_template_directory() . '/inc/extras.php' );
