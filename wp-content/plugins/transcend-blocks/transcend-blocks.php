<?php
/**
 * Plugin Name:       Transcend Blocks
 * Description:       Custom Gutenberg blocks for Transcend Limits.
 * Version:           0.1.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            John
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       transcend-blocks
 *
 * @package Transcend
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers all blocks from the compiled block metadata collection.
 *
 * @return void
 */
function transcend_blocks_init() {
	wp_register_block_types_from_metadata_collection(
		__DIR__ . '/build',
		__DIR__ . '/build/blocks-manifest.php'
	);
}
add_action( 'init', 'transcend_blocks_init' );
