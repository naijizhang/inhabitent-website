<?php
/**
 * Template Name: Find us page
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div id="primary" class="findus-page-content">
    <main id="findus-page" class="site-main" role="main">
        
        <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content-findus', 'findus'); ?>

        <?php endwhile; ?>

    </main><!-- #main -->

    <?php get_sidebar(); ?>
    <!-- sidebar -->

</div><!-- #primary -->

<?php get_footer(); ?> 