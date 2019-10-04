<?php get_header(); ?>

<div class="container author-page">
    <div class="author-main-info">
        <h1 class="profile-header text-center"> <?php the_author_meta('nickname'); ?> Page</h1>

        <div class="row author-meta">
            <div class="col-md-3">
                <?php
                $avatar_img_args = array(
                    'class' => "img-thumbnail mx-auto d-block"
                );

                ?>
                <?php echo get_avatar(get_the_author_meta('id'), "196", '', "User Picture", $avatar_img_args);  ?>
            </div>
            <div class="col-md-9 author-info">
                <ul class="list-unstyled author-names">
                    <li><span>First Name:</span><?php the_author_meta('first_name'); ?></li>
                    <li><span>Last Name:</span> <?php the_author_meta('last_name'); ?> </li>
                    <li><span>Nick Name:</span> (<span class="nickname"><?php the_author_meta('nickname'); ?></span>)</li>
                </ul>

                <?php if (get_the_author_meta('description')) : ?>
                    <p> <?php the_author_meta('description');  ?></p>

                <?php else : echo "there is no bio." ?>

                <?php endif; ?>
            </div>
            <hr>

        </div> <!-- end row  -->
    </div> <!-- author-main-info -->

    <div class="row author-stats">
        <div class="col-md-3">
            <div class="stats">
                Post Count <span> <?php echo count_user_posts(get_the_author_meta('id')); ?></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats">
                Comments Count <span>
                    <?php
                    $comments_args  = array(
                        'user_id' => get_the_author_meta('id'),
                        'count' => true
                    );
                    echo get_comments($comments_args);

                    ?>

                </span>
            </div>

        </div>
        <div class="col-md-3">
            <div class="stats">
                Something for later use <span>0</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats">
                Testing <span>0</span>
            </div>
        </div>
    </div> <!-- end row -->
    <div class="row author-all-posts">
        <?php

        // WP Query of posts from this author 
        $author_posts_per_page = 10; // to change it smoothly when we want 
        $author_all_post = count_user_posts(get_the_author_meta('id'));
        $author_posts_args = array(
            'author' => get_the_author_meta('id'),
            'posts_per_page' =>  $author_posts_per_page // -1 return all posts 
        );
        $author_post = new WP_Query($author_posts_args);

        if ($author_post->have_posts()) { ?>
            <div class="col-12 text-center all-posts-header-section">
                <h3 class="all-posts-header"><?php the_author_meta('nickname') ?> latest [ <?php echo $author_posts_per_page <= $author_all_post ? $author_posts_per_page : $author_all_post; ?> ] posts </h3>
            </div>

            <?php

                while ($author_post->have_posts()) {
                    ?>
                <div class="row auhtor-posts">
                    <? $author_post->the_post(); ?>

                    <div class="col-sm-3 image-section">
                        <?php the_post_thumbnail("", ["class" => "img-fluid img-thumbnail", "alt" => "place holder image", "title" => "post image"]); ?>
                    </div><!-- end col -->
                    <div class="col-sm-9 text-section">
                        <h3 class="header-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <!--  the_author_posts_link(): the author page of all his posts -->
                        <span class="post-date"> <i class="fas fa-calendar-alt"></i> <?php the_time('d, m, Y'); ?></span>
                        <span class="post-comments"> <i class="fas fa-comments"></i> <?php comments_popup_link("No Comments", "1 Comment", "% Comments", "comment-url", "Comments Off"); ?></span>
                        <!-- To not mix comment count with contnt if there is no feautered image-->
                        <br>
                        <!-- post imsge thunmbnail -->
                        <!-- 1st arg is for sizes like 'thumbnals' 150x150 and other sizes in worpreess docs -->

                        <div class="post-content" id="post-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <!-- <span class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus possimus asperiores fuga dolorum. Rem laboriosam fuga eum et repudiandae similique, obcaecati aliquid harum enim ab voluptatum cupiditate consectetur perferendis qui.</span> -->
                    </div>
                </div> <!-- ./auhtor-posts -->
        <?php
            } // end while
        } // end if 

        ?>
        <!-- for safety  -->
        <?php wp_reset_postdata(); ?>
    </div> <!--  ./col-12 text-center all-posts-div --->

    <div class="row author-comments">
        <?php
        $author_comments_per_page = 4; // to change it smoothly when we want 
        $author_all_comments = get_comments($comments_args);
        $author_comments_args = array(
            'user_id' => get_the_author_meta('id'),
            'status' => 'approve',
            'post_status' => 'publish', // not published with (ed)
            // 'number' => $author_comments_per_page,
            'post_type' => 'post'
        );

        $author_comments = get_comments($author_comments_args);

        if ($author_comments) : ?>
            <div class="col-12 text-center comments-header-section">
                <h3 class="comments-header"><?php the_author_meta('nickname') ?> latest [ <?php echo $author_comments_per_page <= $author_all_comments ? $author_comments_per_page : $author_all_comments; ?> ] comments </h3>
            </div>

            <?php
                foreach ($author_comments as $comment) :  ?>
                <div class="row comments-listing">

                    <div class="comment-title col-12">
                        <a href="<?php echo get_permalink($comment->comment_post_ID); ?>">
                            <?php echo get_the_title($comment->comment_post_ID); ?>
                        </a>
                    </div>

                    <div class="comment-date col-12">
                        <i class="fas fa-calendar-alt"></i> <?php echo "Added on ".  mysql2date("d/m/Y", $comment->comment_date); ?>
                    </div>

                    <div class="comment-content col-12">
                        <?php echo $comment->comment_content; ?>
                    </div>


                </div> <!-- ./comments-listing -->
            <?php endforeach; ?>
        <?php else :
            echo "There is no commment belong to this user";
        endif;   ?>



    </div> <!-- ./author-comments -->



</div> <!-- ./container-->


<?php get_footer(); ?>