$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "form.php", //Change
			data: th.serialize()
		}).done(function() {
			// alert("Письмо отправлено");
			$('#myModal').modal('show');
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});