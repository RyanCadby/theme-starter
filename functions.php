<?php 

function load_stylesheets()
{    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs()
{   
    
    // wp_register_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', 1, true);
    // wp_enqueue_script('jQuery');
    
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
    
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

add_theme_support('post-thumbnails');

add_image_size('smallest', 400, 400, true);
add_image_size('largest', 800, 800, true);

add_filter('use_block_editor_for_post', '__return_false', 10);