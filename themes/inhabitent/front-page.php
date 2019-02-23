<?php

/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<?php $logo_large_url = get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg';?>
<div class="logo-container">
<img class="frontsite-header-logo" src='<?php echo $logo_large_url ?>'>
</div>
	<?php if (have_posts()) : while (have_posts()) : the_post();
	the_content();
	endwhile;
	else : ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	<div id="primary" class="content-area">
		<main id="main" class="front-site-main" role="main">

		<!-- show product types -->
		<?php $product_types = get_terms('product_type', array(
		'hide_empty' => false,
		'orderby' => 'name',
		'order' => 'ASC'
	)); ?>
	<h2 class="heading-show-stuff">SHOP STUFF</h2>
		<div class="product-types-container">
			<?php foreach ($product_types as $product_type) : ?>
			<div class="product-type-item">
				<img class="product-type-logo" src=<?php echo inhabitent_get_product_type_logo($product_type->name . '.svg') ?> >
				<p>
					<?php echo $product_type->description ?>
				</p>
				<input type="button" value="<?php echo $product_type->name ?> Stuff" class="homebutton" id="go-to-post" 
onClick="document.location.href='<?php echo esc_url( get_term_link($product_type))?>'" />
			
			</div>
			<?php endforeach ?>
		</div>


		<!-- show the latest 3 posts -->
		<h2 class="heading-journal">INHABITENT JOURNAL</h2>
		<div class="latest-journal">
		<?php $journal_posts = inhabitent_get_latest_posts(); ?>
		<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
		<?php get_template_part('template-parts/content-latest-post'); ?>
		<?php endforeach;
		wp_reset_postdata(); ?>
		</div>
		
		<!-- show the latest 4 advantures in grid -->
		<h2 class="heading-adventure">LATEST ADVENTURES</h2>
		<div class="latest-adventure">
		<?php $adventures= inhabitent_get_adventures();?>
		<?php foreach($adventures as $post): setup_postdata($post);?>
		<?php 
			// the_post_thumbnail('medium_large');
			// the_title();
			get_template_part('template-parts/content-adventure');
		?>
		<?php endforeach; wp_reset_postdata(); ?>
		</div>
		<div class="entry-button">
		<input type="button" value="More Adventures" class="homebutton" id="go-to-post" 
onClick="document.location.href='<?php echo esc_url( get_post_type_archive_link( 'adventure' ))?>'" />

	</div><!-- .entry-button -->
	
	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
