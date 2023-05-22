<?php
// Add theme support for featured images
function theme_support_featured_images() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support_featured_images');

// enque ajax to call up posts
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts() {
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5, // Adjust the number of posts to load per page
        'paged' => $page,);
}



?>
