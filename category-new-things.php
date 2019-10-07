<?php get_header(); ?>

<div class="container home-page category-page new-things-cat">

    new things
    <!-- Category information section -->
    <div class="row cat-info">
        <div class="col-md">
            <h1 class="cat-title"><?php single_cat_title(); ?></h1>
        </div>
        <div class="col-md">
            <div class="cat-desc"><?php echo category_description(); ?></div>
        </div>
        <div class="col-md">
            <div class="cat-stats">
                <span> Special category styling</span>
            </div>
        </div>

    </div> <!-- ./cat-info -->

    <div class="row">
        <div class="col-sm-9">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>

                    <div class="main-post">
                        <div class="row">

                            <div class="col-md-6 post-img">
                                <?php the_post_thumbnail("", ["class" => "img-fluid img-thumbnail", "alt" => "place holder image", "title" => "post image"]); ?>
                            </div>

                            <div class="col-md-6 post-text">

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

                                <div class="post-content" id="post-content">
                                    <?php // the_content('Continue.. '); 
                                            ?>
                                    <?php the_excerpt(); ?>
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

                    </div>


            <?php
                } // end while
            } // end if 


            ?>
        </div>
        <div class="col-sm-3 sidebar-cat">
            here the sidebar
        </div>

    </div> <!-- end .row --->
    <div class="clearfix"></div> <!-- clear fix for floating elements (Bootstrap Class)-->

    <div class="post-pagination">
        <?php
        // make some text to know it is prevous/next pages 
        if (get_previous_posts_link()) {
            previous_posts_link('<i class="fas fa-chevron-left" area-hidden="true"></i> New');
        } else {
            echo "<span class='prev-span'>New</span>";
        }

        if (get_next_posts_link()) {
            next_posts_link('Old <i class="fas fa-chevron-right" area-hidden="true"></i>');
        } else {
            echo "<span class='next-span'>Old</span>";
        }
        ?>
    </div>

    <div class="number-pagination">
        <p><?php echo elzero_numbering_pagination(); ?></p>
    </div> <!-- ./number-pagination -->
</div>
<!--  
    this is the post loop 
 -->
<!-- Display the Title as a link to the Post's permalink. -->


<?php

get_footer();
