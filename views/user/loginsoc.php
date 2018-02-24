<?php

  // Это не вид, но это и не ошибка, что во view этот файл!
  // Так и не рештл к чему он относится

  // Получаем данные из соцсети
  $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
  $userSoc = json_decode($s, true); 

  // Данные, пришедшие с соцсети
  $identity = $userSoc['identity'];
  $firstName = $userSoc['first_name'];
  $lastName = $userSoc['last_name'];
  $network = $userSoc['network'];

  $resOfRegSoc = null; 

  // Проверяем существует ли пользователь
  $userSocIdentity = User::checkUserSocData($identity);

  // Если такого юзера нет, регистрируем (ведь данные мы уже получили).
  // Если такой юзер есть, то запоминаем его и отправляем в кабинет для соцсетей
  if (!$userSocIdentity) {
  			$resOfRegSoc = User::registerSoc($identity, $firstName, $lastName, $network);
        if ($resOfRegSoc) {
              $userSocIdentity = User::checkUserSocData($identity);
              User::authSoc($userSocIdentity);
              header("Location: /cabinet/soc");
        }
  } else {
  		User::authSoc($userSocIdentity);
  		header("Location: /cabinet/soc");
  }

 







