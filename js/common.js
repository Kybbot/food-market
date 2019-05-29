$(function() {
	
	$('#view-btn').on('click', function() {
		$('.dashboard-view').removeClass('hide');
		$('.dashboard-add').addClass('hide');
	});

	$('#add-btn').on('click', function() {
		$('.dashboard-add').removeClass('hide');
		$('.dashboard-view').addClass('hide');
	});

	$('#large-items').on('click', function() {
		$('.product-item-small').removeClass('product-item-small').addClass('product-item');
		$('.product-item-small-title').removeClass('product-item-small-title').addClass('product-item-title');
		$('.product-item-small-price').removeClass('product-item-small-price').addClass('product-item-price');
	});

	$('#small-items').on('click', function() {
		$('.product-item').removeClass('product-item').addClass('product-item-small');
		$('.product-item-title').removeClass('product-item-title').addClass('product-item-small-title');
		$('.product-item-price').removeClass('product-item-price').addClass('product-item-small-price');
	});

	$(".subscription-form").submit(function(event) {

		event.preventDefault();

		let email = $('.email').val();

		if ( email == '' ) {
			alert("Заполните пожалуйста поля!")
		} else {
			$.ajax({
				type: $(this).attr('method'),
				url: $(this).attr('action'),
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function() {
					$(".subscription-form").children().addClass('hide');
					$(".subscription-form").append("Спасибо за подписку!")
				}
			});
		}

	});

});
