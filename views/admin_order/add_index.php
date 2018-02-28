<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container" style="padding-top: 10px;">
  <h5>
    <button class="btn btn-success" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/admin" style="text-decoration: none; color: #fff">Админпанель</a></button>
    <button class="btn btn-secondary" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/admin/order" style="text-decoration: none; color: #fff">Оплаченные заказы</a></button>
    <button class="btn btn-primary" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/" style="text-decoration: none; color: #fff">На сайт</a></button>
  </h5>
  <h2 class="text-center" style="margin-bottom: 20px; margin-top: 20px;">Добавить оплаченный заказ</h2>
  <form action="/admin/order/add/order" method="post">
    <div class="form-group">
      <label>Id пользователя</label>
      <input type="text" class="form-control" name="user_id">
    </div>
    <div class="form-group">
      <label>Сумма</label>
      <input type="text" class="form-control" name="sum">
    </div>
    <button type="submit" class="btn btn-primary">Добавить заказ</button>
  </form>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
