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

		var calculatedRow = 			
			'<tr class="item-net-row">' +
				'<input type="hidden" value='+ random() + '>' +
	      '<td class="text-goods">Москитная сетка: ' + 
	      	'<i>вид:</i> ' + getLinenText() + ', ' + 
	        '<i>профиль рамки:</i> ' + getProfileText() + ', ' +
	        '<i>цвет рамки:</i> ' + getColorText() + ', ' +
	        '<i>ручка:</i> ' + getHandleText() + ', ' +
	        '<i>крепление:</i> ' + getFasteningText() + ', ' +
	        '<i>фетр:</i> ' + getFetrText() + ', ' +
	        '<i>саморезы:</i> ' + getScrewsText() + ', ' +
	        '<i>ширина сетки:</i> ' + getNetWidth() + ' мм, ' +
	        '<i>высота сетки:</i> ' + getNetHeight() + ' мм' +
	      '</td>' + 
	      '<td class="quantity-goods">' + getQuantityCalc() + '</td>' +
	      '<td class="price-one-goods">' + separateThousands( calcPriceOneMoskit() ) + '</td>' +
	      '<td class="sum-goods">' + separateThousands( calcPriceQuantityMoskit() ) + '</td>' +
	      '<td><img src="http://copy2.mybudva.com/template/imgs/close.png" width="10" alt=""></td>' +
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
		$('#btn-submit').parent().parent().show();

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

			// Подсчет итога в корзине, если есть скидка
			calcFinalSumInCartIfDiscount()

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