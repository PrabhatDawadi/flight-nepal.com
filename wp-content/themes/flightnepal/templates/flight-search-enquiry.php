<?php
/*
Template Name: Flight Search Enquiry
Template Post Type: page
*/
?>
	<?php 
		if(!isset($_POST['flight-type'])) {
			wp_redirect(get_site_url());
			exit;
		} 
	?>

	<?php get_header(); ?>

	<section class="common-page page-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/pages/common/flight.jpg);">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="breadrcumb-section">
		<div class="container">
			<ul class="breadcrumb">
				<li><a class="transition" href="<?php echo get_site_url(); ?>">Home</a></li>
				<li>Flight Search Enquiry</li>
			</ul>
		</div>
	</section>

	<?php 
		$flightType = ''; if(isset($_POST['flight-type'])){ $flightType = $_POST['flight-type']; }
		$origin = ''; if(isset($_POST['origin'])){ $origin = $_POST['origin']; }
		$destination = ''; if(isset($_POST['destination'])){ $destination = $_POST['destination']; }
		$departure = ''; if(isset($_POST['departure'])){ $departure = $_POST['departure']; }
		$return = ''; if(isset($_POST['return'])){ $return = $_POST['return']; }
		$adults = ''; if(isset($_POST['adults'])){ $adults = $_POST['adults']; }
		$children = ''; if(isset($_POST['children'])){ $children = $_POST['children']; }
		$infants = ''; if(isset($_POST['infants'])){ $infants = $_POST['infants']; }
		$cabin = ''; if(isset($_POST['cabin'])){ $cabin = $_POST['cabin']; }
	?>

	<section class="common-content enquiry">
		<div class="container">
			<div class="of-hid">
				<div class="f-left col-1-2 details">
					<h4>You're almost there,</h4>
					<p>Send us your details and we'll reserve the tickets for you</p>
					<br>
					<div class="common-form-elements">
						<input type="text" class="form" placeholder="Name">
						<input type="email" class="form" placeholder="Email">
						<input type="email" class="form" placeholder="Phone number">
						<textarea name="message" id="" cols="30" rows="10" class="form" placeholder="Message"></textarea>
						<br>
						<input type="submit" value="Inquire Now" class="transition">
					</div>
				</div>
				<div class="f-left col-1-2 enquiry-details">
					<h4>Your Inquiry Details</h4>
					<table>
						<tbody>
							<tr><td><p><strong>Ticket Type</strong></p></td><td><span><input disabled="true" value="<?php echo $flightType;?>"></span></td></tr>
						</tbody>
						<tbody class="ori-des-dep">
							<?php foreach ($origin as $key => $value) { ?>
								<tr class="no-bg"><td colspan="2"><p>Trip <?php echo ($key + 1); ?> :</p></td></tr>
								<tr><td><p><strong>Origin</strong></p></td><td><span><input disabled="true" value="<?php echo $_POST['origin'][$key];?>"></span></td></tr>
								<tr><td><p><strong>Destination</strong></p></td><td><span><input disabled="true" value="<?php echo $_POST['destination'][$key];?>"></span></td></tr>
								<tr><td><p><strong>Departure</strong></p></td><td><span><input disabled="true" value="<?php echo $_POST['departure'][$key];?>"></span></td></tr>
							<?php } ?>
						</tbody>
						<tbody>
							<?php if($return){ ?>
								<tr>
									<td>
										<p><strong>Return</strong></p>
									</td>
									<td>
										<span><input disabled="true" value="<?php echo $return;?>"></span>
									</td>
								</tr>
							<?php } else { ?>
								<input type="hidden">
							<?php }?>
							<tr><td><p><strong>Adults</strong></p></td><td><span><input disabled="true" value="<?php echo $adults;?>"></span></td></tr>
							<tr><td><p><strong>Children</strong></p></td><td><span><input disabled="true" value="<?php echo $children;?>"></span></td></tr>
							<tr><td><p><strong>Infants</strong></p></td><td><span><input disabled="true" value="<?php echo $infants;?>"></span></td></tr>
							<tr><td><p><strong>Cabin Class</strong></p></td><td><span><input disabled="true" value="<?php echo $cabin;?>"></span></td></tr>
						</tbody>
					</table>
					<p>Booking Reference Number : <?php echo 'FN-F-'.date_timestamp_get(date_create()); ?></p>
				</div>
			</div>
			<div class="of-hid">
				<br>
				<h4>FAQs :</h4>
				<br>
				<ul class="faqs">
					<li data="flight-faqs" class="active">Flight</li>
				</ul>
				<div class="faqs-content">
					<div id="flight-faqs" class="inner active">
						<ul class="questions">
							<?php get_faq_by_group('flight'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<!-- <?php
			echo do_shortcode(
				'[contact-form-7 id="33" title="Flight Booking Form"]'
			);
		?> -->
	</section>

<?php get_footer();?>














