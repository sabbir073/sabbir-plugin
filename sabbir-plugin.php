<?php
/**
 * Plugin Name: Sabbir plugin
 * Description: A simple plugin to display posts using OOP in WordPress.
 * Version: 1.0
 * Author: Md Sabbir Ahmed
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Include the main plugin class
require_once plugin_dir_path(__FILE__) . 'includes/class-simple-posts-plugin.php';

// Instantiate the plugin class
new Simple_Posts_Plugin();
