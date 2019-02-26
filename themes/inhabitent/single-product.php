<?php

/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="single-product-content-area">
		<main id="main" class="single-product-main" role="main">
		
		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content-single-product', 'single-product'); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
