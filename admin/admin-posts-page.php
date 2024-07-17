<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

echo '<div class="wrap"><h1>All Posts</h1>';
$sabbir_posts = new Sabbir_Posts_Plugin();
echo $sabbir_posts->display_posts();
echo '</div>';
