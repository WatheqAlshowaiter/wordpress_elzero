<?php get_header(); ?>

<div class="container">
    <div class="row author-meta">
        <div class="col-md-12">
            <h1 class="profile-header text-center"> <?php the_author_meta('nickname'); ?> Page</h1>
        </div>

        <div class="col-md-3">
            <?php
            $avatar_img_args = array(
                'class' => "img-thumbnail mx-auto d-block"
            );

            ?>
            <?php echo get_avatar(get_the_author_meta('id'), "196", '', "User Picture", $avatar_img_args);  ?>
        </div>
        <div class="col-md-9 author-info">
            <ul class="list-unstyled">
                <li>First Name: <?php the_author_meta('first_name'); ?></li>
                <li>Last Name: <?php the_author_meta('last_name'); ?> </li>
                <li>Nick Name: (<span class="nickname"><?php the_author_meta('nickname'); ?></span>)</li>
            </ul>

            <?php if (get_the_author_meta('description')) : ?>
                <p> <?php the_author_meta('description');  ?></p>

            <?php else : echo "there is no bio." ?>

            <?php endif; ?>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-4">Post Count</div>
            <div class="col-md-4">Comments Count</div>
            <div class="col-md-4">Something for later use</div>
        </div> <!-- end row -->

    </div> <!-- end row  -->

</div>


<?php get_footer(); ?>