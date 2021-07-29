<?php
/*
Template Name: Tour
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/tour.jpg);">
		<div class="inner">
			<h1>Tour</h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>Tour</li>
			</ul>
		</div>
	</section>

	<section class="top-destinations all-destinations">
		<div class="container">
			<div class="of-hid">
				<div class="of-hid">
					<?php get_all_tours(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














