<?php

/**
 * Seed six Transcend Limits Story posts.
 *
 * Run with:
 * lando wp eval-file scripts/seed-stories.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/media.php';
require_once ABSPATH . 'wp-admin/includes/image.php';

$stories = array(
	array(
		'title'   => 'Global Research Leader',
		'excerpt' => 'U of T ranks fourth worldwide.',
		'content' => <<<'HTML'
<p>In 2026, the University of Toronto once again established itself among the world's leading research institutions, placing fourth globally in the NTU World University Rankings.</p>

<p>The result marked the fourth consecutive year that U of T finished among the top five universities worldwide for overall research output. More than 1,900 institutions were evaluated based on the scale, quality and influence of their published research.</p>

<p>U of T also placed second among public universities worldwide and ranked as the top public institution in North America.</p>

<p>The ranking reflects the breadth of research taking place across the university, from medicine and engineering to the natural sciences, social sciences and humanities.</p>
HTML,
		'image'   => array(
			'url'    => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/University_College,_University_of_Toronto.jpg',
			'file'   => 'global-research-leader.jpg',
			'credit' => 'Nat - CC BY-SA 3.0',
			'source' => 'https://commons.wikimedia.org/wiki/File:University_College,_University_of_Toronto.jpg',
		),
	),

	array(
		'title'   => "Canada's Research Powerhouse",
		'excerpt' => 'U of T reaches 20th worldwide.',
		'content' => <<<'HTML'
<p>The University of Toronto claimed the top position in Canada in the 2026-27 U.S. News &amp; World Report Best Global Universities Rankings.</p>

<p>U of T placed 20th globally and 11th among public universities worldwide. Within North America, it ranked fourth among public institutions.</p>

<p>The ranking focuses on academic research and reputation, with U of T recording particularly strong results in health, medicine, arts and humanities.</p>

<p>The result highlights the scale of research conducted across the university and the international reach of work produced by its scholars.</p>
HTML,
		'image'   => array(
			'url'    => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Robarts_Library_University_of_Toronto.jpg',
			'file'   => 'canadas-research-powerhouse.jpg',
			'credit' => 'Adam Bishop - CC BY-SA 4.0',
			'source' => 'https://commons.wikimedia.org/wiki/File:Robarts_Library_University_of_Toronto.jpg',
		),
	),

	array(
		'title'   => 'Excellence Across Every Field',
		'excerpt' => 'Top 17 across all five fields.',
		'content' => <<<'HTML'
<p>U of T demonstrated its academic breadth in the 2026 QS World University Rankings by Subject, ranking among the world's top 17 universities in every broad subject field measured.</p>

<p>The university placed 12th in life sciences and medicine, 14th in arts and humanities, 15th in social sciences and management, 16th in natural sciences, and 17th in engineering and technology.</p>

<p>QS evaluates universities across 55 individual subjects grouped into five larger academic fields.</p>

<p>U of T also ranked first in Canada across all five broad fields, demonstrating internationally competitive performance across the full spectrum of academic study.</p>
HTML,
		'image'   => array(
			'url'    => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Convocation_Hall,_University_of_Toronto.jpg',
			'file'   => 'excellence-across-every-field.jpg',
			'credit' => 'Carrie Groskopf - CC BY-SA 4.0',
			'source' => 'https://commons.wikimedia.org/wiki/File:Convocation_Hall,_University_of_Toronto.jpg',
		),
	),

	array(
		'title'   => 'Top 30 in Everything',
		'excerpt' => 'Eleven fields. All in the top 30.',
		'content' => <<<'HTML'
<p>Few universities combine academic breadth with global standing on the scale demonstrated by the University of Toronto in the 2026 Times Higher Education World University Rankings by Subject.</p>

<p>U of T ranked among the world's top 30 universities in all 11 major subject areas assessed by Times Higher Education.</p>

<p>The subject areas span engineering, computer science, law, psychology, education, business, physical sciences, life sciences and the humanities.</p>

<p>U of T's medical and health programs produced an especially strong result, ranking ninth globally for the third consecutive year.</p>
HTML,
		'image'   => array(
			'url'    => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/University_of_Toronto_Mississauga_2022.jpg',
			'file'   => 'top-30-in-everything.jpg',
			'credit' => 'Canmenwalker - CC BY 4.0',
			'source' => 'https://commons.wikimedia.org/wiki/File:University_of_Toronto_Mississauga_2022.jpg',
		),
	),

	array(
		'title'   => "AI Among World's Best",
		'excerpt' => 'U of T takes third in global AI.',
		'content' => <<<'HTML'
<p>The University of Toronto's long history in artificial intelligence continues to translate into global recognition.</p>

<p>In ShanghaiRanking Consultancy's 2025 Global Ranking of Academic Subjects, U of T placed third in the world in artificial intelligence.</p>

<p>The result builds on decades of AI research associated with the university, including foundational work in machine learning.</p>

<p>Artificial intelligence was not the university's only standout subject. U of T placed among the global top 10 in five subjects and was Canada's highest-ranked university in 28 subjects.</p>
HTML,
		'image'   => array(
			'url'    => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Bahen_Centre_for_Information_Technology_atrium.jpg',
			'file'   => 'ai-among-worlds-best.jpg',
			'credit' => 'Nayuki - CC BY 2.0',
			'source' => 'https://commons.wikimedia.org/wiki/File:Bahen_Centre_for_Information_Technology_atrium.jpg',
		),
	),

	array(
		'title'   => 'Sustainability on World Stage',
		'excerpt' => 'U of T ranks second worldwide.',
		'content' => <<<'HTML'
<p>The University of Toronto reached second place globally in the QS World University Rankings: Sustainability 2026, while taking the number-one position in Canada.</p>

<p>It was the fourth consecutive year that U of T ranked among the world's top two universities in the sustainability ranking.</p>

<p>Nearly 2,000 universities were evaluated on their responses to environmental, social and governance challenges. U of T placed third globally for both environmental impact and social impact.</p>

<p>The university's sustainability efforts extend across its three campuses, connecting research and education with changes to campus infrastructure and operations.</p>
HTML,
		'image'   => array(
			'url'    => 'https://commons.wikimedia.org/wiki/Special:Redirect/file/Uoft_kmdi_0114.jpg',
			'file'   => 'sustainability-on-world-stage.jpg',
			'credit' => 'Nicholas Moreau - CC BY-SA 1.0',
			'source' => 'https://commons.wikimedia.org/wiki/File:Uoft_kmdi_0114.jpg',
		),
	),
);

/**
 * Download an image and attach it to a post.
 */
