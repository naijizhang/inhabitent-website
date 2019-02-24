<?php
/**
 * Template part for displaying adventures.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="adventure-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail('large'); ?>
    <?php endif; ?>
    <div class="adventure-title-button">
        <?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>

        <input type="button" value="READ MORE" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url(get_permalink()) ?>'" />
    </div><!-- .entry-button -->
</article><!-- #post-## --> 