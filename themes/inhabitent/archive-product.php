<?php

/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<!-- show product types -->
	<?php $product_types = get_terms('product_type', array(
	'hide_empty' => false,
	'orderby' => 'name',
	'order' => 'ASC'
)); ?>
	<div class="product-menu">
			<?php foreach ($product_types as $product_type) : ?>
				<a href="<?php echo get_term_link($product_type); ?>">
					<?php echo $product_type->name ?>
				</a>	
			<?php endforeach ?>
		</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>
			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php
			get_template_part('template-parts/content-product');
			?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content-product', 'none'); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
