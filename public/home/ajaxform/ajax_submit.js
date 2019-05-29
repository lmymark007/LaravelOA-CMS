$(document).ready(function() {

	$('form #response').hide();

	$('#submit').on('click', function(e) {
		e.preventDefault();
		/* Act on the event */

		var valid = '';
		var required = ' is required';
		var first_name = $('form #first_name').val();
		var email = $('form #email').val();
		var subject = $('form #subject').val();
		var textarea1 = $('form #textarea1').val();

		// Error message selector
		var fname_status = $('.input-fname-status');
		var email_status = $('.input-email-status');
		var subject_status = $('.input-subject-status');
		var message_status = $('.input-message-status');

		if (first_name = '' || first_name.length <= 2) {
			valid = 'invalid';
			fname_status.html('<p><span>*</span> Your full name ' + required + '</p>');
		} else {
			fname_status.html('');
		}

		if (!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid = 'invalid';
			email_status.html('<p><span>*</span> Your Email name is not valid.</p>');
		} else {
			email_status.html('');
		}

		if (subject = '' || subject.length <= 2) {
			valid = 'invalid';
			subject_status.html('<p><span>*</span> Your subject ' + required + '</p>');
		} else {
			subject_status.html('');
		}

		if(textarea1 = '' || textarea1.length <= 5){
			valid = 'invalid';
			message_status.html('<p><span>*</span> Your message ' + required + '</p>');
		} else {
			message_status.html('');
		}



		if(valid != '') {
			$('form #response').removeClass().addClass('response animated bounceIn warning')
			.html('' +  valid).fadeIn('fast');

		} else {
			var contactData =  $('form').serialize();
			console.log(contactData);
			$.ajax({
				type: 'POST',
				url: 'ajaxform/process.php',
				data: contactData,
				success: function(){
					$('#response').removeClass().addClass('animated fadeInDown success')
					.html("<h5>Thanks You for contacting with us. We will be reply soon</h5>").fadeIn();
					if($('#response').hasClass('success')) {
						setTimeout("$('#response').fadeOut('fast')", 5000);
					}
				},
				error: function() {
					$('#response').removeClass().addClass('animated fadeInDown alert error')
					.html("An error occured. Please Try again later").fadeIn();
				},
				complete: function() {
					$('form')[0].reset();
				}

			});
		}
	});
});