<?php

/**
 * Контроллер ProductMoskitController
 * Товар
 */
class ProductMoskitController
{
    /**
     * Action для страницы калькулятора москитной сетки
     * 
     */
    public function actionCalc()
    {
        // Подключаем вид
        require_once(ROOT . '/views/product/moskit/calc.php');
        return true;
    }

}
