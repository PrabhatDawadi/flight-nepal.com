<?php
/*
Template Name: Activity
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/activity.jpg);">
		<div class="inner">
			<h1>Activity</h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>Activity</li>
			</ul>
		</div>
	</section>

	<section class="top-destinations all-destinations">
		<div class="container">
			<div class="of-hid">
				<div class="of-hid">
					<?php get_all_activities(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














