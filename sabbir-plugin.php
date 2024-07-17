<?php
/**
 * Plugin Name: Sabbir Plugin
 * Description: A plugin to display posts in the admin dashboard.
 * Version: 1.0
 * Author: Your Name
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Include the necessary files
require_once plugin_dir_path(__FILE__) . 'includes/class-sabbir-posts-plugin.php';
require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';

// Instantiate the plugin classes
new Sabbir_Posts_Plugin();
