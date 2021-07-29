<?php
/*
Template Name: Hotel Destination
Template Post Type: hotel-destination, page, post
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li><a class="transition" href="<?php echo get_site_url(); ?>/hotel/">Hotel</a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
	</section>

	<section class="common-content">
		<div class="container">
			<div class="of-hid">
				<div class="f-left left-content main-content">
					<div id="main-content"><?php the_content(); ?></div>
					<div>
						<h5>Hotels in <?php the_title(); ?> :</h5>
						<div class="country-wise of-hid">
							<?php get_hotels_by_country(get_the_title()); ?>
							<?php get_hotels_by_country(get_the_title()); ?>
							<?php get_hotels_by_country(get_the_title()); ?>
							<?php get_hotels_by_country(get_the_title()); ?>
							<?php get_hotels_by_country(get_the_title()); ?>
						</div>
					</div>
				</div>
				<div class="f-left right-content">
					<h5>Find Hotels in :</h5>
					<br>
					<div class="other-tour-destinations">
						<?php get_other_hotels(get_the_title()); ?>
					</div>
					<br>
					<h5>Promotions :</h5>
					<div class="some-travel-tips">
						<?php get_latest_promotions(2); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














