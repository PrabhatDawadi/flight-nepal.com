<?php
/*
Template Name: Hotel
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/hotels.jpg);">
		<div class="inner">
			<h1>Hotel</h1>
		</div>
	</section>

	<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>Hotel</li>
			</ul>
		</div>
	</section>

	<section class="top-destinations all-destinations">
		<div class="container">
			<div class="of-hid">
				<div class="of-hid">
					<?php get_all_hotels(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














