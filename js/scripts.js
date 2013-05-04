$('.item').click(function() {
	$('.hex', this).select();
	$('.copy', this).show();
});

$('.item .hex').blur(function() {
	$('.item .copy').hide();
});

$('.new').keyup(function() {
	var hexValue = $('#hex_input', this).val();
	if(hexValue.match(/^\#?[A-Fa-f0-9]{3}([A-Fa-f0-9]{3})?$/)) {
		$(this).css({ 'background':hexValue });
	}
});

$('#author_input').click(function(e) {
	e.stopPropagation();
	$(this).select();
});

$('#submit').click(function() {
	// add loading class spinner

	var hexValue = $('#hex_input').val();
	var authorValue = $('#author_input').val();

	if(hexValue.match(/^\#?[A-Fa-f0-9]{3}([A-Fa-f0-9]{3})?$/)) {
		$.ajax({
			type: "GET",
			url: "submit.php",
			data: {hex: hexValue, author: authorValue},
			success: function(data) {
				location.reload();
			},
			error: function() {
				alert("There has been an error submitting your hex word. Please try again.");
			}
		});
	} else {
		alert("This is not a valid hex colour. Please try again.");
	}
});