function transcend_seed_featured_image( $image, $post_id, $title ) {
	$existing = get_posts(
		array(
			'post_type'      => 'attachment',
			'post_status'    => 'inherit',
			'posts_per_page' => 1,
			'meta_key'       => '_transcend_seed_image',
			'meta_value'     => $image['file'],
		)
	);

	if ( ! empty( $existing ) ) {
		return $existing[0]->ID;
	}

	$tmp = download_url( $image['url'] );

	if ( is_wp_error( $tmp ) ) {
		WP_CLI::warning(
			'Could not download image for "' . $title . '": ' .
			$tmp->get_error_message()
		);

		return 0;
	}

	$file = array(
		'name'     => $image['file'],
		'tmp_name' => $tmp,
	);

	$attachment_id = media_handle_sideload(
		$file,
		$post_id,
		$title
	);

	if ( is_wp_error( $attachment_id ) ) {
		@unlink( $tmp );

		WP_CLI::warning(
			'Could not attach image for "' . $title . '": ' .
			$attachment_id->get_error_message()
		);

		return 0;
	}

	update_post_meta(
		$attachment_id,
		'_transcend_seed_image',
		$image['file']
	);

	update_post_meta(
		$attachment_id,
		'_transcend_image_credit',
		$image['credit']
	);

	update_post_meta(
		$attachment_id,
		'_transcend_image_source',
		$image['source']
	);

	return $attachment_id;
}

foreach ( $stories as $story ) {
	$existing = get_posts(
		array(
			'post_type'      => 'story',
			'post_status'    => 'any',
			'title'          => $story['title'],
			'posts_per_page' => 1,
		)
	);

	if ( ! empty( $existing ) ) {
		WP_CLI::log(
			'Skipping existing Story: ' . $story['title']
		);

		continue;
	}

	$post_id = wp_insert_post(
		array(
			'post_type'    => 'story',
			'post_status'  => 'publish',
			'post_title'   => $story['title'],
			'post_excerpt' => $story['excerpt'],
			'post_content' => $story['content'],
		),
		true
	);

	if ( is_wp_error( $post_id ) ) {
		WP_CLI::warning(
			'Could not create "' . $story['title'] . '": ' .
			$post_id->get_error_message()
		);

		continue;
	}

	$image_id = transcend_seed_featured_image(
		$story['image'],
		$post_id,
		$story['title']
	);

	if ( $image_id ) {
		set_post_thumbnail( $post_id, $image_id );
	}

	WP_CLI::success(
		'Created Story: ' . $story['title']
	);
}

WP_CLI::success( 'Story seeding complete.' );