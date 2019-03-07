<?php

/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
<div class="product-archive-heading single-type">
    <h1 class="page-title">
        <?php single_cat_title(); ?>
    </h1>
    <?php
    the_archive_description('<div class="taxonomy-description">', '</div>');
    ?>
</div>

<div class="product-container">
    <?php if (have_posts()): ?>
    <?php  /* Start the Loop */ ?>
    <?php while (have_posts()): the_post(); ?>
    <?php get_template_part('template-parts/content-product'); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 