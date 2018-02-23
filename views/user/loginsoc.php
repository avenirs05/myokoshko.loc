<?php
  // Получаем данные из соцсети
  $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
  $userSoc = json_decode($s, true); 

  $identity = $userSoc['identity'];
  $firstName = $userSoc['first_name'];
  $lastName = $userSoc['last_name'];
  $network = $userSoc['network'];

  $resOfRegSoc = null; 

  // Проверяем существует ли пользователь
  $userSocIdentity = User::checkUserSocData($identity);

  if (!$userSocIdentity) {
  			$resOfRegSoc = User::registerSoc($identity, $firstName, $lastName, $network);
  } else {
  		User::authSoc($userSocIdentity);
  		header("Location: /cabinet");
  }








