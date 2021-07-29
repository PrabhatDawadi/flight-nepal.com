<?php
/*
Template Name: Home
Template Post Type: post, page
*/
?>
<?php get_header(); ?>

	<section id="home" class="page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/home/landing/bg.jpg);">
		<div class="form">
			<ul class="selectors">
				<li class="active" data="flight-tab">Flights</li>
				<li class="" data="tour-tab">Tour</li>
				<li class="" data="hotel-tab">Hotel</li>
				<li class="" data="activity-tab">Activity</li>
			</ul>
			<div class="content">
				<div class="one content-active" id="flight-tab">
					<form method="post" action="#" id="flightBookingForm" base-url="<?php bloginfo('template_directory'); ?>">
						<table>
							<tr>
								<td colspan="12" class="flightType">
									<span class="flight-type">
										<span>
											<span>
												<label>
													<input type="radio" name="flight-type" value="One Way" checked="checked" />
													<span>One Way</span>
												</label>
											</span>
											<span>
												<label>
													<input type="radio" name="flight-type" value="Round Trip" />
													<span>Round Trip</span>
												</label>
											</span>
											<span>
												<label>
													<input type="radio" name="flight-type" value="Multi City" />
													<span>Multi City</span>
												</label>
											</span>
										</span>
									</span>
								</td>
							</tr>
							<tbody class="append">
								<tr class="col-3">
									<td colspan="4" class="origin-destination-ip-holder">
										<label>Origin <br><input type="text" required name="origin[0]" class="origin-ip form" autocomplete="off" placeholder="KTM"></label>
										<ul class="dropdown originDropdown"></ul>
									</td>
									<td colspan="4" class="origin-destination-ip-holder">
										<label>Destination <br><input type="text" type="text" autocomplete="off" required name="destination[0]" class="destination-ip form" autocomplete="off" placeholder="TOK"></label>
										<ul class="dropdown destinationDropdown"></ul>
									</td>
									<td colspan="4"><label>Departure <br><input type="text" autocomplete="off" required name="departure[0]" class="form datepickerDate" placeholder="<?php echo date("F j, Y"); ?>"></label></td>
								</tr>
							</tbody>
							<tr class="add-city">
								<td colspan="12">
									<p class="add-city">Add city (Up to 5)</p>
								</td>
							</tr>
							<!-- One Way / Round Trip / Multi City Conditions Complete -->
							<tr class="return col-3">
								<td colspan="4"><label>Return <br><input type="text" id="return" autocomplete="off" name="returnDate" class="form datepickerDate" placeholder="<?php echo date("F j, Y"); ?>"></label></td>
								<td colspan="4"></td>
								<td colspan="4"></td>
							</tr>
							<tr class="col-3">
								<td colspan="4">
									<label>Name <br><input required name="fullname" type="text" autocomplete="off" placeholder="John Doe" class="form"></label>
								</td>
								<td colspan="4">
									<label>Email <br><input required name="email" type="email" autocomplete="off" placeholder="john.doe@gmail.com" class="form"></label>
								</td>
								<td colspan="4">
									<label>Phone</label>
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
										<input name="phoneNumber" required type="text" minlength="7" maxlength="10" autocomplete="off" placeholder="900000000" class="form phoneNumberInput">
									</div>
								</td>
							</tr>
							<tr class="col-2">
								<td colspan="6">
									<label>Note <br>
										<textarea class="form" id="" cols="30" rows="3" name="note" placeholder="Enter your message here"></textarea>
									</label>
								</td>
								<td colspan="6" align="right" style="vertical-align: bottom;">
									<input type="submit" value="Enquire Now" class="transition">
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="one" id="tour-tab">					
					<?php
						echo do_shortcode(
							'[contact-form-7 id="229" title="Tour Booking Enquiry"]'
						);
					?>
				</div>
				<div class="one" id="hotel-tab">
					<?php
						echo do_shortcode(
							'[contact-form-7 id="252" title="Hotel Booking Enquiry"]'
						);
					?>
				</div>
				<div class="one" id="activity-tab">
					<?php
						echo do_shortcode(
							'[contact-form-7 id="242" title="Activity Booking Enquiry"]'
						);
					?>
				</div>
			</div>
		</div>
	</section>

	<section id="formPreview" site-url="<?php echo get_site_url();?>">
		<div class="block">
			<div class="inner">
				<h5>Flight Booking Enquiry <img id="closePreview" src="<?php bloginfo('template_directory'); ?>/images/pages/home/form/close.svg" alt=""></h5>
				<div class="con">
					<p>Hi,</p>
					<p>My name is <span class="fullName"></span>. I want to book flights with FlightNepal.com. My flight details are as follows:</p>
					<br>
					<table>
						<tr><td colspan="2"><p><img src="<?php bloginfo('template_directory'); ?>/images/pages/home/form/flight.svg" alt=""><strong>Flight :
						<tr>
							<td><p><strong>Type :</strong></p></td>
							<td>
								<p>
									<img class="flightTypeIcon" src="" alt="">
									<span class="flightType"></span>									
								</p>
							</td>
						</tr>
						<tbody class="trips"></tbody>
						<tr class="return-block">
							<td><p>Arrival</p></td>
							<td>
								<p>
									<img src="<?php bloginfo('template_directory'); ?>/images/pages/home/form/date.svg" alt="">
									<span class="returnDate"></span>
								</p>
							</td>
						</tr>
						<tr><td colspan="2"><p><strong>Contact Details :</strong></p></td></tr>
						<tr>
							<td><p>Full name</p></td>
							<td>
								<p>
									<img src="<?php bloginfo('template_directory'); ?>/images/pages/home/form/user.svg" alt="">
									<span class="fullName"></span>
								</p>
							</td>
						</tr>
						<tr>
							<td><p>Email</p></td>
							<td>
								<p>
									<img src="<?php bloginfo('template_directory'); ?>/images/pages/home/form/email.svg" alt="">
									<span class="email"></span>
								</p>
							</td>
						</tr>
						<tr>
							<td><p>Phone</p></td>
							<td>
								<p>
									<img src="<?php bloginfo('template_directory'); ?>/images/pages/home/form/phone.svg" alt="">
									<span class="phone">+9779849215969</span>
								</p>
							</td>
						</tr>
						<tr><td colspan="2"><p><img src="<?php bloginfo('template_directory'); ?>/images/pages/home/form/note.svg" alt=""><strong>Note :</strong></p></td></tr>
						<tr><td colspan="2"><p><span class="note"></span></p></td></tr>
					</table>
					<br>
					<p>Best Regards,<br><span class="fullName">Prabhat Dawadi</span><br><?php echo date("F j, Y"); ?></p>
					<div id="flight-input-elements">
						<?php
							echo do_shortcode(
								'[contact-form-7 id="203" title="Flight Booking Enquiry"]'
							);
						?>
					</div>
					<br>
					<div class="update-details">
						<p id="updateDetails">Update your details</p>
					</div>
				</div>			
			</div>
		</div>
	</section>

	<section class="home-offers">
		<div class="container">
			<div class="of-hid">
				<div class="col-1-2 f-left special-offers" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/home/top/special-offers.jpg);">
					<div class="inner">
						<h4>Special Offers</h4>
						<p>Find Your Perfect Hotels Get the bestprices on 20,000+ properties the best prices on.</p>
						<a class="transition" href="<?php echo get_site_url(); ?>/promotion/">
							<button class="transition transparent">See deals</button>
						</a>
					</div>
				</div>
				<div class="col-1-4 f-left newsletters" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/home/top/newsletters.jpg);">
					<div class="inner">
						<h4>Newsletters</h4>
						<p>Join for free and get our tailored newsletters full of hot travel deals.</p>
						<a class="transition" href="#newsletters">
							<button class="transition transparent">Sign up</button>
						</a>
					</div>
				</div>
				<div class="col-1-4 f-left travel-tips" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/home/top/travel-tips.jpg);">
					<div class="inner">
						<h4>Travel Tips</h4>
						<p>Tips from our travel experts to make your next trip even better.</p>
						<a class="transition" href="<?php echo get_site_url(); ?>/blog/">
							<button class="transition transparent">Read more</button>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<section class="top-destinations">
		<div class="container">
			<div class="of-hid">
				<h4 class="viewAll">Top Tour <span class="viewAll"><a class="transition" href="<?php echo get_site_url(); ?>/tour/">View more</a></span></h4>
				<br>
				<div class="of-hid">
					<?php get_all_tours(4); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="promotions">
		<div class="container">
			<div class="of-hid">
				<h4 class="viewAll">Promotions <span class="viewAll"><a class="transition" href="<?php echo get_site_url(); ?>/promotion/">View more</a></span></h4>
				<br>
				<div class="of-hid">
					<?php get_all_promotions(3); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="top-destinations">
		<div class="container">
			<div class="of-hid">
				<h4 class="viewAll">Top Hotels <span class="viewAll"><a class="transition" href="<?php echo get_site_url(); ?>/hotels/">View more</a></span></h4>
				<br>
				<div class="of-hid">
					<?php get_all_hotels(4); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="promotions blogs">
		<div class="container">
			<div class="of-hid">
				<h4 class="viewAll">Blog <span class="viewAll"><a class="transition" href="<?php echo get_site_url(); ?>/blog/">View more</a></span></h4>
				<br>
				<div class="of-hid">
					<?php get_latest_blogs(3); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="top-destinations top-activities">
		<div class="container">
			<div class="of-hid">
				<h4 class="viewAll">Top Activities <span class="viewAll"><a class="transition" href="<?php echo get_site_url(); ?>/activity/">View more</a></span></h4>
				<br>
				<div class="of-hid">
					<?php get_all_activities(4); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














