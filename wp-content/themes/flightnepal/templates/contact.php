<?php
/*
Template Name: Contact
Template Post Type: page
*/
?>
	<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/contact.jpg);">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>Contact</li>
			</ul>
		</div>
	</section>

	<section class="common-content enquiry">
		<div class="container">
			<div class="of-hid">
				<div class="f-left col-1-2 details">
					<div class="common-form-elements">
						<h4>We'd love to hear from you</h4>
						<p>Send us a message and we'll respond as soon as possible</p>
						<br>
						<input type="text" class="form" placeholder="Name">
						<input type="email" class="form" placeholder="Email">
						<div class="phone-holder">
							<div class="country-select-open openCountrySelector">
								<div class="flag " style="background-image: url(https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/np.svg);">
								</div>
							</div>
							<div class="code openCountrySelector">+977</div>
							<ul class="dropdown countriesList">
								<li>
									<div class="f" style="background-image: url(https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/np.svg);">
									</div>
									<p>Nepal</p>													
								</li>
							</ul>
							<input required type="text" placeholder="900000000" class="form phoneNumberInput">
						</div>
						<input type="text" class="form" placeholder="Subject">
						<textarea name="message" id="" cols="30" rows="10" class="form" placeholder="Enter your message here .."></textarea>
						<br>
						<input type="submit" value="Send Message" class="transition">
					</div>
				</div>
				<div class="f-left col-1-2 enquiry-details">
					<h4>Details</h4>
					<br>
					<div class="contact-box" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/contact/details.jpg);">
						<h4 class="white">Flight-Nepal.com</h4>
						<p class="white">We are your Adventure Experts.</p>
						<div class="info">
							<h6 class="white">Email :</h6>
							<p class="white">info@flight-nepal.com</p>
							<br>
							<h6 class="white">Questions? :</h6>
							<p class="white"><a class="transition" href="<?php echo get_site_url(); ?>/faqs/">Read FAQs</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














