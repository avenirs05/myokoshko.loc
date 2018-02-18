<?php require_once 'layouts/header.php'; ?>

<div class="rest-content-wrap about-company">
	<h1 class="text-center">Калькулятор расчета стоимости москитной сетки</h1>
	<form id="net-calc" method="post" action="thanks.php">		
		<div class="container-fluid">
		  <div class="row">
	      <div id="linen-wrap" class="col-lg form-group quest-section">
	        <label>Вид сетки (полотно)</label>
	        <select name="linen" class="form-control" id="linen-content">
	          <option value="linen-standard">Стандарт</option>
	          <option value="linen-antikat">Антикошка (Pet screen)</option>
	          <option value="linen-antidust">Антипыль (Poll-tex)</option>
	          <option value="linen-maxivision">Максимальный обзор (MaxiVision)</option>
	        </select>
	      </div>    
				<div id="profile-wrap" class="col-lg form-group quest-section">
				  <label>Профиль рамки</label>
				  <select name="profile" class="form-control" id="profile-content">
				    <option value="profile-standard">Стандарт</option>
				    <option value="profile-powerfull">Усиленный (без импоста)</option>
				    <option value="profile-vertex">VERTEX</option>						    
				  </select>
				</div>		    
				<div id="color-wrap" class="col-lg form-group quest-section">
				  <label>Цвет рамки (профиля)</label>
				  <select name="color" class="form-control" id="color-content">
				    <option value="color-white-not-vertex">Белый</option>
				    <option value="color-brown-not-vertex">Коричневый</option>
				    <option value="color-white-vertex">Белый (VERTEX)</option>		
				    <option value="color-brown-vertex">Коричневый (VERTEX)</option>
				    <option value="color-grey-vertex">Серый (VERTEX)</option>						    
				    <option value="color-gold-oak-vertex">Золотой дуб (VERTEX)</option>			
				    <option value="color-mahogany-vertex">Махагон (VERTEX)</option>
				    <option value="color-stained-oak-vertex">Мореный дуб (VERTEX)</option>
				    <option value="color-ral">RAL (аэрозольная краска)</option>							    
				  </select>
				</div>
		  </div>
  	  <div class="row">
				<div id="handle-wrap" class="col-lg form-group quest-section">
				  <label>Ручка</label>
				  <select name="handle" class="form-control" id="handle-content">
				    <option value="handle-pvh-simple">ПВХ</option>
				    <option value="handle-pvh-transparent">ПВХ прозрачная</option>						    
				    <option value="handle-pvh-brown">ПВХ коричневая</option>		
				    <option value="handle-metal">Металл</option>							    
				  </select>
				</div>
				<div id="fastening-wrap" class="col-lg form-group quest-section">
				  <label>Крепление</label>
				  <select name="fastening" class="form-control" id="fastening-content">
				    <option value="fastening-pvh-2-pairs">ПВХ (2 пары)</option>
				    <option value="fastening-metal-2-pairs">Металл (2 пары)</option>						    
				    <option value="fastening-plunger-4">Плунжер (4 шт)</option>		
				    <option value="fastening-baran-4">Барашек (4 шт)</option>
				    <option value="fastening-metal-inside">Металл (внутреннее)</option>		
				    <option value="fastening-vertex-9-mm">VERTEX (наплав 9 мм)</option>		
				    <option value="fastening-vertex-13-mm">VERTEX (наплав 13 мм)</option>								    
				  </select>
				</div>
				<div id="screws-wrap" class="col-lg form-group quest-section">
				  <label>Саморезы</label>
				  <select name="screws" class="form-control" id="screws-content">
				    <option value="screws-yes">Нужны</option>
				    <option value="screws-no">Не нужны</option>			    
					</select>
				</div>
  	  </div>
  	  <div class="row" style="display: none;">
  	  	<div id="fetr-wrap" class="col-lg-4 form-group quest-section">
  	  	  <label>Фетр</label>
  	  	  <select name="fetr" class="form-control" id="fetr-content">
  	  	  	<option value="fetr-no">Не нужен</option>
  	  	    <option value="fetr-yes">Нужен</option>  	  	    			    
  	  		</select>
  	  	</div>
  	  </div>
  	  <div class="row">
				<div id="width-wrap" class="col-lg-4 form-group quest-section">
				  <label for="width-net">Ширина сетки, мм <span class="min-max-text">(от 200 до 2500)</span></label>
				  <input type="number" class="form-control" id="width-net">
				</div>
				<div id="height-wrap" class="col-lg-4 form-group quest-section">
				  <label for="height-net">Высота сетки, мм <span class="min-max-text">(от 200 до 2500)</span></label>
				  <input type="number" class="form-control" id="height-net">
				</div>
				<div id="quantity-wrap" class="col-lg-4 quest-section">
					<div class="form-group">
					  <label for="quantity">Количество (штук)</label>
					  <input type="number" class="form-control" id="quantity" name="quantity" value="1">
					</div>			
				</div>
  	  </div>
  	  <div class="row" style="margin-top: -15px;">
	  	  <div class="col-lg-12">
	  	  	<button id="btn-to-estim" type="button" class="btn btn-primary">Добавить к расчету</button>
					<div id="wrong-width-height" style="display: none;" class="red">Введите правильное значение ширины (высоты) сетки (от 200 до 2500 мм).</div>
	  	  </div>
  	  </div>
  	  <div class="row" style="display: none; margin-bottom: 15px;">
	  	  <div class="col-lg">
	  	  	<table class="table table-bordered">
	  	  	  <thead>
	  	  	    <tr>	  	  	      
	  	  	      <th scope="col">Товар</th>
	  	  	      <th scope="col">Количество</th>
	  	  	      <th scope="col">Цена</th>
	  	  	      <th scope="col">Сумма</th>
	  	  	      <th scope="col"></th>
	  	  	    </tr>
	  	  	  </thead>
	  	  	  <tbody>
	  	  	  </tbody>
	  	  	</table>
	  	  </div>
  	  </div>
  	  <div class="row" style="display: none;">
  	  	<div id="person-name-wrap" class="col-lg-4 form-group quest-section">
  	  	  <label for="person-name">Имя<span class="red">*</span></label>
  	  	  <input type="text" class="form-control" id="person-name" name="person-name" required>
  	  	</div>	  	  
  	  </div>
  	  <div class="row" style="display: none;">
  	  	<div id="person-phone-wrap" class="col-lg-4 form-group quest-section">
  	  	  <label for="person-phone">Телефон<span class="red">*</span></label>
  	  	  <input type="text" class="form-control" id="person-phone" name="person-phone" required>
  	  	</div>	  	  
  	  </div>
  	  <div class="row" style="display: none;">
	  	  <div class="col-lg-12">
	  	  	<button id="btn-submit" type="submit" class="btn btn-success">Отправить заявку</button>
	  	  </div>	  	  
  	  </div>
		</div>
		<input id="hidden-text" type="hidden" name="order">
	</form>
</div>

<?php require_once 'layouts/footer.php'; ?>
