<?php
// Add theme support for featured images
function theme_support_featured_images() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support_featured_images');

?>
