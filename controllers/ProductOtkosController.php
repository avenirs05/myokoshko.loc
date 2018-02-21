<?php

/**
 * Контроллер ProductMoskitController
 * Товар
 */
class ProductOtkosController
{

    /**
     * Action для страницы калькулятора откосов
     * 
     */
    public function actionCalc()
    {
        // Подключаем вид
        require_once(ROOT . '/views/product/otkos/calc.php');
        return true;
    }

}


