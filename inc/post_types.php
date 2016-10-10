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
    $args = array(
        'label'                 => 'Webinar',
        'description'           => 'Webinars',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-format-video'
    );
    register_post_type( 'webinar', $args );

}
add_action( 'init', 'cc_post_type_webinar', 0 );
