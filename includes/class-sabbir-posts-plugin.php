<?php
if (!class_exists('Sabbir_Posts_Plugin')) {
    class Sabbir_Posts_Plugin {
        public function __construct() {
            // Any initialization code for posts can go here
        }

        public function display_posts() {
            $query = new WP_Query([
                'posts_per_page' => 10,
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
    }
}
