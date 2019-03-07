<?php

/**
 * Template Name: About page
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>


<div id="primary" class="content-area content-area-about">
    <main id="main" class="about-site-main" role="main">

        <?php if (have_posts()): while (have_posts()): the_post();
                the_content();
            endwhile;
        else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 