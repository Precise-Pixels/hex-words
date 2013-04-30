$('.item').click(function() {
	$('.hex', this).select();
	$('.copy', this).show();
});

$('.item .hex').blur(function() {
	$('.item .copy').hide();
});

$('.new').keyup(function() {
	var $hexValue = $('.hex', this).val();
	if($hexValue.match(/^\#?[A-Fa-f0-9]{3}([A-Fa-f0-9]{3})?$/)) {
		$(this).css({ 'background':$hexValue });
	}
});

$('#author_input').click(function(e) {
	e.stopPropagation();
	$(this).select();
});

$('#submit').click(function() {
	alert("Submit coming soon!");
});