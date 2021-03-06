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
    'cart/add' => 'cart/add',
    'cart/del' => 'cart/del',
    'cart' => 'cart/index', 

    // Админпанель:
    'admin/order/add/order' => 'adminOrder/addOrder',
    'admin/order/add' => 'adminOrder/addIndex',
    'admin/order' => 'adminOrder/index',    
    'admin/user/buyers' => 'adminUser/buyers',
    'admin/user/all' => 'adminUser/all',
    'admin' => 'admin/index',

    //Страница "спасибо за заявку"
    'thanks' => 'thanks/index',

    // Страница "Privacy"
    'privacy' => 'privacy/index',  
    
    // По умолчанию
    '([\w]+)' => 'menu/home', 
    '' => 'menu/home' 
);
