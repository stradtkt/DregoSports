<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drego_Sports
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'drego-sports' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="#">Drego Sports</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php 
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
						'menu_class' => 'navbar-nav',
					));
					?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
