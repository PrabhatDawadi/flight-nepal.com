<?php
/*
Template Name: Activity Single
Template Post Type: activities, page, post
*/
?>
<?php get_header(); ?>

	<section class="common-page tour-single-page page-top" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li><a class="transition" href="<?php echo get_site_url(); ?>/activity/">Activity</a></li>
				<li><a class="transition" href="<?php echo get_site_url(); ?>/activity-destination/<?php echo strtolower(get_post_meta( get_the_ID(), 'country', true ));?>/"><?php echo get_post_meta( get_the_ID(), 'country', true );?></a></li>				
				<li><?php the_title(); ?></li>
			</ul>
		</div>
	</section>

	<section class="common-content">
		<div class="container">
			<div class="of-hid">
				<div class="f-left left-content main-content">
					<div class="title"><h1><?php the_title(); ?></h1></div>
					<div id="main-content"><?php the_content(); ?></div>
				</div>
				<div class="f-left right-content">
					<h4 class="price">Starts : <?php echo get_post_meta( get_the_ID(), 'price', true );?> <span>Per Person</span></h4>
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
			<div class="inquire-single">
				<h4>Inquire Now:</h4>
				<br>
				<div class="common-form-elements activitySingleFormHolder" data="<?php the_title(); ?>">
					<?php
						echo do_shortcode(
							'[contact-form-7 id="242" title="Activity Booking Enquiry"]'
						);
					?>
				</div>
			</div>
			<div class="of-hid">
				<h4>FAQs :</h4>
				<br>
				<ul class="faqs">
					<li data="tour-faqs" class="active">Activity</li>
				</ul>
				<div class="faqs-content">
					<div id="tour-faqs" class="inner active">
						<ul class="questions">
							<?php get_faq_by_group('activity'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














