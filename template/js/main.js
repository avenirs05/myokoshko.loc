jQuery(document).ready(function () {  

	// Маска ввода номера телефона
	$('#person-phone').mask("+7 999 999 99 99", {placeholder: " " });

	//Прижать футер к низу
	if ( $(document).height() <= $(window).height() ) {
	  $(".footer").addClass("fixed-bottom");
	}

	

	// Рассчет скидки для клиента
	// $('.discount').text( calcDiscount() ) ;
	

});