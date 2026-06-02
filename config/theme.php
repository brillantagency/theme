<?php
// Theme enfant
function child_theme_assets() {
    // CSS parent
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // CSS child
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('parent-style')
    );

    // JS custom child theme
    wp_enqueue_script(
        'child-main-js',
        get_stylesheet_directory_uri() . '/js/main.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'child_theme_assets');