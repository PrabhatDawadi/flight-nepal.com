$(function(){

	$('a[href^="#"]').on('click',function (e)
	{
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 120
		}, 'slow');
	});

	if(location.hash)
	{
		var hash = location.hash;
		window.scroll(0,0);
		$("a[href="+hash+"]").click();
	}

	$(document).keyup(function(e)
	{
		if (e.keyCode == 27)
		{
			closeMenu();
			closeNotification();
		}
	});

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

	// ====== Home Landing ====== //

	var removeActivePlanFromList = function() 
	{
		$('ul#planning-options li').removeClass('no-show');
		const ACTIVE_PLAN = $('.selected-planning').attr('data-plan');
		const s = $('ul#planning-options').find("[data-plan='" + ACTIVE_PLAN + "']").addClass('no-show');
	}
	removeActivePlanFromList();
	
	$(document).on('click', '#planning', function()
	{
		document.addEventListener('click', clickOutsidePlanningOptions, false);
		$('#planning-options').show();
	});

	$(document).on('click', 'ul#planning-options li', function(e) {
		document.removeEventListener('click', clickOutsideOriginInput, false);
		const url = $(this).attr('data-url');
		const plan = $(this).attr('data-plan');
		const txt = $(this).find('p').html();
		$('.selected-planning').html(txt);
		$('.selected-planning').attr('data-url', url);
		$('.selected-planning').attr('data-plan', plan);
		$('#planning-options').hide();
		removeActivePlanFromList();
	});

	function clickOutsidePlanningOptions()
	{
		$('body').click(function (event)
		{
			if ($(event.target).is($('#planning-options li'))) {
				return;
			} 
			else {
				document.removeEventListener('click', clickOutsideOriginInput, false);
				$('#planning-options').hide();
				removeActivePlanFromList();
			}
		});
	}

	$(document).on('click', 'button#plan-go', function(e) {
		const url = $('p.selected-planning').attr('data-url');
		window.location.href = url;
	});

	// ====== Countries Populate ====== //

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

	// ====== Form Populate ====== //

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

	jQuery(document).ready(function($)
	{
		$('.datepickerDate').val(getTodaysDate(new Date()));
		$(document).on('focus', 'input.datepickerDate' , function(e)
		{
			$(this).datepicker();
		});
	});

	// ====== Input Ranges ====== //

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

	// ====== FAQ Tabs ====== //

	$('ul.faqs li').on('click', function(){
		$('ul.faqs li').removeClass('active');
		$(this).addClass('active');
		$('.faqs-content .inner').removeClass('active');
		var tab = $(this).attr('data');
		$('#' + tab).addClass('active');
	});

	$('.faqs-content ul.questions li h5').on('click', function() 
	{
		$(this).parent().find(".answer").slideToggle(200);
	});

	// ====== FLIGHT BOOKING FORM ====== //

	// ====== Origin Populate ====== //

	$(document).on('keyup', 'input.origin-ip' , function(e)
	{
		let value = $(this).val();
		if((value.length > 2) && (value.length < 50))
		{
			var search = new RegExp(value , 'i');
			let results = airports.filter((a) => search.test(a.code) || search.test(a.name) || search.test(a.city));
			$(this).parents().eq(2).find('ul.originDropdown').show();
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

	// ====== Destination Populate ====== //

	$(document).on('keyup', 'input.destination-ip' , function(e)
	{
		let value = $(this).val();
		if((value.length > 2) && (value.length < 50))
		{
			var search = new RegExp(value , 'i');
			let results = airports.filter((a) => search.test(a.code) || search.test(a.name) || search.test(a.city));
			$(this).parents().eq(2).find('ul.destinationDropdown').show();
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

	// ====== Flight Type Selection ====== //

	const resetNewCities = () => {
		for (let index = 2; index < 6; index++) {
			$('input[name="origin_' + index + '"]').val('-');
			$('input[name="destination_' + index + '"]').val('-');
			$('input[name="departure_' + index + '"]').val(getTodaysDate(new Date()));
		}
	}

	const noNewCities = () => {
		$('.book-a-flight table tr.multiCity').hide();
	}

	var oneWayFlightSetting = function() {
		$('input[name="return-date"]').val(getTodaysDate(new Date()));
		resetNewCities();
		$('.book-a-flight table tr.returnDate').hide();
		noNewCities();
	};

	oneWayFlightSetting();

	var roundTripFlightSetting = function() {
		$('.book-a-flight table tr.returnDate').show();
		$('input[name="return-date"]').val(getTodaysDate(new Date()));
		resetNewCities();
		noNewCities();
	};

	var multiCityFlightSetting = function() {
		$('input[name="return-date"]').val('Ret-N/A');
		$('.book-a-flight table tr.returnDate').hide();
		$('.book-a-flight table tr.multiCity').show();

		$('input[name="origin_2"]').val('');
		$('input[name="destination_2"]').val('');
		$('input[name="departure_2"]').val('');

		for (let index = 3; index < 6; index++) {
			$('input[name="origin_' + index + '"]').val('-');
			$('input[name="destination_' + index + '"]').val('-');
			$('input[name="departure_' + index + '"]').val(getTodaysDate(new Date()));
		}
	};

	function getTodaysDate(dt)
	{
		const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		const date = monthNames[dt.getMonth()] + ' ' + dt.getDate() + ', ' + dt.getFullYear();
		return date;
	}

	$('.book-a-flight input[name="flight-type"]').on('click', function()
	{
		let val = $(this).val();
		if(val == 'Round Trip') {
			roundTripFlightSetting();
		}
		else if(val == 'Multi City') {
			multiCityFlightSetting();
		}
		else {
			oneWayFlightSetting();
		}
	});

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

		if($('.promotionSingleFormHolder').length > 0)
		{
			let defaultActivityValue = $('.promotionSingleFormHolder').attr('data');
			let appendDefaultActivity = '<option value="' + defaultActivityValue + '">' + defaultActivityValue + '</option>';
			$('select.allPromotionDestinations').html(appendDefaultActivity);
			$('select.allPromotionDestinations').addClass('notAllowed');
		}
		else
		{
			let appendActivity = '<option value="">Where are you going?</option>';
			$.each(countries, function(key, value) {
				appendActivity += '<option value="' + value.name + '" >' + value.name + '</option>';
			});
			$('select.allPromotionDestinations').html(appendActivity);
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

		if($('#flightBookingIdInput').length > 0) 
		{
			let refNo = generateBookingRefNo('F');
			$('#flightBookingIdInput').html('<option value="' + refNo + '">' + refNo + '</option>');
			console.log(refNo);
		}
	});
	
});

