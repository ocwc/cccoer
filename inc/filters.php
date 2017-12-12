<?php

add_filter( 'document_title_parts', function ( $title ) {
    if ( is_post_type_archive('retrospective') ) {
        $title['title'] = 'CCCOER 10th Anniversary Retrospectives';
    }
    return $title;
}, 10, 1);

function cccoer_query_vars($query_vars) {
    /* courses */
    $query_vars[] = 'webinar_year';
    $query_vars[] = 'webinar_category';
    $query_vars[] = 'webinar_q';

    return $query_vars;
}
add_filter( 'query_vars', 'cccoer_query_vars' );
