<?php

function get_cccoer_members() {
    $url = 'https://members.oeconsortium.org/api/v1/organization/group_by/consortium/CCCOER/list/';
    $result = wp_remote_get( $url );
    $response = wp_remote_retrieve_body( $result );

    $object = json_decode($response);
    return $object;
}
