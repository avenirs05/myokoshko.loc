jQuery(document).ready(function () {  

	// Убрать прилипание меню на странице москитной сетки
	if ( window.location.href.match(/moskit/) ) {
		$('#menu-wrap').removeClass('sticky-top');
	}

	$('#fastening-content').change(function(event) {
			if ( $('#fastening-content option:selected').val() == 'fastening-plunger-4' ) {
							$('#fetr-wrap').parent().show();
			} else $('#fetr-wrap').parent().hide();
	});

	// Расчет стоимости москитной сетки
	$('#btn-calc').click(function(e) {
		$('table').parent().parent().show();
		e.preventDefault();
		console.log(calcPriceOneMoskit())
		console.log(calcPriceQuantityMoskit())
	});

});