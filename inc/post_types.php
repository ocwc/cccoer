<?php

// Register Custom Post Type
function cc_post_type_webinar() {
    $labels = array(
        'name'                  => 'Webinars',
        'singular_name'         => 'Webinar',
        'menu_name'             => 'Webinars',
        'name_admin_bar'        => 'Webinars',
        'archives'              => 'Webinar Archives',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Items',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New Webinar',
        'new_item'              => 'New Webinar',
        'edit_item'             => 'Edit Webinar',
        'update_item'           => 'Update Webinar',
        'view_item'             => 'View Webinar',
        'search_items'          => 'Search Item',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args   = array(
        'label'               => 'Webinar',
        'description'         => 'Webinars',
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields',
        ),
        'taxonomies'          => array( 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-format-video'
    );
    register_post_type( 'webinar', $args );

}

add_action( 'init', 'cc_post_type_webinar', 0 );

// Register Custom Taxonomy
function cc_custom_taxonomy_webinar_category() {

    $labels = array(
        'name'                       => 'Webinar Categories',
        'singular_name'              => 'Webinar Category',
        'menu_name'                  => 'Webinar Category',
        'all_items'                  => 'All Items',
        'parent_item'                => 'Parent Item',
        'parent_item_colon'          => 'Parent Item:',
        'new_item_name'              => 'New Item Name',
        'add_new_item'               => 'Add New Item',
        'edit_item'                  => 'Edit Item',
        'update_item'                => 'Update Item',
        'view_item'                  => 'View Item',
        'separate_items_with_commas' => 'Separate items with commas',
        'add_or_remove_items'        => 'Add or remove items',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Items',
        'search_items'               => 'Search Items',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No items',
        'items_list'                 => 'Items list',
        'items_list_navigation'      => 'Items list navigation',
    );
    $args   = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );
    register_taxonomy( 'webinar_category', array( 'webinar' ), $args );

}

add_action( 'init', 'cc_custom_taxonomy_webinar_category', 0 );

function cc_post_type_case_study() {

    $labels = array(
        'name'                  => 'Case studies',
        'singular_name'         => 'Case study',
        'menu_name'             => 'Case studies',
        'name_admin_bar'        => 'Case studies',
        'archives'              => 'Case study Archives',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Items',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New Case study',
        'new_item'              => 'New Case study',
        'edit_item'             => 'Edit Case study',
        'update_item'           => 'Update Case study',
        'view_item'             => 'View Case study',
        'search_items'          => 'Search Item',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args   = array(
        'label'               => 'Case study',
        'description'         => 'Case studies',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'taxonomies'          => array( 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-portfolio'
    );
    register_post_type( 'casestudy', $args );

}

add_action( 'init', 'cc_post_type_case_study', 0 );

function cc_post_type_Retrospective() {
    $labels = array(
        'name'                  => 'Retrospectives',
        'singular_name'         => 'Retrospective',
        'menu_name'             => 'Retrospectives',
        'name_admin_bar'        => 'Retrospectives',
        'archives'              => 'Retrospective Archives',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Items',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New Retrospective',
        'new_item'              => 'New Retrospective',
        'edit_item'             => 'Edit Retrospective',
        'update_item'           => 'Update Retrospective',
        'view_item'             => 'View Retrospective',
        'search_items'          => 'Search Item',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args   = array(
        'label'               => 'Retrospective',
        'description'         => 'Retrospectives',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'          => array( 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-format-quote',

    );
    register_post_type( 'retrospective', $args );

}

add_action( 'init', 'cc_post_type_retrospective', 0 );


add_action( 'init', function() {
    register_extended_post_type( 'studentstory', [
        'taxonomies'      => array( 'post_tag' ),
        'capability_type' => 'page',
        'menu_icon'       => 'dashicons-welcome-learn-more',
        'menu_position'   => 5,
        'show_in_rest'    => true,
        'rest_base'       => 'studentstory',
    ], [
        'singular' => 'Student story',
        'plural'   => 'Student stories'
    ] );

    register_extended_post_type( 'edi', [
        'taxonomies'      => array( 'post_tag' ),
        'capability_type' => 'page',
        'menu_icon'       => 'dashicons-businesswoman',
        'show_in_rest'    => true,
        'rest_base'       => 'edi',
    ], [
        'singular' => 'EDI post',
        'plural'   => 'EDI posts'
    ] );
} );
