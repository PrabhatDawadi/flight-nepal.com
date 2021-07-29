<?php
/*
Template Name: Full Width Page
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/travel-background.jpg);">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
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














