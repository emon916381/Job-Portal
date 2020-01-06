<?php

/**
 * Calling stylesheet and script file 
 */
require_once get_template_directory()."/inc/calling-style.php";

/**
 * Theme Support Option
 */
if( ! function_exists('setup_theme') ):
function setup_theme(){

    add_theme_support( 'html5' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-background');
    add_theme_support( 'custom-header');
    add_theme_support(
        'post-formats',
        array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        )
    );
// Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    load_theme_textdomain('jobnews');
}
endif;
add_action('after_setup_theme' , 'setup_theme');


/**
 * Register all menus
 */
function jobnews_all_menus(){
    
    $locations = array(
        'primary'   =>  __('Top Menu', 'jobnews'),
        'footer'    =>  __('Footer Menu', 'jobnews')
    );
    register_nav_menus( $locations );

}
add_action( 'init', 'jobnews_all_menus' );


function ash_relative_time() { 
    $post_date = get_the_time('U');
    $delta = time() - $post_date;
    if ( $delta < 60 ) {
        echo 'Just Now';
    }elseif ($delta > 120 && $delta < (60*60)){
        echo strval(round(($delta/60),0)), ' minutes ago';
    }
    elseif ($delta > (60*60) && $delta < (120*60)){
        echo '1 hour ago';
    }
    elseif ($delta > (120*60) && $delta < (24*60*60)){
        echo strval(round(($delta/3600),0)), ' hours ago';
    }
    else {
        echo the_time('j\<\s\u\p\>S\<\/\s\u\p\> M y ');
    }}

    //Customizer Option
include_once get_template_directory(  )."/inc/customizer.php";
