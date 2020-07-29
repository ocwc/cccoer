<?php
require get_template_directory() . "/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

function get_cccoer_members() {
    $url = 'https://members.oeglobal.org/api/v1/organization/group_by/consortium/CCCOER/list/';
    $result = wp_remote_get( $url );
    $response = wp_remote_retrieve_body( $result );

    $object = json_decode($response);
    return $object;
}

function get_cccoer_member_detail() {
    $member_id = get_query_var('member_id');

    $url = "https://members.oeglobal.org/api/v1/organization/view/$member_id/?format=json";
    $result = wp_remote_get( $url );
    $response = wp_remote_retrieve_body( $result );
    $response = json_decode($response);

    if (strpos($response->associate_consortium, 'CCCOER') > 0) {
        return $response;
    }
}

function get_cccoer_tweets() {
    if ( get_transient('tweets') !== false ) {
        return get_transient('tweets');
    } else {
        $connection = new TwitterOAuth(TWITTER_API_KEY, TWITTER_API_SECRET, TWITTER_ACCESS_TOKEN_KEY, TWITTER_ACCESS_TOKEN_SECRET);
        $content = $connection->get("search/tweets",
                        ["q" => "cccoer",
                         "since_id" => 702939861158768640,
                         "count" => 100
                        ]);
        $tweets = array();
        foreach ($content->statuses as $tweet) {
            if ( ! isset($tweet->retweeted_status) )
            $tweets[] = $tweet->id_str;
        }

        $tweets = array_slice($tweets, 0, 4);
        set_transient('tweets', $tweets, 60*60*1);
        return $tweets;
    }
}
