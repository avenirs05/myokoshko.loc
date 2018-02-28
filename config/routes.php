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
    'admin/user' => 'adminUser/index',
    'admin' => 'admin/index',

    //Страница "спасибо за заявку"
    'thanks' => 'thanks/index',

    // Страница "Privacy"
    'privacy' => 'privacy/index',

    // Управление заказами:    
    // 'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    // 'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    // 'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    
    
    // По умолчанию
    '([\w]+)' => 'menu/home', 
    '' => 'menu/home' 
);
