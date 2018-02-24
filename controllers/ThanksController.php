<?php

/**
 * Контроллер ThanksController
 * Страница "спасибо за заявку"
 */
class ThanksController {

    /**
     * Action для страницы "Спасибо"
     */
    public function actionIndex() 
    {
        // Подключаем вид
        require_once(ROOT . '/views/thanks/index.php');
        return true;
    }
}
