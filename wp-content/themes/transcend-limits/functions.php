<?php

/**
 * Enqueue frontend assets.
 */
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


/**
 * Enqueue block editor assets.
 */
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


/**
 * Register hard-coded theme page routes.
 */
function transcend_limits_register_routes() {

    add_rewrite_rule(
        '^news/?$',
        'index.php?transcend_news=1',
        'top'
    );

    add_rewrite_rule(
        '^about/?$',
        'index.php?transcend_about=1',
        'top'
    );

    add_rewrite_rule(
        '^contact/?$',
        'index.php?transcend_contact=1',
        'top'
    );
}

add_action(
    'init',
    'transcend_limits_register_routes'
);


/**
 * Register custom query variables.
 */
function transcend_limits_register_query_vars( $vars ) {

    $vars[] = 'transcend_news';
    $vars[] = 'transcend_about';
    $vars[] = 'transcend_contact';

    return $vars;
}

add_filter(
    'query_vars',
    'transcend_limits_register_query_vars'
);


/**
 * Render a hard-coded theme block template.
 *
 * The template is loaded from the active theme and passed through
 * WordPress's block renderer so template parts and custom blocks work.
 */
function transcend_limits_render_theme_page( $template_name ) {

    $template_path = get_theme_file_path(
        '/templates/' . $template_name
    );

    if ( ! file_exists( $template_path ) ) {
        return;
    }

    $template_content = file_get_contents( $template_path );

    if ( false === $template_content ) {
        return;
    }

    ?>
    <!doctype html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php
        wp_body_open();

        echo do_blocks( $template_content );

        wp_footer();
        ?>
    </body>
    </html>
    <?php

    exit;
}


/**
 * Render hard-coded News, About, and Contact pages.
 */
function transcend_limits_render_custom_pages() {

    if ( get_query_var( 'transcend_news' ) ) {
        transcend_limits_render_theme_page( 'news.html' );
    }

    if ( get_query_var( 'transcend_about' ) ) {
        transcend_limits_render_theme_page( 'about.html' );
    }

    if ( get_query_var( 'transcend_contact' ) ) {
        transcend_limits_render_theme_page( 'contact.html' );
    }
}

add_action(
    'template_redirect',
    'transcend_limits_render_custom_pages'
);