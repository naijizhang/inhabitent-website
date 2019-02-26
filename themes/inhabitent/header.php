<?php

/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php echo esc_html('Skip to content'); ?></a>

        <header id="masthead" class="site-header" role="banner">


            <!-- the header text color change on some pages -->
            <?php $thispage = basename(get_permalink()); ?>
            <?php if ($thispage === "inhabitent" || $thispage === "about"): ?>
            <?php $logo_url = get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent-white.svg'; ?>
            <?php else: ?>
            <?php $logo_url = get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent.svg'; ?>
            <style>
                nav a,
                nav i {
                    color: #248A83 !important;
                }

                nav a:hover,
                nav i:hover {
                    color: black !important;
                }

                fieldset input::placeholder {
                    color: #a1a1a1;
                }
                .site-header{
        
                }
            </style>
            <?php endif ?>



            <div class="container">

                <a class="logo-link" href="<?php echo get_home_url(); ?>">
                    <img class="site-logo" alt="home logo" src='<?php echo $logo_url ?>'>
                </a>

                <nav id="site-navigation" class="main-navigation green" role="navigation">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    <div class="search-container">
                        <button class="search-button">
                            <i class="fas fa-search fa-lg"></i>
                        </button>
                        <?php get_search_form(); ?>
                    </div>
                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->
        <div id="content" class="site-content"> 