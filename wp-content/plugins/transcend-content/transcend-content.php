<?php
/**
 * Plugin Name: Transcend Content
 * Description: Content models for the Transcend Limits website.
 * Version: 1.0.0
 * Author: Transcend Limits
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function transcend_register_story_post_type() {
	register_post_type(
		'story',
		array(
			'labels' => array(
				'name'          => 'Stories',
				'singular_name' => 'Story',
				'add_new_item'  => 'Add New Story',
				'edit_item'     => 'Edit Story',
			),
			'public'       => true,
			'show_in_rest' => true,
			'supports'     => array(
				'title',
				'editor',
        'excerpt',
				'thumbnail',
			),
			'has_archive'  => true,
			'rewrite'      => array(
				'slug' => 'stories',
			),
		)
	);
}

function transcend_limit_story_excerpt( $data, $postarr ) {
	if ( 'story' !== $data['post_type'] ) {
		return $data;
	}

	$data['post_excerpt'] = mb_substr( $data['post_excerpt'], 0, 40 );

	return $data;
}

add_action( 'init', 'transcend_register_story_post_type' );
add_filter( 'wp_insert_post_data', 'transcend_limit_story_excerpt', 10, 2 );