<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- make dynamic title in inner pages -->
    <title>
        <?php wp_title('|', 'true', 'right'); ?>
        <?php bloginfo('name') ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <?php wp_head(); ?>
</head>

<body>



    <!-- <div class="container"> -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <!-- <div class="mx-auto d-sm-flex d-block flex-sm-nowrap"> -->


        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php elzero_add_nav_menu();   ?>

                <!-- because we get it dynamically  -->
                <!-- <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active ">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                </ul> -->

            </div>
            <!-- </div> -->

    </nav>
    <!-- </div> -->

    <!-- for testing (to make it in middle ) -->
    <!-- 
    <nav class="navbar navbar-expand-sm navbar-light bg-light" data-toggle="affix">
        <div class="mx-auto d-sm-flex d-block flex-sm-nowrap"> // this is the important one!
            <div class="collapse navbar-collapse text-center" id="navbarsExample11">
            </div>
        </div>
    </nav> -->