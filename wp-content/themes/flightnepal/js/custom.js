$(function(){

	// ================== Table of Content =====================
	//
	// 		1. Common Javascript
	//			1.1 Loading Effect
	// 			1.2 Move to the Block
	//			1.3 Auto Scroll
	//			1.4 Escape Press
	//			1.5 Menu Open / Close
	//
	// ============================================================

	// =======================================
	//			1. Common Javascript
	// =======================================

		// ================================================================
		//			1.1 Loading Effect
		// ================================================================

			var openLoader = function()
			{
				$('#loader').show();
			};

			var closeLoader = function()
			{
				$('#loader').hide();
			};

		// ================================================================
		//			1.2 Move to the Block
		// ================================================================

			$('a[href^="#"]').on('click',function (e)
			{
				e.preventDefault();
				var target = this.hash;
				var $target = $(target);
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top - 120
				}, 'slow');
			});

		// ================================================================
		//			1.3 Auto Scroll
		// ================================================================

			if(location.hash)
			{
				var hash = location.hash;
				window.scroll(0,0);
				$("a[href="+hash+"]").click();
			}

		// ================================================================
		//			1.4 Escape Press
		// ================================================================

			$(document).keyup(function(e)
			{
               	if (e.keyCode == 27)
               	{
            		closeMenu();
            		closeNotification();
               	}
        	});

        // ================================================================
		//			1.5 Menu Open / Close
		// ================================================================

			$('img#menuButton').on('click', function()
			{
				openMenu();
			});

			$('.transparentMenuActive').on('click', function()
			{
				closeMenu();
			});

			var openMenu = function()
			{
				$('nav').animate(
				{
					"left": 0
				}, 200);
				$('.transparentMenuActive').fadeIn(200);
			};

			var closeMenu = function()
			{
				$('nav').animate(
				{
					"left": -220
				}, 200);
				$('.transparentMenuActive').fadeOut(200);
			};

		// ================================================================
		//			1.6 Countries
		// ================================================================

			$(document).ready(function()
			{
				let append = '';
				$.each(countries, function(key, value) {
					append += '<li data="' + value.code.toLowerCase() + '" code="' + value.dial_code + '" >';
					append += '<div class="f" style="background-image: url(https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/' + value.code.toLowerCase() + '.svg);">';
					append += '</div>';
					append += '<p>' + value.name + '</p>';
					append += '</li>';
				});
				$('ul.countriesList').html(append);
			});

			$(document).on('click', '.openCountrySelector', function(e)
	    	{
	    		$(this).parents().eq(1).find('.phone-holder').toggleClass('active');
	    	});

			$(document).on('click', 'ul.countriesList li' , function(e)
	    	{
	    		let countryCode = $(this).attr('data');
	    		let countryDialCode = $(this).attr('code');
	    		$(this).parents().eq(1).find('.flag').css('background-image', 'url(https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/' + countryCode + '.svg)');
				$(this).parents().eq(1).find('.code').html(countryDialCode);
				$('.phone-holder').removeClass('active');
	    	});

	    // ================================================================
		//			1.7 Group Size
		// ================================================================

			const groupSize = ['1','2','3','4','5','6','7','8','9','10', '10+'];
			const hotelRooms = ['1','2','3','4','4+'];
			const hotelAdults = ['1','2','3','4','5','6','7','8','8+'];
			const hotelChildren = ['0','1','2','3','4','5','6','6+'];
			const hotelType = ['1','2','3','4','5'];

			const pad = (d) => {
			    return (d < 10) ? '0' + d.toString() : d.toString();
			}

			const generateBookingRefNo = (str) => 
			{
				const d = new Date();
				return 'FN-' + str + '-' + d.getFullYear() + '' + pad(d.getMonth()) + '' + d.getDate() + '' + pad(d.getHours()) + '' + d.getMinutes() + '' + d.getSeconds();
			};

			$(document).ready(function()
			{
				let appendGroupSize = '<option value="">Select your group size</option>';
				$.each(groupSize, function(key, value) {
					appendGroupSize += '<option value="' + value + '" >' + value + '</option>';
				});
				$('select.groupSize').html(appendGroupSize);

				let appendHotelRooms = '<option value="">How many rooms?</option>';
				$.each(hotelRooms, function(key, value) {
					appendHotelRooms += '<option value="' + value + '" >' + value + '</option>';
				});
				$('select.hotelRooms').html(appendHotelRooms);

				let appendHotelAdults = '<option value="">How many adults?</option>';
				$.each(hotelAdults, function(key, value) {
					appendHotelAdults += '<option value="' + value + '" >' + value + '</option>';
				});
				$('select.hotelAdults').html(appendHotelAdults);

				let appendHotelChildren = '<option value="">How many children?</option>';
				$.each(hotelChildren, function(key, value) {
					appendHotelChildren += '<option value="' + value + '" >' + value + '</option>';
				});
				$('select.hotelChildren').html(appendHotelChildren);

				let appendHotelType = '<option value="">Select your preference</option>';
				$.each(hotelType, function(key, value) {
					appendHotelType += '<option value="' + value + ' star' + '" >' + value + ' star' + '</option>';
				});
				$('select.hotelType').html(appendHotelType);
			});

	// =======================================
	//			2. Home Page
	// =======================================		
		
		// ================================================================
		//			2.0 Datepicker
		// ================================================================
			
			jQuery(document).ready(function($)
			{
				$(document).on('focus', 'input.datepickerDate' , function(e)
	        	{
	        		$(this).datepicker();
	        	});
			});

		// ================================================================
		//			2.1 Form Tab
		// ================================================================

			$('#home ul.selectors li').on('click', function(){
				$('#home ul.selectors li').removeClass('active');
				$(this).addClass('active');
				$('#home .content .one').removeClass('content-active');
				var tab = $(this).attr('data');
				$('#' + tab).addClass('content-active');
			});

		// ================================================================
		//			2.2 Form Validation
		// ================================================================

			function getTodaysDate(dt)
			{
				const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    			const date = monthNames[dt.getMonth()] + ' ' + dt.getDate() + ', ' + dt.getFullYear();
    			return date;
			}

			$('#home input[name="flight-type"]').on('click', function()
			{
				let val = $(this).val();
				if(val == 'Round Trip') {
					$('#home table tr.return').show();
					$('#home table tr.add-city').hide();
					$('#home input#return').attr('required', true);
					if($('#home table tbody.append tr.col-3').length > 1) {
						$('#home table tbody.append tr.col-3:nth-child(n + 2)').remove();
					}
				}
				else if(val == 'Multi City') {
					$('#home input#return').attr('required', false);
					$('#home table tr.return').hide();
					$('#home table tr.add-city').show();

					if($('#home table tbody.append tr.col-3').length < 2) {
						var tr = '<tr class="col-3"><td colspan="4" class="origin-destination-ip-holder"><label>Origin <br><input type="text" required name="origin[1]" class="origin-ip form" autocomplete="off" placeholder="KTM"></label><ul class="dropdown originDropdown"></ul></td><td colspan="4" class="origin-destination-ip-holder"><label>Destination <br><input type="text" required name="destination[1]" class="destination-ip form" autocomplete="off" placeholder="TOK"></label><ul class="dropdown destinationDropdown"></ul></td><td colspan="4"><label>Departure <br><input type="text" required name="departure[1]" autocomplete="off" class="form datepickerDate" placeholder="' + getTodaysDate(new Date()) +'"></label></td></tr>';

						$('#home table tbody.append').append(tr);
					}
				}
				else {
					$('#home input#return').attr('required', false);
					$('#home table tr.return').hide();
					$('#home table tr.add-city').hide();
					if($('#home table tbody.append tr.col-3').length > 1) {
						$('#home table tbody.append tr.col-3:nth-child(n + 2)').remove();
					}
				}
			});

			$('#home .content table tr.add-city p').on('click', function()
			{
				let len = $('#home table tbody.append tr.col-3').length;
				if(len < 5) {
					var tr = '<tr class="col-3"><td colspan="3" class="origin-destination-ip-holder"><label>Origin <br><input type="text" required name="origin[' + len + ']" class="origin-ip form" autocomplete="off" placeholder="KTM"></label><ul class="dropdown originDropdown"></ul></td><td colspan="3" class="origin-destination-ip-holder"><label>Destination <br><input type="text" required name="destination[' + len + ']" class="destination-ip form" autocomplete="off" placeholder="TOK"></label><ul class="dropdown destinationDropdown"></ul></td><td colspan="3"><label>Departure <br><input type="text" required name="departure[' + len + ']" autocomplete="off" class="form datepickerDate" placeholder="' + getTodaysDate(new Date()) +'"></label></td><td colspan="3"><p class="remove">Remove</p></td></tr>';
					$('#home table tbody.append').append(tr);
				}
			});

			$(document).on('click', '#home .content table tr td p.remove' , function() 
			{
     			$('#home table tbody.append tr.col-3:last-child').remove();
			});

		// ================================================================
		//			2.3 Airport Populate
		// ================================================================

			// ================================================================
			//			2.3.1 Origin
			// ================================================================
				
				$(document).on('keyup', 'input.origin-ip' , function(e)
				{
					let value = $(this).val();
					if((value.length > 2) && (value.length < 50))
					{
						var search = new RegExp(value , 'i');
						let results = airports.filter((a) => search.test(a.code) || search.test(a.name) || search.test(a.city));
						$(this).parents().eq(1).find('ul.originDropdown').show();
						let append = '';
						if(results.length > 0) {
							$.each(results, function(key, value) {
								append += '<li data="' + value.code + '"><span>' + value.code + '</span>' + ' - ' + value.name + ', ' + value.city + '</li>';
							});
						}
						else {
							append += '<li>No results found!</li>';
						}
						$('ul.originDropdown').html(append);
						document.addEventListener('click', clickOutsideOriginInput, false);
					}
					else 
					{
						$('ul.originDropdown').html('');
						$('ul.originDropdown').hide();
						document.removeEventListener('click', clickOutsideOriginInput, false);
					}
				});

				function clickOutsideOriginInput()
				{
					$('body').click(function (event)
					{
						if ($(event.target).is($('ul.originDropdown li')))
						{
							return;
						} 
						else 
						{
							$('ul.originDropdown').html('');
							$('ul.originDropdown').hide();
							document.removeEventListener('click', clickOutsideOriginInput, false);
						}
					});
				}
				
				$(document).on('click', 'ul.originDropdown li' , function(e)
	        	{
	        		let val = $(this).attr('data');
	        		$(this).parents().eq(1).find('input.origin-ip').val(val);
	        		$('ul.originDropdown').html('');
					$('ul.originDropdown').hide();
					document.removeEventListener('click', clickOutsideOriginInput, false);
	        	});

	        // ================================================================
			//			2.3.2 Destination
			// ================================================================

	        	$(document).on('keyup', 'input.destination-ip' , function(e)
				{
					let value = $(this).val();
					if((value.length > 2) && (value.length < 50))
					{
						var search = new RegExp(value , 'i');
						let results = airports.filter((a) => search.test(a.code) || search.test(a.name) || search.test(a.city));
						$(this).parents().eq(1).find('ul.destinationDropdown').show();
						let append = '';
						if(results.length > 0) {
							$.each(results, function(key, value) {
								append += '<li data="' + value.code + '"><span>' + value.code + '</span>' + ' - ' + value.name + ', ' + value.city + '</li>';
							});
						}
						else {
							append += '<li>No results found!</li>';
						}
						$('ul.destinationDropdown').html(append);
						document.addEventListener('click', clickOutsideDestinationInput, false);
					}
					else 
					{
						$('ul.destinationDropdown').html('');
						$('ul.destinationDropdown').hide();
						document.removeEventListener('click', clickOutsideDestinationInput, false);
					}
				});

				function clickOutsideDestinationInput()
				{
					$('body').click(function (event)
					{
						if ($(event.target).is($('ul.destinationDropdown li')))
						{
							return;
						} 
						else 
						{
							$('ul.destinationDropdown').html('');
							$('ul.destinationDropdown').hide();
							document.removeEventListener('click', clickOutsideDestinationInput, false);
						}
					});
				}

				$(document).on('click', 'ul.destinationDropdown li' , function(e)
	        	{
	        		let val = $(this).attr('data');
	        		$(this).parents().eq(1).find('input.destination-ip').val(val);
	        		$('ul.destinationDropdown').html('');
					$('ul.destinationDropdown').hide();
					document.removeEventListener('click', clickOutsideDestinationInput, false);
	        	});

        // ================================================================
		//			2.4 Range Preview
		// ================================================================

			$(document).on('input', '#tourBudget', function()
			{
				$('#tourBudgetInput').val($(this).val());
			});

			$(document).on('input', '#hotelBudget', function()
			{
				$('#hotelBudgetInput').val($(this).val());
			});

			$(document).on('input', '#activityBudget', function()
			{
				$('#activityBudgetInput').val($(this).val());
			});

        // ================================================================
		//			2.5 Destinations
		// ================================================================

			$(document).ready(function()
			{
				if($('.tourSingleFormHolder').length > 0)
				{
					let defaultTourValue = $('.tourSingleFormHolder').attr('data');
					let appendDefaultTour = '<option value="' + defaultTourValue + '">' + defaultTourValue + '</option>';
					$('select.allTourDestinations').html(appendDefaultTour);
					$('select.allTourDestinations').addClass('notAllowed');
				}
				else
				{
					let appendTour = '<option value="">Where are you going?</option>';
					$.each(countries, function(key, value) {
						appendTour += '<option value="' + value.name + '" >' + value.name + '</option>';
					});
					$('select.allTourDestinations').html(appendTour);
				}

				if($('.hotelSingleFormHolder').length > 0)
				{
					let defaultHotelValue = $('.hotelSingleFormHolder').attr('data');
					let appendDefaultHotel = '<option value="' + defaultHotelValue + '">' + defaultHotelValue + '</option>';
					$('select.allHotelDestinations').html(appendDefaultHotel);
					$('select.allHotelDestinations').addClass('notAllowed');
				}
				else
				{
					let appendHotel = '<option value="">Where are you going?</option>';
					$.each(countries, function(key, value) {
						appendHotel += '<option value="' + value.name + '" >' + value.name + '</option>';
					});
					$('select.allHotelDestinations').html(appendHotel);
				}

				if($('.activitySingleFormHolder').length > 0)
				{
					let defaultActivityValue = $('.activitySingleFormHolder').attr('data');
					let appendDefaultActivity = '<option value="' + defaultActivityValue + '">' + defaultActivityValue + '</option>';
					$('select.allActivityDestinations').html(appendDefaultActivity);
					$('select.allActivityDestinations').addClass('notAllowed');
				}
				else
				{
					let appendActivity = '<option value="">Where are you going?</option>';
					$.each(countries, function(key, value) {
						appendActivity += '<option value="' + value.name + '" >' + value.name + '</option>';
					});
					$('select.allActivityDestinations').html(appendActivity);
				}
				
				// Pre-populate Booking Ref No

				if($('#tourBookingIdInput').length > 0) 
				{
					let refNo = generateBookingRefNo('T');
					$('#tourBookingIdInput').html('<option value="' + refNo + '">' + refNo + '</option>');	
				}

				if($('#hotelBookingIdInput').length > 0) 
				{
					let refNo = generateBookingRefNo('H');
					$('#hotelBookingIdInput').html('<option value="' + refNo + '">' + refNo + '</option>');	
				}

				if($('#activityBookingIdInput').length > 0) 
				{
					let refNo = generateBookingRefNo('A');
					$('#activityBookingIdInput').html('<option value="' + refNo + '">' + refNo + '</option>');		
				}

			});

		// ================================================================
		//			2.6 Flight Booking Form Submit
		// ================================================================

			$(document).on('keydown', 'input.phoneNumberInput' , (evt) => 
			{
			    evt = (evt) ? evt : window.event;
			    var charCode = (evt.which) ? evt.which : evt.keyCode;
			    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			        return false;
			    }
			    return true;
			});

			$("#flightBookingForm").submit((e) => 
			{
  				e.preventDefault();
  				let formData = {
  					flightType: $('#flightBookingForm').find("input[name='flight-type']:checked").val(),
  					trips: [],
  					returnDate:  $('#flightBookingForm').find("input[name='returnDate']").val(),
  					name: $('#flightBookingForm').find("input[name='fullname']").val(),
  					email: $('#flightBookingForm').find("input[name='email']").val(),
  					phone: $('#flightBookingForm').find(".phone-holder .code").html() + $('#flightBookingForm').find("input[name='phoneNumber']").val(),
  					note: $('#flightBookingForm').find("textarea[name='note']").val()
  				};

  				for (var i = 0; i < 5; i++) 
  				{
  					let originValue = $('#flightBookingForm').find("input[name='origin[" + i + "]']").val();
  					if(originValue != undefined)
  					{
						formData.trips.push(
						{
							origin: originValue,
							destination: $('#flightBookingForm').find("input[name='destination[" + i + "]']").val(),
							departure: $('#flightBookingForm').find("input[name='departure[" + i + "]']").val()
						}
						);
  					}
  				}

				$('#formPreview').fadeIn(200);
				let baseURL = $("#formPreview").attr('site-url');

				var wpcf7Elm = document.querySelector( '.wpcf7' );
				wpcf7Elm.addEventListener('wpcf7mailsent', function( event ) 
				{
					$('#formPreview').hide();
  					window.location.replace(baseURL + '?flight-booking-enquiry=success');
				}, false );

				// Set values for the main form

				let templateURL = $("#flightBookingForm").attr('base-url');

				$('#formPreview').find('.fullName').html(formData.name);				
				$('#formPreview').find('img.flightTypeIcon').attr('src', templateURL + '/images/pages/home/form/' + getURLString(formData.flightType) + '.svg');
				$('#formPreview').find('span.flightType').html(formData.flightType);
				let trips = '';
				$.each(formData.trips, (key, value) =>
				{
					trips += '<tr><td colspan="2"><p><strong>Flight (' + (key + 1) + ')</strong></p></td></tr>';
					trips += '<tr>';
						trips += '<td><p>Origin</p></td>';
						trips += '<td><p><img src="' + templateURL + '/images/pages/home/form/origin.svg' + '"><span>' + getAirportDataByCode(value.origin) + '</span></p></td>';
					trips += '</tr>';
					trips += '<tr>';
						trips += '<td><p>Destination</p></td>';
						trips += '<td><p><img src="' + templateURL + '/images/pages/home/form/destination.svg' + '"><span>' + getAirportDataByCode(value.destination) + '</span></p></td>';
					trips += '</tr>';
					trips += '<tr>';
						trips += '<td><p>Departure</p></td>';
						trips += '<td><p><img src="' + templateURL + '/images/pages/home/form/date.svg' + '"><span>' + value.departure + '</span></p></td>';
					trips += '</tr>';
				});
				$('#formPreview').find('tbody.trips').html(trips);
				if(formData.flightType == 'Round Trip')
				{
					$('#formPreview').find('tr.return-block').show();
					$('#formPreview').find('span.returnDate').html(formData.returnDate)
				}
				$('#formPreview').find('span.email').html(formData.email);
				$('#formPreview').find('span.phone').html(formData.phone);
				$('#formPreview').find('span.note').html(formData.note);

				// Assign Respective Values
				
				$('#flight-input-elements').find('input[name="flight-type"]').val(formData.flightType);
				if(formData.flightType == 'Round Trip') 
				{
					$('#flight-input-elements').find('input[name="return-date"]').val(formData.returnDate);	
				}
				else 
				{
					$('#flight-input-elements').find('input[name="return-date"]').val('-');
				}
				
				for (var i = 0; i < 5; i++) 
				{
					let origin_elem = $('#flight-input-elements').find('input[name="origin_' + (i + 1) + '"]');
					let destination_elem = $('#flight-input-elements').find('input[name="destination_' + (i + 1) + '"]');
					let departure_elem = $('#flight-input-elements').find('input[name="departure_' + (i + 1) + '"]');
					let obj = formData.trips[i];
					if(obj !== undefined) {
						origin_elem.val(obj.origin);
						destination_elem.val(obj.destination);
						departure_elem.val(obj.departure);
					}
					else {
						origin_elem.val('-');
						destination_elem.val('-');
						departure_elem.val('-');
					}
				}
				$('#flight-input-elements').find('input[name="fullname"]').val(formData.name);
				$('#flight-input-elements').find('input[name="contact-email"]').val(formData.email);
				$('#flight-input-elements').find('input[name="contact-phone"]').val(formData.phone);
				$('#flight-input-elements').find('textarea[name="contact-message"]').val(formData.note);
				$('#flight-input-elements').find('input[name="booking_id"]').val(generateBookingRefNo('F'));
			});

			const getURLString = (string) => 
			{
				return string.toLowerCase().replace(" ", "-");
			};

			const getAirportDataByCode = (code) => 
			{
				const result = airports.find((a) => a.code == code);
				if(result != undefined) {
					return result.code + ' - ' + result.name + ', ' + result.city;
				}
				else
				{
					return code;
				}
			};

			const openNotification = (result, title, msg) => 
			{
				$('#notification h6').removeClass().addClass(result).html(title);
				const append = '<p>' +  msg + '</p>';
				$('#notification .msg').html(append);
				$('#notification').animate({
					right: '20px'
				}, 400);
				setTimeout(() => 
				{
					closeNotification();
				}, 6000);
			};

			// Check if the page has query parameter

			const getURLVars = () =>
			{
			    var vars = [], hash;
			    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
			    for(var i = 0; i < hashes.length; i++)
			    {
			        hash = hashes[i].split('=');
			        vars.push(
			        	{
			        		q: hash[0],
			        		v: hash[1]
			        	}
			        );
			    }
			    return vars;
			}

			jQuery(document).ready(function($)
			{
				const urlVars = getURLVars();
				if((urlVars[0].q == 'flight-booking-enquiry') && (urlVars[0].v == 'success'))
				{
					openNotification('success', 'Thank you', 'Thank you for your enquiry. We have successfully received your request.');
				}
			});

		// ================================================================
		//			2.7 Flight Booking Preview
		// ================================================================

			$('#cancelPreview').on('click', () => 
			{
				$('#formPreview').fadeOut(200);
			});

			$('#closePreview').on('click', () => 
			{
				$('#formPreview').fadeOut(200);
			});

			$('#updateDetails').on('click', () => 
			{
				$('#formPreview').fadeOut(200);
				setTimeout(() => 
				{
					$('html, body').stop().animate({
						'scrollTop': $('#flight-tab').offset().top - 120
					}, 'slow');
				}, 200);
			});

		// ================================================================
		//			2.8 Notification
		// ================================================================

			$('#notification img.close').on('click', () => 
			{
				closeNotification();
			});

			let closeNotification = () => {
				$('#notification').animate({
					right: '-400px'
				}, 600);
			}

	// =======================================
	//			3. FAQs Page
	// =======================================

		// ================================================================
		//			3.1 FAQs Tab
		// ================================================================

			$('ul.faqs li').on('click', function(){
				$('ul.faqs li').removeClass('active');
				$(this).addClass('active');
				$('.faqs-content .inner').removeClass('active');
				var tab = $(this).attr('data');
				$('#' + tab).addClass('active');
			});

		// ================================================================
		//			3.2 FAQs Q&As
		// ================================================================
			
			$('.faqs-content ul.questions li h5').on('click', function() 
			{
				$('.faqs-content ul.questions li .answer').slideUp(200);
				$(this).parent().find(".answer").slideDown(200);
			});

	// =======================================
	//			4. Tour Single Page
	// =======================================

		// ================================================================
		//			4.1 Overview Tab
		// ================================================================
				
			$('ul#tour-tabs li').on('click', function() 
			{
				$('ul#tour-tabs li').removeClass('active');
				$(this).addClass('active');
			});

    // =======================================
	//			N. End
	// =======================================


});

