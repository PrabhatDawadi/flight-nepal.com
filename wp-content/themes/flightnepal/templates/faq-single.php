<?php
/*
Template Name: FAQ Single Page
Template Post Type: faq, page, post
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/faqs.jpg);">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li><a class="transition" href="<?php echo get_site_url(); ?>/faqs/">FAQs</a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
	</section>

	<section class="common-content">
		<div class="container">
			<div class="of-hid">
				<div class="main-content">
					<div class="title"><h1><?php the_title(); ?></h1></div>
					<div><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














