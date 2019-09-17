<?php


/*  
    my functions in elzero theme 
*/

function elzero_add_style()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/source/css/bootstrap.min.css');
    // if I use RTL bootstrab 
    // wp_enqueue_style('bootstrap-rtl-css', get_template_directory_uri() . '/source/css/bootstrap_rtl.min.css'); 
    wp_enqueue_style('fontawsome-css', get_template_directory_uri() . '/source/css/all.fonts.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/source/css/main.css');
}

function elzero_add_script()
{
    // false at the end to make JS scripts at the end of page before </head> 
    // NOTICE: jquesry is already in WordPress!
    // wp_enqueue_script('jquery-js', get_template_directory_uri() . '/source/js/jquery.min.js', array(), false, true);
    // wp_enqueue_script('jquery');  // make before bootsape 
    // maybe bootsrap bundle do all stuff. if so I will delete bootstrap.js or just bootstrap is enough

    // remove registration from old jquery 
    wp_deregister_script('jquery');
    // add register script in the footer 
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), array(), false, true);
    // enque jquery in footer 
    wp_enqueue_script('jquery'); 
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/source/js/bootstrap.min.js', array('jquery'), false, true);
    // wp_enqueue_script('bootstrap-bundle-js', get_template_directory_uri() . '/source/js/bootstrap.bundle.min.js', array('jquery'), false, true); 
    wp_enqueue_script('main-js', get_template_directory_uri() . '/source/js/main.js', array(), false, true);

    // DECLAIMER: IN BOOTSTRAP4 THERE IS NO NEED FOR THESE JS FILES
    // these TWO js files to make style good in OLD browsers 
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/source/js/html5shiv.min.js'); // we need it in HEADER 
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9'); // conditional comment for less than IE 9
    
    wp_enqueue_script('respond', get_template_directory_uri() . '/source/js/respond.min.js'); // we need it in HEADER 
    wp_script_add_data('respond', 'conditional', 'lt IE 9'); // conditional comment for less than IE 9




}


add_action('wp_enqueue_scripts', 'elzero_add_style');
add_action('wp_enqueue_scripts', 'elzero_add_script');
