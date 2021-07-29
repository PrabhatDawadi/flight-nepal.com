<?php
/*
Template Name: Country - Single
Template Post Type: send-cash, page, post
*/
get_header();?>
	
	<style type="text/css">
		#landingSection .exchangeBox .countrySelector .flag{
			height: 48px;
		}
		#landingSection .exchangeBox .countrySelector .flag span{
			padding-left: 0;
			padding-top: 4px;
		}
	</style>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="landingSection" class="bgImageBottomCenter countryPage" country="<?php the_title(); ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/send-cash-home/bg.jpg);">
				<img class="countryFlag" src="<?php echo get_site_url(); ?>/<?php echo get_post_meta( get_the_ID(), 'landingFlagImage', true );?>">
				<div class="wrapper">
					<div class="verticalCover">
						<div class="verticalOne">
							<h1 class="dinBlack">Send Cash to <?php the_title(); ?></h1>
							<h3 class="dinBlack">WITH <span>NO SERVICE FEE</span></h3>
							<div class="exchangeBox" url="<?php echo get_site_url(); ?>/remit-one.php" page="country">
								<div class="left">
									<div class="col-1-2">
										<div class="ipHold">
											<p>You Send</p>
											<div class="verticalCover">
												<div class="verticalOne">
													<table>
														<tr>
															<td><span id="sourceCurrencySymbol">&pound;</span></td>
															<td><input class="onlyNumeric sourceInputValue" value="1,000"></td>
														</tr>
													</table>	
												</div>
											</div>			
											<img class="showError" src="<?php bloginfo('template_directory'); ?>/images/icons/error.svg">
										</div>
										<div class="countrySelector">
											<div class="verticalCover">
												<div class="verticalOne">
													<div class="flag">
														<img id="sourceCountryFlag" src="<?php bloginfo('template_directory'); ?>/images/default/gb.svg">
														<br>
														<span id="sourceCountryCurrency">UK</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-1-2">
										<div class="ipHold">
											<p>Recipient Gets</p>
											<div class="verticalCover">
												<div class="verticalOne">
													<table>
														<tr>
															<td><span class="destinationCurrencySymbol"><?php echo get_post_meta( get_the_ID(), 'currencySymbol', true );?></span></td>
															<td><input class="onlyNumeric destinationInputValue"></td>
														</tr>
													</table>	
												</div>
											</div>	
										</div>
										<div class="countrySelector">
											<div class="verticalCover">
												<div class="verticalOne">
													<div class="flag">
														<img class="destinationCountryFlag" src="<?php echo the_post_thumbnail_url(); ?>">
														<br>
														<span class="destinationCountryCurrencyCode"><?php echo get_post_meta( get_the_ID(), 'destinationCurrency', true );?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="buttonHold">
									<a href="https://online.hellopaisa.co.uk/registration" onClick="ga('send', { 'hitType': 'event', 'eventCategory': 'www.hellopaisa.co.uk', 'eventAction': 'SendNow Click', 'eventLabel': '<ClientID>' });">
										<button id="sendNow" class="gradientBg din-black">Send Now</button>
									</a>
								</div>
							</div>
							<div class="infoHolderBottom">								
								<div class="__rates__">
									<h5><span class="red">Rate :</span> 1 GBP &nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/icons/interchange.svg">&nbsp; <span id="rateAppendHere"></span> <span id="currencyAppendHere"><?php echo get_post_meta( get_the_ID(), 'destinationCurrency', true );?></span> </h5>
								</div>
								<div class="appDL">
									<p>Download the <span><strong>APP</strong></span> & transact straight from your phone.</p>
									<div class="iconHolder">
										<a title="Play Store" href="https://play.google.com/store/apps/details?id=com.remitone.app.daytona.live" target="_blank">
											<img src="<?php bloginfo('template_directory'); ?>/images/send-cash-home/play-store.svg">
										</a>
										<!-- <a href="#">
											<img src="<?php bloginfo('template_directory'); ?>/images/send-cash-home/app-store.svg">
										</a> -->
									</div>
								</div>	
								<div class="additionalInfo">
									<a href="#howItWorks">
										<img src="<?php bloginfo('template_directory'); ?>/images/send-cash-home/see-how-it-works.svg">
										<h4>See how it works</h4>
									</a>
								</div>				
							</div>				
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<section id="pointsMethods">
		<div class="container">
			<?php $payoutPoints = explode(',', get_post_meta( get_the_ID(), 'payoutPoints', true )) ;?>
			<h3 class="dinBlack">Payout Points</h3>
			<ul class="__points__">
				<?php foreach ($payoutPoints as $key) { ?>
					<li><img src="<?php echo get_site_url(); ?>/<?php echo $key;?>"></li>
				<?php } ?>
			</ul>
			<h3 class="dinBlack">Payout Methods</h3>
			<?php $payoutMethods = explode(',', get_post_meta( get_the_ID(), 'payoutMethods', true )) ;?>
			<ul class="__methods__">
				<?php foreach ($payoutMethods as $key) { ?>
					<li><?php echo $key;?></li>
				<?php } ?>
			</ul>
		</div>
	</section>

	<section id="getTheAppNow">
		<div class="col_1_2">
			<div class="verticalCover">
				<div class="verticalOne">
					<img src="<?php bloginfo('template_directory'); ?>/images/get-the-app/phones.png">
				</div>
			</div>
		</div>
		<div class="col_1_2">
			<div class="verticalCover">
				<div class="verticalOne">
					<h2 class="dinBlack">GET THE APP NOW!</h2>
					<p>Download the <span class="dinBlack">APP</span> & transact straight from your phone.</p>
					<div class="iconHolder">
						<a title="Play Store" href="https://play.google.com/store/apps/details?id=com.remitone.app.daytona.live" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/images/send-cash-home/play-store.svg">
						</a>
						<!-- <a href="#">
							<img src="<?php bloginfo('template_directory'); ?>/images/send-cash-home/app-store.svg">
						</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="whyHelloPaisa">
		<div class="container alignCenter">
			<h1 class="withLine dinBlack">Why Hello Paisa?</h1>
			<p>Try Hello Paisa today for the cheaper, faster and legal way to send money home and be sure your family and friends will always be looked after.</p>
			<div class="block">
				<div class="col-1-3">
					<div class="iconHolder">
						<img alt="Fast" src="<?php bloginfo('template_directory'); ?>/images/why-hello-paisa/fast.svg">
					</div>
					<div class="textHolder">
						<h5 class="dinRegular">Fast</h5>
						<p>Your cash is delivered <br>within minutes</p>	
					</div>
				</div>
				<div class="col-1-3">
					<div class="iconHolder">
						<img alt="Cheap" src="<?php bloginfo('template_directory'); ?>/images/why-hello-paisa/cheap.svg">
					</div>
					<div class="textHolder">
						<h5 class="dinRegular">Cheap</h5>
						<p>Sending funds overseas has never been cheaper</p>	
					</div>
				</div>
				<div class="col-1-3">
					<div class="iconHolder">
						<img alt="Secure" src="<?php bloginfo('template_directory'); ?>/images/why-hello-paisa/secure.svg">
					</div>
					<div class="textHolder">
						<h5 class="dinRegular">Secure</h5>
						<p>Guarantee that your transactions are 100% safe</p>
					</div>
				</div>
			</div>
			<div class="buttonHold">
				<a href="https://online.hellopaisa.co.uk/registration" onClick="ga('send', { 'hitType': 'event', 'eventCategory': 'www.hellopaisa.co.uk', 'eventAction': 'Signup Click', 'eventLabel': '<ClientID>' });">
					<button class="gradientBg dinBlack">Sign Up Now</button>
				</a>
			</div>
		</div>
	</div>

	<div id="howItWorks">
		<div class="bgImageCenterCenter">
			<video id="bgVideo" src="<?php bloginfo('template_directory'); ?>/videos/how-hello-paisa-works/video.mp4" playsinline controls autoplay="true" muted="true" loop="true"></video>
			<img id="longVideoTransparent" src="<?php bloginfo('template_directory'); ?>/images/how-it-works/16x9.png">
			<img id="video4x3" src="<?php bloginfo('template_directory'); ?>/images/how-it-works/video-mobile-view.png">
			<div title="Close" class="muteVideo">
			</div>
			<div id="videoBlock" class="block alignCenter">
				<div class="verticalCover">
					<div class="verticalOne">
						<img id="playPauseVideo" src="<?php bloginfo('template_directory'); ?>/images/icons/play-button.svg">
						<h1 class="dinBlack">How HelloPaisa Works?</h1>
						<p>Don’t just take our word for it, hear first hand reviews from our customers</p>
					</div>
				</div>					
			</div>
		</div>
	</div>

	<div id="btmElem" class="bgImageTopCenter" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/how-hello-paisa-works/bg.jpg);">
		<div id="contactForm">
			<div class="verticalCover">
				<div class="verticalOne">
					<div class="container">
						<div class="col-1-2">
							<h2 class="dinBlack">WE’D LOVE TO<br>HEAR FROM YOU</h2>
							<p id="callCentre">Call Centre</p>
							<h3>
								0203 384 4483<br>
								<a href="mailto:info@hellopaisa.co.uk">
									info@hellopaisa.co.uk
								</a>
							</h3>
							<a href="HP-Remittance-Portal.pdf" download onClick="ga('send', { 'hitType': 'event', 'eventCategory': 'www.hellopaisa.co.uk', 'eventAction': 'UserManual Click', 'eventLabel': '<ClientID>' });">
								<button id="userManual">User Manual</button>
							</a>
						</div>
						<div class="col-1-2">
							<div id="errors"></div>
							<div id="mainForm">
								<form id="sendEmail" method="post" url="<?php echo get_site_url(); ?>/sendEmail.php">
									<input type="hidden" id="chosenCountry" name="country" value="<?php the_title(); ?>">
									<table>
										<tr><td><input onpaste="return false;" class="alphaSpace" name="firstName" placeholder="YOUR NAME"></td></tr>
										<tr><td><input onpaste="return false;" class="alphaSpace" name="surName" placeholder="YOUR SURNAME"></td></tr>
										<tr><td class="mobileNumberHolder"><input onpaste="return false;" id="mobileNumber" class="onlyNumeric" name="mobileNumber" placeholder="[Eg: 2001209029]" maxlength="10"></td></tr>
										<tr><td><input onpaste="return false;" type="email" name="email" placeholder="YOUR EMAIL [Eg: user@domain.com]"></td></tr>
										<tr><td><input onpaste="return false;" class="alphaSpace" name="suburb" placeholder="CITY"></td></tr>
										<tr>
											<td>
												<div class="countryListContactForm sourceCountrySelector" action-type="contact-form" onclick="ga('send', 'event', 'Select Countries', 'click', '#');">
													<div>
														<span>Country to Remit to</span>
													</div>
													<div class="iconHolder">
														<img class="withBorder" id="contactCountryFlag" src="<?php echo the_post_thumbnail_url(); ?>">
														<span id="contactCountryCode"><?php echo get_post_meta( get_the_ID(), 'destinationCurrency', true );?></span>
														<img class="smallIcon" src="<?php bloginfo('template_directory'); ?>/images/contact/arrow-down.svg">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<button id="sendMailButton" data-callback="submitForm">
													<script type="text/javascript">
														function submitForm()
														{
															$('form#sendEmail').submit();
														}
													</script>
													SEND
													<div id="loaderImage">
					    								<img src='<?php bloginfo('template_directory'); ?>/images/icons/loader.gif'/>
					    							</div>
												</button>
											</td>
										</tr>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<h5>2nd Floor, Charles II Street, SW1Y 4AE, United Kingdom. Company registration number:08820633<br> Daytona Capital Management Ltd t/a Hello Paisa is Authorised and Regulated by the Financial Conduct Authority (FCA) under the Payment Service Regulations 2009 <br>for the provision of payment services. Registration number: 624019.- www.hellopaisa.co.uk (c) 2017 -  Powered by RemitONE LTD.<br><br><a href="<?php echo get_site_url(); ?>/Privacy-Policy.pdf" target="_blank">Privacy Policy</a></h5>
			<ul class="info">
				<li><a href="http://hellogroup.co.za/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer/hello-group.svg"></a></li>
				<li><a href="https://twitter.com/hellopaisaUK" onClick="ga('send', 'pageview', 'Twitter Click');" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/footer/twitter.svg"></a></li>
				<li><a href="https://www.facebook.com/hellopaisaUK" onClick="ga('send', { 'hitType': 'event', 'eventCategory': 'www.hellopaisa.co.uk', 'eventAction': 'Facebook Click', 'eventLabel': '<ClientID>' });" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/social/footer/facebook.svg"></a></li>
				<li class="loadFbMessengerFooter" onClick="ga('send', 'event', 'Messenger Click');">
					<img src="<?php bloginfo('template_directory'); ?>/images/social/footer/messenger.svg">
					<div id="facebookContainerFooter">
						<div class="fb-page" data-href="https://www.facebook.com/hellopaisaUK" data-tabs="messages" data-width="260" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/hellopaisaUK" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/hellopaisaUK">Hello Paisa UK</a>
							</blockquote>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

<?php get_footer();?>
