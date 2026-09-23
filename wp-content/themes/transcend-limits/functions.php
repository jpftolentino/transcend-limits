<?php

function transcend_limits_enqueue_assets() {
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );

    wp_enqueue_style(
        'transcend-limits-style',
        get_stylesheet_uri(),
        array( 'bootstrap' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'transcend_limits_enqueue_assets'
);

function transcend_limits_enqueue_block_assets() {
    wp_enqueue_style(
        'bootstrap-blocks',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );

    wp_enqueue_style(
        'transcend-limits-block-styles',
        get_stylesheet_uri(),
        array( 'bootstrap-blocks' ),
        wp_get_theme()->get( 'Version' )
    );
}

add_action(
    'enqueue_block_assets',
    'transcend_limits_enqueue_block_assets'
);