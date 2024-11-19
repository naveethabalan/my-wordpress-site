<?php
/*
Plugin Name: Custom Gallery
Description: A custom gallery plugin to display images.
Version: 1.0
Author: Naveetha
*/

// Register shortcode for the gallery
function custom_gallery_shortcode($atts) {
    // Query images from the WordPress media library
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'posts_per_page' => -1
    );
    $images = new WP_Query($args);

    $output = '<div class="custom-gallery">';
    while ($images->have_posts()) : $images->the_post();
        $image_url = wp_get_attachment_url(get_the_ID());
        $image_title = get_the_title();
        $output .= '<div class="gallery-item">
                        <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_title) . '" />
                    </div>';
    endwhile;
    wp_reset_postdata();
    $output .= '</div>';

    return $output;
}
add_shortcode('custom_gallery', 'custom_gallery_shortcode');

// Enqueue styles
function custom_gallery_styles() {
    wp_enqueue_style('custom-gallery-style', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'custom_gallery_styles');
?>
