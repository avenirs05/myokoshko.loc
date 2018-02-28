<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container" style="padding-top: 10px;">
  <h5>
    <button class="btn btn-success" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/admin" style="text-decoration: none; color: #fff">Админпанель</a></button>
    <button class="btn btn-primary" style="padding: 0;"><a style="text-decoration: none; color: #fff; padding: 10px;" href="/" style="text-decoration: none; color: #fff">На сайт</a></button>
  </h5>
  <h2 class="text-center" style="margin-bottom: 20px;">Покупатели</h2>
  <div class="row" style="margin-bottom: 30px;">
    <div class="col">
      <table class="table-bordered table-striped table">
          <tr>
              <th>Id покупателя</th>
              <th>Имя</th>
              <th>Фамилия</th>
              <th>Email</th>
              <th>Имя в соцсети</th>
              <th>Сумма</th>    
          </tr>
          <?php foreach ($usersList as $user): ?>
          <tr>
              <td><?php echo $user['id']; ?> </td>
              <td><?php echo $user['first_name']; ?></td>
              <td><?php echo $user['last_name']; ?></td>
              <td><?php echo $user['email']; ?> </td>              
              <td><?php echo $user['identity']; ?> </td>
              <td><?php echo $user['sum']; ?></td>
          </tr>
          <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
