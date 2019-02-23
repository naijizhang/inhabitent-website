<?php
/**
 * Template part for displaying adventures.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="adventure-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		
</div><!-- .entry-header -->

	<div class="entry-button">
		<input type="button" value="READ MORE" class="homebutton" id="go-to-post" 
onClick="document.location.href='<?php echo esc_url( get_permalink())?>'" />
	</div><!-- .entry-button -->
</article><!-- #post-## -->

