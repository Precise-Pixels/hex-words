$('.item').click(function() {
	$('.hex', this).select();
	$('.copy', this).show();
});

$('.item .hex').blur(function() {
	$('.item .copy').hide();
});