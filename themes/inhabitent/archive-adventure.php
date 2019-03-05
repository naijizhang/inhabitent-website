<?php

/**
 * Template Name: Adventure archive page
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div id="primary" class="content-area archive-adventure">
    <main id="main" class="site-main" role="main">




        <h2 class="heading-adventure">LATEST ADVENTURES</h2>
        <div class="latest-adventure all-adventure">
            <?php $adventures = inhabitent_get_adventures(); ?>
            <?php foreach ($adventures as $post) : setup_postdata($post); ?>
            <?php 

            get_template_part('template-parts/content-adventure');
            ?>
            <?php endforeach;
        wp_reset_postdata(); ?>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 