<?php

/**
 * index.php is a fallback template only, in case no appropriate template was found
 * home.php is used for the blog (a listing of recent posts)
 * front-page.php is used for the landing-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">


		<?php
		$homepageEvents = new WP_Query(array(
			'posts_per_page' => 10,
			'post_type' => 'event'
		));

		while ($homepageEvents->have_posts()) {

			$homepageEvents->the_post(); ?>

			<div class="event-summary">
				<a href="#" class="event-summary__date t-center">
					<span class="event-summary__month">Mar</span>
					<span class="event-summary__day">25</span>
				</a>
				<div class="event-summary__content">
					<h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
					<p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
				</div>
			</div>

		<?php }

		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>