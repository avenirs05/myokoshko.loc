	// Расчет стоимости 1 -ой москитной сетки после калькуляции
	function calcPriceOneMoskit () {		
			var res;
			var quantity = $('#quantity').val();

			// Площадь в метрах (если длина и ширина в мм)
			var square = $('#width-net').val() * $('#height-net').val() / 1000000;

			if (square < 1) {
						square = 1;
			}

			res = (square * getLinenSum() )      + 
												 getProfileSum()   +  
												 getColorSum()     + 
												 getHandleSum()    + 
												 getFasteningSum() + 
												 getFetrSum()      +
												 getScrewsSum(); 
		  
		  return Math.round(res);
	}		


	// Расчет стоимости москитной сетки после калькуляции с учетом их количества
	function calcPriceQuantityMoskit () {
			var res;
			var quantity = $('#quantity').val();

			res = quantity * calcPriceOneMoskit();

			return res;
	}

	// Возвращает количество единиц товара, введенное пользователем при калькуляции
	function getQuantityCalc () {
		return $('#quantity').val();
	}


	// Возвращает итоговое количество единиц товара
	function calcFinalQuantity () {
			var res = 0;
			
			$('table .item-net-row .quantity-goods').each(function(indx, el) {
				res = res + Number( $(el).text() );
			});
			
			return res;
	}



	// Возвращает итоговую сумму
	function calcFinalSum () {
			var res = 0;
			
			$('table .item-net-row .sum-goods').each(function(indx, el) {
				res = res + Number( $(el).text() );
			});
			
			return res;
	}

	
	// Возвращает сумму в зависимости от вида полотна
	function getLinenSum () {
		if ( $('#linen-content option').filter(':selected').val() == 'linen-standard' ) {
					return rate.linen.standard;
		}
		if ( $('#linen-content option').filter(':selected').val() == 'linen-antikat' ) {			
					return rate.linen.anticat;
		}

		if ( $('#linen-content option').filter(':selected').val() == 'linen-antidust' ) {
					return rate.linen.antidust;
		}

		if ( $('#linen-content option').filter(':selected').val() == 'linen-maxivision' ) {
					return rate.linen.maxivision;
		}
	}


	// Возвращает текстовое значение в зависимости от вида полотна
	function getLinenText () {
		if ( $('#linen-content option').filter(':selected').val() == 'linen-standard' ) {
					return text.linen.standard;
		}
		if ( $('#linen-content option').filter(':selected').val() == 'linen-antikat' ) {			
					return text.linen.anticat;
		}

		if ( $('#linen-content option').filter(':selected').val() == 'linen-antidust' ) {
					return text.linen.antidust;
		}

		if ( $('#linen-content option').filter(':selected').val() == 'linen-maxivision' ) {
					return text.linen.maxivision;
		}
	}


	// Считает профиль рамки
	function getProfileSum () {
			if ( $('#profile-content option').filter(':selected').val() == 'profile-standard' ) {
						return rate.profile.standard;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-powerfull' ) {
						return rate.profile.powerfull;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-vertex' ) {
						return rate.profile.vertex;
			}
	}


	// Возвращает текстовое значение в зависимости от профиля рамки
	function getProfileText () {
			if ( $('#profile-content option').filter(':selected').val() == 'profile-standard' ) {
						return text.profile.standard;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-powerfull' ) {
						return text.profile.powerfull;
			}
			if ( $('#profile-content option').filter(':selected').val() == 'profile-vertex' ) {
						return text.profile.vertex;
			}
	}


  // Считает цвет рамки
	function getColorSum () {
			if ( $('#color-content option').filter(':selected').val() == 'color-white-not-vertex' ) {
						return rate.color.whiteNotVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-brown-not-vertex' ) {
						return rate.color.brownNotVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-white-vertex' ) {
						return rate.color.whiteVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-brown-vertex' ) {
						return rate.color.brownVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-grey-vertex' ) {
						return rate.color.greyVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-gold-oak-vertex' ) {
						return rate.color.goldOakVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-mahogany-vertex' ) {
						return rate.color.mahoganyVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-stained-oak-vertex' ) {
						return rate.color.stainedOakVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-ral' ) {
						return rate.color.ral;
			}
	}


  // // Возвращает текстовое значение в зависимости от цвета
	function getColorText () {
			if ( $('#color-content option').filter(':selected').val() == 'color-white-not-vertex' ) {
						return text.color.whiteNotVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-brown-not-vertex' ) {
						return text.color.brownNotVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-white-vertex' ) {
						return text.color.whiteVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-brown-vertex' ) {
						return text.color.brownVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-grey-vertex' ) {
						return text.color.greyVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-gold-oak-vertex' ) {
						return text.color.goldOakVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-mahogany-vertex' ) {
						return text.color.mahoganyVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-stained-oak-vertex' ) {
						return text.color.stainedOakVertex;
			}
			if ( $('#color-content option').filter(':selected').val() == 'color-ral' ) {
						return text.color.ral;
			}
	}
	

	// Ручка сумма
	function getHandleSum () {
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-simple' ) {
						return rate.handle.pvhSimple;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-transparent' ) {
						return rate.handle.pvhTransparent;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-brown' ) {
						return rate.handle.pvhBrown;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-metal' ) {
						return rate.handle.metal;
			}
	}


	// Ручка текст
	function getHandleText () {
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-simple' ) {
						return text.handle.pvhSimple;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-transparent' ) {
						return text.handle.pvhTransparent;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-pvh-brown' ) {
						return text.handle.pvhBrown;
			}
			if ( $('#handle-content option').filter(':selected').val() == 'handle-metal' ) {
						return text.handle.metal;
			}
	}


	// Крепление - сумма
	function getFasteningSum () {
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-pvh-2-pairs' ) {
						return rate.fastening.pvh2Pairs;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-metal-2-pairs' ) {
						return rate.fastening.metal2Pairs;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-plunger-4' ) {
						return rate.fastening.plunger4;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-baran-4' ) {
						return rate.fastening.baran4;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-metal-inside' ) {
						return rate.fastening.metalInside;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-vertex-9-mm' ) {
						return rate.fastening.vertex9mm;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-vertex-13-mm' ) {
						return rate.fastening.vertex13mm;
			}
	}


	// Крепление - текст
	function getFasteningText () {
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-pvh-2-pairs' ) {
						return text.fastening.pvh2Pairs;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-metal-2-pairs' ) {
						return text.fastening.metal2Pairs;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-plunger-4' ) {
						return text.fastening.plunger4;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-baran-4' ) {
						return text.fastening.baran4;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-metal-inside' ) {
						return text.fastening.metalInside;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-vertex-9-mm' ) {
						return text.fastening.vertex9mm;
			}
			if ( $('#fastening-content option').filter(':selected').val() == 'fastening-vertex-13-mm' ) {
						return text.fastening.vertex13mm;
			}
	}


	// Фетр - сумма
	function getFetrSum () {
			if ( $('#fetr-content option').filter(':selected').val() == 'fetr-yes' ) {
						return rate.fetr.fetrYes;
			}
			if ( $('#fetr-content option').filter(':selected').val() == 'fetr-no' ) {
						return rate.fetr.fetrNo;
			}
	}


	// Фетр - текст
	function getFetrText () {
			if ( $('#fetr-content option').filter(':selected').val() == 'fetr-yes' ) {
						return text.fetr.fetrYes;
			}
			if ( $('#fetr-content option').filter(':selected').val() == 'fetr-no' ) {
						return text.fetr.fetrNo;
			}
	}


	// Саморезы - сумма
	function getScrewsSum () {
			if ( $('#screws-content option').filter(':selected').val() == 'screws-yes' ) {
						return rate.screws.screwsYes;
			}
			if ( $('#screws-content option').filter(':selected').val() == 'screws-no' ) {
						return rate.screws.screwsNo;
			}
	}


	// Саморезы - текст
	function getScrewsText () {
			if ( $('#screws-content option').filter(':selected').val() == 'screws-yes' ) {
						return text.screws.screwsYes;
			}
			if ( $('#screws-content option').filter(':selected').val() == 'screws-no' ) {
						return text.screws.screwsNo;
			}
	}


	// Возвращает ширину сетки
	function getNetWidth () {
			return $('#width-net').val();
	}


	// Возвращает высоту сетки
	function getNetHeight () {
			return $('#height-net').val();
	}


	// Разделяет группы разрядов числа
	function separateThousands (num) {
	    num = String(num);
	    num = unSeparateThousands(num); 

	    if (num.length == 3) {
	        return num;
	    }

	    switch(num.length) {
	      case 4:
	        num = num[0] + ' ' + num[1] + num[2] + num[3]; 
	      break;  
	      
	      case 5:
	        num = num[0] + num[1] + ' ' + num[2] + num[3] + num[4]; 
	      break; 
	      
	      case 6:
	        num = num[0] + num[1] + num[2] + ' ' + num[3] + num[4] + num[5]; 
	      break; 
	      
	      case 7:
	        num = num[0] + ' ' + 
	              num[1] + num[2] + num[3] + ' ' +
	              num[4] + num[5] + num[6];
	      break; 
	      
	      case 8:
	        num = num[0] + num[1] + ' ' + 
	              num[2] + num[3] + num[4] + ' ' +
	              num[5] + num[6] + num[7];
	      break; 
	      
	      case 9:
	        num = num[0] + num[1] + num[2] + ' ' + 
	              num[3] + num[4] + num[5] + ' ' +
	              num[6] + num[7] + num[8];
	      break; 
	      
	      case 10:
	        num = num[0] + ' ' + 
	              num[1] + num[2] + num[3] + ' ' +
	              num[4] + num[5] + num[6] + ' ' +
	              num[7] + num[8] + num[9];
	      break; 
	      
	      case 11:
	        num = num[0] + num[1] + ' ' + 
	              num[2] + num[3] + num[4] + ' ' +
	              num[5] + num[6] + num[7] + ' ' +
	              num[8] + num[9] + num[10];
	      break; 
	    }

	    return num;
	}


	// Убирает группы разрядов, оставляет (возвращает) строку
	function unSeparateThousands (str) {
	    var res = '';
	    
	    for (var i = 0; i < str.length; i++) {
	          if (str[i] === ' ') {
	                continue;
	          }
	          
	          res += str[i];
	    }
	    
	    return res;
	}


	// Убирает группы разрядов, оставляет возвращает число
	function unSeparateThousandsAndToNum (str) {
	    str = str.replace(/\s+/g,'');     
	    return Number(str);
	}







