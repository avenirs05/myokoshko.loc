<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="rest-content-wrap for-landscape">
	<div class="container-fluid"><h1 class="text-center">Личный кабинет</h1>  
		<h4>Здравствуйте, <?php echo $user['first_name'];?>!</h4> 
		 <!-- <a href="/cabinet/edit">Редактировать данные</a>   -->
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>