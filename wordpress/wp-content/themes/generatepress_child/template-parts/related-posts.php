<?php
/**
 * Template part
 *
 * @package DoggieDesigner
 */

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$related_posts = dd_get_related_posts( 3 );
if ( $related_posts->have_posts() ):?>
	<div class="container">
		<div class="dd-related-posts">
			<h2 class="dd-related-posts__title">Related posts</h2>
			<div class="dd-related-posts__posts">
                <?php while ( $related_posts->have_posts() ): $related_posts->the_post(); ?>
					<article class="dd-related-posts__post">
						<a href="<?php the_permalink() ?>" class="dd-related-posts__post__image" style="background: url('<?php echo get_the_post_thumbnail_url( ) ?>')">
						</a>
						<!-- /.dd-related-posts__image -->
						<div class="dd-related-posts__post__content">
							<div class="dd-related-posts__post__date">
								<time>
									<span><?php echo get_the_modified_time( 'M' ) ? get_the_modified_time( 'M' ) : get_the_date( 'M' ); ?></span>
									<span><?php echo get_the_modified_time( 'd' ) ? get_the_modified_time( 'd' ) : get_the_date( 'd' ); ?></span>
									<span><?php echo get_the_modified_time( 'Y' ) ? get_the_modified_time( 'Y' ) : get_the_date( 'Y' ); ?></span>
								</time>
							</div>
							<!-- /.dd-related-posts__date -->
							<a class="dd-related-posts__post__title" href="<?php the_permalink() ?>">
								<h3><?php the_title(); ?></h3>
							</a>
							<!-- /.dd-related-posts__title -->
							<div class="dd-related-posts__post__desc">
                                <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
							</div>
							<!-- /.dd-related-posts__desc -->
							<a href="<?php the_permalink() ?>" class="dd-related-posts__post__read-more" title="<?php the_title(); ?>">
								<svg class="tcb-icon" viewBox="0 0 24 24" data-id="icon-chevron_right-regular" data-name="">
									<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
								</svg>
							</a>
						</div>
						<!-- /.dd-related-posts__content -->
					</article>
                <?php endwhile;
                wp_reset_postdata(); ?>
			</div>
		</div>
		<!-- /.dd-related-posts -->
	</div>
	<!-- /.container -->
<?php endif;