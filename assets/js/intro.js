$(document).ready(function(){
	$('.intro').fadeIn(2000);
	$(document).on('click', '#init', function() {
		$.ajax({
			"url": "src/Controllers/Budget.php/index",
			"type": "POST",
			success: function() {
				return true;
			},
			error: function () {
				console.log("Something went wrong!");
            }
		});
	});
});