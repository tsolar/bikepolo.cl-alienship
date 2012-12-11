<div class="tweets">
    <h3>#bikepolo</h3>
    <ul>
        <?php
        $tweets = get_tweets();
        foreach ($tweets->results as $k=>$tweet)
        {
            if($k>=5) break;
            ?>
            <li>
                <?php
                    echo $tweet->text;
                ?>
            </li>
            <?php
        }
        ?>
    </ul>
</div>