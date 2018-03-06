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
}
