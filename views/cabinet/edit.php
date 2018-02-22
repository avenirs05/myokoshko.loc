<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="rest-content-wrap">
  <?php if ($result): ?>
    <h1>Данные отредактированы!</h1>
  <?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
      <?php foreach ($errors as $error): ?>
        <p class="red"><?php echo $error; ?></p>
      <?php endforeach; ?>
    <?php endif; ?>

    <h1>Редактирование данных</h1>
    <form action="#" method="post">
      <div class="container-fluid" style="padding-left: 0; padding-right: 0;">
        <div class="row">
          <div class="col-lg-4 form-group quest-section">
            <label>Имя</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
          </div>        
        </div>
        <div class="row">
          <div class="col-lg-4 form-group quest-section">
            <label>Пароль</label>
            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
          </div>        
        </div>
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-lg-12">
            <button id="btn-submit" type="submit" name="submit" class="btn btn-success">Сохранить</button>
          </div>          
        </div>
      </div> 
    </form>
  <?php endif; ?>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>