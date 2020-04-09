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
		<div class="pos-f-t">
  			<div class="collapse" id="navbarToggleExternalContent">
    			<div class="bg-dark p-4 text-center">
      				<h5 class="text-white h4">Drego Sports</h5>
      				<ul class="navbar-nav one">
						<li class="nav-item">
							<a href="<?php echo site_url('/'); ?>" class="nav-link text-white">Home</a>
							<a href="<?php echo site_url('/about'); ?>" class="nav-link text-white">About</a>
							<a href="<?php echo site_url('/betting'); ?>" class="nav-link text-white">Betting</a>
							<a href="<?php echo site_url('/contact'); ?>" class="nav-link text-white">Contact</a>
						</li>
					</ul>
					<ul class="navbar-nav two">
						<li class="nav-item"><a href="<?php echo site_url('/join-now'); ?>" class="nav-link">Join</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/login'); ?>" class="nav-link">Login</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/register'); ?>" class="nav-link">Register</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/betting'); ?>" class="nav-link">Betting</a></li>
					</ul>
    			</div>
  			</div>
  			<nav class="navbar fixed-top">
				<a href="" class="navbar-brand">Drego Sports</a>
    			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
    			</button>
  			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
