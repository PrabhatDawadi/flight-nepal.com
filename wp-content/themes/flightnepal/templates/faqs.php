<?php
/*
Template Name: FAQs
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/faqs.jpg);">
		<div class="inner">
			<h1>FAQs</h1>
		</div>
	</section>

	<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>FAQs</li>
			</ul>
		</div>
	</section>

	<section class="common-content">
		<div class="container">
			<div class="of-hid">
				<div class="f-left left-content main-content">
					<div class="title"><h1><?php the_title(); ?></h1></div>
					<ul class="faqs">
						<li data="flight-faqs" class="active">Flight</li>
						<li data="tour-faqs">Tour</li>
						<li data="hotel-faqs">Hotel</li>
						<li data="activity-faqs">Activity</li>
						<li data="promotions-faqs">Promotions</li>
					</ul>
					<div class="faqs-content">
						<div id="flight-faqs" class="inner active">
							<ul class="questions">
								<?php get_faq_by_group('flight'); ?>
							</ul>
						</div>
						<div id="tour-faqs" class="inner">
							<ul class="questions">
								<?php get_faq_by_group('tour'); ?>
							</ul>
						</div>
						<div id="hotel-faqs" class="inner">
							<ul class="questions">
								<?php get_faq_by_group('hotel'); ?>
							</ul>
						</div>
						<div id="activity-faqs" class="inner">
							<ul class="questions">
								<?php get_faq_by_group('activity'); ?>
							</ul>
						</div>
						<div id="promotions-faqs" class="inner">
							<ul class="questions">
								<?php get_faq_by_group('promotion'); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="f-left right-content">
					<h5>Travel Tips :</h5>
					<div class="some-travel-tips">
						<?php get_travel_tips(3); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














