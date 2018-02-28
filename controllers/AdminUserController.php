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
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список заказов
        $usersList = User::getUsersList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/index.php');
        return true;
    }

}
