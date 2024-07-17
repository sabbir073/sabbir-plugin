<?php
function simple_posts_plugin_admin_menu() {
    add_menu_page(
        'Sabbir Post',
        'Sabbir Posts',
        'manage_options',
        'simple-posts-plugin',
        'simple_posts_plugin_admin_page',
        'dashicons-admin-post',
        6
    );
}

add_action('admin_menu', 'simple_posts_plugin_admin_menu');

function simple_posts_plugin_admin_page() {
    require_once plugin_dir_path(__FILE__) . 'admin-page.php';
}


function simple_posts_plugin_settings_init() {
    register_setting('simple_posts_plugin_options_group', 'simple_posts_plugin_options');

    add_settings_section(
        'simple_posts_plugin_section',
        'Settings',
        'simple_posts_plugin_section_callback',
        'simple-posts-plugin'
    );

    add_settings_field(
        'simple_posts_plugin_field',
        'Posts Per Page',
        'simple_posts_plugin_field_callback',
        'simple-posts-plugin',
        'simple_posts_plugin_section'
    );
}

add_action('admin_init', 'simple_posts_plugin_settings_init');

function simple_posts_plugin_section_callback() {
    echo 'Adjust the settings below:';
}

function simple_posts_plugin_field_callback() {
    $options = get_option('simple_posts_plugin_options');
    ?>
    <input type="number" name="simple_posts_plugin_options[posts_per_page]" value="<?php echo isset($options['posts_per_page']) ? esc_attr($options['posts_per_page']) : 5; ?>" />
    <?php
}
