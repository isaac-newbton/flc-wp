<?php

add_action('after_setup_theme', 'aca_theme_setup');
function aca_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', [
        'post',
        'page',
    ]);
    register_nav_menus(
        [
            'primary' => __('Primary menu'),
            'secondary' => __('Secondary menu'),
            'footer' => __('Footer menu')
        ]
    );
    add_theme_support(
        'html5', [
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        ]
    );
    add_theme_support('custom-logo', [
        'height'               => 66,
        'width'                => 332,
        'flex-width'           => true,
        'flex-height'          => true,
    ]);
}

add_action('wp_enqueue_scripts', 'aca_register_styles');
function aca_register_styles() {
    $theme_version = (wp_get_theme())->Version;

    wp_register_style('aca-style-main', get_stylesheet_directory_uri() . '/style.css', [], $theme_version);
    wp_register_style('fontawesome-style-main', get_stylesheet_directory_uri() . '/fontawesome-5.15.4/css/all.min.css', [], $theme_version);

    wp_enqueue_style('aca-style-main');
    wp_enqueue_style('fontawesome-style-main');
}

add_action('wp_enqueue_scripts', 'aca_register_scripts');
function aca_register_scripts() {
    $theme_version = (wp_get_theme())->Version;

    wp_register_script('aca-script-menu', get_stylesheet_directory_uri() . '/js/menu.js', [], $theme_version);

    wp_register_script('parallax-script', get_stylesheet_directory_uri() . '/js/parallax.min.js', ['jquery'], '1.5.0');

    wp_enqueue_script('aca-script-menu');
    wp_enqueue_script('parallax-script');
}

add_action('widgets_init', 'aca_register_sidebars');
function aca_register_sidebars() {
    register_sidebar([
        'id' => 'primary',
        'name' => __('Primary Sidebar'),
        'description' => __('The primary sidebar. Appears on internal pages.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'id' => 'footer',
        'name' => __('Footer Content'),
        'description' => __('The footer widget. Appears after the footer logo and menu.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}

require_once get_template_directory() . '/inc/admin/admin.php';
