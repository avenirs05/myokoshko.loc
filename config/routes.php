<?php

return array(

    // Страницы в меню на главной
    'delivery' => 'menu/delivery', 
    'payment' => 'menu/payment', 
    'contacts' => 'menu/contacts', 
    'index.php' => 'menu/home', 

    // Странице в подменю
    'moskit/calc' => 'productMoskit/calc',
    'otkos/calc' => 'productOtkos/calc',

    // Пользователь:
    'user/register' => 'user/register',
    'user/loginsoc' => 'user/loginsoc',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet/soc' => 'cabinet/soc',
    'cabinet' => 'cabinet/index',

    //Страница "спасибо за заявку"
    'thanks' => 'thanks/index',
    
    // По умолчанию
    '([\w]+)' => 'menu/home', 
    '' => 'menu/home' 
);
