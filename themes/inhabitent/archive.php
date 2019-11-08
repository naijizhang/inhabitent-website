<?php

/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="journal-page-content archive-content">
    <main id="main" class="journal-site-main archive-site-main" role="main">
<h1>
<?php the_archive_title();?>
</h1>
    <?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>
    </main><!-- #main -->

    <?php get_sidebar(); ?> <!-- sidebar -->

</div><!-- #primary -->

<?php get_footer(); ?> 
