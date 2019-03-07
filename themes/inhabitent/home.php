<?php

/**
 * Template Name: Journal page
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div id="primary" class="content-area journal-page-content">
    <main id="main" class="journal-site-main" role="main">

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
