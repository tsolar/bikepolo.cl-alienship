<?php

include_once '../alienship/functions.php';

function get_tweets()
{
    $tweets_json = file_get_contents("https://search.twitter.com/search.json?q=bikepolo", true); //getting the file content

    $tweets = json_decode($tweets_json);

    return $tweets;
}

?>
