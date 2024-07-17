<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div class="wrap">
    <h1>Sabbir Posts Plugin</h1>
    <p>Welcome to the Sabbir Posts Plugin admin page.</p>
    <form method="post" action="options.php">
        <?php
        settings_fields('simple_posts_plugin_options_group');
        do_settings_sections('simple-posts-plugin');
        submit_button();
        ?>
    </form>
</div>
