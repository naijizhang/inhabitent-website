<?php

/**
 * Template Name: Adventure archive page
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div id="primary" class="content-area archive-adventure">
    <main id="main" class="site-main" role="main">




        <h2 class="heading-adventure">Latest Adventures</h2>
        <div class="latest-adventure all-adventure">
            <?php $adventures = inhabitent_get_adventures(); ?>
            <?php foreach ($adventures as $post) : setup_postdata($post); ?>
            <article id="adventure-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
                <div class="adventure-title-button">
                    <?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
                    <input type="button" value="READ MORE" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url(get_permalink()) ?>'" />
                </div><!-- .entry-button -->
            </article><!-- #post-## -->
            <?php endforeach;
        wp_reset_postdata(); ?>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 