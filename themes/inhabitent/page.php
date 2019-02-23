<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.7589415073785!2d-123.13987828480958!3d49.262014780156626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7edde857c28340ba!2sRED+Academy!5e0!3m2!1sen!2sca!4v1550950386840" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
