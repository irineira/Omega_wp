$(document).ready(function() {

	console.log('here');

	$("#js-form--contact").submit(function() {

		console.log('form-submt');

		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/paletare/mail.php",
			data: str,
			success: function(msg) {

				console.log('form-submt-success');

				if (msg == 'OK') {
					result = 'Uw aanvraag is succesvol verzonden';
				}
				else {
					result = 'Error';
				}
				$("#c-form__result").html(result);
			}
		});
		return false;
	});
});