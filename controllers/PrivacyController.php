<?php

/**
 * Контроллер PrivacyController
 * Страница "privacy"
 */
class PrivacyController {

    /**
     * Action для страницы "Privacy"
     */
    public function actionIndex() 
    {
    		
        // Подключаем вид
        require_once(ROOT . '/views/privacy/index.php');
        return true;
    }
}
