jQuery(document).ready(function () {  

	// Убрать прилипание меню на странице москитной сетки
	if ( window.location.href.match(/moskit/) ) {
		$('#menu-wrap').removeClass('sticky-top');
	}

	$('#fastening-content').on('change', function(){
			if ( $('#fastening-content option:selected').val() == 'fastening-plunger-4' ) {
							$('#fetr-wrap').parent().show();
			} else $('#fetr-wrap').parent().hide();
	});

	// Расчет стоимости москитной сетки
	$('#btn-to-estim').on('click', function(e) {
		e.preventDefault();

		var calculatedRow = 
			'<tr class="item-net-row">' +
	      '<td>Москитная сетка: ' + 
	      	'<i>вид: </i>' + getLinenText() + ', ' + 
	        '<i>профиль рамки: </i>' + getProfileText() + ', ' +
	        '<i>цвет рамки: </i>' + getColorText() + ', ' +
	        '<i>ручка: </i>' + getHandleText() + ', ' +
	        '<i>крепление: </i>' + getFasteningText() + ', ' +
	        '<i>фетр: </i>' + getFetrText() + ', ' +
	        '<i>саморезы: </i>' + getScrewsText() + ', ' +
	        '<i>ширина сетки: </i>' + getNetWidth() + ', ' +
	        '<i>высота сетки: </i>' + getNetHeight() +
	      '</td>' + 
	      '<td>' + getQuantityCalc() + '</td>' +
	      '<td>' + calcPriceOneMoskit() + '</td>' +
	      '<td>' + calcPriceQuantityMoskit() + '</td>' +
	      '<td><img src="/imgs/close.png" width="10" alt=""></td>' +
	    '</tr>'; 

	  var finalRow = 
	  	'<tr class="final-row">' +
	      '<td class="text-right"><b>Итого</b></td>' +
	      '<td>12</td>' +
	      '<td></td>' +
	      '<td><b>25000</b></td>' +
	      '<td></td>' +	  	  	      
	  	'</tr>';

		$('table').parent().parent().show();


		if ( $('table tr').length == 1 ) {
						if ( $('table tr').hasClass('final-row') == false ) {
									 $('table tbody').append(calculatedRow);
								   $('table tbody').append(finalRow);
						}					
		} else $(calculatedRow).insertBefore( $('table .final-row') );

	});


	// Удаление строчки из итоговой таблицы заказа москитной сетки
	$(document).on('click', 'table img', function(){
			$(event.target).parent().parent().remove();
			//$('.final-row').remove();

	});


});