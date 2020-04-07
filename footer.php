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
				<div class="col-12 col-md-2 mt-3">
					<h3 class="text-center">Menu</h3>
					<ul>
						<li class="nav-item"><a href="<?php echo site_url('/'); ?>" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/about'); ?>" class="nav-link">About</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/join-now'); ?>" class="nav-link">Join</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/privacy-policy'); ?>" class="nav-link">Privacy Policy</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/contact'); ?>" class="nav-link">Contact</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-2 mt-3">
					<h3 class="text-center">Explore</h3>
					<ul>
						<li class="nav-item"><a href="<?php echo site_url('/betting'); ?>" class="nav-link">Betting</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/'); ?>" class="nav-link">Top Picks</a></li>
						<li class="nav-item"><a href="<?php echo site_url('/'); ?>" class="nav-link">Top Sleepers</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-4"></div>
				<div class="col-12 col-md-4 text-center mt-3">
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
