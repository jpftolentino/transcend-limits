<?php
/**
 * Server-rendered Story Grid.
 *
 * @package Transcend
 */

$stories = get_posts(
	array(
		'post_type'      => 'story',
		'post_status'    => 'publish',
		'posts_per_page' => 6,
	)
);

if ( empty( $stories ) ) {
	return;
}
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
	<?php foreach ( $stories as $story ) : ?>
		<article>
			<?php
			if ( has_post_thumbnail( $story->ID ) ) {
				echo get_the_post_thumbnail(
					$story->ID,
					'large'
				);
			}
			?>

			<h2>
				<?php echo esc_html( get_the_title( $story->ID ) ); ?>
			</h2>

			<p>
				<?php
				echo esc_html(
					wp_trim_words(
						get_the_excerpt( $story->ID ),
						40
					)
				);
				?>
			</p>

			<a href="<?php echo esc_url( get_permalink( $story->ID ) ); ?>">
				Read Story
			</a>
		</article>
	<?php endforeach; ?>
</div>