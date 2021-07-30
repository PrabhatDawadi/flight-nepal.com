<?php
/*
Template Name: Promotion Single
Template Post Type: promotions, page, post
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/promotions.jpg);">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
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
					<img class="col-1-1 dis-b" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
					<div class="promotionalContent">
						<div class="title" style="margin-bottom: 0;"><h1 style="margin-bottom: 0;"><?php the_title(); ?></h1></div>
						<h5><?php echo get_post_meta( get_the_ID(), 'promo_introduction', true );?></h5>
						<div id="main-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="f-left right-content">
					<div class="inquire-single">
						<h5>Inquire Now:</h5>
						<div class="promotionSingleFormHolder" data="<?php the_title(); ?>">
							<?php
								echo do_shortcode(
									'[contact-form-7 id="224" title="Promotion Enquiry"]'
								);
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="content-below">
				<div class="of-hid">
					<div class="left">
						<div class="of-hid">
							<br/>
							<h4>FAQs :</h4>
							<br>
							<ul class="faqs">
								<li data="promotions-faqs" class="active">Promotions</li>
							</ul>
							<div class="faqs-content">
								<div id="tour-faqs" class="inner active">
									<ul class="questions">
										<?php get_faq_by_group('promotion'); ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="right">
						<h5>Similar Deal :</h5>
						<div class="some-travel-tips">
							<?php get_other_promotions(get_the_title(), 1); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














