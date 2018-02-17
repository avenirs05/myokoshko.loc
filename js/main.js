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
	$('#btn-calc').on('click', function(e){
		e.preventDefault();

		var calculatedRow = 
			'<tr class="item-net-row">' +
	      '<td>1</td>' +
	      '<td>Mark</td>' + 
	      '<td>Otto</td>' +
	      '<td>@mdo</td>' +
	      '<td>Otto</td>' +
	      '<td><img src="/imgs/close.png" width="10" alt=""></td>' +
	    '</tr>'; 

		$('table').parent().parent().show();
		$('table tbody').append(calculatedRow);
	});


	// Удаление строчки из итоговой таблицы заказа москитной сетки

	$(document).on('click', 'table img', function(){
			$(event.target).parent().parent().remove();
	});


});