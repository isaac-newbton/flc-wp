<?php

function aca_theme_add_admin_page(){
    add_menu_page('Friends Life Care Theme Options', 'Friends Life Care', 'manage_options', 'aca_flc', 'aca_theme_create_page', 'dashicons-admin-settings', 110);

    add_submenu_page('aca_flc', 'Friends Life Care Theme Options', 'Settings', 'manage_options', 'aca_flc', 'aca_theme_create_page');

    add_action('admin_init', 'aca_theme_custom_settings');
}
add_action('admin_menu', 'aca_theme_add_admin_page');

function aca_theme_custom_settings(){
    register_setting('aca-settings', 'aca_footer_logo');
    register_setting('aca-settings', 'aca_contact_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_facebook_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_youtube_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_linkedin_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_instagram_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_footer_copyright');

    add_settings_section('aca-theme-settings', 'Theme Settings', 'aca_theme_options', 'aca_flc');

    add_settings_field('aca-footer-logo', 'Footer Logo', 'aca_footer_logo', 'aca_flc', 'aca-theme-settings');
    add_settings_field('aca-footer-copyright', 'Footer Copyright', 'aca_footer_copyright', 'aca_flc', 'aca-theme-settings');
    add_settings_field('aca-contact-url', 'Contact URL', 'aca_contact_url', 'aca_flc', 'aca-theme-settings');
    add_settings_field('aca-social-fb', 'Facebook URL', 'aca_facebook_url', 'aca_flc', 'aca-theme-settings');
    add_settings_field('aca-social-li', 'Linkedin URL', 'aca_linkedin_url', 'aca_flc', 'aca-theme-settings');
    add_settings_field('aca-social-in', 'Instagram URL', 'aca_instagram_url', 'aca_flc', 'aca-theme-settings');
    add_settings_field('aca-social-yt', 'Youtube URL', 'aca_youtube_url', 'aca_flc', 'aca-theme-settings');
}

function aca_footer_logo(){
    $value = esc_attr(get_option('aca_footer_logo'));
    echo '<div class="site-footer"><img id="footer_logo" width="200px" src="'.$value.'" /></div><input type="button" value="Set Footer Logo" id="upload_footer_logo_button" class="button button-secondary" /><input type="hidden" name="aca_footer_logo" id="upload_footer_logo_input" value="'.$value.'" />';
}

function aca_contact_url(){
    $value = esc_attr(get_option('aca_contact_url'));
    echo '<input type="text" name="aca_contact_url" class="regular-text" value="'.$value.'" />';
}

function aca_facebook_url(){
    $value = esc_attr(get_option('aca_facebook_profile_url'));
    echo '<input type="text" name="aca_facebook_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_youtube_url(){
    $value = esc_attr(get_option('aca_youtube_profile_url'));
    echo '<input type="text" name="aca_youtube_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_linkedin_url(){
    $value = esc_attr(get_option('aca_linkedin_profile_url'));
    echo '<input type="text" name="aca_linkedin_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_instagram_url(){
    $value = esc_attr(get_option('aca_instagram_profile_url'));
    echo '<input type="text" name="aca_instagram_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_footer_copyright(){
    $value = esc_attr(get_option('aca_footer_copyright'));
    echo '<span>&copy;' . date('Y') . ' </span><input type="text" name="aca_footer_copyright" class="regular-text" value="'.$value.'" />';
}

function sanitize_social_url($url){
    $url = sanitize_text_field($url);
    return $url;
}

function aca_theme_options(){
    echo 'Customize options';
}

function aca_theme_create_page(){
    require_once get_template_directory() . '/inc/admin/admin-options-page.php';
}