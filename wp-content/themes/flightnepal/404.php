<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage flightnepal
 * @since flightnepal 1.0
 */

get_header(); ?>
	
	<section class="common-page page-top" style="height: 600px; background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/page-not-found.jpg);">
		<div class="inner" style="text-align: center;">
			<h1>ERROR 404</h1>
			<br>
			<h5 style="color: #FFF;">We can't seem to find the page you are looking for.</h5>
			<br>
			<a title="Go to Home Page" href="<?php echo get_site_url(); ?>/">
				<button class="transition">Go to Home Page</button>
			</a>
		</div>
	</section>

<?php get_footer(); ?>
