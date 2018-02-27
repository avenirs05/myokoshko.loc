<?php include ROOT . '/views/layouts/header.php'; ?>

<?php //d($_SESSION['cart']); ?>

<div class="rest-content-wrap for-landscape cart-wrap">
  <div class="container-fluid">
    <h1 class="text-center">Корзина</h1>  
    <form method="post" action="/thanks">
	    <table class="table table-bordered">
	        <thead>
	            <tr>
	                <th scope="col">Товар</th>
	                <th scope="col">Количество</th>
	                <th scope="col">Цена</th>
	                <th scope="col">Сумма</th>
	                <th scope="col" class="remove">X</th>
	            </tr>
	        </thead>
	        <tbody>
	    	    <?php if (isset($_SESSION['cart']['products'])): ?>
							<?php for ($i = 0; $i < count($_SESSION['cart']['products']); $i++): ?>
								<?php if ($_SESSION['cart']['products'][$i]['id'] == 'deleted'): ?>
									<?php continue; ?>
								<?php endif; ?>	 
										<tr class="item-net-row">	
											<input type="hidden" value="<?php echo $_SESSION['cart']['products'][$i]['id']; ?>">			
								      <td class="text-goods">
								      	<?php echo $_SESSION['cart']['products'][$i]['name']; ?>
								      </td>
								      <td class="quantity-goods">
								      	<?php echo $_SESSION['cart']['products'][$i]['quantity']; ?>
								      </td>
								      <td class="price-one-goods">
								      	<?php echo $_SESSION['cart']['products'][$i]['price']; ?>
								      </td> 
								      <td class="sum-goods">
								      	<?php echo $_SESSION['cart']['products'][$i]['sum']; ?>
								      </td>
								      <td>
								      	<img src="/template/imgs/close.png" width="10" alt="">
								      </td>
								    </tr>
								    
							<?php endfor; ?>
	    	    <?php endif; ?>	 
		       	<tr class="final-row">
		           <td class="text-right"><b>Итого</b></td>
		           <td class="final-quantity-goods">0</td>
		           <td style="border-right: 1px solid #f5f5f5"></td>
		           <td class="final-sum nowrap"><b>0 руб.</b></td>
		           <td></td>    
		       	</tr>  
	      	</tbody>
	    </table>
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
	    <div id="agreement-wrap" class="form-check" style="display: none;">
	        <label class="form-check-label">
	            <input type="checkbox" class="form-check-input" name="agree" checked disabled>
	            <a href="/privacy" target="_blank">Согласен на обработку персональных данных</a> 
	        </label>
	    </div>
	    <div class="row" style="margin-top:20px; margin-bottom: 60px; display: none;">
	        <div class="col-lg-12">
	            <button id="btn-submit" type="submit" class="btn btn-success">Оформить заказ</button>
	        </div>	  	  
	    </div>
	    <input id="hidden-text" type="hidden" name="order">
  </form>
  </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>