<?php
// This is the functions.php file for your WordPress theme

// Enqueue Bootstrap CSS, Font Awesome, and custom style.css
function mytheme_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), null );

    // Enqueue Font Awesome CSS
    wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', null );

    // Enqueue Theme's Main Style (style.css)
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), array( 'bootstrap-css' ), null );
    
    // Enqueue Templates CSS (custom templates styling)
    wp_enqueue_style( 'templates-style', get_template_directory_uri() . '/assets/css/templates.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );
