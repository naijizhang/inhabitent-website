<?php

/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<?php $logo_large_url = get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg'; ?>
<main class="logo-container">
    <img class="frontsite-header-logo" src='<?php echo $logo_large_url ?>'>
</main>
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
                <img class="product-type-logo" src=<?php echo inhabitent_get_product_type_logo($product_type->name . '.svg') ?>>
                <p>
                    <?php echo $product_type->description ?>
                </p>
                <input type="button" value="<?php echo $product_type->name ?> Stuff" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url(get_term_link($product_type)) ?>'" />

            </div>
            <?php endforeach ?>
        </div>


        <!-- show the latest 3 posts -->
        <h2 class="heading-journal">INHABITENT JOURNAL</h2>
        <div class="latest-journal">
            <?php $journal_posts = inhabitent_get_latest_posts(); ?>
            <?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-header">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                    <?php if ('post' === get_post_type()) : ?>
                    <div class="entry-meta">
                        <?php inhabitent_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                    </div><!-- .entry-meta -->
                    <?php endif; ?>
                    <?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
                </div><!-- .entry-header -->
                <div class="entry-button">
                    <input type="button" value="READ ENTRY" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url(get_permalink()) ?>'" />
                </div><!-- .entry-button -->
            </article><!-- #post-## -->
            <?php endforeach;
        wp_reset_postdata(); ?>
        </div>

        <!-- show the latest 4 advantures in grid -->
        <h2 class="heading-adventure">LATEST ADVENTURES</h2>
        <div class="latest-adventure">
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
        <div class="button-more-adventure">
            <input type="button" value="More Adventures" onClick="document.location.href='<?php echo esc_url(get_post_type_archive_link('adventure')) ?>'" />

        </div><!-- .entry-button -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 