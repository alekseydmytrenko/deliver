<?php
function getStyle() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'getStyle');

function theme_setup() {

    //Navigation Menu
    register_nav_menus(array(
        'primary' => __('Main Nav'),
        'social' => __('Social Links'),
        'footer_quick_links' => __('Footer Quick Links'),
        'footer_menu' => __('Footer Nav')
    ));

    //Add featured image support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_setup');

//Add Home Page Link
function home_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
