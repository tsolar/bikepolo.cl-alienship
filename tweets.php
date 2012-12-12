<div class="tweets">
    <h3>#bikepolo</h3>
    <ul>
        <?php
        $tweets = get_bikepolo_tag_tweets();
        foreach ($tweets->results as $k=>$tweet)
        {
            if($k>=5) break;
            ?>
            <li>
                <span class="text"><?php echo $tweet->text; ?></span>
            </li>
            <?php
        }
        ?>
    </ul>
    <h3>
        <a href="//twitter.com/StgoBikePolo" target="_blank">
            @StgoBikePolo
        </a>
    </h3>
    <ul>
        <?php
        $tweets = get_stgobikepolo_tweets();
        foreach ($tweets as $k=>$tweet)
        {
            if($k>=5) break;
            ?>
            <li>
                <span class="text"><?php echo $tweet->text; ?></span>
            </li>
            <?php
        }
        ?>
    </ul>
</div>