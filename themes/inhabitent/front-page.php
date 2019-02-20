<?php

/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php $journal_posts= inhabitent_get_latest_posts();?>
		<?php foreach($journal_posts as $post):setup_postdata($post);?>
		<?php get_template_part( 'template-parts/content' ); //display content to test ?>
		<?php endforeach; wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
