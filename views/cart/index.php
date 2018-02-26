<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="rest-content-wrap for-landscape">
  <div class="container-fluid">
    <h1 class="text-center">Корзина</h1>  
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
	           <td class="final-quantity-goods">120</td>
	           <td style="border-right: 1px solid #f5f5f5"></td>
	           <td class="final-sum nowrap"><b>50 000 руб.</b></td>
	           <td></td>    
	       	</tr>  
      	</tbody>
    </table>
  </div>
</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>