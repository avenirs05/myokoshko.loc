<?php include ROOT . '/views/layouts/header.php'; ?>

<?php //d($user); ?>

<div class="rest-content-wrap for-landscape">
	<div class="container-fluid"><h1 class="text-center">Личный кабинет</h1>  
		<h4>Здравствуйте, <?php echo $user['first_name'];?>!</h4> 
		<p>Совершено покупок на сумму: <span>0</span> руб.</p>
		<p>Текущая скидка: <span>0</span>%</p>
		 <!-- <a href="/cabinet/edit">Редактировать данные</a>   -->
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>