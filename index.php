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
                        <span class="post-comments"> <i class="fas fa-comments"></i> <?php comments_popup_link("No Comments","1 Comment", "% Comments", "comment-url", "Comments Off"); ?></span>
                        <hr>
                        <p class="categories"><i class="fas fa-tags"></i> <?php the_category( ', ' ); ?></p>
                    </div>
                </div>
        <?php
            } // end while
        } // end if
        ?>
    </div>
</div>


<!-- 
    this is the post loop 
 -->
<!-- Display the Title as a link to the Post's permalink. -->





<!-- at first we do all that in in static way then dyamic -->

<!-- <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">This is the post title</h3>
                <span class="post-author"><i class="fas fa-user"></i> Osama, </span>
                <span class="post-date"> <i class="fas fa-calendar-alt"></i> 13/13/2013, </span>
                <span class="post-comments"> <i class="fas fa-comments"></i> 32 Comment</span>
                <img class="img-fluid img-thumbnail" src="https://dummyimage.com/500x300/000/fff/&text=Ezlero Theme Placeholder Image" alt="place holder image">
                <span class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus possimus asperiores fuga dolorum. Rem laboriosam fuga eum et repudiandae similique, obcaecati aliquid harum enim ab voluptatum cupiditate consectetur perferendis qui.</span>
                <hr>
                <p class="categories"><i class="fas fa-tags"></i> HTML, Testing, Coding</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">This is the post title</h3>
                <span class="post-author"><i class="fas fa-user"></i> Osama, </span>
                <span class="post-date"> <i class="fas fa-calendar-alt"></i> 13/13/2013, </span>
                <span class="post-comments"> <i class="fas fa-comments"></i> 32 Comment</span>
                <img class="img-fluid img-thumbnail" src="https://dummyimage.com/500x300/000/fff/&text=Ezlero Theme Placeholder Image" alt="place holder image">
                <span class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus possimus asperiores fuga dolorum. Rem laboriosam fuga eum et repudiandae similique, obcaecati aliquid harum enim ab voluptatum cupiditate consectetur perferendis qui.</span>
                <hr>
                <p class="categories"><i class="fas fa-tags"></i> HTML, Testing, Coding</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">This is the post title</h3>
                <span class="post-author"><i class="fas fa-user"></i> Osama, </span>
                <span class="post-date"> <i class="fas fa-calendar-alt"></i> 13/13/2013, </span>
                <span class="post-comments"> <i class="fas fa-comments"></i> 32 Comment</span>
                <img class="img-fluid img-thumbnail" src="https://dummyimage.com/500x300/000/fff/&text=Ezlero Theme Placeholder Image" alt="place holder image">
                <span class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus possimus asperiores fuga dolorum. Rem laboriosam fuga eum et repudiandae similique, obcaecati aliquid harum enim ab voluptatum cupiditate consectetur perferendis qui.</span>
                <hr>
                <p class="categories"><i class="fas fa-tags"></i> HTML, Testing, Coding</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">This is the post title</h3>
                <span class="post-author"><i class="fas fa-user"></i> Osama, </span>
                <span class="post-date"> <i class="fas fa-calendar-alt"></i> 13/13/2013, </span>
                <span class="post-comments"> <i class="fas fa-comments"></i> 32 Comment</span>
                <img class="img-fluid img-thumbnail" src="https://dummyimage.com/500x300/000/fff/&text=Ezlero Theme Placeholder Image" alt="place holder image">
                <span class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus possimus asperiores fuga dolorum. Rem laboriosam fuga eum et repudiandae similique, obcaecati aliquid harum enim ab voluptatum cupiditate consectetur perferendis qui.</span>
                <hr>
                <p class="categories"><i class="fas fa-tags"></i> HTML, Testing, Coding</p>
            </div>
        </div>

    </div>
</div> -->

<?php

get_footer();
