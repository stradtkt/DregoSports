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
      				<h1 class="h1"><span class="D">D</span><small class="logo-end"> rego</small> <span class="S">S</span><small class="logo-end"> ports</small></h1>
      				<ul class="navbar-nav one">
						<li class="nav-item"><a href="<?php echo site_url('/'); ?>" class="nav-link text-white">Home</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/about'); ?>" class="nav-link text-white">About</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/contact'); ?>" class="nav-link text-white">Contact</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/privacy-policy'); ?>" class="nav-link">Privacy Policy</a></li>
					</ul>
					<ul class="navbar-nav two">
						<li class="nav-item"><a href="<?php echo site_url('/login'); ?>" class="nav-link">Login</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/register'); ?>" class="nav-link">Register</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/RSS'); ?>" class="nav-link">RSS</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/monday'); ?>" class="nav-link">Monday</a></li>
					</ul>
					<ul class="navbar-nav three">
						<li class="nav-item"><a href="<?php echo site_url('/thursday'); ?>" class="nav-link">Thursday</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/sunday'); ?>" class="nav-link">Sunday</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/sunday-list'); ?>" class="nav-link">Sunday List</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/thursday-list'); ?>" class="nav-link">Thursday List</a></li>
					</ul>
    			</div>
  			</div>
  			<nav class="navbar fixed-top">
				<a href="" class="navbar-brand text-black">Drego Sports</a>
    			<button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="menu">MENU</span>
    			</button>
  			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
