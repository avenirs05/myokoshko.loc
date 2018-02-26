<?php

/**
 * Контроллер CartController
 * Корзина
 */
class CartController
{

    /**
     * Action для страницы "Корзина"
     */
    public function actionIndex()
    {     
        require_once(ROOT . '/views/cart/index.php');
        return true;
    }


    /**
     * Action для добавления товара в корзину асинхронным запросом<br/>
     * @param integer $id <p>id товара</p>
     */
    public function actionAdd()
    {
        if (isset($_SESSION['cart']['quantity'])) {
             $_SESSION['cart']['quantity'] = $_SESSION['cart']['quantity'] + $_POST['quantity'];
        } else $_SESSION['cart']['quantity'] = $_POST['quantity'];
        
        $product = [];
        $product['id'] = $_POST['id'];
        $product['name'] = $_POST['product'];
        $product['quantity'] = $_POST['quantity'];
        $product['price'] = $_POST['price'];
        $product['sum'] = $_POST['sum'];
        
        $_SESSION['cart']['products'][] = $product;

        echo json_encode($_SESSION['cart']);

        return true;        
    }
   
    /**
     * Action для добавления товара в корзину синхронным запросом
     * @param integer $id <p>id товара</p>
     */
    public function actionDel()
    {
        if (isset($_SESSION['cart']['quantity'])) {
             $_SESSION['cart']['quantity'] = $_SESSION['cart']['quantity'] - $_POST['quantity'];
        } else $_SESSION['cart']['quantity'] = $_POST['quantity'];

        for ($i = 0; $i < count($_SESSION['cart']['products']); $i++) {
            if ($_POST['id'] == $_SESSION['cart']['products'][$i]['id']) {
                  $_SESSION['cart']['products'][$i]['id'] = 'deleted';
                  break;
            }        
        }

        echo json_encode($_SESSION['cart']);

        return true; 
    }
}
