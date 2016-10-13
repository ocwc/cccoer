<?php

function cccoer_filter_mainquery( $query ) {
    if ( is_admin() ) {
        return $query;
    }
    if ( $query->is_archive() && $query->is_main_query() && is_post_type_archive('webinar')) {
        
        $query->set('posts_per_page', 16);
        $query->set('tax_query', array(
            array(
                'taxonomy' => 'webinar_category',
                'field' => 'slug',
                'terms' => 'general-oer',
                // 'operator' => 'NOT IN'
            )
        ));
    } elseif ( is_tax('webinar_category') ) {
        $query->set('posts_per_page', 16);
    }
    
    return $query;
}

add_action( 'pre_get_posts', 'cccoer_filter_mainquery' );
