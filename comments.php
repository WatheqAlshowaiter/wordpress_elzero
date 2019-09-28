<?php

if (comments_open()) :
    ?>

    <ul class='comments-list list-unstyled'>
        <h3 class="comments-count"><?php comments_number("0 Comment", "1 Comment", "% Comments"); ?></h3>
        <?php
            $args = array(
                'max_depth' => 3,
                'type' => 'comment',
                //   'per_page' => 1  // number of comments per page 
                'avatar_size' => '50',
                'reverse_top_level' => true // make newer comment appear above older ones 
            );
            wp_list_comments($args);
            ?>
    </ul>

    <hr class="comment-separator">
    <!-- this is the default comment form -->
    <?php comment_form(); ?>
<?php
else :
    echo "Comments are disabled";
endif;
