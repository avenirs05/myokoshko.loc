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

    // Корзина:
    // 'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    // 'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    // 'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    // 'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart/add' => 'cart/add',
    //'cart' => 'cart/index', 

    //Страница "спасибо за заявку"
    'thanks' => 'thanks/index',
    
    // По умолчанию
    '([\w]+)' => 'menu/home', 
    '' => 'menu/home' 
);
