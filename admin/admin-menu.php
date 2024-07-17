<?php
function sabbir_plugin_admin_menu() {
    add_menu_page(
        'Sabbir Plugin',
        'Sabbir Plugin',
        'manage_options',
        'sabbir-plugin',
        'sabbir_plugin_admin_page', // Placeholder, not used
        'dashicons-admin-post',
        6
    );

    add_submenu_page(
        'sabbir-plugin',
        'All Posts',
        'All Posts',
        'manage_options',
        'sabbir-plugin-posts',
        'sabbir_plugin_posts_page'
    );

}

add_action('admin_menu', 'sabbir_plugin_admin_menu');

function sabbir_plugin_admin_page() {
    // Placeholder function, not used
}

function sabbir_plugin_posts_page() {
    require_once plugin_dir_path(__FILE__) . 'admin-posts-page.php';
}
