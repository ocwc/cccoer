<?php

function cccoer_filter_mainquery( $query ) {
    if ( is_admin() ) {
        return $query;
    }
    if ( $query->is_archive() && $query->is_main_query() && is_post_type_archive('webinar')) {
        $query->set('posts_per_page', 16);

        $webinar_category = get_query_var('webinar_category');
        if ($webinar_category) {
            $query->set('tax_query', array(
                array(
                    'taxonomy' => 'webinar_category',
                    'field' => 'slug',
                    'terms' => $webinar_category,
                )
            ));
        } else {
            $query->set('tax_query', array(
                array(
                    'taxonomy' => 'webinar_category',
                    'field' => 'slug',
                    'terms' => 'general-oer',
                    // 'operator' => 'NOT IN'
                )
            ));
        }

        $webinar_year = get_query_var('webinar_year');
        if ($webinar_year) {
            $query->set('date_query', array(
                'year' => $webinar_year
            ));
        }

        $webinar_text = get_query_var('webinar_q');
        if ($webinar_text) {
            $query->set('s', $webinar_text);
        }

    } elseif ( is_tax('webinar_category') ) {
        $query->set('posts_per_page', 16);
    }

    return $query;
}

add_action( 'pre_get_posts', 'cccoer_filter_mainquery' );
