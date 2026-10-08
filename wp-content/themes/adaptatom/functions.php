<?php
/**
 * Adapta-tom — child theme di Ficus
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
    ficus_enqueue_assets(
        get_stylesheet_directory(),
        get_stylesheet_directory_uri(),
        wp_get_theme()->get( 'Version' )
    );
} );

// ── Pattern ───────────────────────────────────────────────────────────────────
// Rimuove i pattern bundled di WP core e quelli remoti da wordpress.org.
// Restano solo i pattern registrati da ficus e da questo child theme.
add_action( 'after_setup_theme', function () {
    remove_theme_support( 'core-block-patterns' );
} );
add_filter( 'should_load_remote_block_patterns', '__return_false' );

// ── Pattern category ──────────────────────────────────────────────────────────
add_action( 'init', function () {
    register_block_pattern_category( 'adaptatom-home', [
        'label' => 'Adapta-tom - Home',
    ] );
} );

add_action( 'after_setup_theme', function () {
    ficus_add_editor_styles(
        get_stylesheet_directory(),
        get_stylesheet_directory_uri()
    );
    new Ficus_GitHub_Updater(
        'adaptatom',
        'finoz/wpt-adaptatom',
        wp_get_theme()->get( 'Version' )
    );
} );
