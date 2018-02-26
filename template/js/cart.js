jQuery(document).ready(function () {  

	// Убрать прилипание меню на странице москитной сетки
	if ( window.location.href.match(/cart/) ) {

		if ($('table .item-net-row').length > 0) {
					// Появление полей имя, телефон и кнопки "Отправить"
					$('#person-name-wrap').parent().show();
					$('#person-phone-wrap').parent().show();
					$('#btn-submit').parent().parent().show();
					$('#agreement-wrap').show();
					$('table thead').show();
					$('h1').text('Корзина');
		}
	
		// Подставляем в итоговый ряд итоговое количество товаров
		$('table .final-row .final-quantity-goods').text( calcFinalQuantity() );

		// Подставляем в итоговый ряд итоговую сумму товаров
		$('table .final-row .final-sum b').text( (separateThousands(calcFinalSum() ) ) + ' руб.' );
	}

	$('.cart-wrap #btn-submit').click(function() {
			$('table td img').parent().remove();
			$('table th.remove').remove();
			$('#hidden-text').val( $('table').html() );

	});

});

