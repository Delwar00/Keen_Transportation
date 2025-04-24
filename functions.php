<?php 

// keen theme support 
function keen_theme_support(){

    /**  thumbnail */
    add_theme_support( 'post-thumbnails' );

    /** tag-title **/
    add_theme_support( 'title-tag' );


    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    add_theme_support( 'post-formats', array( 
        'image', 
        'video', 
        'audio', 
        'gallery', 
        'quote' 
    ));

}

add_action('after_setup_theme','keen_theme_support');

//scripts added
include_once('inc/common/scripts.php');
if ( class_exists( 'Kirki' ) ) {
    include_once('inc/keen-kirki.php');
}
include_once('inc/template-functions.php');