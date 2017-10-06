<?php

add_filter( 'document_title_parts', function ( $title ) {
    if ( is_post_type_archive('retrospective') ) {
        $title['title'] = 'CCCOER 10th Anniversary Retrospectives';
    }
    return $title;
}, 10, 1);
