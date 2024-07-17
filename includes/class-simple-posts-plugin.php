<?php
if (!class_exists('Simple_Posts_Plugin')) {
    class Simple_Posts_Plugin {
        public function __construct() {
            add_action('init', [$this, 'register_shortcodes']);
            add_action('admin_menu', [$this, 'register_admin_menu']);
        }

        public function register_shortcodes() {
            add_shortcode('simple_posts', [$this, 'display_posts']);
        }

        public function display_posts($atts) {
            $atts = shortcode_atts([
                'posts_per_page' => 5,
            ], $atts, 'simple_posts');

            $query = new WP_Query([
                'posts_per_page' => $atts['posts_per_page'],
                'post_status' => 'publish',
            ]);

            if ($query->have_posts()) {
                $output = '<ul>';
                while ($query->have_posts()) {
                    $query->the_post();
                    $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                $output .= '</ul>';
                wp_reset_postdata();
            } else {
                $output = '<p>No posts found.</p>';
            }

            return $output;
        }

        public function register_admin_menu() {
            require_once plugin_dir_path(__FILE__) . '../admin/admin-menu.php';
        }
    }
}
