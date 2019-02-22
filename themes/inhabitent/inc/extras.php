<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );



// custom login logo for theme
function inhabitent_login_logo() {
$logo_url = get_template_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg';
echo "<style type='text/css'>
	body.login h1 a {
	background-image: url($logo_url); 
	background-repeat: no-repeat;
	background-size: 300px 53px;
	width:300px;
	height:53px;
	}
	.login .button.button-primary{
	background-color:#248A83;
	}
	</style>";
}
add_action('login_head', 'inhabitent_login_logo');

// custom login logo url to home page for theme
function inhabitent_login_url(){
	return get_site_url();
}
add_action('login_headerurl', 'inhabitent_login_url');

//remove submenus editor
function inhabitent_remove_submenus() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
 }
 add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );
