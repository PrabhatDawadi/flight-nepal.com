<?php
/*
Template Name: Contact
Template Post Type: page
*/
?>
	<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/contact.jpg);">
		<div class="inner t-a-c">
			<h1><?php the_title(); ?></h1>
			<h5 class="color-white">Email: <a href="mailto:info@flight-nepal.com">info@flight-nepal.com</a></h5>
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
					<div class="inquire-single">
						<h4>We'd love to hear from you</h4>
						<p class="color-blue">Send us a message and we'll respond as soon as possible</p>
						<br>
						<div class="tourSingleFormHolder" data="<?php the_title(); ?>">
							<?php
								echo do_shortcode(
									'[contact-form-7 id="222" title="Contact Form"]'
								);
							?>
						</div>
					</div>
				</div>
				<div class="f-left col-1-2 enquiry-details">
					<h4>Details</h4>
					<p class="color-blue">Get to know more about Flight-Nepal.com</p>
					<br>
					<div class="contact-box pos-rel cover-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/home/landing/plane-bg.jpg);">
						<div class="i">
							<svg width="1623.002" height="1622.998" viewBox="0 0 1623.002 1622.998">
  								<path d="M14825.7,10271.623a805.859,805.859,0,0,1-237.556-62.164c-24.494-10.61-48.761-22.594-72.123-35.614-23.177-12.918-46.011-27.162-67.862-42.334-21.736-15.1-42.992-31.459-63.171-48.622-20.139-17.133-39.666-35.46-58.041-54.475l369.566-338.364v295.063a194.376,194.376,0,0,0,33.957-23.639,221.21,221.21,0,0,0,27.221-28.3,281.366,281.366,0,0,0,36.972-60.978c4.052-8.98,7.789-18.352,11.1-27.853,2.651-7.6,5.034-15.3,7.09-22.877,3.453-12.736,4.8-20.854,4.857-21.192l37.678-211.095,409.536-405.339,11.624-45.845-1128.436,605.191c-7.946-21.74-15.041-44.1-21.078-66.437-6.1-22.581-11.28-45.723-15.4-68.781-4.159-23.327-7.336-47.163-9.438-70.841-2.127-23.99-3.208-48.422-3.208-72.625a825.388,825.388,0,0,1,4.19-82.975,813.272,813.272,0,0,1,12.3-80.571c5.351-26.147,12.078-52.312,20-77.77,7.828-25.17,17.006-50.256,27.288-74.562,9.509-22.486,20.2-44.851,31.763-66.466a248.485,248.485,0,0,0,353.97-344.144c15.147-7.561,30.666-14.706,46.121-21.244,24.31-10.282,49.4-19.464,74.558-27.288,25.47-7.923,51.634-14.65,77.77-20a814.679,814.679,0,0,1,80.575-12.3,824.31,824.31,0,0,1,165.945,0,814.778,814.778,0,0,1,80.571,12.3c26.132,5.347,52.3,12.074,77.77,20,25.169,7.828,50.252,17.01,74.558,27.288,24.073,10.184,47.94,21.678,70.936,34.174,22.85,12.413,45.364,26.085,66.908,40.645,21.464,14.5,42.483,30.221,62.472,46.717,19.953,16.466,39.343,34.092,57.627,52.376s35.918,37.682,52.38,57.627c16.509,20,32.224,41.023,46.713,62.472,14.567,21.563,28.243,44.074,40.648,66.907,12.488,22.992,23.986,46.855,34.174,70.937,10.274,24.3,19.452,49.38,27.288,74.562,7.915,25.458,14.643,51.626,19.993,77.77a811.947,811.947,0,0,1,12.3,80.571,823.546,823.546,0,0,1,0,165.945,813,813,0,0,1-12.3,80.575c-5.347,26.136-12.074,52.3-19.993,77.766-7.836,25.182-17.014,50.268-27.288,74.558-10.18,24.069-21.678,47.937-34.174,70.936-12.405,22.838-26.081,45.349-40.648,66.912-14.489,21.448-30.208,42.467-46.713,62.472-16.458,19.941-34.083,39.331-52.38,57.627s-37.682,35.914-57.627,52.376c-20,16.5-41.016,32.22-62.472,46.717-21.56,14.563-44.07,28.239-66.908,40.645-23,12.5-46.866,23.99-70.936,34.174-24.294,10.274-49.376,19.456-74.558,27.288-25.47,7.919-51.638,14.646-77.77,20-26.488,5.418-53.6,9.557-80.571,12.3a824.06,824.06,0,0,1-167.771-.189Zm-377.383-971.992a265.534,265.534,0,0,0-41.773,7.6,161.535,161.535,0,0,0-38.187,15.42,110.807,110.807,0,0,0-16.248,11.352,91.857,91.857,0,0,0-13.554,14.153c2.146.615,258.857,89.437,261.442,90.333l187.949-90.333-232.812-45.817c-.074-.012-7.386-1.2-19.089-2.368-10.843-1.081-27.829-2.367-47.167-2.371h-.016A388.284,388.284,0,0,0,14448.319,9299.631ZM14158,8889.5c0-106.866,86.636-193.5,193.5-193.5s193.5,86.636,193.5,193.5-86.636,193.5-193.5,193.5S14158,8996.368,14158,8889.5Z" transform="translate(-14098.998 -8653.001)"/>
							</svg>
							<h4>Flight-Nepal.com</h4>
							<p class="color-white">We are your Adventure Experts.</p>
						</div>
						<div class="info">
							<h5>Email</h5>
							<p class="color-pink"><a href="mailto:info@flight-nepal.com">info@flight-nepal.com</a></p>
							<br/>
							<h5>Quick Links:</h5>
							<p class="color-pink"><a class="transition" href="<?php echo get_site_url(); ?>/faqs/">FAQs</a></p>
							<p class="color-pink"><a class="transition" href="<?php echo get_site_url(); ?>/about-us/">About Us</a></p>
							<p class="color-pink"><a class="transition" href="<?php echo get_site_url(); ?>/blog/">Read Blog</a></p>
							<p class="color-pink"><a class="transition" href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy</a></p>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>














