<?php

/**
 * Класс Order - модель для работы с заказами
 */
class Order
{

    /**
     * Добавление оплаченного заказа 
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function add()
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        $user_id = $_POST['user_id'];        
        $sum = $_POST['sum'];
        
        // Текст запроса к БД
        $sql = 'INSERT INTO orders (user_id, sum) VALUES (:user_id, :sum)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $result->bindParam(':sum', $sum, PDO::PARAM_STR);
        
        $result->execute();
    }
    

    /**
     * Сохранение заказа 
     * @param string $userId <p>id юзера</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function getTotalSumTrans($userId)
    {
        // Соединение с БД
        $db = Db::getConnection();        
        
        $result = $db->query('SELECT SUM(sum) FROM orders WHERE user_id=' . $userId);
        
        return $result->fetch()[0];
    }


    /**
     * Сохранение заказа 
     * @param string $userId <p>id юзера</p>
     * @return int <p>Скидка в процентах</p>
     */
    public static function getValueOfDiscount()
    {
        if ( !isset($_SESSION['totalSumTrans']) ) {
                return 0;
        }
        if ($_SESSION['totalSumTrans'] < 500) {
             return 0;
        }
        if ($_SESSION['totalSumTrans'] >= 500) {
             return 10;
        }
    }


    /**
     * Сохранение заказа 
     * @param string $userName <p>Имя</p>
     * @param string $userPhone <p>Телефон</p>
     * @param string $userComment <p>Комментарий</p>
     * @param integer $userId <p>id пользователя</p>
     * @param array $products <p>Массив с товарами</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) '
                . 'VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';

        $products = json_encode($products);

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * Возвращает список заказов
     * @return array <p>Список заказов</p>
     */
    public static function getOrdersList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Получение и возврат результатов
        $result = $db->query('SELECT o.id, o.sum, o.date, o.user_id, u.identity, u.email, u.first_name, u.last_name from orders o, user u where o.user_id=u.id');
        
        $ordersList = array();
        
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['first_name'] = $row['first_name'];
            $ordersList[$i]['last_name'] = $row['last_name'];
            $ordersList[$i]['email'] = $row['email'];
            $ordersList[$i]['user_id'] = $row['user_id'];
            $ordersList[$i]['identity'] = $row['identity'];
            $ordersList[$i]['sum'] = $row['sum'];
            $ordersList[$i]['date'] = $row['date'];
            $i++;
        }
        
        return $ordersList;
    }

    /**
     * Возвращает текстое пояснение статуса для заказа :<br/>
     * <i>1 - Новый заказ, 2 - В обработке, 3 - Доставляется, 4 - Закрыт</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Доставляется';
                break;
            case '4':
                return 'Закрыт';
                break;
        }
    }

    /**
     * Возвращает заказ с указанным id 
     * @param integer $id <p>id</p>
     * @return array <p>Массив с информацией о заказе</p>
     */
    public static function getOrderById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM product_order WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

    /**
     * Удаляет заказ с заданным id
     * @param integer $id <p>id заказа</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteOrderById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM product_order WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирует заказ с заданным id
     * @param integer $id <p>id товара</p>
     * @param string $userName <p>Имя клиента</p>
     * @param string $userPhone <p>Телефон клиента</p>
     * @param string $userComment <p>Комментарий клиента</p>
     * @param string $date <p>Дата оформления</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateOrderById($id, $userName, $userPhone, $userComment, $date, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE product_order
            SET 
                user_name = :user_name, 
                user_phone = :user_phone, 
                user_comment = :user_comment, 
                date = :date, 
                status = :status 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

}
