<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drego_Sports
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8 col-md-4 offset-sm-2 offset-md-0 offset-lg-0">
					<?php echo do_shortcode('[fullcalendar type="thu"]'); ?>
				</div>
				<div class="col-12 col-sm-6 col-md-2 mt-3">
					<h3 class="text-center">Menu</h3>
					<ul>
						<li class="nav-item"><a href="<?php echo site_url('/'); ?>" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/about'); ?>" class="nav-link">About</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/contact'); ?>" class="nav-link">Contact</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-md-2 mt-3">
					<h3 class="text-center">Explore</h3>
					<ul>
						<li class="nav-item"><a href="<?php echo site_url('/login'); ?>" class="nav-link">Login</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/register'); ?>" class="nav-link">Register</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/thursday'); ?>" class="nav-link">Thursday</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/sunday'); ?>" class="nav-link">Sunday</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-md-4 text-center mt-3">
					<p><small>&copy; Drego Sports, 2020.</small></p>
					<p>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-facebook-square"></i></a>
						<a href=""><i class="fab fa-linkedin"></i></a>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
