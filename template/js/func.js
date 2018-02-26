// Возвращает случайное число
function random () {  
    return Math.floor(Math.random() * 10000000000000);
}

// Возвращает итоговую сумму в таблице итоговой (добавить к рассчету)
function calcFinalSum () {
		var res = 0;
		
		$('table .item-net-row .sum-goods').each(function(indx, el) {
			res = res + unSeparateThousandsAndToNum( $(el).text() );				
		});
		
		return res;
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


// Добавляет в корзину товар после калькуляции
function addToCart () {
  var cntLastRow = $('table .item-net-row').length - 1;
  var id = $('table .item-net-row input').eq(cntLastRow).val();   
  var quantity = $('#quantity').val();
  var product = $('table .item-net-row .text-goods').eq(cntLastRow).text();
  var price = $('table .item-net-row .price-one-goods').eq(cntLastRow).text();
  var sum = $('table .item-net-row .sum-goods').eq(cntLastRow).text();
  
  $.ajax({
    url: '/cart/add',
    data: 'id=' + id + 
          '&product=' + product + 
          '&quantity=' + quantity + 
          '&price=' + price + 
          '&sum=' + sum,
    type: 'post',
    success: function(data) {
      //console.log('Cart:' + data);
      var cart = JSON.parse(data);
      $('#quantity-goods').text(cart.quantity);
      $('#quantity-goods-mob').text(cart.quantity);
    }
  });
}


