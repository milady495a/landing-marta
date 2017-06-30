var total_slides = 3;

function nextSlide() {
	// Cogemos la slide actual visible
	var slide = $("div[id^='slider_']:visible")

	// Le sacamos el id
	slide_id = slide.attr('id');
	var id = slide_id.substr(7, 1);

	// Le sumamos 1
	next_id = parseInt(id) + 1;

	// Si nos hemos pasado del total de slides, volvemos a la primera
	if (next_id > total_slides) {
		next_id = 1;
	}

	// Hacemos la transición
	slide.fadeOut('fast', function() {
		$('#slider_'+next_id).fadeIn('slow');
	});
}

function prevSlide() {
	// Cogemos la slide actual visible
	var slide = $("div[id^='slider_']:visible")

	// Le sacamos el id
	slide_id = slide.attr('id');
	var id = slide_id.substr(7, 1);

	// Le sumamos 1
	next_id = parseInt(id) - 1;

	// Si nos hemos pasado del total de slides, volvemos a la primera
	if (next_id < 1) {
		next_id = total_slides;
	}

	// Hacemos la transición
	slide.fadeOut('fast', function() {
		$('#slider_'+next_id).fadeIn('slow');
	});
}

$( document ).ready(function() {
	// setTimeout( function() {
	// 	$('#slider_1').fadeOut('slow', function() {
	// 		$('#slider_2').fadeIn();
	// 	});
	// }, 3000);
});
