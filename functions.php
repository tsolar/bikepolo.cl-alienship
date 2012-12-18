<?php

function get_bikepolo_tag_tweets()
{
    $tweets_json = file_get_contents("https://search.twitter.com/search.json?q=bikepolo", true);
    
    $tweets = json_decode($tweets_json);
    
    return $tweets;
}

function get_stgobikepolo_tweets()
{
    $tweets_json = file_get_contents("http://api.twitter.com/1/statuses/user_timeline.json?screen_name=StgoBikePolo");

    $tweets = json_decode($tweets_json);

    return $tweets;
}

/* acá van los hooks y bla bla */
function who_is_hook(  )
{
    
//	echo '<code>';
//		print_r( 'esta wea po' ); // `print_r` the array data inside the 1st argument
//	echo '</code>';
//
//	echo '<br />'; // echo linebreak and value of 2nd argument
}
add_action('alienship_post_before', 'who_is_hook');


function content_title()
{
    include 'parts/titulo_blog.php';
}
add_action('alienship_content_title', 'content_title');
