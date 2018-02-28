<?php

/**
 * Контроллер AdminUserController
 * Управление юзерами в админпанели
 */
class AdminUserController extends AdminBase
{

    /**
     * Action для страницы "Управление заказами"
     */
    public function actionBuyers()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список заказов
        $usersList = User::getBuyersList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/buyers.php');
        return true;
    }


    /**
     * Action для страницы "Пользователи"
     */
    public function actionAll()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список заказов
        $usersList = User::getUsersList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/all.php');
        return true;
    }
}
