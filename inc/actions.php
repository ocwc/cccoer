<?php

function cccoer_filter_mainquery( $query ) {
    if ( $query->is_archive() && $query->is_main_query() && $query->query_vars['post_type'] === 'webinar' ) {
        $query->set('posts_per_page', -1);
    }
    return $query;
}

add_action( 'pre_get_posts', 'cccoer_filter_mainquery' );
