<?php

/**
 * Контроллер CabinetController
 * Кабинет пользователя
 */
class CabinetController
{
    /**
     * Action для страницы "Кабинет пользователя"
     */
    public function actionIndex()
    {     
        // Если юзер с соцсети - отправляем в контроллер для соцсетей
        if (isset($_SESSION['userSoc'])) {
                    header("Location: /cabinet/soc");
        }
        
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        
        // Сумма покупок
        $totalSumTrans = Order::getTotalSumTrans($user['id']);

        // Подключаем вид     
        require_once(ROOT . '/views/cabinet/index.php');
        return true;       
    }



    /**
     * Action для страницы "Кабинет пользователя" - если с соцсетей
     */
    public function actionSoc()
    {  
        // Получаем идентификатор пользователя из сессии
        $userSocId = User::checkSocLogged();

        // Получаем информацию о пользователе из БД
        $user = User::getUserSocById($userSocId);

        // Подключаем вид
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }



    /**
     * Action для страницы "Редактирование данных пользователя"
     */
    public function actionEdit()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        // Заполняем переменные для полей формы
        $name = $user['first_name'];
        $password = $user['password'];

        // Флаг результата
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования
            $name = $_POST['first_name'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидируем значения
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($errors == false) {
                // Если ошибок нет, сохраняет изменения профиля
                $result = User::edit($userId, $name, $password);
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/cabinet/edit.php');
        return true;
    }

}
