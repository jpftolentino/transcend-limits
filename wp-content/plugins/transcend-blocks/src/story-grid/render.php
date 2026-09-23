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
<section id="stories" class="story-grid-section py-5">
  <div class="container">
    <h2 class="story-grid-title mb-4 text-center text-md-start ps-md-3">
      Latest News
    </h2>

    <div class="row g-4" <?php echo get_block_wrapper_attributes(); ?>>
      <?php foreach ( $stories as $story ) : ?>
        <div class="col-12 col-md-6 col-xl-4">
          <article class="card story-card h-100 border-0 shadow rounded-4 p-4">
            <?php
            if ( has_post_thumbnail( $story->ID ) ) {
              echo get_the_post_thumbnail(
                $story->ID,
                'large',
                array(
                  'class' => 'story-card-image w-100',
                )
              );
            }
            ?>

            <div class="card-body p-0 d-flex flex-column">
              <h2 class="card-title story-card-title fw-bold mt-4">
                <?php echo esc_html( get_the_title( $story->ID ) ); ?>
              </h2>

              <p class="card-text story-card-excerpt">
                <?php
                $content = get_post_field( 'post_content', $story->ID );

                if ( preg_match( '/<p[^>]*>(.*?)<\/p>/is', $content, $matches ) ) :
                  $first_paragraph = wp_strip_all_tags( $matches[1] );

                  $first_paragraph = wp_trim_words(
                    $first_paragraph,
                    12,
                    '...'
                  );
                  ?>

                  <p class="card-text story-card-excerpt">
                    <?php echo esc_html( $first_paragraph ); ?>
                  </p>
                <?php endif; ?>
              </p>

              <a
                class="story-card-link btn rounded-pill mt-auto"
                href="<?php echo esc_url( get_permalink( $story->ID ) ); ?>"
              >
                Read more
              </a>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>