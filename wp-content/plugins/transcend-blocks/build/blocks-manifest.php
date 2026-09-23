<?php
// This file is generated. Do not modify it manually.
return array(
	'hero' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'transcend/hero',
		'version' => '0.1.0',
		'title' => 'Hero',
		'category' => 'design',
		'icon' => 'cover-image',
		'description' => 'The Transcend Limits homepage hero.',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageId' => array(
				'type' => 'number'
			),
			'imageUrl' => array(
				'type' => 'string'
			),
			'imageAlt' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaText' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaUrl' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'transcend-blocks',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'editorScript' => 'file:./index.js'
	),
	'site-header' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'transcend/site-header',
		'version' => '0.1.0',
		'title' => 'Site Header',
		'category' => 'design',
		'icon' => 'menu',
		'description' => 'The Transcend Limits site header.',
		'attributes' => array(
			'siteName' => array(
				'type' => 'string',
				'default' => 'Transcend Limits'
			),
			'logoId' => array(
				'type' => 'number'
			),
			'logoUrl' => array(
				'type' => 'string'
			),
			'logoAlt' => array(
				'type' => 'string',
				'default' => 'Transcend Limits'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'transcend-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'story-card' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'transcend/story-card',
		'version' => '0.1.0',
		'title' => 'Story Card',
		'category' => 'design',
		'icon' => 'format-aside',
		'description' => 'Displays a Transcend Limits story.',
		'attributes' => array(
			'storyId' => array(
				'type' => 'number'
			),
			'title' => array(
				'type' => 'string',
				'default' => ''
			),
			'excerpt' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageAlt' => array(
				'type' => 'string',
				'default' => ''
			),
			'url' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'transcend-blocks',
		'editorScript' => 'file:./index.js'
	),
	'story-grid' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'transcend/story-grid',
		'version' => '0.1.0',
		'title' => 'Story Grid',
		'category' => 'design',
		'icon' => 'grid-view',
		'description' => 'Displays published Transcend Limits stories.',
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'transcend-blocks',
		'editorScript' => 'file:./index.js',
		'render' => 'file:./render.php'
	)
);
