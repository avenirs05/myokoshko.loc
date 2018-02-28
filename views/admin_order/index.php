<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container" style="padding-top: 10px;">
  <h5>
    <button class="btn btn-success" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/admin" style="text-decoration: none; color: #fff">Админпанель</a></button>
    <button class="btn btn-secondary" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/admin/order/add" style="text-decoration: none; color: #fff">Добавить оплаченный заказ</a></button>
    <button class="btn btn-primary" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/" style="text-decoration: none; color: #fff">На сайт</a></button>
  </h5>
  <h2 class="text-center" style="margin-bottom: 20px;">Оплаченные заказы</h2>
  <div class="row" style="margin-bottom: 30px;">
    <div class="col">
      <table class="table-bordered table-striped table">
          <tr>
              <th>ID заказа</th>
              <th>Имя</th>
              <th>Фамилия</th>
              <th>Email</th>
              <th>Id соцсеть</th>
              <th>Сумма</th>
              <th>Дата оформления</th>        
          </tr>
          <?php foreach ($ordersList as $order): ?>
          <tr>
              <td><?php echo $order['id']; ?> </td>
              <td><?php echo $order['first_name']; ?></td>
              <td><?php echo $order['last_name']; ?></td>
              <td><?php echo $order['email']; ?> </td>
              <td><?php echo $order['identity']; ?> </td>
              <td><?php echo $order['sum']; ?></td>
              <td><?php echo $order['date']; ?> </td>
          </tr>
          <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
