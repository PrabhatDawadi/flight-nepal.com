<?php
/*
Template Name: Promotion Single
Template Post Type: promotions, page, post
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/promotions.jpg);">
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li><a class="transition" href="<?php echo get_site_url(); ?>/promotion/">Promotion</a></li>		
				<li><?php the_title(); ?></li>
			</ul>
		</div>
	</section>

	<section class="common-content">
		<div class="container">
			<div class="of-hid">
				<div class="f-left left-content main-content">
					<img style="width: 100%; display: block;" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
					<br>
					<div class="title" style="margin-bottom: 0;"><h1 style="margin-bottom: 0;"><?php the_title(); ?></h1></div>
					<h5><?php echo get_post_meta( get_the_ID(), 'promo_introduction', true );?></h5>
					<div id="main-content"><?php the_content(); ?></div>
				</div>
				<div class="f-left right-content">
					<h5>Inquire Now:</h5>
					<br>
					<div class="common-form-elements">
						<input type="text" class="form" placeholder="Name">
						<input type="email" class="form" placeholder="Email">
						<input type="email" class="form" placeholder="Phone number">
						<textarea name="message" id="" cols="30" rows="5" class="form" placeholder="Message"></textarea>
						<br>
						<input type="submit" value="Inquire Now" class="transition">
					</div>
					<br>
					<h5>Similar Deals :</h5>
					<div class="some-travel-tips">
						<?php get_other_promotions(get_the_title(), 2); ?>
					</div>
				</div>
			</div>
			<br>
			<div class="of-hid">
				<h4>FAQs :</h4>
				<br>
				<ul class="faqs">
					<li data="promotions-faqs" class="active">Promotions</li>
				</ul>
				<div class="faqs-content">
					<div id="promotions-faqs" class="inner active">
						<ul class="questions">
							<?php get_faq_by_group('promotion'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














