<?php get_header(); ?>


<div class="container">
    <div class="row">
        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div class="col-sm-6">
                    <div class="main-post">
                        <!--  thetitle(before, after) args: (before the title, after the title) -->
                        <!-- the_permalink(): give the link of the post  -->
                        <!-- title: give tooltip to the post the_title_attribute() -->

                        <h3>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <!--  the_author_posts_link(): the author page of all his posts -->
                        <span class="post-author"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
                        <span class="post-date"> <i class="fas fa-calendar-alt"></i> <?php the_time('d, m, Y'); ?></span>
                        <span class="post-comments"> <i class="fas fa-comments"></i> <?php comments_popup_link("No Comments", "1 Comment", "% Comments", "comment-url", "Comments Off"); ?></span>
                        <!-- To not mix comment count with contnt if there is no feautered image-->
                        <br>
                        <!-- post imsge thunmbnail -->
                        <!-- 1st arg is for sizes like 'thumbnals' 150x150 and other sizes in worpreess docs -->
                        <?php the_post_thumbnail("", ["class" => "img-fluid img-thumbnail", "alt" => "place holder image", "title" => "post image"]); ?>

                        <div class="post-content" id="post-content">
                            <?php // the_content('Continue.. '); 
                                    ?>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Complete Reading <?php the_title_attribute(); ?>">Read More...</a>
                        </div>
                        <!-- <span class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus possimus asperiores fuga dolorum. Rem laboriosam fuga eum et repudiandae similique, obcaecati aliquid harum enim ab voluptatum cupiditate consectetur perferendis qui.</span> -->
                        <hr>
                        <p class="post-categories"><i class="fas fa-tags"></i> <?php the_category(', '); ?></p>
                        <p clas="post-tags">
                            <?php
                                    if (has_tag()) {
                                        the_tags();
                                    } else {
                                        echo "<i>Thers no tags</i>";
                                    }
                                    ?>
                        </p>
                    </div>
                </div>
        <?php
            } // end while
        } // end if 
        ?>
          


    </div> <!-- end .row ---> 
    <div class="post-pagination">
                <?php
                // make some text to know it is prevous/next pages 
                if (get_previous_posts_link()) {
                    previous_posts_link('<i class="fas fa-chevron-left fa-fw fa-lg"></i> Prev');
                } else {
                    echo "<span class='prev-span'>Prev</span>";
                }

                if (get_next_posts_link()) {
                    next_posts_link('Next <i class="fas fa-chevron-right fa-fw fa-lg"></i>');
                } else {
                    echo "<span class='next-span'>Next</span>";
                }
                ?>
            </div>
</div>
<!--  
    this is the post loop 
 -->
<!-- Display the Title as a link to the Post's permalink. -->


<?php

get_footer();
