<?php
// This file is generated. Do not modify it manually.
return array(
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
	)
);
