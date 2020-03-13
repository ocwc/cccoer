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

function cccoer_url_rewrite_templates() {
    global $wp_query;

    if ( get_query_var( 'member_id' ) ) {
        add_filter( 'template_include', function() {
            return get_template_directory() . '/pages/member-detail.php';
        });
    }
}
add_action( 'template_redirect', 'cccoer_url_rewrite_templates' );

function cccoer_rewrites() {
    add_rewrite_rule(
        'about/members/(\w+)/?$',
        'index.php?member_id=$matches[1]',
        'top' );
}

function cccoer_setup() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_action( 'init', 'cccoer_menus' );
    add_action( 'init', 'cccoer_rewrites' );

    add_image_size( 'background-poster', 1440, 478, true );
    add_image_size( 'square', 150, 150, array('center', 'center') );
}
add_action( 'after_setup_theme', 'cccoer_setup' );

function cccoer_scripts() {
    $theme = wp_get_theme();
    wp_dequeue_style( 'style');

    if ( !is_admin() ) {
        wp_enqueue_script( 'cccoer-foundation', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '', true );
        if ( WP_DEBUG === true ) {
            wp_enqueue_style( 'cccoer-style', get_template_directory_uri().'/css/app.css', '' );
            wp_enqueue_script( 'cccoer-script', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
        } else {
            wp_enqueue_style( 'cccoer-style', get_template_directory_uri().'/css/app.css', array(), wp_get_theme()->get( 'Version' ) );
            wp_enqueue_script( 'cccoer-script', get_template_directory_uri() . '/js/app-min.js', array('jquery'), wp_get_theme()->get( 'Version' ), true );
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
    $args = array('post_type' => array('post', 'webinar', 'studentstory'),
                  'posts_per_page' => 8);
    return new WP_Query($args);
}


require_once( get_template_directory() . '/inc/menu_walker.php' );

// require_once( get_template_directory() . '/inc/helpers.php' );
require_once( get_template_directory() . '/inc/filters.php' );
require_once( get_template_directory() . '/inc/actions.php' );
// require_once( get_template_directory() . '/inc/custom-types.php' );
require_once( get_template_directory() . '/inc/opengraph.php' );
require_once( get_template_directory() . '/inc/extras.php' );
require_once( get_template_directory() . '/inc/post_types.php' );
require_once( get_template_directory() . '/inc/acf.php' );
