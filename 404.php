<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Drego_Sports
 */

get_header();
?>

<section id="login-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="betting">
                    <h1 class="text-left">Page Cannot Be Found</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="four-o-four-section" class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Oops!</h1>
				<h4><strong>404 - PAGE NOT FOUND</strong></h4>
				<p>The page you are looking for might have been removed, had it's name changed, or is temporarily unavailable</p>
				<a href="<?php echo site_url('/'); ?>" class="btn">Go Home</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
