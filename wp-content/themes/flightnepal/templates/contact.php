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

	<section>
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
						<h4 class="white">Flight Nepal</h4>
						<p class="white">Aero Mount Travel</p>
						<div class="info">
							<h6 class="white">Tel :</h6>
							<p class="white">Nepal : 01-4423678 | 4423679</p>
							<p class="white">USA : 212-918-1874 | 415-335-4266</p>
							<br>
							<h6 class="white">Email :</h6>
							<p class="white">info@aeromounttravel.com</p>
							<p class="white">booking@aeromounttravel.com</p>
							<br>
							<h6 class="white">Address :</h6>
							<p class="white">Nepal : Nagpokhari 1, (Next to NMB Bank) Kathmandu, Nepal</p>
							<p class="white">USA : 11373, Queens, New York, USA</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














