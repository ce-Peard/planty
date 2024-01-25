<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}


function wp_nav_menu_admin($admin) {
    if (is_user_logged_in()) {
        return '<li class="menu-contact menu-item"><a href=" ' . get_admin_url() . ' ">Admin</a></li>' . $admin;
    }

    return $admin;
}


add_filter('wp_nav_menu_items', 'wp_nav_menu_admin');



