<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
    <?php if ('post' === get_post_type()): ?>
        <div class="entry-meta">
            <?php inhabitent_posted_on(); ?> /
            <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
            <?php inhabitent_posted_by(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
	<div class="journal-content entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php if (have_posts()): ?>
    <div class="journal-button">
        <input type="button" value="READ ENTRY &rarr;" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url(get_permalink()) ?>'" />
    </div><!-- .entry-button -->
<?php else:?>
<h1 class="page-title">
                <?php printf(esc_html('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
            <br>
            <p>Cannot find...</p>
    <?php endif ?>
</article><!-- #post-## --> 