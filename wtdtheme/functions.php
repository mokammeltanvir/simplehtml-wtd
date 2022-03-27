<?php

function wtd_setup()
{
    //Languages
    load_theme_textdomain('wtd');
    //Title and Thumbnails
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // Custom Logo
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-width' => true,
        'flex-height' => true,
    ));

    //Register Menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'wtd'),
        'footer-menu' => __('Footer Menu', 'wtd'),
    ));
}
add_action('after_setup_theme', 'wtd_setup');

function wtd_scripts()
{
    // Font Awesome CSS
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');

    // Owl Default CSS
    wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all');

    // Owl Carousel CSS
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');

    // Main CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

    // Responsive CSS
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');

    // Theme Main Stylesheet
    wp_enqueue_style('stylesheet', get_stylesheet_uri());

    // Owl Carousel JS
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);

    // Main JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'wtd_scripts');

// Registers Sidebar
function wtd_widgets()
{

    register_sidebar(array(
        'name' => __('Main Sidebar', 'wtd'),
        'id' => 'sidebar-1',
        'description' => __('Our Main Sidebar', 'wtd'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'wtd_widgets');
