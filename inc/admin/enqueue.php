<?php

function aca_load_admin_scripts(){
    $theme_version = (wp_get_theme())->Version;

    wp_enqueue_media();

    wp_register_script('aca-admin-script', get_template_directory_uri() . '/js/admin.js', ['jquery'], $theme_version, true);
    wp_enqueue_script('aca-admin-script');

}
add_action('admin_enqueue_scripts', 'aca_load_admin_scripts');