<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area journal-page-content single-adventure-content-area">
    <main id="main" class="journal-site-main single-site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
            <div class="article-content">
                <h2>
                    <?php the_title(); ?>
                </h2>


                <div class="author-name">
                    <?php inhabitent_posted_by(); ?>
                </div><!-- .entry-meta -->



                <div class="journal-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <div class="product-share-buttons">
                    <button class="facebook"><i class="fab fa-facebook-f"></i>LIKE</button>
                    <button class="facebook"> <i class="fab fa-twitter"></i>TWEET</button>
                    <button class="facebook"><i class="fab fa-pinterest-p"></i>PIN</button>
                </div>
            </div>
        </article><!-- #post-## -->
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 