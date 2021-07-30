<?php
/*
Template Name: Book a Flight
Template Post Type: page
*/
?>
<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/flight.jpg);">
		<div class="inner">
			<h1>Book a Flight</h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>Book a Flight</li>
			</ul>
		</div>
	</section>

    <section class="book-a-flight">
        <div class="container">
            <div id="flightBookingForm">
                <?php
                    echo do_shortcode(
                        '[contact-form-7 id="203" title="Flight Booking Enquiry"]'
                    );
                ?>
            </div>
        </div>
    </section>

	

<?php get_footer();?>