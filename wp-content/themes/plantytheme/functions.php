<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}


add_filter('wp_nav_menu_items', 'ma_fonction');
function ma_fonction($menu_actuel) {
    if (is_user_logged_in()) {
        $lien_admin = '<li class="menu-contact menu-item"><a class="menu-link" href="' . get_admin_url() . '">Admin</a></li>';
        $position_first_item_li = strpos($menu_actuel, '</li>'); 
        $menu_actuel = substr_replace($menu_actuel, $lien_admin, $position_first_item_li, 0);

        return $menu_actuel;
    }

    return $menu_actuel;
}
