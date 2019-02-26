<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-product-image">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
    </div>

    <div class="single-product-content">
        <?php the_title('<h1 class="single-product-title">', '</h1>'); ?>
        <p class="single-price">
            <?php echo CFS()->get('product_price'); ?>
        </p>
        <div class="single-product-description">
            <?php the_content(); ?>
        </div>
        <div class="product-share-buttons">
            <button class="facebook"><i class="fab fa-facebook-f"></i>LIKE</button>
            <button class="facebook"> <i class="fab fa-twitter"></i>TWEET</button>
            <button class="facebook"><i class="fab fa-pinterest-p"></i>PIN</button>
        </div>

    </div>






</article><!-- #post-## --> 