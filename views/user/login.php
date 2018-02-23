<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="rest-content-wrap">
	<?php if (isset($errors) && is_array($errors)): ?>  
	  <?php foreach ($errors as $error): ?>
	    <p class="red"><?php echo $error; ?></p>
	  <?php endforeach; ?>   
	<?php endif; ?>	

	<h1>Вход на сайт</h1>
	<script src="//ulogin.ru/js/ulogin.js"></script>
	<a href="#" id="uLogin" data-ulogin="display=window;theme=classic;fields=first_name,last_name;providers=;hidden=;redirect_uri=http%3A%2F%2Fcopy2.mybudva.com%2Fuser%2Floginsoc;mobilebuttons=0;"><img src="http://ulogin.ru/img/button.png?version=img.2.0.0" width=187 height=30 alt="МультиВход"/></a>
	<h6>или</h6>
	<form action="#" method="post">
		<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
		  <div class="row">
		    <div class="col-lg-4 form-group quest-section">
		      <label>Email (логин)</label>
		      <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
		    </div>        
		  </div>
		  <div class="row">
		    <div class="col-lg-4 form-group quest-section">
		      <label>Пароль</label>
		      <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" required>
		    </div>        
		  </div>
		  <div class="row" style="margin-bottom: 30px;">
		    <div class="col-lg-12">
		      <button id="btn-submit" type="submit" name="submit" class="btn btn-success">Войти</button>
		    </div>          
		  </div>
		</div>  
	</form>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>