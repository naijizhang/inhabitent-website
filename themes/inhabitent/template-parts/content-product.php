<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="footer-logo-link" href="<?php echo get_permalink() ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</a>
		<div class="text-container">
		<?php the_title( '<span class="product-name">', '</span>' ); ?>
		<span class="product-price"><?php echo CFS()->get('product_price'); ?></span>
		</div>


</article><!-- #post-## -->
