<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="text-container">
		<?php the_title( '<span class="product-name">', '</span>' ); ?>
		<p>.........................................................</p>
		<span><?php echo CFS()->get('product_price'); ?></span>
		</div>


</article><!-- #post-## -->
