jQuery(document).ready(function () {  

	// Убрать прилипание меню на странице москитной сетки
	if ( window.location.href.match(/moskit/) ) {
		$('#menu-wrap').removeClass('sticky-top');
	}

	// Если в "креплении" выбран "плунжер", появляется вопрос про "фетр"
	$('#fastening-content').on('change', function(){
			if ( $('#fastening-content option:selected').val() == 'fastening-plunger-4' ) {
							$('#fetr-wrap').parent().show();
			} else $('#fetr-wrap').parent().hide();
	});

	// Если фокус на поле width или height - убирается предупреждение о недопустимых значениях
	$('#width-net').on('focus', function() {
		 $('#wrong-width-height').hide();
	});
	$('#height-net').on('focus', function() {
		 $('#wrong-width-height').hide();
	});


	// Расчет стоимости москитной сетки ("Добавить к рассчету")
	$(document).on('click', '#btn-to-estim', function(e) {
		e.preventDefault();

		// Если длина (ширина) сетки не в нужных пределах
		if ( getNetWidth() < limits.width.min || 
			   getNetWidth() > limits.width.max ||
			   getNetHeight() < limits.height.min ||
			   getNetHeight() > limits.height.max ) {
					$('#wrong-width-height').show();
					return false;
		}

		// Появление полей имя, телефон и кнопки "Отправить"
		$('#person-name-wrap').parent().show();
		$('#person-phone-wrap').parent().show();
		$('#btn-submit').parent().parent().show();
		$('#agreement-wrap').show();

		var calculatedRow = 			
			'<tr class="item-net-row">' +
				'<input type="hidden" value='+ random() + '>' +
	      '<td class="text-goods">Москитная сетка: ' + 
	      	'вид: ' + getLinenText() + ', ' + 
	        'профиль рамки: ' + getProfileText() + ', ' +
	        'цвет рамки: ' + getColorText() + ', ' +
	        'ручка: ' + getHandleText() + ', ' +
	        'крепление: ' + getFasteningText() + ', ' +
	        'фетр: ' + getFetrText() + ', ' +
	        'саморезы: ' + getScrewsText() + ', ' +
	        'ширина сетки: ' + getNetWidth() + ' мм, ' +
	        'высота сетки: ' + getNetHeight() + ' мм' +
	      '</td>' + 
	      '<td class="quantity-goods">' + getQuantityCalc() + '</td>' +
	      '<td class="price-one-goods">' + separateThousands( calcPriceOneMoskit() ) + '</td>' +
	      '<td class="sum-goods">' + separateThousands( calcPriceQuantityMoskit() ) + '</td>' +
	      '<td><img src="/template/imgs/close.png" width="10" alt=""></td>' +
	    '</tr>'; 

	  var finalRow = 
	  	'<tr class="final-row">' +
	      '<td class="text-right"><b>Итого</b></td>' +
	      '<td class="final-quantity-goods"></td>' +
	      '<td style="border-right: 1px solid #f5f5f5"></td>' +
	      '<td class="final-sum nowrap"><b></b></td>' +
	      '<td></td>' +	  	  	      
	  	'</tr>';

		$('table').parent().parent().show();

		// Итоговая таблица после нажатия "к рассчету"
		if ( $('table tr').length == 1 ) {
						if ( $('table tr').hasClass('final-row') == false ) {
									 $('table tbody').append(calculatedRow);
								   $('table tbody').append(finalRow);
						}					
		} else $(calculatedRow).insertBefore( $('table .final-row') );

		// Подставляем в итоговый ряд итоговое количество товаров
		$('table .final-row .final-quantity-goods').text( calcFinalQuantity() );

		// Подставляем в итоговый ряд итоговую сумму товаров
		$('table .final-row .final-sum b').text( (separateThousands(calcFinalSum() ) ) + ' руб.' );

		// Сформированный заказ вставляем в скрытое поле для отправки на сервер
		$('#hidden-text').val( $('table').parent().html() );

		// Добавляет в корзину товар после калькуляции
		addToCart();
	
	});


	// Удаление строчки из итоговой таблицы заказа москитной сетки
	$(document).on('click', 'table img', function() {
			$(event.target).parent().parent().remove();
			
			if ( $('table tr').length == 2 ) {
						$('table .final-row').remove();
			}

			$('table .final-row .final-quantity-goods').text( calcFinalQuantity() );
			$('table .final-row .final-sum b').text( (separateThousands(calcFinalSum() ) ) + ' руб.' );
			
			// Удаляет товар из корзины после калькуляции
			var id = $(this).parent().parent().children('input').val();
			var quantity = $(this).parent().parent().children('.quantity-goods').text();

			$.ajax({
			  url: '/cart/del',
			  data: 'id=' + id + '&quantity=' + quantity,
			  type: 'post',
			  success: function(data) {
			    var cart = JSON.parse(data);
			    $('#quantity-goods').text(cart.quantity);
			    $('#quantity-goods-mob').text(cart.quantity);
			  }
			});

	});

});