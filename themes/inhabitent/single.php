<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="journal-page-content single-content-area">
    <main id="main" class="journal-site-main single-site-main" role="main">

        <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>
		
		<div class="product-share-buttons">
            <button class="facebook"><i class="fab fa-facebook-f"></i>LIKE</button>
            <button class="facebook"> <i class="fab fa-twitter"></i>TWEET</button>
            <button class="facebook"><i class="fab fa-pinterest-p"></i>PIN</button>
        </div>

        <?php
                // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()): comments_template();
        endif;
        ?>

        <?php endwhile; ?>

    </main><!-- #main -->
    <?php get_sidebar(); ?>
</div><!-- #primary -->


<?php get_footer(); ?> 