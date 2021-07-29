
		<footer>
			<div class="newsletters" id="newsletters">
				<div class="inner mar-0-a">
					<div class="of-hid">
						<div class="left f-left col-1-2">
							<img src="<?php bloginfo('template_directory'); ?>/images/footer/subscribe.svg" alt="">
							<div class="title">
								<h5>Get Updates & More</h5>
								<p>Thoughtful thoughts to your inbox</p>
							</div>							
						</div>
						<div class="f-left col-1-2">
							<?php
								echo do_shortcode(
									'[newsletter]'
								);
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="top">
				<div class="container">
					<div class="of-hid">
						<div class="f-left col-1-3 map-holder">
							<h5>Find us :</h5>
							<br>
							<div class="g-map">
							</div>
						</div>
						<div class="f-left col-2-3 of-hid">
							<div class="f-left col-1-2">
								<h5>Need help?</h5>
								<br>
								<h6>Email :</h6>
								<p><a class="transition" href="#">info@aeromounttravel.com</a></p>
								<p><a class="transition" href="#">booking@aeromounttravel.com</a></p>
								<br>
								<h6 class="country">Nepal</h6>
								<h6>Address :</h6>
								<p>Nagpokhari 1, (Next to NMB Bank)</p>
								<p class="mar-btm">Kathmandu, Nepal</p>
								<h6>Phone :</h6>
								<p><a class="transition" href="#">01-4423678</a> | <a href="#">4423679</a></p>
								<br>
								<h6 class="country">USA</h6>
								<h6>Address :</h6>
								<p class="mar-btm">11373, Queens, New York, USA</p>
								<h6>Phone :</h6>
								<p class="mar-btm"><a class="transition" href="#">212-918-1874</a> | <a href="#">415-335-4266</a></p>
								<h6>Fax :</h6>
								<p><a class="transition" href="#">646-619-4542</a></p>
								<br>
								<h6>Viber :</h6>
								<p><a class="transition" href="#">+977-9801024614</a></p>
							</div>
							<div class="f-left col-1-2">
								<h5>Quick Links</h5>
								<br>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/tour/">Tour</a></p>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/hotel/">Hotel</a></p>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/activity/">Activity</a></p>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/promotion/">Promotion</a></p>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/blog/">Blog</a></p>
								<br>
								<h5>Support</h5>
								<br>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/faqs/">FAQs</a></p>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/contact/">Contact</a></p>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/terms-and-conditions/">Terms & Conditions</a></p>
								<p><a class="transition" href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy</a></p>
								<br>
								<h5>Follow Us</h5>
								<br>
								<p><a class="transition" href="#">Facebook</a></p>
								<p><a class="transition" href="#">Twitter</a></p>
								<p><a class="transition" href="#">Instagram</a></p>
								<br>
								<ul class="aff">
									<li><img src="<?php bloginfo('template_directory'); ?>/images/footer/natta.png" alt=""></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/footer/npl.png" alt=""></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/footer/ntb.png" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
				<p>© <a class="transition" href="#">FlightNepal.com</a> 2020 &nbsp; | &nbsp; All rights reserved</p>
				<p><a class="transition" href="#">Developer</a></p>
			</div>
		</footer>
		
		<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
		<script type="text/javascript">
			var mainForm;
		    var CaptchaCallback = function()
		    {
		        mainForm = grecaptcha.render('sendMailButton', {'sitekey' : '6LfNc6QUAAAAAL_wfgE5DMkpBojhQCX0Kz1NE60g'});
		    };
		</script>

		<?php wp_footer();?>
			
	</body>
</html>
