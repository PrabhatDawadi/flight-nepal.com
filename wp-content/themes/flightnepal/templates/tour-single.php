<?php
/*
Template Name: Tour Single
Template Post Type: tours, page, post
*/
?>
<?php get_header(); ?>

	<section class="common-page tour-single-page page-top" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li><a class="transition" href="<?php echo get_site_url(); ?>/tour/">Tour</a></li>
				<li><a class="transition" href="<?php echo get_site_url(); ?>/tour-destination/<?php echo strtolower(get_post_meta( get_the_ID(), 'country', true ));?>/"><?php echo get_post_meta( get_the_ID(), 'country', true );?></a></li>				
				<li><?php the_title(); ?></li>
			</ul>
		</div>
	</section>

	<section class="common-content">
		<div class="container">
			<div class="of-hid">
				<div class="f-left left-content main-content">
					<div id="main-content">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="f-left right-content">
					<h4 class="price">Starts : <span class="color-pink"><?php echo get_post_meta( get_the_ID(), 'price', true );?></span> <span class="pp">Per Person</span></h4>
					<h6 class="trip-info-title">Trip Info:</h6>
					<div class="tour-info">
						<table>
							<tr>
								<td><h6>Duration</h6></td>
								<td><p><?php echo get_post_meta( get_the_ID(), 'duration', true );?> Days</p></td>
							</tr>
							<tr>
								<td><h6>Group Size</h6></td>
								<td><p><?php echo get_post_meta( get_the_ID(), 'group_size', true );?></p></td>
							</tr>
							<tr>
								<td><h6>Best Season</h6></td>
								<td><p><?php echo get_post_meta( get_the_ID(), 'best_season', true );?></p></td>
							</tr>
							<tr>
								<td><h6>Meals</h6></td>
								<td><p>As mentioned in Itinerary</p></td>
							</tr>
							<tr>
								<td><h6>Accomodation</h6></td>
								<td><p><?php echo get_post_meta( get_the_ID(), 'accomodation', true );?></p></td>
							</tr>
						</table>						
					</div>
				</div>
			</div>
			<div class="content-below">
				<div class="of-hid">
					<div class="left">
						<div class="inquire-single">
							<h4>Inquire Now:</h4>
							<br>
							<div class="tourSingleFormHolder" data="<?php the_title(); ?>">
								<?php
									echo do_shortcode(
										'[contact-form-7 id="229" title="Tour Booking Enquiry"]'
									);
								?>
							</div>
						</div>
						<div class="of-hid">
							<h4>FAQs :</h4>
							<br>
							<ul class="faqs">
								<li data="tour-faqs" class="active">Tour</li>
							</ul>
							<div class="faqs-content">
								<div id="tour-faqs" class="inner active">
									<ul class="questions">
										<?php get_faq_by_group('tour'); ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="right">
						<h5>Other Tour destinations:</h5>
						<br>
						<div class="other-tour-destinations">
							<?php get_other_tours(get_post_meta( get_the_ID(), 'country', true )); ?>
						</div>
						<br>
						<h5>Promotions :</h5>
						<div class="some-travel-tips">
							<?php get_latest_promotions(2); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














