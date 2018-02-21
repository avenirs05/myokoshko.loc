<?php

/**
 * Контроллер MenuController
 */
class MenuController
{

    /**
     * Action для главной страницы
     */
    public function actionHome()
    {
        // Подключаем вид
        require_once(ROOT . '/views/menu/index.php');
        return true;
    }

    /**
     * Action для страницы "Доставка"
     */
    public function actionDelivery()
    {

        // Подключаем вид
        require_once(ROOT . '/views/menu/delivery.php');
        return true;
    }
    
    /**
     * Action для страницы "Оплата"
     */
    public function actionPayment()
    {
        // Подключаем вид
        require_once(ROOT . '/views/menu/payment.php');
        return true;
    }

    /**
     * Action для страницы "О магазине"
     */
    public function actionContacts()
    {
        // Подключаем вид
        require_once(ROOT . '/views/menu/contacts.php');
        return true;
    }

}
