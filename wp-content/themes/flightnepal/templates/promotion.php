<?php
/*
Template Name: Promotion
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/promotions.jpg);">
		<div class="inner">
			<h1>Promotions</h1>
		</div>
	</section>

	<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>Promotion</li>
			</ul>
		</div>
	</section>

	<section class="promotions all-promotions">
		<div class="container">
			<div class="of-hid">
				<div class="of-hid">
					<?php get_all_promotions(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














