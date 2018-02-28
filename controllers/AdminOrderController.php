<?php

/**
 * Контроллер AdminOrderController
 * Управление заказами в админпанели
 */
class AdminOrderController extends AdminBase
{

    /**
     * Action для страницы "Управление заказами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список заказов
        $ordersList = Order::getOrdersList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_order/index.php');
        return true;
    }


    /**
     * Action для страницы "Добавление заказа"
     */
    public function actionAddIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin_order/add_index.php');
        return true;
    }


    /**
     * Action для страницы "Добавление заказа"
     */
    public function actionAddOrder()
    {
        // Проверка доступа
        self::checkAdmin();

        $res = Order::add();

        // Перенаправляем на страницу заказов
        header("Location: /admin/order");
        return true;
    }


}
