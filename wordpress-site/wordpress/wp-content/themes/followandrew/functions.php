<?php

function followandrew_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style(
        'followandrew-style', // Custom name used to reference the stylesheet.
        get_template_directory_uri() . "/style.css", // URL of the file.
        ['followandrew-bootstrap'], // Array of dependencies.
        $version, // Version of the stylesheet.
        'all' // Media targeted by the stylesheet.
    );
    wp_enqueue_style('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", [], '4.4.1', 'all');
    wp_enqueue_style('followandrew-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", [], '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles');