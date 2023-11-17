<?php
// Enregistrez le thème parent (OceanWP)
function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

// Ajoutez des styles CSS personnalisés du thème enfant
function enqueue_child_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_styles');
