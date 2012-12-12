<?php

include_once '../alienship/functions.php';

function get_bikepolo_tag_tweets()
{
    $tweets_json = file_get_contents("https://search.twitter.com/search.json?q=bikepolo", true);
    
    $tweets = json_decode($tweets_json);
    
    return $tweets;
}

function get_stgobikepolo_tweets()
{
    $tweets_json = file_get_contents("https://api.twitter.com/1/statuses/user_timeline.json?screen_name=stgobikepolo", true);

    $tweets = json_decode($tweets_json);

    return $tweets;
}