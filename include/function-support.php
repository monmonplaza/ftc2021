<?php

function facethechilden_custom_logo() {

    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );

    add_theme_support( 'custom-logo', $defaults );

   }

add_action( 'after_setup_theme', 'facethechilden_custom_logo' );



// ADD CUSTOM SIZE
add_image_size('fp_thumb', 340, 350, true);
add_image_size('card_thumb', 340, 200, true);



// THEME SUPPORT
function facethechildren_theme_support() {
    register_nav_menu( 'headerMenuLocation', 'Header Menu');
    register_nav_menu( 'footerMenuLocation', 'Footer Menu');
    add_theme_support( 'post-thumbnails');
    add_theme_support('widgets'); 
    add_theme_support('title-tag');

}

add_action( 'after_setup_theme', 'facethechildren_theme_support');
