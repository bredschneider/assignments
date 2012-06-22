// JavaScript Document
//console.log('top');
$(document).ready(function() {
	var userAvailable = $('.user-available');
	var emailAvailable = $('.email-available');
	var passwordReqs = 0;
	//console.log($('#username'));
	
	$('.hide').hide();
	$('.hidden').hide();
	$('#username').on('change', function (ev) {
		var username = $(this).val();
		
		userAvailable.attr('data-status', 'unchecked');
		
		//console.log('change');
		if (username.length >=3 && username.length<=25) {
			var ajax = $.post('check-username.php',{
				'username' :username
			});
			
			ajax.done(function (data) {
				if(data == 'available') {
					userAvailable
					.attr('data-status', 'available')
					.html('Available');
				}else {
					userAvailable
					.attr('data-status', 'unavailable')
					.html('Unavailable');
				}
			});
		}else {
			//console.log('unavail');
			userAvailable
				.attr('data-status', 'unavailable')
				.html('Unavailable');
		}
	});
	
	$('#password').on('keyup', function(ev) {
		var password = $(this).val();
		
		passwordReqs = 0;
		if (password.length > 5) {
			passwordReqs++;
			$('.pass-length').attr('data-state', 'achieved');
		}
		
		if (password.match(/[a-z]/)) {
			passwordReqs++;
			$('.pass-lowercase').attr('data-state', 'achieved')
		}
		
		if (password.match(/[A-Z]/)) {
			passwordReqs++;
			$('.pass-uppercase').attr('data-state', 'achieved')
		}
		
		if (password.match(/\d/)) {
			passwordReqs++;
			$('.pass-number').attr('data-state', 'achieved')
		}
		
		if (password.match(/[^a-zA-Z0-9]/)) {
			passwordReqs++;
			$('.pass-symbol').attr('data-state', 'achieved')
		}
	});
	
	$('#email').on('change', function(ev) {
		var email = $(this).val();
		emailAvailable.attr('data-event', 'unknown');
		
		//console.log('change');
		if (email.length >=3 && email.length<=25) {
			var ajax = $.post('check-email.php',{
				'email' :email
			});
			
			ajax.done(function (data) {
				if(data == 'available') {
					userAvailable
					.attr('data-event', 'available')
					.html('Available');
				}else {
					userAvailable
					.attr('data-event', 'unavailable')
					.html('Unavailable');
				}
			});
		}else {
			//console.log('unavail');
			emailAvailable
				.attr('data-event', 'unavailable')
				.html('Unavailable');
		}
	});
	
	$('#city').on('change', function (ev) {
		var city = $(this).val();
		
		if (city.match(/[a-z]/)) {
			
		}
		
		if (city.match(/[A-Z]/)) {
			
		}
	});
	
	$('#canada').on('click', function (ev) {
		$('.hide').show();
	});
	$('#america').on('click', function (ev) {
		$('.hidden').show();
	});
	
	$('form').on('submit', function (ev) {
		if (
			userAvailable.attr('data-status') == 'unchecked' 
			||userAvailable.attr('data-status') == 'unavailable'
			||passwordReqs < 5
		) {
			ev.preventDefault()
		}
	});
});