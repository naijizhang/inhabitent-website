<?php
/**
 * The template for displaying search results pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<section id="primary" class="content-area journal-page-content search-content-area">
    <main id="main" class="journal-site-main search-site-main" role="main">

        <?php if (have_posts()) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php printf(esc_html('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
        </header><!-- .page-header -->

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            <div class="journal-content entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->

            <div class="journal-button">
                <input type="button" value="READ ENTRY &rarr;" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url(get_permalink()) ?>'" />
            </div><!-- .entry-button -->
        </article>
        <?php endwhile; ?>

        <?php inhabitent_numbered_pagination(); ?>

        <?php else : ?>

        <h1 class="page-title">
            <?php printf(esc_html('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?>
        </h1>
        <br>
        <p>Cannot find...</p>

        <?php endif; ?>

    </main><!-- #main -->

    <?php get_sidebar(); ?>
</section><!-- #primary -->

<?php get_footer(); ?> 