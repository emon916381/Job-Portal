<?php
function call_style_and_script(){
    $theme_style_ver = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'bootstrap_stylesheet_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , array(), '4.4.1' ,'all' );
    wp_enqueue_style( 'theme_custom_css', get_theme_file_uri( '/css/custom.css' ) , array(), 5.1 , 'all' );
    wp_enqueue_style( 'themeStyle',get_stylesheet_uri(),array(),  $theme_style_ver );


    // Script file
    wp_enqueue_script( 'jquiriy_3_cdn', 'https://code.jquery.com/jquery-3.4.1.slim.js' , array(), '3.4.1', true );
    wp_enqueue_script( 'bootstrap_jquery_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquiriy_3_cdn'), '4.4.1' , true );
    wp_enqueue_script( 'custom-js', get_theme_file_uri('/js/custom.js') , array('jquiriy_3_cdn'), $theme_style_ver ,true );

}
add_action( 'wp_enqueue_scripts' , 'call_style_and_script' );
