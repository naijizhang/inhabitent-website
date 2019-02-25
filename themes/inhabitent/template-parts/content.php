<?php
/**
 * Template part for displaying posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="journal-picture-block">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()): ?>
        <div class="entry-meta">
            <?php inhabitent_posted_on(); ?> /
            <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
            <?php inhabitent_posted_by(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </div>

    <div class="journal-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <div class="journal-button">
        <input type="button" value="READ ENTRY" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url(get_permalink()) ?>'" />
    </div><!-- .entry-button -->

</article><!-- #post-## --> 