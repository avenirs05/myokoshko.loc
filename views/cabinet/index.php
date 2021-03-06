<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="rest-content-wrap for-landscape cabinet-wrap">
	<div class="container-fluid"><h1 class="text-center">Личный кабинет</h1>  
		<h5>Здравствуйте, <?php echo $user['first_name'];?>!</h5> 
		<p>Совершено покупок на сумму: 
			<span class="total-sum-trans">
				<b>
				<?php if ($_SESSION['totalSumTrans'] === NULL): ?>
					<?php echo '0'; ?>
				<?php else: ?>
					<?php echo $_SESSION['totalSumTrans']; ?>
				<?php endif; ?>
			</span> руб.</b></p>
		<p>Текущая скидка: 
			<span class="discount red">
				<?php echo Order::getValueOfDiscount(); ?>%
			</span>
		</p>
		 <!-- <a href="/cabinet/edit">Редактировать данные</a>   -->
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>