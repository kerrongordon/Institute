<?php
function setup_theme_admin_menus() {
    add_submenu_page('themes.php', 
        'Front Page Elements', 'Front Page', 'manage_options', 
        'front-page-elements', 'theme_front_page_settings'); 
}
 
// This tells WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "setup_theme_admin_menus");


function theme_front_page_settings() {
    echo "Hello, world!";
}