<div class="tweets widget-izq">
    <h3>#bikepolo</h3>
    <ul>
        <?php
        $tweets = get_bikepolo_tag_tweets();
        foreach ($tweets->results as $k => $tweet)
        {
            if ($k >= 5)
                break;
            $tweet_text = preg_replace("/(http:\/\/[^\s]+)/", "<a href=\"$1\">$1</a>", $tweet->text);
            ?>
            <li>
                <span class="text">
                    <a target="_blank" href="//twitter.com/<?php echo $tweet->from_user; ?>">
                        <?php echo "@$tweet->from_user"; ?>
                    </a>:
                    <?php echo $tweet_text; ?>
                </span>
                <span class="date label label-inverse">
                    Publicado el
                    <a target="_blank" href="<?php echo "//twitter.com/$tweet->from_user/status/$tweet->id"; ?>">
                        <?php echo date('d-m-Y', strtotime($tweet->created_at)); ?>
                    </a>
                </span>
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
        foreach ($tweets as $k => $tweet)
        {
            if ($k >= 5)
                break;
            $tweet_text = preg_replace("/(http:\/\/[^\s]+)/", "<a href=\"$1\">$1</a>", $tweet->text);
            ?>
            <li>
                <span class="text">
                    <?php echo $tweet_text; ?>
                </span>
                <span class="date label label-inverse">
                    Publicado el
                    <a target="_blank" href="<?php echo "//twitter.com/StgoBikePolo/status/$tweet->id"; ?>">
                        <?php echo date('d-m-Y', strtotime($tweet->created_at)); ?>
                    </a>
                </span>
            </li>
            <?php
        }
        ?>
    </ul>
</div>