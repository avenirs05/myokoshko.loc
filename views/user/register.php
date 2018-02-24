  <?php if ($resOfReg): ?>    
    <?php require_once ROOT . '/views/layouts/header.php'; ?>
    <div class="rest-content-wrap">
      <h1 class="text-center">Регистрация на сайте</h1>
    <p>Регистрация прошла успешно! <a href="/cabinet/">Войти в кабинет</a></p>    
  <?php else: ?>
    <?php require_once ROOT . '/views/layouts/header.php'; ?>
    <div class="rest-content-wrap">
      <h1>Регистрация на сайте</h1>
    <?php if (isset($errors) && is_array($errors)): ?>     
      <?php foreach ($errors as $error): ?>
        <p class="red"><?php echo $error; ?></p>
      <?php endforeach; ?>      
    <?php endif; ?>
  
    <form method="post" action="/user/register">      
      <div class="container-fluid" style="padding-left: 0; padding-right: 0;">
        <div class="row">
          <div id="person-name-wrap" class="col-lg-4 form-group quest-section">
            <label>Имя<span class="red">*</span></label>
            <input type="text" class="form-control" name="first_name" value="<?php echo $name; ?>" required>
          </div>        
        </div>
        <div class="row">
          <div id="person-email-wrap" class="col-lg-4 form-group quest-section">
            <label>Email<span class="red">*</span></label>
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" required>
          </div>        
        </div>
        <div class="row">
          <div id="person-password-wrap" class="col-lg-4 form-group quest-section">
            <label>Пароль (минимум 6 символов)<span class="red">*</span></label>
            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" required>
          </div>        
        </div>
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-lg-12">
            <button id="btn-submit" type="submit" name="submit" class="btn btn-success">Зарегистрироваться</button>
          </div>          
        </div>
      </div>
    </form>
  </div>
  <?php endif; ?>
  

<?php require_once ROOT . '/views/layouts/footer.php'; ?>

